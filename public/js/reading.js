$(document).ready(function(){
  $.scrolline();

  changeCommentHeight();

  reActiveReplyEvent();

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(".send-comment-btn").on("click",function(e){
    let content = $("#comment-ip-content").val();
    let article_id = $("#article_id").val();

    $.ajax({
      type:'post',
      url:'/post-comment',
      data:{
        comment_content: content,
        article_id: article_id
      },
      success:function(data){
        if(data == "false"){
          Swal.fire({
            type:'error',
            title:'Something gone wrong !',
            text: 'Cannot create your comment'
          });
        }else{
          let comments_container = $("#comments");
          $(comments_container).append($(data).hide().fadeIn(500));
          $("#comment-ip-content").val("");
          reActiveReplyEvent();
        }
      },
      error:function(jqXHR,exception){
        console.log(jqXHR.responseText);
      }
    });
  });
});

$(window).resize(function(){
  changeCommentHeight();
});

function changeCommentHeight(){
  $(".comment").each(function(index){
    let outer_height = $(this).height();
    let writer_height = $(this).find(".writer").height();
    let content_height = $(this).find(".content").height();
    let inner_height = $(this).find(".comment-inner").height();
    let delta = inner_height - (content_height + writer_height + 25);
    let limit = 30;

    if(delta < 0){
      let newHeight = (outer_height + (-1)*delta);
      $(this).css("height",newHeight + "px");
    }else{
      if(delta > limit){
        let newHeight = (outer_height - delta);
        $(this).css("height",newHeight + "px");
      }
    }
  });
}

function reActiveReplyEvent(){
  $(".reply-btn").on("click",function(e){
    var that = this;
    let comment_id = $(this).data("cm-id");

    $.ajax({
      type:'GET',
      url:'/ct-rpl/' + comment_id ,
      success:function(data){
        if(data == "false"){
          Swal.fire({
            type:'error',
            title:'Login to continue',
            showConfirmButton:true,
            showCancelButton:true,
            confirmButtonText:"Login now ?",
          }).then(function(result){
            if(result.value){
              window.location.href = "/bongden_login";
            }
          });
        }else{
          $("#user_reply").remove();
          let id = $(that).data("cm-id");
          var replies_container = $("#cm-rl-" + id);
          $(replies_container).append($(data).hide().fadeIn(300));
          reActiveSendReplyEvent();
        }
      },
      error:function(jqXHR,exception){
        console.log(jqXHR.responseText);
      }
    });
  });
}

function reActiveSendReplyEvent(){
  $(".send-reply-btn").on("click",function(e){
    let reply_ip = $(this).parent().parent().find(".reply-ip-content").first();
    let comment_id = $(this).data("cm-id");
    let article_id = $("#article_id").val();
    let content = $(reply_ip).val();
    console.log(content);

    $.ajax({
      type:'post',
      url:'/post-reply',
      data:{
        reply_content: content,
        article_id: article_id,
        parent_id: comment_id
      },
      success:function(data){
        if(data == "false"){
          Swal.fire({
            type:'error',
            title:'Something gone wrong !',
            text: 'Cannot create your reply'
          });
        }else{
          let replies_container = $("#cm-rl-" + comment_id);
          let list = $(replies_container).find(".list");
          $(list).append($(data).hide().fadeIn(500));
          $(reply_ip).val("");
          reActiveReplyEvent();
        }
      },
      error:function(jqXHR,exception){
        console.log(jqXHR.responseText);
      }
    });
  });
}
