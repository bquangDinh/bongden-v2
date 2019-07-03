<div class="comment mt-2 mb-2" id="cm-{{ $comment->id }}">
  <div class="comment-inner">
    <div class="row">
      <div class="col-md-4 col-8">
        <div class="writer">
          <img class="avatar" src="{{ $comment->user->avatar_path }}">
          <span class="name ml-2 d-none d-lg-block">{{ $comment->user->name }}
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
  </div>
</div>
