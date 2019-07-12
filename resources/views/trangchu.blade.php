@extends('layouts.main')

@section('title')
Bóng Đèn
@endsection

@section('css')
<meta property="og:description" content="Mang khoa học thú vị tới với mọi người" />
<meta property="og:url" content="http://bongden.org" />
<meta property="og:image:url" content="{{ URL::asset('sources/images/frame_008_delay-0.03s.jpg') }}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="fb:app_id" content="681364862313844" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/slick.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/slick-theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/trangchu.css') }}">
@endsection

@section('main-content')

<div class="triangle-layer d-lg-block d-none" id="particles-js">
  <div class="lowerside">

  </div>
</div>
<div class="main">
  <div class="main__section">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-11 col-sm-11">
          <div class="row">
            <div class="col-12">
              <!--
              <div class="lastest-article">
                <div class="row no-gutters">
                  <div class="col-lg-7 col-md-12">
                    <div class="cover">
                      <img src="{{ $lastest_article->cover_url }}">
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12">
                    <div class="article-info">
                      <a class="subject text-center">
                        {{ $lastest_article->subject->name }}
                      </a>
                      <div class="info">
                        <div class="title">
                          <p>{{ $lastest_article->title }}</p>
                        </div>
                        <div class="author">
                          <img class="avatar" src="{{ $lastest_article->user->avatar_path }}">
                          <div class="name">
                            {{ $lastest_article->user->name }}
                          </div>
                        </div>
                        <div class="description">
                          @php
                          $html = new \Html2Text\Html2Text($lastest_article->content);
                          @endphp
                          {{ substr($html->getText(),0,150).'...' }}
                        </div>
                      </div>
                      <div class="read-more-section">
                        <button type="button" onclick="window.location.href = '/reading/{{ $lastest_article->id }}'">Đọc</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            -->
            <div class="lastest-article">
              <div class="row no-gutters">
                <div class="col-lg-7 col-md-12">
                  <div class="cover">
                    <img src="https://cdn.dribbble.com/users/1855626/screenshots/4657120/attachments/1051936/forest_hi.jpg">
                  </div>
                </div>
                <div class="col-lg-5 col-md-12">
                  <div class="article-info">
                    <a class="subject text-center" style="background: #e74c3c">
                      Đặc biệt
                    </a>
                    <div class="info">
                      <div class="title">
                        <p>Trại hè Khoa Học Bóng Đèn 2019</p>
                      </div>
                      <div class="author">
                        <img class="avatar" src="{{ $lastest_article->user->avatar_path }}">
                        <div class="name">
                          Bóng Đèn Team
                        </div>
                      </div>
                      <div class="description">
                        <div>
                          Những bài học mới lạ về thế giới khoa học sẽ được Bóng Đèn truyền tải qua những hoạt động, trò chơi hết sức sinh động qua 3 ngày trại hè. Còn chờ gì nữa, hãy nhanh tay đăng ký để trở thành trại sinh của Bóng Đèn 2019.
                        </div>
                      </div>
                    </div>
                    <div class="read-more-section">
                      <button type="button" onclick="window.location.href = '/bongden-camp'">Tìm hiểu thêm</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
          <br />
          <div class="row">
            @foreach($articles as $article)
            <div class="col-md-4 col-sm-12">
              <div class="article">
                <img class="cover" src="{{ $article->cover_url }}">
                <div class="article-info">
                  <a class="subject text-center">
                    {{ $article->subject->name }}
                  </a>
                  <div class="info">
                    <div class="title">
                      <p>{{ $article->title }}</p>
                    </div>
                    <div class="author">
                      <img class="avatar" src="{{ $article->user->avatar_path }}">
                      <div class="name">
                        {{ $article->user->name }}
                      </div>
                    </div>
                    <div class="description">
                      @php
                      $html = new \Html2Text\Html2Text($article->content);
                      @endphp
                      {{ substr($html->getText(),0,70).'...' }}
                    </div>
                  </div>
                  <div class="read-more-section">
                    <button type="button" onclick="window.location.href = '/reading/{{ $article->id }}'">Đọc</button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<button type="button" id="see-more-btn" onclick="window.location.href = '/article'">Xem thêm</button>
@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/particles.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trangchu.js') }}"></script>
@endsection
