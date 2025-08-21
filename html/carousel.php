<!-- Carousel Start -->
<div class="header-carousel">
  <div id="carouselId" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="First slide"></li>
      <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img src="<?= CAROUSEL_IMAGE ?>" class="img-fluid w-100" alt="First slide"/>
        <div class="carousel-caption">
          <div class="container py-4">
            <div class="row g-5">
              <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                  style="animation-delay: 1s;">
                <div class="bg-secondary rounded p-5">
                  <h4 class="text-white mb-4"><?= CAROUSEL_TITLE ?></h4>
                  <form>
                    <div class="row g-3">
                      <div class="col-12">
                        <select class="form-select" aria-label="Default select example">
                          <option selected><?= CAROUSEL_SELECT ?></option>
                          <option value="1"><?= CAROUSEL_SELECT_ONE ?></option>
                          <option value="2"><?= CAROUSEL_SELECT_TWO ?></option>
                          <option value="3"><?= CAROUSEL_SELECT_THREE ?></option>
                          <option value="4"><?= CAROUSEL_SELECT_FOUR ?></option>
                        </select>
                      </div>
                      <div class="col-12">
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-map-marker-alt"></span> <span class="ms-1"><?= CAROUSEL_FA_MAP_MARKER_PICK ?></span>
                          </div>
                          <input class="form-control" type="text" placeholder="Enter a City or Airport"
                                aria-label="Enter a City or Airport">
                        </div>
                      </div>
                      <div class="col-12">
                        <a href="#" class="text-start text-white d-block mb-2"><?= CAROUSEL_HREF ?></a>
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-map-marker-alt"></span><span class="ms-1"><?= CAROUSEL_FA_MAP_MARKER_DROP ?></span>
                          </div>
                          <input class="form-control" type="text" placeholder="Enter a City or Airport"
                                aria-label="Enter a City or Airport">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-calendar-alt"></span><span class="ms-1"><?= CAROUSEL_FA_CALENDAR_PICK ?></span>
                          </div>
                          <input class="form-control" type="date">
                          <select class="form-select ms-3" aria-label="Default select example">
                            <option selected><?= CAROUSEL_SELECT5 ?></option>
                            <option value="1"><?= CAROUSEL_SELECT6 ?></option>
                            <option value="2"><?= CAROUSEL_SELECT7 ?></option>
                            <option value="3"><?= CAROUSEL_SELECT8 ?></option>
                            <option value="4"><?= CAROUSEL_SELECT9 ?></option>
                            <option value="5"><?= CAROUSEL_SELECT10 ?></option>
                            <option value="6"><?= CAROUSEL_SELECT11 ?></option>
                            <option value="7"><?= CAROUSEL_SELECT12 ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-calendar-alt"></span><span class="ms-1"><?= CAROUSEL_FA_CALENDAR_DROP ?></span>
                          </div>
                          <input class="form-control" type="date">
                          <select class="form-select ms-3" aria-label="Default select example">
                            <option selected><?= CAROUSEL_SELECT13 ?></option>
                            <option value="1"><?= CAROUSEL_SELECT14 ?></option>
                            <option value="2"><?= CAROUSEL_SELECT15 ?></option>
                            <option value="3"><?= CAROUSEL_SELECT16 ?></option>
                            <option value="4"><?= CAROUSEL_SELECT17 ?></option>
                            <option value="5"><?= CAROUSEL_SELECT18 ?></option>
                            <option value="6"><?= CAROUSEL_SELECT19 ?></option>
                            <option value="7"><?= CAROUSEL_SELECT20 ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-light w-100 py-2"><?= CAROUSEL_BUTTON ?></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s"
                  style="animation-delay: 1s;">
                <div class="text-start">
                  <h1 class="display-5 text-white"><?= CAROUSEL_TITLE1 ?></h1>
                  <p><?= CAROUSEL_TEXTO ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= CAROUSEL_IMAGE1 ?>" class="img-fluid w-100" alt="First slide"/>
        <div class="carousel-caption">
          <div class="container py-4">
            <div class="row g-5">
              <div class="col-lg-6 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                  style="animation-delay: 1s;">
                <div class="bg-secondary rounded p-5">
                  <h4 class="text-white mb-4"><?= CAROUSEL_TITLE2 ?></h4>
                  <form>
                    <div class="row g-3">
                      <div class="col-12">
                        <select class="form-select" aria-label="Default select example">
                          <option selected><?= CAROUSEL_SELECT21 ?></option>
                          <option value="1"><?= CAROUSEL_SELECT22 ?></option>
                          <option value="2"><?= CAROUSEL_SELECT23 ?></option>
                          <option value="3"><?= CAROUSEL_SELECT24 ?></option>
                          <option value="4">>?= CAROUSEL_SELECT25 ?></option>
                        </select>
                      </div>
                      <div class="col-12">
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-map-marker-alt"></span><span class="ms-1"><?= CAROUSEL_FA_MAP_MARKER_PICK1 ?></span>
                          </div>
                          <input class="form-control" type="text" placeholder="Enter a City or Airport"
                                aria-label="Enter a City or Airport">
                        </div>
                      </div>
                      <div class="col-12">
                        <a href="#" class="text-start text-white d-block mb-2"><?= CAROUSEL_LINK ?></a>
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-map-marker-alt"></span><span class="ms-1"><?= CAROUSEL_FA_MAP_MARKER_DROP1 ?></span>
                          </div>
                          <input class="form-control" type="text" placeholder="Enter a City or Airport"
                                aria-label="Enter a City or Airport">
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-calendar-alt"></span><span class="ms-1"><?= CAROUSEL_FA_CALENDAR_PICK1 ?></span>
                          </div>
                          <input class="form-control" type="date">
                          <select class="form-select ms-3" aria-label="Default select example">
                            <option selected><?= CAROUSEL_SELECT26 ?></option>
                            <option value="1"><?= CAROUSEL_SELECT27 ?></option>
                            <option value="2"><?= CAROUSEL_SELECT28 ?></option>
                            <option value="3"><?= CAROUSEL_SELECT29 ?></option>
                            <option value="4"><?= CAROUSEL_SELECT30 ?></option>
                            <option value="5"><?= CAROUSEL_SELECT31 ?></option>
                            <option value="6"><?= CAROUSEL_SELECT32 ?></option>
                            <option value="7"><?= CAROUSEL_SELECT33 ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="input-group">
                          <div class="d-flex align-items-center bg-light text-body rounded-start p-2">
                            <span class="fas fa-calendar-alt"></span><span class="ms-1"><?= CAROUSEL_FA_CALENDAR_DROP1 ?></span>
                          </div>
                          <input class="form-control" type="date">
                          <select class="form-select ms-3" aria-label="Default select example">
                            <option selected><?= CAROUSEL_SELECT34 ?></option>
                            <option value="1"><?= CAROUSEL_SELECT35 ?></option>
                            <option value="2"><?= CAROUSEL_SELECT36 ?></option>
                            <option value="3"><?= CAROUSEL_SELECT37 ?></option>
                            <option value="4"><?= CAROUSEL_SELECT38 ?></option>
                            <option value="5"><?= CAROUSEL_SELECT39 ?></option>
                            <option value="6"><?= CAROUSEL_SELECT40 ?></option>
                            <option value="7"><?= CAROUSEL_SELECT41 ?></option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn btn-light w-100 py-2"><?= CAROUSEL_BUTTON1 ?></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 d-none d-lg-flex fadeInRight animated" data-animation="fadeInRight" data-delay="1s"
                  style="animation-delay: 1s;">
                <div class="text-start">
                  <h1 class="display-5 text-white"><?= CAROUSEL_TITLE3 ?> </h1>
                  <p><?= CAROUSEL_TEXTO1 ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Carousel End -->
