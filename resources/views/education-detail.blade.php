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
    } elseif($education == 2){
        $title = "What is POLLUTION?";
        $image = "education-2.jpg";
        $imageAuthor = "author-2.jpg";
        $description = 'In the Dr. Binocs Show video titled "What is POLLUTION? | Types of POLLUTION", Dr. Binocs explains different types of pollution—air, water, soil, and noise. The video covers the causes and harmful effects of each type, such as how air pollution contributes to global warming and how water pollution affects marine life. It also provides simple ways kids can help prevent pollution, like reducing plastic use and conserving water. The video aims to raise environmental awareness and encourage children to take action to protect the Earth.';
        $date = "Mar 24, 2020";
        $author = "Dr Bincos (Peekaboo Kidz)";
        $authorDescription = "Peekaboo is a cheerful destination with colourful animation for all the Happy Children of the world! Specially designed for kids as they explore the World of Kids Educational Videos, Classic English songs, Phonics Songs, Lullabies and more! Come join us and meet Dr. Binocs only on Peekaboo Kidz.";
        $tag = ["Video", "Education", "Sand", "Soil", "Polution", "Earth"];
        $videoLink = "https://youtu.be/7qkaz8ChelI?si=ehyWmIIWARU_uZzA";
    } elseif($education == 3){
        $title = "How We Can Keep Plastics Out of Our Ocean";
        $image = "education-3.jpg";
        $imageAuthor = "author-3.jpg";
        $description = 'The National Geographic video "How We Can Keep Plastics Out of Our Ocean" discusses the severe impact of plastic pollution on ocean ecosystems, including coral reefs and deep-sea environments. It highlights the need to shift from a "produce-use-discard" system to one that encourages reusing and repurposing plastics. The video emphasizes actions individuals and industries can take to reduce plastic waste, protect marine life, and prevent plastics from entering the food chain, ultimately promoting a healthier ocean and planet.';
        $date = "Sep 17, 2016";
        $author = "National Geographic";
        $authorDescription = "National Geographic is the world's premium destination for science, exploration, and adventure. Through their world-class scientists, photographers, journalists, and filmmakers, Nat Geo gets you closer to the stories that matter and past the edge of what's possible.";
        $tag = ["Video", "Education", "Plastic", "Water", "Polution", "Ocean"];
        $videoLink = "https://youtu.be/HQTUWK7CM-Y?si=VsrMXBsIFapMP2S7";
    } elseif ($education == 4) {
        $title = "The importance of saving marine life from ocean plastics.";
        $image = "education-4.jpg";
        $imageAuthor = "author-4.jpg";
        $description = 'Focusing on marine conservation, this video explores the devastating effects of overfishing and pollution on marine biodiversity. It promotes sustainable fishing practices and ocean cleanup initiatives.';
        $date = "Nov 14, 2017";
        $author = "Oceanic Preservation Society";
        $authorDescription = "The global authority in superyachting, celebrating the yachts and the life that comes with them.";
        $tag = ["Video", "Education", "Marine", "Conservation", "Pollution"];
        $videoLink = "https://youtu.be/4n3T7KyMV_0?si=G6yd6_LJpTCJJPjH";
    } elseif ($education == 5) {
        $title = "The Clear Solution to Urban Waste";
        $image = "education-5.jpg";
        $imageAuthor = "author-5.jpg";
        $description = 'This video outlines innovative urban waste management strategies, including recycling programs, composting, and waste-to-energy projects. It emphasizes the role of city planning in reducing pollution.';
        $date = "Aug 31, 2016";
        $author = "Shift Energy Holdings Inc";
        $authorDescription = "Promoting sustainable urban development, the Shift Energy Holdings Inc focuses on solutions for environmental and social challenges.";
        $tag = ["Video", "Education", "Urban", "Waste", "Pollution"];
        $videoLink = "https://youtu.be/ViJMdb8wVpE?si=8BZYgf9C-RqabV9E";
    } elseif ($education == 6) {
        $title = "Noise Pollution Is Much Worse For You Than You Think";
        $image = "education-6.jpg";
        $imageAuthor = "author-6.jpg";
        $description = 'Highlighting the often-overlooked issue of noise pollution, this video examines its effects on human health and wildlife. It also suggests measures to mitigate noise in urban environments.';
        $date = "Jan 26, 2018";
        $author = "Insider Tech";
        $authorDescription = "Insider Tech educates communities about environmental issues and promotes sustainable living practices.";
        $tag = ["Video", "Education", "Noise", "Health", "Pollution"];
        $videoLink = "https://youtu.be/5jfmzufa8qo?si=9m0xDgHu8CIVrbv2";
    } elseif ($education == 7) {
        $title = "Renewable Energy vs. Fossil Fuels";
        $image = "education-7.jpg";
        $imageAuthor = "author-7.jpg";
        $description = 'Comparing renewable energy sources to fossil fuels, this video discusses the environmental benefits of transitioning to solar, wind, and hydro energy to combat pollution and climate change.';
        $date = "Aug 12, 2023";
        $author = "Save Earth Now";
        $authorDescription = "Focused on sustainable energy solutions, Save Earth Now provides resources and insights into clean energy transitions.";
        $tag = ["Video", "Education", "Energy", "Renewable", "Pollution"];
        $videoLink = "https://youtu.be/jGVw_SfRlqo?si=Uq2tORPl4kncGQAP";
    } elseif ($education == 8) {
        $title = "Recovery of compacted soils";
        $image = "education-8.jpg";
        $imageAuthor = "author-8.jpg";
        $description = 'Soil compaction due to agricultural vehicle traffic is recognized as one of the major threats to soil productivity, and soil ecological and hydrological functioning. In this video  an overview of the different  recovery techniques:  mechanical (tillage), biological (“biosubsoiling”) and natural methods. In the past, the choice was often made to mechanically crack the compacted soil. This resulted in short-term improvement but recompaction occurred several years later. The main disadvantage of mechanical methods is that often the complete soil structure is disturbed, which strongly reduces the mechanical strength and moisture delivery capacity. Most promising for the long-term melioration of compacted arable land is the use of deep-rooting plants: biosubsoilers.';
        $date = "Nov 8, 2023";
        $author = "Wageningen Environmental Research";
        $authorDescription = "Wageningen Environmental Research offers a combination of practical, innovative and interdisciplinary scientific research across many disciplines related to the green world around us and the sustainable use of our living environment. Aspects of our environment that Wageningen Environmental Research focuses on include soil, water, the atmosphere, the landscape and biodiversity ‒ on a global scale as well as regionally, from the Dutch polders to the Himalayas and from Amsterdam to the Arctic.";
        $tag = ["Video", "Education", "Soil", "Conservation", "Pollution"];
        $videoLink = "https://youtu.be/jozRMKNCejE?si=DDZX0_Mgs0gjaxWo";
    } elseif ($education == 9) {
        $title = "Climate Change and Global Warming: Explained in Simple Words for Beginners";
        $image = "education-9.jpg";
        $imageAuthor = "author-9.jpg";
        $description = "The term climate change is used to denote the long-term changes in the weather patterns in a given region. Another term often interchanged with climate change is global warming. Global warming is formally defined as a rise in Earth's temperature that persists for a decade or longer. There could be several causes for climate change, but the biggest one is the rising concentration of greenhouse gases. Simply put, greenhouse gases are those gases in our atmosphere that trap heat. Some examples include carbon dioxide, methane, chlorofluorocarbons, nitrous oxide and ozone. Natural sources and human activities both result in the emission of greenhouse gases. One of the most common ways these gases get released into the atmosphere is through the burning of fossil fuels. Burning coal or oil to run industrial processes or giant factories increases the concentration of atmospheric carbon dioxide. Indeed, fossil fuels' contribution to greenhouse gas emissions is the largest, in the range of 70- 80% of total emissions.";
        $date = "Jan 16, 2023";
        $author = "Science ABC";
        $authorDescription = "Science gets a bad rep for being boring, difficult and for very smart people (see: nerds). But that doesn't have to be the case. At ScienceABC we believe that if science is communicated simply and made relatable and fun, it can be for everyone.";
        $tag = ["Video", "Education", "Climate", "Change", "Pollution"];
        $videoLink = "https://youtu.be/G9t__9Tmwv4?si=95d6NPV1Rizf8uNP";
    } elseif ($education == 10) {
        $title = "Deforestation: Causes and Solutions";
        $image = "education-10.jpg";
        $imageAuthor = "author-10.png";
        $description = 'Examining the impact of deforestation on ecosystems, this video discusses its causes, such as agriculture and logging, and solutions like reforestation and sustainable forestry practices.';
        $date = "Aug 20, 2022";
        $author = "Conservation Chat UK";
        $authorDescription = "Conservation Chat UK is dedicated to preserving forest ecosystems and promoting sustainable forest management.";
        $tag = ["Video", "Education", "Forest", "Deforestation", "Pollution"];
        $videoLink = "https://youtu.be/l4P16HvJoeA?si=tt8ojXeHJGCI0Kg1";
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
