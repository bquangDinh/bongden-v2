<div class="user-reply" id="user_reply">
  <div class="row">
    <div class="col-1 d-lg-block d-none">
      <div class="w-100 d-flex justify-content-center align-items-center" style="height: 100%">
        <i class="fas fa-reply"></i>
      </div>
    </div>
    <div class="col-md-11 col-12">
      <div class="reply-block mt-2 mb-2">
        <div class="comment-inner">
          <div class="row">
            <div class="col-md-4 col-8">
              <div class="writer">
                <img class="avatar" src="{{ Auth::user()->avatar_path }}">
                <span class="name ml-2 d-lg-block d-none">{{ Auth::user()->name }} <i class="fas fa-star" style="color: #FFB936"></i></span>
              </div>
            </div>
          </div>
          <div class="row mt-2 mb-2 ml-4">
            <div class="col-md-11 col-9">
              <div class="reply-content">
                <input type="text" placeholder="Phản hồi" class="reply-ip-content">
              </div>
            </div>
            <div class="col-md-1 col-3 d-flex justify-content-center align-items-center">
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
