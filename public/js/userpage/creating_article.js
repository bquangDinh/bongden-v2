$(document).ready(function(){
  $("#subject_select").select2({
    placeholder:"Chọn thể loại",
    width:"100%",
    ajax:{
      url:"/user/action/get_subjects",
      dataType:"json",
      quietMillis:250,
      processResults:function(data){
        return{
          results:data
        }
      }
    }
  });

  $("#tag_select").select2({
    placeholder: 'Gắn tag',
    width: "100%",
    maximumSelectionLength:5,
    minimumInputLength:3,
    tags:true,
    tokenSeparators: [',',' '],
    ajax:{
      url:"/user/action/get_tags_list",
      dataType:'json',
      quietMillis:250,
      error:function(jqXHR,exception){
        console.log(jqXHR.responseText);
      },
      data:function(params){
        return{
          q:$.trim(params.term)
        };
      },
      processResults:function(data){
        return {
          results:data
        }
      },
      cache:true
    }
  });

  var editor = new FroalaEditor('#textarea-content',{
  });

  async function getCoverChoosen(){
    const inputOptions = new Promise((resolve) => {
      setTimeout(() => {
        resolve({
          "url":"URL",
          "upload":"Tải lên từ máy tính"
        });
      },200);
    });

    const {value: choosen} = await Swal.fire({
      title:'Chọn phương thức lấy ảnh',
      input:'radio',
      inputOptions:inputOptions,
      inputValidator:(value) => {
        if(!value){
          return 'You need to choose something!';
        }
      }
    });

    if(choosen){
      if(choosen == "url"){
        (async function setCoverByURL(){
          const {value:url} = await Swal.fire({
            title:'URL',
            input:'url',
            inputPlaceholder: 'Enter the image URL'
          });

          if(url){
            $("#article-cover-img").attr("src",url);
            $("#cover-input").val(url);
          }
        })();
      }
    }
  }

  $("#add-btn").on('click',function(e){
    getCoverChoosen();
  });
});


function auto_expand(){
  var el = this;
  setTimeout(function(){
    $(el).css("height","auto");
    $(el).css("padding","0");
    $(el).css("height",el.scrollHeight + "px");
  },0);
}

var textarea = document.querySelector("textarea");
textarea.addEventListener('keydown',auto_expand);
