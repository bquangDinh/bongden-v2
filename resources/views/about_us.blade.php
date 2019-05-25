@extends('layouts.main')

@section('title')
BONG DEN
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/about_us.css') }}">
@endsection

@section('main-content')
<div class="container-fluid">
  <div class="upper-side">
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <div>
          <div class="upper-side-t1 animated fadeIn">
            BÓNG ĐÈN
          </div>
          <div class="upper-side-t2 animated fadeIn delay-1s">
            Chúng mình là ai?
          </div>
        </div>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="{{ URL::asset('sources/images/upper-side.png') }}" class="animated slideInRight slow">
      </div>
    </div>
  </div>

  <div class="bongden-intro-layout">
    <div class="row">
      <div class="col-1">

      </div>
      <div class="col-10">
        <div class="bongden-intro-grid">
          <div class="bd-name d-flex justify-content-center align-items-center">
            <div class="name animated slideInLeft">
              BÓNG ĐÈN
            </div>
          </div>
          <div class="bd-1st-image">
            <img src="{{ URL::asset('sources/images/IMG_8358.JPG') }}" class="animated slideInRight">
          </div>
          <div class="bd-2th-image">
            <img src="{{ URL::asset('sources/images/image.png') }}" class="animated fadeInUp delay-1s">
          </div>
          <div class="bd-intro d-flex justify-content-center align-items-center">
            <div style="width: 90%;text-align: justify" class="wow animated fadeIn">
              Bóng Đèn là tổ chức phi lợi nhuận hoạt động ở lĩnh vực Khoa học trên phương thức tình nguyện, được thành lập vào tháng 6/2016. Xuất phát từ trăn trở muốn giúp học sinh THCS được trải nghiệm và yêu thích Khoa học, Bóng Đèn ra đời với sứ mệnh tạo nên một sân chơi khoa học sáng tạo, trực quan, kế thừa những ưu điểm của mô hình Giáo dục khai phóng (Liberal Arts) từ các quốc gia phát triển trên thế giới. Đó là nơi các em được  thực sự “thấy”, “hiểu”, “tin” và được “tạo ra” khoa học từ chính đôi bàn tay của mình.
            </div>
          </div>
        </div>
      </div>
      <div class="col-1">
      </div>
    </div>
  </div>

  <div class="upper-side">
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <div>
          <div class="upper-side-t1 wow animated fadeIn">
            Người sáng lập
          </div>
          <div class="upper-side-t2 wow animated fadeIn delay-1s">
            Ai đã tạo ra tụi mình?
          </div>
        </div>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="{{ URL::asset('sources/images/upperside-1.png') }}" class="wow animated slideInRight slow">
      </div>
    </div>
  </div>

</div>

<div class="co-founder-container">

  <div class="cfound-description d-flex justify-content-center align-items-center">
    <div style="width: 80%;text-align:justify">
      Dạ Thi là người sáng lập có dũng khí nhất trong 3 đứa tụi mình. Cậu ấy thường xuyên đưa ra những ý tưởng, thúc giục bọn mình thử nghiệm, luôn là người tiên phong, là người khởi xướng. Mọi thay đổi lớn đều bắt đầu từ những chuyển biến nhỏ bước đầu.
    </div>
  </div>
  <div class="cfound-cover-1">
    <div class="cover d-flex justify-content-center align-items-center">
      <img src="{{ URL::asset('sources/images/hoangdathi.jpg') }}" class="wow animated fadeInUp">
    </div>
    <p class="cfound-name">Hoàng Dạ Thi</p>
  </div>
  <div class="cfound-cover-2 wow animated fadeIn delay-1s" style="background-image: url('{{ URL::asset('sources/images/hoangdathi1.jpg') }}')">
  </div>
</div>
<div class="co-founder-container-s-1">

  <div class="cfound-description d-flex justify-content-center align-items-center">
    <div style="width: 80%;text-align:justify">
      Nói đến Châu, người ta thường liên tưởng đến loài động vật da đen cần cù, đặc biệt là khi con vật này có vấn đề về mắt. Quả thực như vậy, Châu, bí danh Trâu Lé, cực kì siêng năng và chu đáo.
    </div>
  </div>
  <div class="cfound-cover-1">
    <div class="cover d-flex justify-content-center align-items-center">
      <img src="{{ URL::asset('sources/images/chauquynhle.jpg') }}" class="wow animated fadeInUp">
    </div>
    <p class="cfound-name">Châu Quỳnh Lê</p>
  </div>
  <div class="cfound-cover-2 wow animated fadeInLeft delay-1s" style="background-image: url('{{ URL::asset('sources/images/chauquynhle1.jpg') }}')">
  </div>
</div>
<div class="co-founder-container">

  <div class="cfound-description d-flex justify-content-center align-items-center">
    <div style="width: 80%;text-align:justify">
      Bơ lặng lẽ, âm thầm nhưng cháy ngầm theo cách riêng của Bơ, và cũng vì rứa mà Bơ là một phần không thể thiếu của Bóng Đèn trong em. Từ những lần lê lết chạy thử thí nghiệm, phóng xe đi nhận hàng ở những chỗ độc đáo nhất, ăn chơi trên trời dưới biển hay trăm nghìn công việc không tên trong những ngày chuẩn bị nước rút, chưa có lần mô Bơ vắng bóng.
    </div>
  </div>
  <div class="cfound-cover-1">
    <div class="cover d-flex justify-content-center align-items-center">
      <img src="{{ URL::asset('sources/images/dangthi.jpg') }}" class="wow animated fadeInUp">
    </div>
    <p class="cfound-name">Đăng Thi (Bơ)</p>
  </div>
  <div class="cfound-cover-2 wow animated fadeInRight" style="background-image: url('{{ URL::asset('sources/images/dangthi1.jpg') }}')">
  </div>
</div>

<div class="container-fluid">
  <div class="upper-side">
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <div>
          <div class="upper-side-t1 wow animated fadeIn">
            Hoạt động
          </div>
          <div class="upper-side-t2 wow animated fadeIn delay-1s">
            Chúng mình đã làm được những gì?
          </div>
        </div>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="{{ URL::asset('sources/images/upperside-2.png') }}" class="wow animated slideInRight slow">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div class="nb d-flex justify-content-center align-items-center animated wow slideInLeft">
        <div class="nb__inside">
          3
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="nb-txt d-flex justify-content-center align-items-center animated wow slideInRight">
        <div>
          NĂM HOẠT ĐỘNG
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-6 d-flex justify-content-center align-items-center">
      <div class="nb d-flex justify-content-center align-items-center wow animated slideInLeft">
        <div class="nb__inside">
          10
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="nb-txt d-flex justify-content-center align-items-center wow animated slideInRight">
        <div>
          SỰ KIỆN
        </div>
      </div>
    </div>
  </div>
</div>

<div class="event-list">
  <div class="event">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/aoanh.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Ảo Ảnh
      </div>
    </div>
  </div>
  <div class="event is-open" style="grid-column: 2 / 4">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/bongdencamp2016.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Bóng Đèn Camp 16
      </div>
    </div>
  </div>
  <div class="event">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/codingclass.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Coding Class
      </div>
    </div>
  </div>
  <div class="event is-open" style="grid-column: 1 / 3">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/phaodaisangtao.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Pháo Đài Sáng Tạo
      </div>
    </div>
  </div>
  <div class="event" style="grid-column: 3 / 5">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/bongdencamp17.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Bóng Đèn Camp 17
      </div>
    </div>
  </div>
  <div class="event">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/thuychien.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Thủy Chiến
      </div>
    </div>
  </div>
  <div class="event">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/bongden115.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Bóng Đèn 115
      </div>
    </div>
  </div>
  <div class="event">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/whatsup.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        WHAT'S UP?
      </div>
    </div>
  </div>
  <div class="event is-open">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/bongdencamp18.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        Bóng Đèn Camp 18
      </div>
    </div>
  </div>
  <div class="event is-open" style="grid-column: 1 / 4">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/lacvaorungngo.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        LẠC VÀO RỪNG NGỐ
      </div>
    </div>
  </div>
  <div class="event" style="grid-column: 4 / 5">
    <div class="event-picture">
      <img src="{{ URL::asset('sources/images/lixi.jpg') }}">
    </div>
    <div class="event-mask"></div>
    <div class="event-name d-flex justify-content-center align-items-center">
      <div>
        BAO LÌ XÌ NẢY MẦM
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="upper-side">
    <div class="row">
      <div class="col-6 d-flex justify-content-center align-items-center">
        <div>
          <div class="upper-side-t1 wow animated fadeIn">
            Thế hệ mới
          </div>
          <div class="upper-side-t2 wow animated fadeIn delay-1s">
            Bóng Đèn NOW
          </div>
        </div>
      </div>
      <div class="col-6 d-flex justify-content-center align-items-center">
        <img src="{{ URL::asset('sources/images/upperside-3.png') }}" class="wow animated slideInRight slow">
      </div>
    </div>
  </div>

  <div class="leader-container">
    <div class="row">
      <div class="col-6">
        <div class="leader">
          <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
              <img src="{{ URL::asset('sources/images/hanhnhi.jpg') }}" class="leader-avatar">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
              <div>
                <div class="leader-name">
                  Phan Nguyễn Hạnh Nhi
                </div>
                <div class="leader-position">
                  Ban điều hành
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="leader">
          <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
              <img src="{{ URL::asset('sources/images/nguyentruongan.jpg') }}" class="leader-avatar">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
              <div>
                <div class="leader-name">
                  Nguyễn Trường An
                </div>
                <div class="leader-position">
                  Ban điều hành
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br />

    <div class="row">
      <div class="col-6">
        <div class="leader">
          <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
              <img src="{{ URL::asset('sources/images/cattuong.jpg') }}" class="leader-avatar">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
              <div>
                <div class="leader-name">
                  Lê Cát Tường
                </div>
                <div class="leader-position">
                  Trưởng ban thiết kế
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="leader">
          <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
              <img src="{{ URL::asset('sources/images/quynhthi.jpg') }}" class="leader-avatar">
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center">
              <div>
                <div class="leader-name">
                  Quỳnh Thi
                </div>
                <div class="leader-position">
                  Trưởng ban hậu cần - quan hệ tài trợ
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </div>

  </div>

</div>

@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $(".event.is-open").each(function(index){
        $(this).find('.event-mask').addClass("is-open");
        $(this).find('.event-name').addClass('is-open');
      });
  });

  $(".event").on('click',function(e){
    $(this).find('.event-mask').toggleClass('is-open');
    $(this).find('.event-name').toggleClass('is-open');
  });

  new WOW().init();
</script>

@endsection
