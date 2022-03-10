@extends('welcome')
@section('content')

  <main id="main">


    <!-- ======= Contact Us Section ======= -->
    <section id="contact-us" class="contact-us" style="padding: 111px 0;">
      <div class="container">

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="{{ $information->localisation }}" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form method="POST" action="{{ route('contact.created') }}" class="php-email-forme">
                @csrf
                @if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="الاسم">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="البريد الألكتروني">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="sujet" value="{{ old('sujet') }}" placeholder="الموضوع">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" value="{{ old('message') }}" placeholder="الرسالة"></textarea>
               <div class="validate">{{ $errors->first('message') }}</div>
              </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <div class="text-center"><button type="submit">ارسل الرسالة</button></div>
            </form>

          </div>
          <div dir="rtl" class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>العنوان</h4>
                <h5>{{ $information->adresse }}</h5>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>البريد الألكتروني</h4>
                <h5>{{ $information->email }}</h5>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>الهاتف</h4>
                <h5>{{ $information->telephone }}</h5>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
@endsection