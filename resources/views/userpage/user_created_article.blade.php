@extends('userpage.userpage_layout')

@section('title')
{{ Auth::user()->name }}
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/userpage/created_article.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/sweetalert2.min.css') }}">
@endsection

@section('main-content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
    <li class="breadcrumb-item active" aria-current="page">Bài viết của tôi</li>
  </ol>
</nav>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tên bài viết</th>
      <th scope="col"></th>
      <th scope="col">Thể loại</th>
      <th scope="col">Trạng thái</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $key=>$article)
    <tr>
      <th scope="row">{{ $key }}</th>
      <th>{{ $article->title }}</th>
      <th>
        <img src="{{ $article->cover_url }}" class="article-preview-cover">
      </th>
      <th>{{ $article->subject->name }}</th>
      @if($article->getState->state == "upload")
      <th style="color: #fdcb6e">Đợi phê duyệt</th>
      @elseif($article->getState->state == "save")
      <th>Bản nháp</th>
      @elseif($article->getState->state == "deleted")
      <th style="color: #e74c3c">
        <button type="button" class="btn btn-danger admin-deleted-btn" data-article-id="{{ $article->id }}">Đã xóa (Admin)</button>
      </th>
      @else
      <th style="color: #2ecc71">Đã đăng</th>
      @endif
      <th>
        <button type="button" class="btn btn-outline-danger delete-article-btn" data-article-id="{{ $article->id }}">Xóa</button>
      </th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/userpage/created_article.js') }}"></script>
@endsection
