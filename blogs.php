<?php include 'includes/header.php'; ?>

<!-- Hero Banner -->
<section class="text-center my-1">
  <div class="pages position-relative">
    <div class="black-overlay"></div>
    <img src="assets/imgs/Insights.jpg" class="d-block w-100 hero-img" alt="Blogs Banner">
    <div class="overlay-text position-absolute text-white">
      <h3>Blogs</h3>
    </div>
  </div>
</section>

<!-- ===== Blog Grid Section ===== -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-4">

      <!-- Blog Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card blog-card modern-card h-100 rounded-4 overflow-hidden">
          <div class="card-img-wrapper">
            <img src="assets/imgs/blog1.png" class="card-img-top" alt="Blog 1">
          </div>
          <div class="glass-body p-1">
            <h5 class="fw-bold mb-3">Google Faces India’s Competition Watchdog</h5>
            <p>In 2022, the Competition Commission of India (CCI) slapped Google with a ₹936 crore penalty.</p>
            <a href="blog-single.php" class="btn btn-outline-dark rounded-pill mt-3 px-4">Read More</a>
          </div>
        </div>
      </div>

      <!-- Blog Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card blog-card modern-card h-100 rounded-4 overflow-hidden">
          <div class="card-img-wrapper">
            <img src="assets/imgs/blog2.png" class="card-img-top" alt="Blog 2">
          </div>
          <div class="glass-body p-1">
            <h5 class="fw-bold mb-3">India,s Historic GST Reform 2025</h5>
            <p>The wait is over! India is set to unveil its BIGGEST tax reform since GST launch with a revolutionary 2-slab structure (5% & 18%) by October 2025.</p>
            <a href="blog-single.php" class="btn btn-outline-dark rounded-pill mt-3 px-4">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
