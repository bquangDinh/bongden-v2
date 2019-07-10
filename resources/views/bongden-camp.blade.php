@extends('layouts.main')

@section('title')
Trại hè Bóng Đèn 2019
@endsection

@section('css')
<meta property="og:description" content="Trại hè Bóng Đèn đã trở lại !!!" />
<meta property="og:url" content="http://bongden.org/bongden-camp" />
<meta property="og:image:url" content="{{ URL::asset('sources/images/bongden-camp/forest_hi.jpg') }}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="fb:app_id" content="681364862313844" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/bongden-camp.css') }}">
@endsection

@section('main-content')
<div class="cover">
  <div class="cover__image">
    <img src="{{ URL::asset('sources/images/bongden-camp/forest_hi.jpg') }}" class="animated fadeIn">
  </div>
  <div class="cover__mask">
  </div>
  <div class="cover__lowerside d-none d-lg-block animated fadeInUp delay-1s">
  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-md-6 col-12 d-flex justify-content-center align-items-center flex-column" >
      <h1 style="font-family: iCielPanton-Black;color:#FED899 ;font-size: 3em;text-shadow: 3px 3px 0 #333; " class="animated bounceIn wow">
        Trại hè Bóng Đèn
      </h1>
      <div style="font-family: iCielPanton-Black;font-size: 2.5em" class="glitch" data-text="2019">
        2019
      </div>
      <div style="font-family: Comfortaa-Regular;font-size: 14px;text-align:justify;width:280px" class="animated bounceInDown delay-1s wow">
        Chắc các em đang băn khoăn, không biết nên đi đâu, làm gì để những ngày hè ít ỏi còn lại thật sự "có nghĩa" phải không? Rất đơn giản, Trại hè Bóng Đèn 2018 hứa hẹn sẽ là một hoạt động không thể bỏ qua đấy!
      </div>
      <div class="mt-2 mb-2">
        <button type="button" class="btn btn-outline-danger animated swing wow delay-1s" style="border-radius: 20px">Trở thành trại sinh</button>
      </div>

    </div>
    <div class="col-md-6 col-12 d-flex justify-content-center">
      <div class="image-grid mb-5">
        <div>
          <img class="wow animated fadeIn" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/38776659_2222854044409296_7631935848795078656_n.jpg?_nc_cat=111&_nc_oc=AQkWxWMElzDNgQZFPFmusJ4vDmYDoblEx11BLdCaCBmxnuStzrbK_l95k4mYToz9joc&_nc_ht=scontent.fsgn2-4.fna&oh=fa2de1ae43c55aac84fc4e2cc5224afe&oe=5DB91799">
        </div>
        <div>
          <img class="wow animated fadeIn delay-1s" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/38732193_2222860601075307_5857719497728720896_n.jpg?_nc_cat=100&_nc_oc=AQlC8_m2nKLDmulBuo9mCLZ4jdZ-JC4wLHG1Q474fee3i9gohLA1KyMdwaA-4qc-f7M&_nc_ht=scontent.fsgn2-2.fna&oh=8bdee3f2cf14c2770ec95c47a35b1a52&oe=5DBE39CD">
        </div>
        <div>
          <img class="wow animated fadeIn" src="https://scontent.fsgn2-4.fna.fbcdn.net/v/t1.0-9/38743198_2222858541075513_3958877944650137600_n.jpg?_nc_cat=111&_nc_oc=AQk0ksQC0j8Iye0pPin7uNI6EFX2IkPditR_kf3o33UpqbYjE_2rRtrWAK-_xa3B1bM&_nc_ht=scontent.fsgn2-4.fna&oh=b400ce960807581fff770a25073d01f1&oe=5DBCB23D">
        </div>
        <div>
          <img class="wow animated fadeIn" src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/38740206_2222860354408665_406266209273643008_n.jpg?_nc_cat=106&_nc_oc=AQkrhw26lFVnQoJrUALVjVBITgrwOJs-X5lBkEM3F15Bae0TrhK_PSFWwrtGSSCV-t4&_nc_ht=scontent.fsgn2-3.fna&oh=9094db3c0d152f58b96286ca033b73e8&oe=5DB29F26">
        </div>
        <div>
          <img class="wow animated fadeIn delay-1s" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/38804435_2222862611075106_3916588382393729024_n.jpg?_nc_cat=102&_nc_oc=AQnOFp5LgeeEb0pNT1RrkTsMuJsddtkzheEcIFD_Fo7vYflWcnp0qCiQn8E5NXJMK0Q&_nc_ht=scontent.fsgn2-2.fna&oh=126b9d786c3d3444d6465e1cc5d51ae4&oe=5D7B4C19">
        </div>
        <div>
          <img class="wow animated fadeIn" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/38829124_2222854804409220_2724522189368852480_n.jpg?_nc_cat=103&_nc_oc=AQlN5T4nCOMhxz31ZaLE36RTnZ0XPH7BzzXPL5IQMw3FQmnmDTjgqibheo79oO54p5U&_nc_ht=scontent.fsgn2-2.fna&oh=1fc4cc3d426e887f7d46a4d1c9063268&oe=5DC66AEB">
        </div>
        <div>
          <img class="wow animated fadeIn delay-1s" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/38725308_2222854417742592_8924034553153060864_n.jpg?_nc_cat=102&_nc_oc=AQkPA1WEbNKbE8LYMNEOuZJ3LlXV748VakIAQJB54cOsM0k4_MRqUr5O4nMOV7Yh0tc&_nc_ht=scontent.fsgn2-2.fna&oh=74996c383c3f4b9bb8edde8a4677bf5b&oe=5DA9E993">
        </div>
        <div>
          <img class="wow animated fadeIn delay-2s" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/38781043_2222856851075682_6286277089779777536_n.jpg?_nc_cat=103&_nc_oc=AQnSXuwkIpb2-Zi-Oc2Y3RnY2eNaDbSmbHvItK3b5FLe7ytUCaxUfcKuqAg3wp9hNf0&_nc_ht=scontent.fsgn2-2.fna&oh=14a9c9997d5cd6a8b55e46ff2e4099be&oe=5DA7D1B6">
        </div>
        <div>
          <img class="wow animated fadeIn delay-1s" src="https://scontent.fsgn2-2.fna.fbcdn.net/v/t1.0-9/38757635_2222857831075584_4936988172866289664_n.jpg?_nc_cat=102&_nc_oc=AQlPkSnZIbRs64z3FfB-9YrbR0aRaZVlYQRseXvO66Ft0vOw5x1GQaps7vgK9OmT6GE&_nc_ht=scontent.fsgn2-2.fna&oh=1ba3841a1de0ea6da57ce7553b8a7f3c&oe=5DB35E3F">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="triangle d-none d-lg-block">
</div>
<div class="w-100 d-flex justify-content-center mb-xs-5" style="background: #ecf0f1">
  <div class="mt-5 mi-t animated wow lightSpeedIn">
    Trại hè Bóng Đèn có gì?
  </div>
</div>
<div class="container-fluid" style="background: #ecf0f1">
  <div class="row">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div class="st animated wow lightSpeedIn">
        <i class="fas fa-dot-circle animated heartBeat infinite"></i> Kiến thức bổ ích, thú vị
      </div>
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center">
      <img class="animted wow zoomIn" src="{{ URL::asset('sources/images/bongden-camp/artboard-removebg-preview.png') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div class="st animated wow lightSpeedIn">
        <i class="fas fa-dot-circle animated heartBeat infinite"></i> Gặp gỡ, làm quen bạn mới
      </div>
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center">
      <img class="animted wow zoomIn" src="{{ URL::asset('sources/images/bongden-camp/resource_illustrations_affinity_designer-removebg-preview.png') }}">
    </div>
  </div>
  <div class="row">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div class="st animated wow lightSpeedIn">
        <i class="fas fa-dot-circle animated heartBeat infinite"></i> 3 ngày trại hè
      </div>
    </div>
    <div class="col-6 d-flex justify-content-center align-items-center">
      <img class="animted wow zoomIn" src="{{ URL::asset('sources/images/bongden-camp/140929_3rd_anniversary-removebg-preview(1).png') }}">
    </div>
  </div>
</div>
<div class="w-100 d-flex justify-content-center mt-5 mb-3" style="background: white">
  <div class="mi-t wow animated jackInTheBox">
    Trở thành trại sinh như thế nào?
  </div>
</div>
<div class="p-container w-100">
  <div class="w-100 d-flex justify-content-center">
    <ul class="progressbar">
      <li class="active wow animated fadeIn">Đăng ký</li>
      <li class="wow animated fadeIn delay-1s">Phỏng vấn và làm quen</li>
      <li class="wow animated fadeIn delay-2s">Đợi email chấp nhận của Bóng Đèn</li>
      <li class="wow animated fadeIn delay-3s">Tận hưởng 3 ngày trại hè</li>
    </ul>
    <div style="clear: both">
    </div>
  </div>
  <div class="w-100 d-flex justify-content-center mt-5 mb-5">
    <button type="button" class="btn btn-outline-danger animated wow rollIn" style="border-radius: 20px">Đăng ký ngay</button>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js') }}"></script>
<script type="text/javascript">
  new WOW().init();
</script>
@endsection
