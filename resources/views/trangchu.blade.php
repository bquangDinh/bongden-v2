@extends('layouts.main')

@section('title')
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.5/jquery.pagepiling.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/trangchu.css') }}">
@endsection

@section('main-content')
<div class="first-panel">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-5 col-sm-12">
        <div class="left-side-panel">
          <div class="slider-container ml-4">
            <div>
              <div class="slider-item" data-for-ff="1"></div>
              <div class="slider-item is-active" data-for-ff="2"></div>
              <div class="slider-item" data-for-ff="3"></div>
            </div>
          </div>
          <div class="fun-fact-container animated" id="fun-fact-1">
            <div class="fun-fact-title">
              UNIVERSE
            </div>
            <div class="fun-fact-content">
              "It will be an image of its silhouette sliding against the background glow of radiation of the heart of the Milky Way," he said. "That photograph will reveal the contours of a black hole for the first time."
            </div>
          </div>
          <div class="fun-fact-container animated is-active" id="fun-fact-2">
            <div class="fun-fact-title">
              THE MOON
            </div>
            <div class="fun-fact-content">
              "It will be an image of its silhouette sliding against the background glow of radiation of the heart of the Milky Way," he said. "That photograph will reveal the contours of a black hole for the first time."
            </div>
          </div>
          <div class="fun-fact-container animated" id="fun-fact-3">
            <div class="fun-fact-title">
              THE SUN
            </div>
            <div class="fun-fact-content">
              "It will be an image of its silhouette sliding against the background glow of radiation of the heart of the Milky Way," he said. "That photograph will reveal the contours of a black hole for the first time."
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 d-lg-block d-sm-none">
        <div class="picture-of-month-container">
          <div class="row">
            <div class="col-2">
              <div class="picture-info">
                <span>NO:114</span>
                <span>THE BEST PICTURE OF MONTH</span>
              </div>
            </div>
            <div class="col-10">
              <div class="picture-container">
                <img src="https://i.ytimg.com/vi/GLXM690z9uY/maxresdefault.jpg"/>
                <div class="picture-detail-panel">
                  <span>No. 144</span>
                  <p class="name-picture">BLACK HOLE</p>
                  <div class="picture-description">"It will be an image of its silhouette sliding against the background glow of radiation of the heart of the Milky Way," he said. "That photograph will reveal the contours of a black hole for the first time."</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-1 col-sm-12">
        <div class="sharing-container">
          <button type="button" class="sharing-btn">
            <i class="fab fa-facebook-square"></i>
          </button>
          <button type="button" class="sharing-btn">
            <i class="fas fa-envelope"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.5/jquery.pagepiling.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{ URL::asset('js/trangchu.js') }}"></script>
@endsection
