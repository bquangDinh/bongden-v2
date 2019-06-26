@extends('userpage.userpage_layout')

@section('title')
{{ Auth::user()->name }}
@endsection

@section('css')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{ URL::asset('css/userpage/profile.css') }}">
@endsection

@section('main-content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
    <li class="breadcrumb-item active" aria-current="page">Hồ sơ</li>
  </ol>
</nav>

<div class="row">
  <div class="col-3" style="border-right: 1px solid lightgray">
    <div class="avatar">
      <img src="{{ Auth::user()->avatar_path }}">
    </div>
    <button type="button" id="update-avatar-btn" class="mt-2 w-100">Đổi ảnh đại diện</button>
  </div>
  <div class="col-9">
    <div class="profile-component">
      <div class="row">
        <div class="col-2">
          <div class="cp-name">
            <div>
              Họ Tên
            </div>
          </div>
        </div>
        <div class="col-8">
          <input type="text" id="name-ip" value="{{ Auth::user()->name }}">
        </div>
        <div class="col-2">
          <button type="button" id="update-name-btn" class="btn btn-success">
            <span class="text">Cập nhật</span>
          </button>
        </div>
      </div>
    </div>

    <div class="profile-component mt-2">
      <div class="row">
        <div class="col-2">
          <div class="cp-name">
            <div>
              Năm sinh
            </div>
          </div>
        </div>
        <div class="col-8">
          <select id="year-select" data-year="{{ Auth::user()->yearOfbirth }}">
            <option value="{{ Auth::user()->yearOfbirth }}" checked>{{ Auth::user()->yearOfbirth }}</option>
          </select>
        </div>
        <div class="col-2">
          <button type="button" id="update-name-btn" class="btn btn-success">
            <span class="text">Cập nhật</span>
          </button>
        </div>
      </div>
    </div>

    <div class="profile-component mt-2">
      <div class="row">
        <div class="col-2">
          <div class="cp-name">
            <div>
              Năm sinh
            </div>
          </div>
        </div>
        <div class="col-8">
        </div>
        <div class="col-2">
          <button type="button" id="update-name-btn" class="btn btn-success">
            <span class="text">Cập nhật</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/userpage/profile.js') }}"></script>
@endsection
