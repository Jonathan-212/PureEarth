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
          <li><a href="/education" class="active">Education</a></li>
          <li><a href="/contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <div class="page-title light-background">
      <div class="container">
        <h1>Education</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Education</li>
          </ol>
        </nav>
      </div>
    </div>

    <section id="blog-posts-2" class="blog-posts-2 section">
      <div class="container">
        <div class="row gy-5">

          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/1"><img src="{{asset('img/education/education-1.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/R6-sTn70MXk?si=NQRvyVyXVgzIEB2m" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Aug 19, 2020</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/1">Sand and Soil Pollution Experiment</a>
              </h2>
            </article>
          </div>

          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/2"><img src="{{asset('img/education/education-2.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/7qkaz8ChelI?si=ehyWmIIWARU_uZzA" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Mar 24, 2020</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/2">What is POLLUTION?</a>
              </h2>
            </article>
          </div>

          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/3"><img src="{{asset('img/education/education-3.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/HQTUWK7CM-Y?si=VsrMXBsIFapMP2S7" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Sep 17, 2016</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/3">How We Can Keep Plastics Out of Our Ocean</a>
              </h2>
            </article>
          </div>

        </div>
      </div>
    </section>

    <section id="blog-pagination" class="blog-pagination section">
      <div class="container">
        <div class="d-flex justify-content-center">
          <ul>
            <li><a href="#"><i class="bi bi-chevron-left"></i></a></li>
            <li><a href="#" class="active">1</a></li>
            <li><a href="#"><i class="bi bi-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </section>

  </main>

@endsection
