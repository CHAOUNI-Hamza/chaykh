@extends('welcome')
@section('content')
 

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://facebooktimelinephotos.files.wordpress.com/2012/01/love.png)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(https://reneturrek.com/wp-content/uploads/2021/03/Love-Quotes-for-Her.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(https://modo3.com/thumbs/fit630x300/50513/1439208844/%D8%B9%D8%A8%D8%A7%D8%B1%D8%A7%D8%AA_%D8%AC%D9%85%D9%8A%D9%84%D8%A9_%D8%B9%D9%86_%D8%A7%D9%84%D8%B3%D8%B9%D8%A7%D8%AF%D8%A9.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= My & Family Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>لمعرفة المزيد</h2>
          <p style="font-size: 33px;
          font-weight: 800;">{{ $information->title_generale }}<br>
          رقم الهاتف : <span style="color: red;
          font-size: 47px;">{{ $information->telephone }}</span>  
        </p>
        </div>

        <div class="row content">
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p dir="rtl" style="letter-spacing: 5px;font-size: 33px;
    font-weight: 800;">{{ $information->description }}</p>
            <!--<a href="our-story.html" class="btn-learn-more">Learn More</a>-->
          </div>
          <div class="col-lg-6">
            <img src="{{ Voyager::image( $information->description_image ) }}" class="img-fluid" alt="">
          </div>
        </div>

      </div>
    </section><!-- End My & Family Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="row">
        @foreach ($services as $service)
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">{{ $service->name }}</a></h4>
            <!--<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>-->
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Recent Photos Section ======= -->
    <section id="recent-photos" class="recent-photos">
      <div class="container">

        <div class="section-title">
          <h2>الصور</h2>
          <!--<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <div class="recent-photos-slider swiper">
          <div class="swiper-wrapper align-items-center">
          @foreach ($images as $image)
            <div class="swiper-slide"><a href="assets/img/recent-photos/recent-photos-1.jpg" class="glightbox"><img src="{{ Voyager::image( $image->photo ) }}" class="img-fluid" alt=""></a></div>
            @endforeach
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Recent Photos Section -->

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection