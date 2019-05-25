$(".permission-disable-item").on('click',function(e){
  e.preventDefault();
  Swal.fire({
    type: 'error',
    title: 'Oops...',
    text: 'Bạn không đủ quyền để truy cập tính năng này'
  });
});
