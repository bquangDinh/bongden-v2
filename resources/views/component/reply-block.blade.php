<div class="user-reply" id="user_reply">
  <div class="row">
    <div class="col-1 d-flex justify-content-center align-items-center">
      <i class="fas fa-reply"></i>
    </div>
    <div class="col-11">
      <div class="reply-block mt-2 mb-2">
        <div class="comment-inner">
          <div class="row">
            <div class="col-md-4 col-8">
              <div class="writer">
                <img class="avatar" src="{{ Auth::user()->avatar_path }}">
                <span class="name ml-2">{{ Auth::user()->name }} <i class="fas fa-star" style="color: #FFB936"></i></span>
              </div>
            </div>
          </div>
          <div class="row mt-2 mb-2 ml-4">
            <div class="col-11">
              <div class="reply-content">
                <input type="text" placeholder="Leave your reply" class="reply-ip-content">
              </div>
            </div>
            <div class="col-1 d-flex justify-content-center align-items-center">
              <button type="button" class="send-reply-btn" data-cm-id="{{ $comment_id }}">
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
