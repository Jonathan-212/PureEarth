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

          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/4"><img src="{{asset('img/education/education-4.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/4n3T7KyMV_0?si=G6yd6_LJpTCJJPjH" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Nov 14, 2017</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/4">The importance of saving marine life from ocean plastics</a>
              </h2>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/5"><img src="{{asset('img/education/education-5.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/ViJMdb8wVpE?si=8BZYgf9C-RqabV9E" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Aug 31, 2016</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/5">The Clear Solution to Urban Waste</a>
              </h2>
            </article>
          </div>
          
	        <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/6"><img src="{{asset('img/education/education-6.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/5jfmzufa8qo?si=9m0xDgHu8CIVrbv2" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Jan 26, 2018</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/6">Noise Pollution Is Much Worse For You Than You Think</a>
              </h2>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/7"><img src="{{asset('img/education/education-7.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/jGVw_SfRlqo?si=Uq2tORPl4kncGQAP" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Aug 12, 2023</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/7">Renewable Energy vs. Fossil Fuels</a>
              </h2>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/8"><img src="{{asset('img/education/education-8.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/jozRMKNCejE?si=DDZX0_Mgs0gjaxWo" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Nov 8, 2023</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/8">Recovery of compacted soils</a>
              </h2>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/9"><img src="{{asset('img/education/education-9.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/G9t__9Tmwv4?si=95d6NPV1Rizf8uNP" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Jan 16, 2023</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/9">Climate Change and Global Warming: Explained in Simple Words for Beginners</a>
              </h2>
            </article>
          </div>
          <div class="col-lg-4 col-md-6">
            <article>
              <div class="post-img">
                <a href="/education/10"><img src="{{asset('img/education/education-10.jpg')}}" alt="" class="img-fluid"></a>
              </div>
              <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><a href="https://youtu.be/l4P16HvJoeA?si=tt8ojXeHJGCI0Kg1" target="_blank">Video</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-dot"></i><time datetime="2022-01-01">Aug 20, 2022</time></li>
                </ul>
              </div>
              <h2 class="title">
                <a href="/education/10">Deforestation: Causes and Solutions</a>
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
