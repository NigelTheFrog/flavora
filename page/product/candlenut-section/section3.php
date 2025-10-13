<section id="section-product-forms" class="product-forms-section">
  <div class="container">
    <div class="product-forms-header">
      <div class="title-separator"></div>
      <h2>How do you want your candlenut?</h2>
      <p>As the world's largest dried onion supplier, we offer a comprehensive product line with a vast range of fractions, treatments and packaging. We’re as passionate about consistency as we are about variety, so our onions deliver uniform piece distribution and integrity.</p>
    </div>
    <nav class="product-tabs">
      <button onclick="selectedType(this,'powder')" class="tab-link tab-type active">Powder</button>
      <button onclick="selectedType(this,'shelled')" class="tab-link tab-type">Shelled</button>
      <button onclick="selectedType(this,'oil')" class="tab-link tab-type">Oil</button>
    </nav>
    <div class="tab-content-wrapper">
      <div class="tab-content active" id="type-candlenut">
        <div class="product-form-image">
          <img src="assets/product/candlenut/candlenut-powder.png" alt="Candlenut Powder">
        </div>
        <div class="product-form-details">
          <div class="title-separator"></div>
          <h3>Powder</h3>
          <p>Hand selected whole kernels, carefully sun dried to maintain natural oil content and flavor.</p>
          <a href="#" class="btn primary fullrounded">Shop candlenut powder</a>
        </div>
      </div>
    </div>


  </div>
</section>

<section id="section-packaging-forms" class="product-packaging-section-bg">
  <div class="product-packaging-section">
    <div class="packaging-header">
      <div class="title-separator"></div>
      <h2>Packaging</h2>
    </div>
    <div class="packaging-wrapper">
      <button class="packaging-arrow prev" onclick="slidePackaging(this, true)">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
          <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
        </svg>
      </button>

      <div class="packaging-carousel">
        <div class="packaging-carousel-track">
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>250 GR</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Cracking process">
            <div class="packaging-text">
              <h3>500 GR</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>1 KG</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>3 KG</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Cracking process">
            <div class="packaging-text">
              <h3>5 KG</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>10 KG</h3>
            </div>
          </div>
          <div class="packaging-carousel-content">
            <img src="assets/product/candlenut/packaging.png" alt="Arrival process">
            <div class="packaging-text">
              <h3>25 KG</h3>
            </div>
          </div>
        </div>

      </div>

      <button class="packaging-arrow next" onclick="slidePackaging(this, false)">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
        </svg>
      </button>
    </div>
  </div>
</section>