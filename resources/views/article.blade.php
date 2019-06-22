@extends('layouts.main')

@section('title')
Bài viết
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/article.css') }}">
@endsection

@section('main-content')
<div class="d-none d-lg-block" style="height: 100px;width: 100%">

</div>
<div class="main">
  <div class="main__section">
    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-md-11 col-sm-11">
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
                      {{ substr($article->content,0,90)."..." }}
                    </div>
                  </div>
                  <div class="read-more-section">
                    <button type="button">Read More</button>
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

{{ $articles->links('vendor.pagination.simple-default') }}

@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/trangchu.js') }}"></script>
@endsection
