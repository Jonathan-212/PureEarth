@extends('layout/layout')

@section('content')


  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <h1 class="sitename">PureEarth</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/#problems">Problems</a></li>
          <li><a href="/education">Education</a></li>
          <li><a href="/contact" class="active">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <div class="page-title light-background">
      <div class="container">
        <h1>Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="contact" class="contact section">
      <div class="container" data-aos="fade">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-4">

            <div class="info">
              <h3>Get in touch</h3>
              <p style="text-align:justify">Have concerns about water or soil pollution? Want to suggest improvements or report an issue? We’re here to help! Reach out to us with your pollution reports, questions, or suggestions, and together we can work toward a cleaner, healthier environment.</p>

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>BINUS @Alam Sutera</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>binus@binus.ac.id</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 804 169 6969</p>
                </div>
              </div>

            </div>

          </div>

          <div class="col-lg-8">
            <form action="/contact-whatsapp" method="GET">
                <div class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>

        </div>

      </div>

    </section>

  </main>

@endsection
