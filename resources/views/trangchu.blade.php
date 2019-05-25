@extends('layouts.main')

@section('title')
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/slick.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/slick-theme.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/trangchu.css') }}">
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col-10">
      <div class="newest-article-container shadow-hover">
        <div class="row">
          <div class="col-md-7 col-sm-12">
            <div style="height: 350px;width:100%;" class="d-flex justify-content-center align-items-center">
              <div class="article-cover">
                <img src="https://wallpapershome.com/images/pages/ico_h/20035.jpg">
              </div>
            </div>
          </div>
          <div class="col-md-5 col-sm-12">
            <div class="article-info">
              <div class="article-title">
                Black Hole
              </div>
              <div class="article-description">
                Google is helping U.S.bussiness reach their customers. Learn more in our 2018 Economic Impact Report
              </div>
              <div class="article-author">
                Bui Quang Dinh
              </div>
              <div class="article-uploading-time">
                1 hour ago
              </div>
            </div>
          </div>
        </div>
      </div>

      <br />

      <div class="top-articles-container">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="top-article">
              <div class="article-cover">
                <img class="shadow-hover" src="http://batterupbeauty.com/wp-content/uploads/art-wallpaper-illustration-wallpaper-hd-art-4k-wallpapers-for-desktop-and-mobile.jpg">
              </div>
              <div class="article-title">
                Senja: Premium Icon for Every Needs
              </div>
              <div class="article-reaction">
                <div class="row">
                  <div class="col-4">
                    <div class="reaction">
                      <div>
                        10k <i class="fas fa-comment-alt"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="reaction">
                      <div>
                        10k <i class="fas fa-heart"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <button type="button" class="read-more-btn shadow-hover">Read</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="top-article">
              <div class="article-cover">
                <img class="shadow-hover" src="http://batterupbeauty.com/wp-content/uploads/art-wallpaper-illustration-wallpaper-hd-art-4k-wallpapers-for-desktop-and-mobile.jpg">
              </div>
              <div class="article-title">
                Senja: Premium Icon for Every Needs
              </div>
              <div class="article-reaction">
                <div class="row">
                  <div class="col-4">
                    <div class="reaction">
                      <div>
                        10k <i class="fas fa-comment-alt"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="reaction">
                      <div>
                        10k <i class="fas fa-heart"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <button type="button" class="read-more-btn shadow-hover">Read</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="top-article">
              <div class="article-cover">
                <img class="shadow-hover" src="http://batterupbeauty.com/wp-content/uploads/art-wallpaper-illustration-wallpaper-hd-art-4k-wallpapers-for-desktop-and-mobile.jpg">
              </div>
              <div class="article-title">
                Senja: Premium Icon for Every Needs
              </div>
              <div class="article-reaction">
                <div class="row">
                  <div class="col-4">
                    <div class="reaction">
                      <div>
                        10k <i class="fas fa-comment-alt"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="reaction">
                      <div>
                        10k <i class="fas fa-heart"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <button type="button" class="read-more-btn shadow-hover">Read</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <hr />

      <div class="article-list-container">
        <div class="search-field">
          <div class="row">
            <div class="col-md-12">
              <input placeholder="Tim kiem bai viet" id="search-field-input" type="text" class="shadow-hover">
            </div>
          </div>
        </div>

        <div class="article-list">
          <div class="article shadow-hover">
            <div class="row">
              <div class="col-md-9 col-sm-8">
                <div style="height: 100px; width: 100%;position: relative">
                  <div class="article-title">
                    Larissa: Awesome Work Illustrations
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="article-cover">
                  <img src="https://wallpaperplay.com/walls/full/a/c/a/53281.jpg">
                </div>
              </div>
            </div>
          </div>

          <hr />

          <div class="article shadow-hover">
            <div class="row">
              <div class="col-md-9 col-sm-8">
                <div style="height: 100px; width: 100%;position: relative">
                  <div class="article-title">
                    Larissa: Awesome Work Illustrations
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="article-cover">
                  <img src="https://wallpaperplay.com/walls/full/a/c/a/53281.jpg">
                </div>
              </div>
            </div>
          </div>

          <hr />

          <div class="article shadow-hover">
            <div class="row">
              <div class="col-md-9 col-sm-8">
                <div style="height: 100px; width: 100%;position: relative">
                  <div class="article-title">
                    Larissa: Awesome Work Illustrations
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-4">
                <div class="article-cover">
                  <img src="https://wallpaperplay.com/walls/full/a/c/a/53281.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-1">

    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trangchu.js') }}"></script>
@endsection
