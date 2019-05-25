@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/article.css') }}">
@endsection

@section('main-content')
<div class="lastest-article-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <figure>
          <img src="http://i.imgur.com/fJeUHK0.jpg">
        </figure>
      </div>
      <div class="col-lg-4 col-md-12">
        <div class="lastest-article-info">
          <div class="lastest-article__kind mt-2">
            MATH
          </div>
          <div class="lastest-article__name mt-2">
            Swipe for more: Tiles on Wear OS by Google
          </div>
          <div class="lastest-article__description mt-3">
            Get things done. Be in the know. Stay connected. Do it with Tiles on Wear OS by Google.
          </div>
          <div class="read-more mt-5">
            <button class="read-more-btn">
              <a href="#">ĐỌC BÀI VIẾT</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="top-articles-container mt-3">
  <div class="title ml-3 mb-3">
    Top bài viết
  </div>
  <div class="top-articles-list">
    <div class="article-container">

    </div>
  </div>
</div>
@endsection

@section('js')
@endsection
