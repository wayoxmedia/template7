<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="footer-item d-flex flex-column">
          <div class="footer-item">
            <h4 class="text-white mb-4"><?= FOOTER_TITLE ?></h4>
            <p class="mb-3"><?= FOOTER_TEXT ?></p>
          </div>
          <form id="subscribeForm" method="post">
            <select class="form-select" id="selAddressType" name="selAddressType">
              <option value="e">Email</option>
              <option value="p">Phone</option>
            </select>
            <div class="position-relative">
              <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" 
                      type="text" id="iptAddress" name="iptAddress" placeholder="Enter your email">
              <button type="submit" 
                      class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2" 
                      id="btnSubmitSubscribe">
                <?= FOOTER_BUTTON ?>
              </button>
            </div>
          </form>
            <p id="pMessage" class="mt-3 text-success text-center d-none"></p>
            <ul id="ulErrors" class="mt-3 text-danger list-unstyled text-center d-none"></ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="footer-item d-flex flex-column">
          <h4 class="text-white mb-4"><?= FOOTER_TITLE1 ?></h4>
          <a href="#"><i class="fas fa-angle-right me-2"></i><?= FOOTER_LINK ?></a>
          <a href="#"><i class="fas fa-angle-right me-2"></i><?= FOOTER_LINK2 ?></a>
          <a href="#"><i class="fas fa-angle-right me-2"></i><?= FOOTER_LINK3 ?></a>
          <a href="#"><i class="fas fa-angle-right me-2"></i><?= FOOTER_LINK4 ?></a>
          <a href="#"><i class="fas fa-angle-right me-2"></i><?= FOOTER_LINK5 ?></a>
          <a href="#"><i class="fas fa-angle-right me-2"></i><?= FOOTER_LINK6 ?></a>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="footer-item d-flex flex-column">
          <h4 class="text-white mb-4"><?= FOOTER_TITLE2 ?></h4>
          <div class="mb-3">
            <h6 class="text-muted mb-0"><?= FOOTER_TITLE3 ?></h6>
            <p class="text-white mb-0"><?= FOOTER_TEXTO1 ?></p>
          </div>
          <div class="mb-3">
            <h6 class="text-muted mb-0"><?= FOOTER_TITLE4 ?></h6>
            <p class="text-white mb-0"><?= FOOTER_TEXTO2 ?></p>
          </div>
          <div class="mb-3">
            <h6 class="text-muted mb-0"><?= FOOTER_TITLE5 ?></h6>
            <p class="text-white mb-0"><?= FOOTER_TEXTO3 ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="footer-item d-flex flex-column">
          <h4 class="text-white mb-4"><?= FOOTER_TITLE6 ?></h4>
          <a href="#"><i class="fa fa-map-marker-alt me-2"></i><?= FOOTER_LINKS ?></a>
          <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i><?= FOOTER_LINKS1 ?></a>
          <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i><?= FOOTER_LINKS2 ?></a>
          <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i><?= FOOTER_LINKS3 ?></a>
          <div class="d-flex">
            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
              class="fab fa-facebook-f text-white"></i></a>
            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
              class="fab fa-twitter text-white"></i></a>
            <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
              class="fab fa-instagram text-white"></i></a>
            <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i
              class="fab fa-linkedin-in text-white"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End -->
