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
                <span class="name ml-2 d-none d-lg-block">{{ $reply->user->name }}
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
                <button type="button" class="reply-btn">Reply</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
