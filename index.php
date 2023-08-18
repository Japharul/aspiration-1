<?php
include "header.php";
include "navbar.php";
?>

<!-- Carousel Start -->
<div class="container-fluid p-0">
  <div id="header-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="w-100" src="img/carousel-1.jpeg" alt="Image" />
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/carousel-2.jpeg" alt="Image" />
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/carousel-3.jpeg" alt="Image" />
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/carousel-4.jpeg" alt="Image" />
      </div>
      <div class="carousel-item">
        <img class="w-100" src="img/carousel-5.jpeg" alt="Image" />
      </div>
    </div>
    <a
      class="carousel-control-prev"
      href="#header-carousel"
      data-slide="prev"
    >
      <div class="btn btn-dark" style="width: 45px; height: 45px">
        <span class="carousel-control-prev-icon mb-n2"></span>
      </div>
    </a>
    <a
      class="carousel-control-next"
      href="#header-carousel"
      data-slide="next"
    >
      <div class="btn btn-dark" style="width: 45px; height: 45px">
        <span class="carousel-control-next-icon mb-n2"></span>
      </div>
    </a>
  </div>
</div>
<!-- Carousel End -->

<!-- Booking Start -->
<div class="container-fluid booking mt-5">
  <div class="container">
    <div class="bg-light shadow" style="padding: 30px">
      <div class="row align-items-center" style="min-height: 60px">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-2 text-center">
              <span class="d-flex align-items-center h-100 text-uppercase">
                find your trip
              </span>
            </div>
            <div class="col-md-3">
              <div class="mb-3 mb-md-0">
                <select class="custom-select px-4">
                  <option selected>Destination</option>
                  <option value="1">Nepal</option>
                  <option value="2">Butan</option>
                  <option value="3">Tibet</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3 mb-md-0">
                <select class="custom-select px-4">
                  <option selected>Activity</option>
                  <option value="1">Activity 1</option>
                  <option value="2">Activity 1</option>
                  <option value="3">Activity 1</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="mb-3 mb-md-0">
                <select class="custom-select px-4">
                  <option selected>Region</option>
                  <option value="1">Region 1</option>
                  <option value="2">Region 1</option>
                  <option value="3">Region 1</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <button
            class="btn btn-primary btn-block"
            type="submit"
            style="height: 47px; margin-top: -2px"
          >
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Booking End -->

<!-- Destination Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Destination
      </h6>
      <h1>Explore Top Destination</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <img class="img-fluid" src="img/destination-1.jpg" alt="" />
          <a
            class="destination-overlay text-white text-decoration-none"
            href=""
          >
            <h5 class="text-white">Kathmandu</h5>
            <span>100 packages</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <img class="img-fluid" src="img/destination-2.jpg" alt="" />
          <a
            class="destination-overlay text-white text-decoration-none"
            href=""
          >
            <h5 class="text-white">Mustang</h5>
            <span>100 packages</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <img class="img-fluid" src="img/destination-3.jpg" alt="" />
          <a
            class="destination-overlay text-white text-decoration-none"
            href=""
          >
            <h5 class="text-white">Paro Taktsang</h5>
            <span>100 packages</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <img class="img-fluid" src="img/destination-4.jpg" alt="" />
          <a
            class="destination-overlay text-white text-decoration-none"
            href=""
          >
            <h5 class="text-white">Potala Palace</h5>
            <span>100 packages</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <img class="img-fluid" src="img/destination-5.jpg" alt="" />
          <a
            class="destination-overlay text-white text-decoration-none"
            href=""
          >
            <h5 class="text-white">Yamzho Yumco</h5>
            <span>100 packages</span>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <img class="img-fluid" src="img/destination-6.jpg" alt="" />
          <a
            class="destination-overlay text-white text-decoration-none"
            href=""
          >
            <h5 class="text-white">Annapurna</h5>
            <span>100 packages</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Destination Start -->

<!-- Trekking Destination Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Destination
      </h6>
      <h1>Main Trekking Routes</h1>
    </div>
    <div
      class="row destination-route destination-trekking justify-content-center"
    >
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <div class="destination-item-img">
            <img
              class="img-fluid rounded-circle"
              src="img/banners/bkt-1.jpg"
              alt=""
            />
          </div>

          <div class="destination-item-desc mt-3">
            <a
              class="text-decoration-none text-center d-block h5 font-weight-bold"
              href=""
            >
              Annapurna
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <div class="destination-item-img">
            <img
              class="img-fluid rounded-circle"
              src="img/banners/bkt.jpg"
              alt=""
            />
          </div>

          <div class="destination-item-desc mt-3">
            <a
              class="text-decoration-none text-center d-block h5 font-weight-bold"
              href=""
            >
              Langtang
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <div class="destination-item-img">
            <img
              class="img-fluid rounded-circle"
              src="img/banners/bkt-3.webp"
              alt=""
            />
          </div>

          <div class="destination-item-desc mt-3">
            <a
              class="text-decoration-none text-center d-block h5 font-weight-bold"
              href=""
            >
              EBC
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <div class="destination-item-img">
            <img
              class="img-fluid rounded-circle"
              src="img/banners/bkt.jpeg"
              alt=""
            />
          </div>

          <div class="destination-item-desc mt-3">
            <a
              class="text-decoration-none text-center d-block h5 font-weight-bold"
              href=""
            >
              Poon Hill
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div
          class="destination-item position-relative overflow-hidden mb-2"
        >
          <div class="destination-item-img">
            <img
              class="img-fluid rounded-circle"
              src="img/destination-5.jpg"
              alt=""
            />
          </div>

          <div class="destination-item-desc mt-3">
            <a
              class="text-decoration-none text-center d-block h5 font-weight-bold"
              href=""
            >
              Mardi
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Trekking Destination Start -->

<!-- Service Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Services
      </h6>
      <h1>Tours & Travel Services</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="service-item bg-white text-center mb-2 py-5 px-4">
          <i class="fa fa-2x fa-route mx-auto mb-4"></i>
          <h5 class="mb-2">Travel Guide</h5>
          <p class="m-0">
            Justo sit justo eos amet tempor amet clita amet ipsum eos elitr.
            Amet lorem est amet labore
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="service-item bg-white text-center mb-2 py-5 px-4">
          <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
          <h5 class="mb-2">Ticket Booking</h5>
          <p class="m-0">
            Justo sit justo eos amet tempor amet clita amet ipsum eos elitr.
            Amet lorem est amet labore
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="service-item bg-white text-center mb-2 py-5 px-4">
          <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
          <h5 class="mb-2">Hotel Booking</h5>
          <p class="m-0">
            Justo sit justo eos amet tempor amet clita amet ipsum eos elitr.
            Amet lorem est amet labore
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service End -->

<!-- Packages Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Packages
      </h6>
      <h1>Pefect Tour Packages</h1>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="package-item bg-white mb-2">
          <img class="img-fluid" src="img/package-1.jpeg" alt="" />
          <div class="p-4">
            <div class="d-flex justify-content-between mb-3">
              <small class="m-0"
                ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                >Nepal</small
              >
              <small class="m-0"
                ><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                days</small
              >
            </div>
            <a class="h5 text-decoration-none" href=""
              >Discover amazing places of the world with us</a
            >
            <p class="font-weight-light mt-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              ad facilis debitis quam quis inventore repellat aliquid, eum
              expedita velit.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex justify-content-between">
                <h6 class="m-0">
                  <!-- <i class="fa fa-star text-primary mr-2"></i>4.5
                  <small>(250)</small> -->
                </h6>
                <div class="m-0 font-weight-light text-dark">
                  NRs. <span class="font-weight-bold">350</span>
                  <span class="small font-weight-light">/ Person</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="package-item bg-white mb-2">
          <img class="img-fluid" src="img/package-2.jpeg" alt="" />
          <div class="p-4">
            <div class="d-flex justify-content-between mb-3">
              <small class="m-0"
                ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                >Nepal</small
              >
              <small class="m-0"
                ><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                days</small
              >
            </div>
            <a class="h5 text-decoration-none" href=""
              >Discover amazing places of the world with us</a
            >
            <p class="font-weight-light mt-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              ad facilis debitis quam quis inventore repellat aliquid, eum
              expedita velit.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex justify-content-between">
                <h6 class="m-0">
                  <!-- <i class="fa fa-star text-primary mr-2"></i>4.5
                  <small>(250)</small> -->
                </h6>
                <div class="m-0 font-weight-light text-dark">
                  NRs. <span class="font-weight-bold">350</span>
                  <span class="small font-weight-light">/ Person</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="package-item bg-white mb-2">
          <img class="img-fluid" src="img/package-3.jpeg" alt="" />
          <div class="p-4">
            <div class="d-flex justify-content-between mb-3">
              <small class="m-0"
                ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                >Nepal</small
              >
              <small class="m-0"
                ><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                days</small
              >
            </div>
            <a class="h5 text-decoration-none" href=""
              >Discover amazing places of the world with us</a
            >
            <p class="font-weight-light mt-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              ad facilis debitis quam quis inventore repellat aliquid, eum
              expedita velit.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex justify-content-between">
                <h6 class="m-0">
                  <!-- <i class="fa fa-star text-primary mr-2"></i>4.5
                  <small>(250)</small> -->
                </h6>
                <div class="m-0 font-weight-light text-dark">
                  NRs. <span class="font-weight-bold">350</span>
                  <span class="small font-weight-light">/ Person</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="package-item bg-white mb-2">
          <img class="img-fluid" src="img/package-4.jpeg" alt="" />
          <div class="p-4">
            <div class="d-flex justify-content-between mb-3">
              <small class="m-0"
                ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                >Nepal</small
              >
              <small class="m-0"
                ><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                days</small
              >
            </div>
            <a class="h5 text-decoration-none" href=""
              >Discover amazing places of the world with us</a
            >
            <p class="font-weight-light mt-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              ad facilis debitis quam quis inventore repellat aliquid, eum
              expedita velit.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex justify-content-between">
                <h6 class="m-0">
                  <!-- <i class="fa fa-star text-primary mr-2"></i>4.5
                  <small>(250)</small> -->
                </h6>
                <div class="m-0 font-weight-light text-dark">
                  NRs. <span class="font-weight-bold">350</span>
                  <span class="small font-weight-light">/ Person</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="package-item bg-white mb-2">
          <img class="img-fluid" src="img/package-5.jpeg" alt="" />
          <div class="p-4">
            <div class="d-flex justify-content-between mb-3">
              <small class="m-0"
                ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                >Nepal</small
              >
              <small class="m-0"
                ><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                days</small
              >
            </div>
            <a class="h5 text-decoration-none" href=""
              >Discover amazing places of the world with us</a
            >
            <p class="font-weight-light mt-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              ad facilis debitis quam quis inventore repellat aliquid, eum
              expedita velit.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex justify-content-between">
                <h6 class="m-0">
                  <!-- <i class="fa fa-star text-primary mr-2"></i>4.5
                  <small>(250)</small> -->
                </h6>
                <div class="m-0 font-weight-light text-dark">
                  NRs. <span class="font-weight-bold">350</span>
                  <span class="small font-weight-light">/ Person</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="package-item bg-white mb-2">
          <img class="img-fluid" src="img/package-6.jpeg" alt="" />
          <div class="p-4">
            <div class="d-flex justify-content-between mb-3">
              <small class="m-0"
                ><i class="fa fa-map-marker-alt text-primary mr-2"></i
                >Nepal</small
              >
              <small class="m-0"
                ><i class="fa fa-calendar-alt text-primary mr-2"></i>3
                days</small
              >
            </div>
            <a class="h5 text-decoration-none" href=""
              >Discover amazing places of the world with us</a
            >
            <p class="font-weight-light mt-3">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos
              ad facilis debitis quam quis inventore repellat aliquid, eum
              expedita velit.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="d-flex justify-content-between">
                <h6 class="m-0">
                  <!-- <i class="fa fa-star text-primary mr-2"></i>4.5
                  <small>(250)</small> -->
                </h6>
                <div class="m-0 font-weight-light text-dark">
                  NRs. <span class="font-weight-bold">350</span>
                  <span class="small font-weight-light">/ Person</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Packages End -->

<!-- Team Start -->
<div class="container-fluid py-5 bg-dark">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Guides
      </h6>
      <h1 class="text-light">Our Travel Guides</h1>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="img/portrait1.jpg" alt="" />
            <div class="team-social">
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="text-center py-4 px-3">
            <h5 class="text-truncate">Gyalzen Hyolmo</h5>
            <div class="text-left">
              <p class="m-0 font-weight-light">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ipsum, unde...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="img/portrait1.jpg" alt="" />
            <div class="team-social">
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="text-center py-4 px-3">
            <h5 class="text-truncate">Gyalzen Hyolmo</h5>
            <div class="text-left">
              <p class="m-0 font-weight-light">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ipsum, unde...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="img/portrait1.jpg" alt="" />
            <div class="team-social">
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="text-center py-4 px-3">
            <h5 class="text-truncate">Gyalzen Hyolmo</h5>
            <div class="text-left">
              <p class="m-0 font-weight-light">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ipsum, unde...
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 pb-2">
        <div class="team-item bg-white mb-4">
          <div class="team-img position-relative overflow-hidden">
            <img class="img-fluid w-100" src="img/portrait1.jpg" alt="" />
            <div class="team-social">
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a class="btn btn-outline-primary btn-square" href=""
                ><i class="fab fa-instagram"></i
              ></a>
            </div>
          </div>
          <div class="text-center py-4 px-3">
            <h5 class="text-truncate">Gyalzen Hyolmo</h5>
            <div class="text-left">
              <p class="m-0 font-weight-light">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ipsum, unde...
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team End -->

<!-- Testimonial Start -->
<div class="container-fluid py-5">
  <div class="container py-5">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Testimonial
      </h6>
      <h1>What Say Our Clients</h1>
      <span class="font-weight-light">
        These full and frank reviews are from travelers who have traveled
        with Aspiration previously. The reviews and experiences shown here
        are from reputable travel websites like TripAdvisor, Google,
        Facebook, and Trust Pilot, etc.
      </span>
    </div>
    <div class="owl-carousel testimonial-carousel">
      <div class="text-center pb-4">
        <img
          class="img-fluid mx-auto"
          src="img/portrait1.jpg"
          style="width: 100px; height: 100px"
        />
        <div class="testimonial-text bg-white p-4 mt-n5">
          <p class="mt-5">
            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
            stet amet eirmod eos labore diam
          </p>
          <h5 class="text-truncate">Client Name</h5>
        </div>
      </div>
      <div class="text-center">
        <img
          class="img-fluid mx-auto"
          src="img/portrait1.jpg"
          style="width: 100px; height: 100px"
        />
        <div class="testimonial-text bg-white p-4 mt-n5">
          <p class="mt-5">
            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
            stet amet eirmod eos labore diam
          </p>
          <h5 class="text-truncate">Client Name</h5>
        </div>
      </div>
      <div class="text-center">
        <img
          class="img-fluid mx-auto"
          src="img/portrait1.jpg"
          style="width: 100px; height: 100px"
        />
        <div class="testimonial-text bg-white p-4 mt-n5">
          <p class="mt-5">
            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
            stet amet eirmod eos labore diam
          </p>
          <h5 class="text-truncate">Client Name</h5>
        </div>
      </div>
      <div class="text-center">
        <img
          class="img-fluid mx-auto"
          src="img/portrait1.jpg"
          style="width: 100px; height: 100px"
        />
        <div class="testimonial-text bg-white p-4 mt-n5">
          <p class="mt-5">
            Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
            stet amet eirmod eos labore diam
          </p>
          <h5 class="text-truncate">Client Name</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->
<!-- Blog Start -->
<div class="container-fluid py-5">
  <div class="container pt-5 pb-3">
    <div class="text-center mb-3 pb-3">
      <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
        Our Blog
      </h6>
      <h1>LATEST BLOGS & ARTICLES</h1>
    </div>
    <div class="row">
      <?php
      include 'admin/database/db.php'; // Include your database connection
      $query = "SELECT id, title, images FROM blogs";
      $result = mysqli_query($conn, $query);
      if ($result && mysqli_num_rows($result) > 0) {          
        while ($row = mysqli_fetch_assoc($result)) {
          echo '<div class="col-lg-4 col-md-6 mb-4 pb-3">';
          echo '<div class="blog-entry">';
          // Decode JSON images and display
          $image_paths = json_decode($row['images']);
          if (!empty($image_paths)) {
            foreach ($image_paths as $image_path) {
              echo '<img src="'. htmlspecialchars($image_path) . '" alt="Blog Image" class="img-fluid medium-image">';
            }
          }
          echo '<h4>' . htmlspecialchars($row['title']) . '</h4>';
          echo '<a href="blog-detail.php?id=' . $row['id'] . '" class="btn btn-primary">Read More</a>'; // Add Read More button
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo 'No blogs found.';
      }
      mysqli_free_result($result);
      $conn->close();
      ?>
    </div>
  </div>
</div>
<!-- Blog End -->

<?php
include "news-subscriber.php";
?>
<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
  ><i class="fa fa-angle-double-up"></i
></a>

<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Package Title</h5>
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">Package Details will be added here</div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-dismiss="modal"
        >
          Close
        </button>
        <button type="button" class="btn btn-primary">Book Now</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<?php
include "footer.php";
?>


