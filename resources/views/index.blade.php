@extends('layout/layout')

@section('content')

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <h1 class="sitename">PureEarth</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="#problems">Problems</a></li>
          <li><a href="/education">Education</a></li>
          <li><a href="/contact">Contact</a></li>
          {{-- https://wa.me/6282115525343?text=asdasdasd --}}
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">
    <section id="about" class="about section">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 1,
                      "spaceBetween": 40
                    },
                    "1200": {
                      "slidesPerView": 1,
                      "spaceBetween": 1
                    }
                  }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{asset('img/pollution-1.jpg')}}" alt="Image" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('img/pollution-5.jpg')}}" alt="Image" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('img/pollution-2.jpg')}}" alt="Image" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('img/pollution-3.jpg')}}" alt="Image" class="img-fluid w-100">
                </div>
                <div class="swiper-slide">
                  <img src="{{asset('img/pollution-4.jpg')}}" alt="Image" class="img-fluid w-100">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="col-lg-4 order-lg-1">
            <span class="section-subtitle" data-aos="fade-up">Welcome</span>
            <h1 class="mb-4" data-aos="fade-up">
              Together, we can fight soil and water pollution for a cleaner, healthier planet.
            </h1>
            <p data-aos="fade-up">
              With a wealth of educational resources and actionable insights, PureEarth empowers individuals and communities to recognize the impact of pollution, report incidents, and contribute to global efforts in safeguarding our vital soil and water resources for future generations.
            </p>
            <p class="mt-5" data-aos="fade-up">
              <a href="/contact" class="btn btn-get-started">Get Started</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="about-2" class="about-2 section light-background">
      <div class="container">
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4 order-lg-2 offset-xl-1 mb-4">
              <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                <div class="img">
                  <img src="{{asset('img/our-mission.jpg')}}" alt="circle image" class="img-fluid">
                </div>
              </div>
            </div>

            <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-4" data-aos="fade-up">
              <div class="px-3">
                <span class="content-subtitle">Our Mission</span>
                <h2 class="content-title text-start">
                  Empower Your Knowledge
                </h2>
                <p class="lead">
                  Empower yourself with the knowledge to prevent pollution and report incidents in your community.
                </p>
                <p class="mb-5">
                  Learn how pollution affects our environment and discover practical steps you can take to make a difference.
                </p>
                <p>
                  <a href="/education" class="btn-get-started">Get Started</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services section light-background">
      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up">
              <div class="services-icon">
                <i class="bi bi-bar-chart"></i>
              </div>
              <div>
                <h3>Awarenss</h3>
                <p>Raising awareness about soil and water pollution to protect our planet's future.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="100">
              <div class="services-icon">
                <i class="bi bi-command"></i>
              </div>
              <div>
                <h3>Educational</h3>
                <p>Explore educational resources reegarding the latest environmental news, initiatives, and solutions.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="services-item" data-aos="fade-up" data-aos-delay="200">
              <div class="services-icon">
                <i class="bi bi-bullseye"></i>
              </div>
              <div>
                <h3>Connect</h3>
                <p>Join the movement to improve the environment and reporting pollution problems in your community</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="stats" class="stats section light-background">
      <div class="container">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-5">
            <div class="images-overlap">
              <img src="{{asset('img/why-us.jpg')}}" alt="student" class="img-fluid img-1" data-aos="fade-up">
            </div>
          </div>

          <div class="col-lg-4 ps-lg-5">
            <span class="content-subtitle">Why Us</span>
            <h2 class="content-title">Empowering Action for Lasting Change</h2>
            <p class="mb-5">
              We offer reliable resources on pollution and empower you to take action. Connect with a community of experts and activists to create lasting environmental change and protect our planet.
            </p>
            <div class="row mb-5 count-numbers">

              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex">
                    <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter number"></span>
                    <span>+</span>
                </div>
                <span class="d-block">Polution Reports</span>
              </div>

              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
                <div class="d-flex" style="align-items: center">
                    <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="90" data-purecounter-duration="1" class="purecounter number"></span>
                    <span>%</span>
                </div>
                <span class="d-block">User Satisfaction</span>
              </div>

              <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
                <div class="d-flex">
                    <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter number"></span>
                    <span>+</span>
                </div>
                <span class="d-block">Pollution Resolved</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    {{-- Problems --}}
    <section id="problems" class="tabs section light-background">
        <div class="container section-title" data-aos="fade-up">
            <h2>Problems</h2>
        </div>
        <div class="container">
          <div class="row gap-x-lg-4 justify-content-between">
            <div class="col-lg-4 js-custom-dots">
              <a href="#" class="service-item link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                <div class="service-icon color-1 mb-4">
                  <i class="bi bi-droplet"></i>
                </div>
                <div class="service-contents">
                  <h3>Contaminated Water Sources</h3>
                  <p>
                    Industrial waste and agricultural runoff contaminate drinking water.
                  </p>
                </div>
              </a>

              <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="100">
                <div class="service-icon color-2 mb-4">
                  <i class="bi bi-water"></i>
                </div>
                <div class="service-contents">
                  <h3>Soil Degradation</h3>
                  <p>
                    Harmful chemicals and pesticides degrade soil quality.
                  </p>
                </div>
              </a>

              <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="200">
                <div class="service-icon color-3 mb-4">
                  <i class="bi bi-flower1"></i>
                </div>
                <div class="service-contents">
                  <h3>Loss of Biodiversity</h3>
                  <p>
                    Pollution disrupts ecosystems, leading to declines in species and habitat loss.
                  </p>
                </div>
              </a>

              <a href="#" class="service-item link horizontal d-flex" data-aos="fade-left" data-aos-delay="300">
                <div class="service-icon color-4 mb-4">
                  <i class="bi bi-heart-pulse"></i>
                </div>
                <div class="service-contents">
                  <h3>Public Health Risks</h3>
                  <p>
                    Polluted soil and water expose communities to serious health issues and diseases.
                  </p>
                </div>
              </a>
            </div>

            <div class="col-lg-8">
              <div class="swiper init-swiper-tabs">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoHeight": true,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "320": {
                        "slidesPerView": 1,
                        "spaceBetween": 40
                      },
                      "1200": {
                        "slidesPerView": 1,
                        "spaceBetween": 1
                      }
                    }
                  }
                </script>
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="{{asset('img/problem-1.jpg')}}" alt="Image" class="img-fluid w-100">
                    <div class="p-4">
                      <h3 class="text-black h5 mb-3">Contaminated Water Sources</h3>
                      <div class="row">
                        <div class="col-lg-10">
                          <p>
                            Pollution from industrial waste, agricultural runoff, and improper waste disposal can contaminate drinking water sources, leading to serious health risks for communities and ecosystems.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('img/problem-2.jpg')}}" alt="Image" class="img-fluid w-100">
                    <div class="p-4">
                        <h3 class="text-black h5 mb-3">Soil Degradation</h3>
                        <div class="row">
                          <div class="col-lg-10">
                            <p>
                              The introduction of harmful chemicals, heavy metals, and pesticides into the soil can degrade its quality, reduce agricultural productivity, and harm the organisms that contribute to soil health.
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('img/problem-3.jpg')}}" alt="Image" class="img-fluid w-100">
                    <div class="p-4">
                        <h3 class="text-black h5 mb-3">Loss of Biodiversity</h3>
                        <div class="row">
                          <div class="col-lg-10">
                            <p>
                              Pollution can disrupt ecosystems, leading to a decline in plant and animal species. Contaminants can alter habitats, making them uninhabitable for native species and contributing to extinction.
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <img src="{{asset('img/problem-4.jpg')}}" alt="Image" class="img-fluid w-100">
                    <div class="p-4">
                        <h3 class="text-black h5 mb-3">Public Health Risks</h3>
                        <div class="row">
                          <div class="col-lg-10">
                            <p>
                              Exposure to polluted soil and water can result in various health issues, including respiratory problems, skin diseases, and long-term conditions like cancer, disproportionately affecting vulnerable populations, including children and the elderly.
                            </p>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    {{-- Education --}}
    <section id="blog-posts" class="blog-posts section">
      <div class="container section-title" data-aos="fade-up">
        <p>Recent Posts</p>
        <h2>Education</h2>
      </div>
      <div class="container">
        <div class="row gy-4">

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                <a href="/education/1" class="thumb d-block"><img src="{{asset('img/education/education-1.jpg')}}" alt="Image" class="img-fluid rounded"></a>

                <div class="post-content">
                <div class="meta">
                    <a href="https://youtu.be/R6-sTn70MXk?si=NQRvyVyXVgzIEB2m" target="_blank" class="cat">Video</a> •
                    <span class="date">Aug 19, 2020</span>
                </div>
                <h3><a href="/education/1">Sand and Soil Pollution Experiment</a></h3>
                <p>
                    This video was made possible with generous funding support from the National Geographic Society, County of Santa Cruz, City of Santa Cruz and the National Oceanic and Atmospheric Administration.
                </p>

                <div class="d-flex author align-items-center">
                    <div class="pic">
                    <img src="{{asset('img/education/author-1.jpg')}}" alt="Image" class="img-fluid rounded-circle">
                    </div>
                    <div class="author-name">
                    <strong class="d-block">Coastal Watershed Council</strong>
                    <span class="">Youtube Creator</span>
                    </div>
                </div>
                </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
              <a href="/education/2" class="thumb d-block"><img src="{{asset('img/education/education-2.jpg')}}" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="https://youtu.be/7qkaz8ChelI?si=ehyWmIIWARU_uZzA" target="_blank" class="cat">Video</a> •
                  <span class="date">Mar 24, 2020</span>
                </div>
                <h3><a href="/education/2">What is POLLUTION?</a></h3>
                <p>
                  Hey kids, in this video, Dr Binocs will explain, what is pollution? what causes pollution? how to prevent pollution? Save Earth | Global Warming Crisis
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="{{asset('img/education/author-2.jpg')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">
                        Dr Binocs
                    </strong>
                    <span class="">Peekaboo Kidz - Youtube</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
              <a href="/education/3" class="thumb d-block"><img src="{{asset('img/education/education-3.jpg')}}" alt="Image" class="img-fluid rounded"></a>

              <div class="post-content">
                <div class="meta">
                  <a href="https://youtu.be/HQTUWK7CM-Y?si=VsrMXBsIFapMP2S7" target="_blank" class="cat">Video</a> •
                  <span class="date">Sep 17, 2016</span>
                </div>
                <h3><a href="/education/3">How We Can Keep Plastics Out of Our Ocean</a></h3>
                <p>
                  Plastic pollution poses one of the biggest known threats to the ocean, influencing all ecosystems from beautiful coral reefs to abyssal trenches, eventually accumulating in our own food.
                </p>

                <div class="d-flex author align-items-center">
                  <div class="pic">
                    <img src="{{asset('img/education/author-3.jpg')}}" alt="Image" class="img-fluid rounded-circle">
                  </div>
                  <div class="author-name">
                    <strong class="d-block">National Geographic</strong>
                    <span class="">Youtube Channel</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

@endsection
