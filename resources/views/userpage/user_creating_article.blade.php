@extends('userpage.userpage_layout')

@section('title')
{{ Auth::user()->name }}
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/userpage/creating_article.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/select2.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/sweetalert2.min.css') }}">
<!-- FroalaEditor -->
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/froala_editor.pkgd.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/char_counter.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/code_view.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/colors.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/draggable.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/emoticons.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/file.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/vendor/froala_editor/table.min.css') }}">
@endsection

@section('main-content')
<!-- Page Heading -->
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Bài viết</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tạo bài viết</li>
  </ol>
</nav>

<div class="article-header">
  <div class="article-cover-container">
    <div class="article-cover">
      <img id="article-cover-img" src="">
    </div>
    <button type="button" id="add-btn" href="#upload-cover-modal" rel="modal:open">
      <i class="fas fa-plus"></i>
    </button>
  </div>
</div>

@if($errors->has('cover'))
<div class="text-center mt-2">
  <p class="error-form-control-message">
    {{ $errors->first('cover') }}
  </p>
</div>
@endif

<form action="{{ route('create_article') }}" method="post">
  @csrf
  <input type="text" name="cover" id="cover-input" style="display: none">
  <div class="form-group">
    <div class="row">
      <div class="col-12 d-flex justify-content-center align-items-center flex-column">
        <div class="article-title mt-5">
          <textarea type="text" name="title" placeholder="New Document Name" class="form-text" required></textarea>
        </div>
        @if($errors->has('title'))
        <p class="error-form-control-message">
          {{ $errors->first('title') }}
        </p>
        @endif
      </div>
    </div>
  </div>

  <!-- Page Heading -->
  <h1 class="h5 mb-4 text-gray-800">Thể loại</h1>

  <div class="form-group">
    <select id="subject_select" name="subject">
    </select>
  </div>

  <hr />

  <!-- Page Heading -->
  <h1 class="h5 mb-4 text-gray-800">Nội dung</h1>

  <div class="form-group">
    <textarea name="content" id="textarea-content" required></textarea>
  </div>

  <!-- Page Heading -->
  <h1 class="h5 mb-4 text-gray-800">Thêm thẻ tag</h1>

  <div class="form-group">
    <select id="tag_select" name="tag[]" multiple="multiple">
    </select>
  </div>

  <div class="row d-flex justify-content-center">
    <div class="col-4 d-flex justify-content-around">
      <button type="submit" name="submit" value="upload" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Đăng</span>
      </button>
      <button type="submit" name="submit" value="save" class="btn btn-secondary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-save"></i>
        </span>
        <span class="text">Lưu bản nháp</span>
      </button>
    </div>
  </div>
</form>

<div class="modal" id="upload-cover-modal">
  <a href="#" rel="modal:close">Close</a>
</div>

@endsection

@section('js')
<!-- FroalaEditor -->
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/froala_editor.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/char_counter.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/code_view.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/colors.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/draggable.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/edit_in_popup.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/emoticons.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/entities.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/file.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/froala_editor/table.min.js') }}"></script>

<script type="text/javascript" src="{{ URL::asset('js/vendor/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/userpage/creating_article.js') }}"></script>
@endsection
