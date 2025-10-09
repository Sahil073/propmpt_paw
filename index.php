<?php include 'includes/header.php'; ?>

<!-- Hero Carousel Section -->
<section id="mainCarousel" class="carousel slide mt-1" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/imgs/Home 1.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="assets/imgs/Home 2.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="assets/imgs/Home 3.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</section>

<!-- About Us Summary -->
<section class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <img src="assets/imgs/About us-home.png" class="img-fluid rounded" alt="About Us">
    </div>
    <div class="col-md-6">
      <h2>About Us</h2>
      <p>
        Prompt Solutions is a boutique financial research and analytics firm founded by seasoned professionals with over 10+ years of expertise. We specialize in equity research, credit analysis, financial modeling, ESG insights, and portfolio monitoring across global markets—powered by advanced tools, AI, and a client-first approach.
      </p>
      <a href="./about.php" class="btn btn-outline-dark mt-2">Learn More</a>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="services-section py-5">
  <div class="container text-center">
    <h2 class="mb-5">Our Services</h2>

    <div class="services-wrapper position-relative">
      <div class="services-track">

        <!-- Service Items -->
        <div class="service-box">
          <div class="service-icon"><i class="bi bi-bar-chart-line"></i></div>
          <h5>Equity Research & Valuation</h5>
          <p>We provide actionable equity research and valuations using DCF, DDM, SOTP, EVA, and peer benchmarking for smarter investment decisions.</p>
          <a href="./erv.php" class="read-more-btn">Read More</a>
        </div>

        <div class="service-box">
          <div class="service-icon"><i class="bi bi-bank"></i></div>
          <h5>Credit Research & Rating</h5>
          <p>We deliver rigorous credit research and ratings with solvency, leverage, and risk analysis for informed lending and investment decisions.</p>
          <a href="./crr.php" class="read-more-btn">Read More</a>
        </div>

        <div class="service-box">
          <div class="service-icon"><i class="bi bi-cpu"></i></div>
          <h5>AI-Enhanced Financial Insights</h5>
          <p>We combine AI and human expertise to provide real-time, predictive, and interactive financial insights.</p>
          <a href="./AI-efi.php" class="read-more-btn">Read More</a>
        </div>

        <div class="service-box">
          <div class="service-icon"><i class="bi bi-graph-up"></i></div>
          <h5>Market & Industry Analysis</h5>
          <p>We offer comprehensive market and industry analysis with trends, forecasts, and competitive benchmarking for strategic clarity.</p>
          <a href="./mia.php" class="read-more-btn">Read More</a>
        </div>

        <div class="service-box">
          <div class="service-icon"><i class="bi bi-pie-chart"></i></div>
          <h5>Portfolio Monitoring</h5>
          <p>We provide continuous portfolio monitoring with performance tracking, exposure analysis, and actionable insights.</p>
          <a href="./portfolio.php" class="read-more-btn">Read More</a>
        </div>

      </div>

      <!-- Floating Arrows -->
      <div class="carousel-controls">
        <button id="prevService" class="carousel-arrow prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button id="nextService" class="carousel-arrow next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>

    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>



<!-- JS -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const track = document.querySelector('.services-track');
  const items = document.querySelectorAll('.service-box');
  const prevBtn = document.getElementById('prevService');
  const nextBtn = document.getElementById('nextService');

  let index = 0;
  let itemWidth = items[0].offsetWidth + 20;

  // Clone items for infinite loop
  const firstClone = items[0].cloneNode(true);
  const secondClone = items[1].cloneNode(true);
  const lastClone = items[items.length-1].cloneNode(true);
  const secondLastClone = items[items.length-2].cloneNode(true);

  track.appendChild(firstClone);
  track.appendChild(secondClone);
  track.insertBefore(lastClone, items[0]);
  track.insertBefore(secondLastClone, items[0]);

  const allItems = document.querySelectorAll('.service-box');

  // Set initial position
  index = 2;
  track.style.transform = `translateX(-${index * itemWidth}px)`;

  function getVisibleCount() {
    if(window.innerWidth >= 992) return 3;
    if(window.innerWidth >= 768) return 2;
    return 1;
  }

  function updateCarousel() {
    itemWidth = allItems[0].offsetWidth + 20;
    track.style.transition = 'transform 0.5s ease';
    track.style.transform = `translateX(-${index * itemWidth}px)`;
  }

  function next() {
    index++;
    updateCarousel();
    const visible = getVisibleCount();
    setTimeout(() => {
      if(index >= allItems.length - visible) {
        track.style.transition = 'none';
        index = 2;
        track.style.transform = `translateX(-${index * itemWidth}px)`;
      }
    }, 500);
  }

  function prev() {
    index--;
    updateCarousel();
    const visible = getVisibleCount();
    setTimeout(() => {
      if(index < 2) {
        track.style.transition = 'none';
        index = allItems.length - visible - 2;
        track.style.transform = `translateX(-${index * itemWidth}px)`;
      }
    }, 500);
  }

  nextBtn.addEventListener('click', next);
  prevBtn.addEventListener('click', prev);

  setInterval(next, 3000);
  window.addEventListener('resize', updateCarousel);
});


</script>
