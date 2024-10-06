@extends('layout/layout')

@section('content')

@php
    if($education == 1){
        $title = "Sand and Soil Pollution Experiment";
        $image = "education-1.jpg";
        $imageAuthor = "author-1.jpg";
        $description = 'The video titled "Sand and Soil Pollution Experiment", by the Coastal Watershed Council, funded by organizations like National Geographic and NOAA, likely explores how soil and sand are affected by pollution. Through an experiment, the video may demonstrate the impact of pollutants on the environment, especially how they infiltrate and alter soil and sand, with a focus on watershed health. The experiment is aimed at raising awareness of environmental issues like pollution and its harmful effects on water and soil systems.';
        $date = "Aug 19, 2020";
        $author = "Coastal Watershed Council";
        $authorDescription = "Coastal Watershed Council (coastal-watershed.org) is an environmental nonprofit organizations based in Santa Cruz, CA. Our mission is to preserve and protect coastal watersheds through community stewardship, education and monitoring.";
        $tag = ["Video", "Education", "Experiment", "Sand", "Soil", "Polution"];
        $videoLink = "https://youtu.be/R6-sTn70MXk?si=NQRvyVyXVgzIEB2m";
    }
    elseif($education == 2){
        $title = "What is POLLUTION?";
        $image = "education-2.jpg";
        $imageAuthor = "author-2.jpg";
        $description = 'In the Dr. Binocs Show video titled "What is POLLUTION? | Types of POLLUTION", Dr. Binocs explains different types of pollution—air, water, soil, and noise. The video covers the causes and harmful effects of each type, such as how air pollution contributes to global warming and how water pollution affects marine life. It also provides simple ways kids can help prevent pollution, like reducing plastic use and conserving water. The video aims to raise environmental awareness and encourage children to take action to protect the Earth.';
        $date = "Mar 24, 2020";
        $author = "Dr Bincos (Peekaboo Kidz)";
        $authorDescription = "Peekaboo is a cheerful destination with colourful animation for all the Happy Children of the world! Specially designed for kids as they explore the World of Kids Educational Videos, Classic English songs, Phonics Songs, Lullabies and more! Come join us and meet Dr. Binocs only on Peekaboo Kidz.";
        $tag = ["Video", "Education", "Sand", "Soil", "Polution", "Earth"];
        $videoLink = "https://youtu.be/7qkaz8ChelI?si=ehyWmIIWARU_uZzA";
    }
    elseif($education == 3){
        $title = "How We Can Keep Plastics Out of Our Ocean";
        $image = "education-3.jpg";
        $imageAuthor = "author-3.jpg";
        $description = 'The National Geographic video "How We Can Keep Plastics Out of Our Ocean" discusses the severe impact of plastic pollution on ocean ecosystems, including coral reefs and deep-sea environments. It highlights the need to shift from a "produce-use-discard" system to one that encourages reusing and repurposing plastics. The video emphasizes actions individuals and industries can take to reduce plastic waste, protect marine life, and prevent plastics from entering the food chain, ultimately promoting a healthier ocean and planet.';
        $date = "Sep 17, 2016";
        $author = "National Geographic";
        $authorDescription = "National Geographic is the world's premium destination for science, exploration, and adventure. Through their world-class scientists, photographers, journalists, and filmmakers, Nat Geo gets you closer to the stories that matter and past the edge of what's possible.";
        $tag = ["Video", "Education", "Plastic", "Water", "Polution", "Ocean"];
        $videoLink = "https://youtu.be/HQTUWK7CM-Y?si=VsrMXBsIFapMP2S7";
    }
@endphp

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
        <h1>Education Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Education Details</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-lg-8">
          <section id="blog-details" class="blog-details section">
            <div class="container">

              <article class="article">
                <div class="post-img" style="position: relative">
                  <a href="{{$videoLink}}" target="_blank">
                    <img src="{{asset('img/education/'.$image)}}" alt="" class="img-fluid w-100">
                  </a>
                </div>
                <h2 class="title">{{$title}}</h2>
                <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$author}}</li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01">{{$date}}</time></li>
                  </ul>
                </div>
                <div class="content">
                  <p>
                    {{$description}}
                  </p>
                </div>

                <div class="meta-bottom">
                  <a href="{{$videoLink}}" target="_blank"><i class="bi bi-youtube"></i> Video Link</a>
                </div>
              </article>

            </div>
          </section>
        </div>

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">
            <div class="blog-author-widget widget-item">

              <div class="d-flex flex-column align-items-center">
                <img src="{{asset('img/education/'.$imageAuthor)}}" class="rounded-circle flex-shrink-0" alt="">
                <h4>{{$author}}</h4>
                <div class="social-links">
                  <a href="https://www.instagram.com/binusuniversityofficial/" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="https://www.facebook.com/universitasbinanusantara" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="https://www.linkedin.com/school/universitas-bina-nusantara/posts/?feedView=all" target="_blank"><i class="biu bi-linkedin"></i></a>
                  <a href="https://wa.me/6282115525343?text=Hi%20Lets%20connect" target="_blank"><i class="biu bi-whatsapp"></i></a>
                </div>
                <p style="text-align: justify">
                  {{$authorDescription}}
                </p>
              </div>

            </div>

            <div class="tags-widget widget-item">

              <h3 class="widget-title">Tags</h3>
              <ul>
                @foreach ($tag as $t)
                    <li><a>{{$t}}</a></li>
                @endforeach
              </ul>

            </div>

          </div>

        </div>

      </div>
    </div>

  </main>

@endsection
