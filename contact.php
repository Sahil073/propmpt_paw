<?php include 'includes/header.php'; ?>

<!-- Banner Section -->
<section class="my-1">
  <div class="pages position-relative">
    <div class="black-overlay"></div>
    <img src="assets/imgs/Contact us.jpg" class="d-block w-100" alt="Contact Us">
    <div class="overlay-text position-absolute text-white">
      <h3>Contact Us</h3>
    </div>
  </div>

  <!-- Contact Form Section -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Contact Us</h2>

    <div class="row justify-content-center">
      <div class="col-md-8">

        <!-- Contact Form -->
        <form id="contactForm" class="needs-validation" novalidate>
          <!-- Name -->
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name"
              required minlength="2" maxlength="50"
              pattern="^[a-zA-Z ]+$"
              title="Only letters and spaces are allowed.">
            <div class="invalid-feedback">Please enter a valid name.</div>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Your Email</label>
            <input type="email" class="form-control" id="email" name="email"
              required maxlength="100">
            <div class="invalid-feedback">Please enter a valid email.</div>
          </div>

          <!-- Subject -->
          <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject"
              required minlength="3" maxlength="100"
              pattern="^[A-Za-z0-9\s.,!?'-]+$">
            <div class="invalid-feedback">Please enter a valid subject.</div>
          </div>

          <!-- Message -->
          <div class="mb-3">
            <label for="message" class="form-label">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="5"
              required minlength="10" maxlength="1000"></textarea>
            <div class="invalid-feedback">Message must be 10–1000 characters.</div>
          </div>

          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

      </div>
    </div>
  </div>

  <!-- Google Maps -->
  <div class="mx-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.7074394228857!2d77.53872407380825!3d12.862163117270795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae417a8e22df31%3A0xf75cab391d57204e!2sProvident%20Park%20Square!5e0!3m2!1sen!2sin!4v1757677246763!5m2!1sen!2sin" 
      width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<!-- Popup Modal -->
<div class="modal fade" id="responseModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-body text-center p-4">
        <h5 id="modalMessage" class="mb-3"></h5>
        <button type="button" class="btn btn-success px-4" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- Scripts -->
<script>
  (() => {
    'use strict';
    const form = document.getElementById('contactForm');
    const modal = new bootstrap.Modal(document.getElementById('responseModal'));
    const modalMessage = document.getElementById('modalMessage');

    form.addEventListener('submit', async (e) => {
      e.preventDefault();

      if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return;
      }

      // Collect form data
      const formData = {
        name: form.name.value,
        email: form.email.value,
        subject: form.subject.value,
        message: form.message.value
      };

      try {
        const response = await fetch("https://script.google.com/macros/s/AKfycbx-jMDDycAu7ksNzwH8Z2JjrN11uEXLJ5wUDJuhpadbCHcDdZtpJ3al7E9XRItbgumF8w/exec", {
          method: "POST",
          body: JSON.stringify(formData),
          headers: { "Content-Type": "application/json" }
        });

        if (response.ok) {
          modalMessage.textContent = "✅ Your response has been saved to Google Sheets!";
          form.reset();
          form.classList.remove('was-validated');
        } else {
          modalMessage.textContent = "❌ Error saving data. Please try again.";
        }
      } catch (err) {
        modalMessage.textContent = "⚠️ Network error. Please try again.";
      }

      modal.show();
    });
  })();
</script>

<?php include 'includes/footer.php'; ?>
