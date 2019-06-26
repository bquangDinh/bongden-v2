@extends('layouts.main')

@section('title')
Hello
@endsection

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/reading.css') }}">
@endsection

@section('main-content')
<input type="text" value="{{ $article->id }}" style="display: none" id="article_id">
<div class="article-cover">
  <div class="article-cover__image">
    <img src="{{ $article->cover_url }}">
  </div>
  <div class="article-cover__mask">
  </div>
  <div class="article-cover__lowerside d-none d-lg-block">

  </div>
</div>
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-2">

    </div>
    <div class="col-8">
      <div class="article-title">
        {{ $article->title }}
      </div>

      <div class="article-type d-flex justify-content-center mt-4">
        <a href="#">
          {{ $article->subject->name }}
        </a>
      </div>

      <div class="article-content mt-5">
        {{ $article->content }}
      </div>
    </div>
    <div class="col-2">

    </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="row d-flex justify-content-center">
    <div class="col-md-9">
      <div class="comment-container">
        <div class="row d-flex justify-content-center">
          <div class="col-11">
            <div class="comment-count mt-5">
              {{ count($article->comments) }} comments
            </div>
            <div class="comments" id="comments">
              @foreach($article->comments as $comment)
              @if(!$comment->parent_id)
              <div class="comment mt-2 mb-2" id="cm-{{ $comment->id }}">
                <div class="comment-inner">
                  <div class="row">
                    <div class="col-md-4 col-8">
                      <div class="writer">
                        <img class="avatar" src="{{ $comment->user->avatar_path }}">
                        <span class="name ml-2">{{ $comment->user->name }}
                          @if($comment->article->user->id == $comment->user_id)
                           <i class="fas fa-star" style="color: #FFB936"></i>
                          @endif
                        </span>
                      </div>
                    </div>
                    <div class="col-md-8 col-4">
                      <div class="date w-100">
                        <span class="float-right">
                          @php
                          $now = new DateTime("now");
                          $created_at = new DateTime($comment->created_at);
                          $diff = $created_at->diff($now);
                          $timeleft = "";

                          $h = $diff->format('%h');
                          $m = $diff->format('%i');

                          if($h){
                            $timeleft = $timeleft.sprintf(ngettext('%d hour', '%d hours', $h), $h) . ' ';
                          }else{
                            if($m){
                              $timeleft = $timeleft.sprintf(ngettext('%d minute', '%d minutes', $m), $m) . ' ';
                            }
                          }

                          if($timeleft == ""){
                            $timeleft = "1 minute";
                          }

                          $timeleft = $timeleft." ago";
                          @endphp
                          {{ $timeleft }}
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="content mt-2 mb-2 ml-5">
                    {{ $comment->content }}
                  </div>
                  <div class="action mt-2 mb-2 ml-5 w-100">
                    <div class="row">
                      <div class="col-lg-10">
                        <button type="button" class="reply-btn" data-cm-id="{{ $comment->id }}">Reply</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="replies w-100" id="cm-rl-{{ $comment->id }}">
                <div class="list">
                  @foreach($article->comments as $reply)
                  @if($reply->parent_id)
                  @if($reply->parent_id == $comment->id)
                  <div class="reply">
                    <div class="row">
                      <div class="col-1 d-flex justify-content-center align-items-center">
                        <i class="fas fa-reply"></i>
                      </div>
                      <div class="col-11">
                        <div class="comment mt-2 mb-2">
                          <div class="comment-inner">
                            <div class="row">
                              <div class="col-md-4 col-8">
                                <div class="writer">
                                  <img class="avatar" src="{{ $reply->user->avatar_path }}">
                                  <span class="name ml-2">{{ $reply->user->name }}
                                    @if($reply->article->user->id == $reply->user_id)
                                    <i class="fas fa-star" style="color: #FFB936"></i>
                                    @endif
                                  </span>
                                </div>
                              </div>
                              <div class="col-md-8 col-4">
                                <div class="date w-100">
                                  <span class="float-right">
                                    @php
                                    $now = new DateTime("now");
                                    $created_at = new DateTime($reply->created_at);
                                    $diff = $created_at->diff($now);
                                    $timeleft = "";

                                    $h = $diff->format('%h');
                                    $m = $diff->format('%i');

                                    if($h){
                                      $timeleft = $timeleft.sprintf(ngettext('%d hour', '%d hours', $h), $h) . ' ';
                                    }else{
                                      if($m){
                                        $timeleft = $timeleft.sprintf(ngettext('%d minute', '%d minutes', $m), $m) . ' ';
                                      }
                                    }

                                    if($timeleft == ""){
                                      $timeleft = "1 minute";
                                    }

                                    $timeleft = $timeleft." ago";
                                    @endphp
                                    {{ $timeleft }}
                                  </span>
                                </div>
                              </div>
                            </div>
                            <div class="content mt-2 mb-2 ml-5">
                              {{ $reply->content }}
                            </div>
                            <div class="action mt-2 mb-2 ml-5 w-100">
                              <div class="row">
                                <div class="col-lg-10">
                                  <button type="button" class="reply-btn" data-cm-id='{{ $reply->parent->id }}'>Reply</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endif
                  @endif
                  @endforeach
                </div>
              </div>
              @endif
              @endforeach
            </div>

            @if(Auth::check())
            <div class="user-reply" id="user_comment">
              <div class="reply-block mt-2 mb-2">
                <div class="comment-inner">
                  <div class="row">
                    <div class="col-md-4 col-8">
                      <div class="writer">
                        <img class="avatar" src="{{ Auth::user()->avatar_path }}">
                        <span class="name ml-2">{{ Auth::user()->name }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="row mt-2 mb-2 ml-4">
                    <div class="col-11">
                      <div class="reply-content">
                        <input type="text" placeholder="Leave your comment" class="comment-ip-content" id="comment-ip-content">
                      </div>
                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center">
                      <button type="button" class="send-comment-btn">
                        <i class="fas fa-paper-plane"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @else
            <div class="login-warning-container mt-2 mb-2">
              <button type="button" onclick="window.location.href = '/bongden_login?previous=' + window.location.href">Login to Continue</button>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/jquery.scrolline.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/reading.js') }}"></script>
@endsection
