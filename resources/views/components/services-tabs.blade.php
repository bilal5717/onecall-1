<!-- Home Services Categories Slider Section -->
<section class="services-section">
  <div class="container">
    <!-- <h2>Our Home Services Categories</h2> -->

    <div class="slider-wrapper">
      <button class="slider-arrow prev" id="prevBtn"><i class="fas fa-chevron-left"></i></button>

      <div class="cards-container" id="cardsContainer">
        <a href="electric-work-in-dubai" class="service-card">
          <div class="card-image" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&auto=format&fit=crop&q=80');"></div>
          <div class="card-title">Electrical Work</div>
        </a>

        <a href="plumber-work-in-dubai" class="service-card">
          <div class="card-image" style="background-image: url('https://media.istockphoto.com/id/1185738880/photo/plumber-using-a-wrench-to-repair-and-remove-the-water-supply-pipe-and-valve.jpg?s=612x612&w=0&k=20&c=MijvkBiRPb24ZbyOJtIeBo7_ASL0TSGAR1KKoTwFDVM="></div>
          <div class="card-title">Plumbing</div>
        </a>

          <a href="painting" class="service-card">
          <div class="card-image" style="background-image: url('https://media.istockphoto.com/id/1198703852/photo/painter-man-at-work.jpg?s=612x612&w=0&k=20&c=C_QRUjPe2qdqrjpRL2wcWS3ajGmBVB5qVgIXSRsYjgg="></div>
          <div class="card-title">Painting</div>
        </a>

        

        <a href="aluminum-glass-work" class="service-card">
          <div class="card-image" style="background-image: url('https://www.windoors.tech/img/about.jpg"></div>
          <div class="card-title">Aluminum Glass</div>
        </a>

      

        <a href="ac-ventilation" class="service-card">
          <div class="card-image" style="background-image: url('https://assistor.in/uploads/services/17123933957.jpg"></div>
          <div class="card-title">AC Repair & Service</div>
        </a>

       

        <a href="tesla-charging" class="service-card">
          <div class="card-image" style="background-image: url('https://autovista24.autovistagroup.com/wp-content/uploads/sites/5/2021/09/GettyImages-1325838855-1024x585.jpg"></div>
          <div class="card-title">Ev Charger</div>
        </a>

        <a href="tiling-in-dubai" class="service-card">
          <div class="card-image" style="background-image: url('https://media.istockphoto.com/id/1319403503/photo/professional-tiler-making-new-floor.jpg?s=612x612&w=0&k=20&c=6lm76Oteb_5WmvkQuXBPJ6ejxMxR-DFF6apdfHsNfDc="></div>
          <div class="card-title">Tiling</div>
        </a>

        <a href="gypsum-partition-ceiling-work-in-dubai" class="service-card">
          <div class="card-image" style="background-image: url('https://cdn.cpdonline.co.uk/wp-content/uploads/2025/05/15161353/gypsum-scaled.jpg"></div>
          <div class="card-title">Gypsum Work</div>
        </a>

        <a href="cctv-cameras" class="service-card">
          <div class="card-image" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/027/717/504/small/cctv-security-cameras-for-outdoor-use-installed-outside-the-house-the-alarm-system-ai-generative-photo.jpg"></div>
          <div class="card-title">CCTV</div>
        </a>

      </div>

      <button class="slider-arrow next" id="nextBtn"><i class="fas fa-chevron-right"></i></button>
    </div>
  </div>
</section>

<style>
  /* Home Services Categories Slider */
  .services-section {
    padding: 70px 20px;
    background: #f8f9fc;
  }

  .services-section .container {
    max-width: 1240px;
    margin: 0 auto;
  }

  .services-section h2 {
    text-align: center;
    margin-bottom: 50px;
    color: #011331e6;
    font-size: 2.4rem;
    font-weight: 700;
  }

  .slider-wrapper {
    position: relative;
    overflow: hidden;
  }

  .cards-container {
    display: flex;
    transition: transform 0.55s cubic-bezier(0.32, 0.72, 0, 1);
    gap: 24px;
  }

  .service-card {
    flex: 0 0 calc((100% - 48px) / 3);
    background: white;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.07);
    transition: all 0.35s ease;
    text-decoration: none;
    color: inherit;
    display: block;
    position: relative;           /* Important for absolute title */
  }

  .service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 22px 48px rgba(0, 0, 0, 0.14);
  }

  .card-image {
    height: 220px;                /* thoda zyada height di better proportion ke liye */
    background-size: cover;
    background-position: center;
    position: relative;
  }

  .card-title {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 16px 12px;
    margin: 0;
    font-size: 1.22rem;
    font-weight: 600;
    color: white;
    text-align: center;
    background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.35) 100%);
    text-shadow: 0 1px 3px rgba(0,0,0,0.6);
  }

  /* Arrows */
  .slider-arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 54px;
    height: 54px;
    background: rgba(255, 255, 255, 0.98);
    border: none;
    border-radius: 50%;
    font-size: 1.45rem;
    color: #374151;
    cursor: pointer;
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    transition: all 0.3s ease;
    z-index: 40;
  }

  .slider-arrow:hover {
    background: #2563eb;
    color: white;
    transform: translateY(-50%) scale(1.12);
  }

  .slider-arrow.prev { left: -1px; }
  .slider-arrow.next { right: -1px; }

  .slider-arrow:disabled {
    opacity: 0.35;
    cursor: not-allowed;
    transform: translateY(-50%);
  }

  @media (max-width: 992px) {
    .service-card {
      flex: 0 0 calc((100% - 24px) / 2);
    }
  }

  @media (max-width: 640px) {
    .service-card {
      flex: 0 0 88%;
    }
    .slider-arrow {
      width: 48px;
      height: 48px;
      font-size: 1.3rem;
    }
    .slider-arrow.prev { left: 12px; }
    .slider-arrow.next { right: 12px; }
    .card-image { height: 200px; }
  }
</style>

<script>
  const container = document.getElementById('cardsContainer');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');

  let currentIndex = 0;
  const cardCount = document.querySelectorAll('.service-card').length;
  let cardsPerView = 3;

  function updateCardsPerView() {
    if (window.innerWidth <= 640) cardsPerView = 1;
    else if (window.innerWidth <= 992) cardsPerView = 2;
    else cardsPerView = 3;
    updateButtons();
  }

  function updateButtons() {
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex >= cardCount - cardsPerView;
  }

  function slideTo(index) {
    currentIndex = Math.max(0, Math.min(index, cardCount - cardsPerView));
    const offset = -currentIndex * (100 / cardsPerView);
    container.style.transform = `translateX(${offset}%)`;
    updateButtons();
  }

  prevBtn.addEventListener('click', () => slideTo(currentIndex - 1));
  nextBtn.addEventListener('click', () => slideTo(currentIndex + 1));

  window.addEventListener('resize', () => {
    updateCardsPerView();
    slideTo(currentIndex);
  });

  // Initialize
  updateCardsPerView();
  slideTo(0);
</script>

<!-- Font Awesome (sirf tab add karna agar pehle se <head> mein nahi hai) -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->