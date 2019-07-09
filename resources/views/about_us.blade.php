@extends('layouts.main')

@section('title')
Bóng Đèn
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/about_us.css') }}">
@endsection

@section('main-content')
<div class="loader">
  <div class="d-flex justify-content-center align-items-center flex-column w-100 h-100">
    <div class="spinner">
      <div class="dot1"></div>
      <div class="dot2"></div>
    </div>
    <div class="waiting-text">
      Bóng Đèn đang sáng, đợi chút nha ! ( <span id="loaded-percentage"></span> <i class="fas fa-percentage"></i> )
    </div>
  </div>
</div>
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
          <div class="bd-name-panel">
            <div class="name animated slideInLeft">
              BÓNG ĐÈN
            </div>
          </div>
          <div class="bd-1st-image">
            <img src="{{ URL::asset('sources/images/IMG_8358.JPG') }}" class="animated slideInRight">
          </div>
          <div class="bd-2th-image">
            <img src="{{ URL::asset('sources/images/image.jpg') }}" class="animated fadeInUp delay-1s">
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
    <div class="description">
      <i class="fas fa-quote-left"></i> Bóng Đèn với mình như là nhà, dù có đi đâu vẫn luôn dõi theo, luôn hướng về và luôn cố gắng hỗ trợ hết mức có thể.  <i class="fas fa-quote-right"></i>
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
    <div class="description">
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
    <div class="description">
      <i class="fas fa-quote-left"></i> Chị hi vọng là nơi không chỉ để những người thắp đèn làm việc cùng nhau, mà còn là một chỗ để mọi người khi nghĩ về những câu chuyện xinh đẹp của tuổi trẻ, thì Bóng Đèn vẫn luôn luôn là một phần toả sáng hí. <i class="fas fa-quote-right"></i>
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
    <div class="leader-layout mt-2 mb-2 w-100 d-flex justify-content-center align-items-center">
      <div class="leader-grid" id="l-1">
        <div class="cover">
          <img src="{{ URL::asset('sources/images/hanhnhi.jpg') }}">
          <div class="color-layer"></div>
        </div>
        <div class="name">
          Phan Nguyễn Hạnh Nhi
        </div>
        <div class="description"></div>
        <div class="description-inner d-flex justify-content-center align-items-center">
          <div class="w-75 h-75">
            <div style="font-family: Roboto-Black;letter-spacing: 5px">
              BẢN THÂN
            </div>
            <div class="mt-5" style="font-family: Roboto-Black;letter-spacing: 3px">
              <i class="fas fa-users"></i> BAN ĐIỀU HÀNH
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-graduation-cap"></i> THPT chuyên Quốc Học
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-dot-circle"></i> Thế hệ 3
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Đồng sáng lập Dự án vì môi trường "Ngàn Dặm Xanh"
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Trại sinh Trại hè Harvard-Vietnam - HVIET 2017
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Thành viên ban Truyền thông Trại hè quốc tế "Think On"
            </div>
            <div class="mt-2 w-100 d-flex justify-content-center" style="font-size:2em">
              <a href="https://www.facebook.com/profile.php?id=100007876366078" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="previous d-flex justify-content-center align-items-center">
          <button type="button" class="leader-previous-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
        </div>
        <div class="next">
          <button type="button" class="leader-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="leader-grid" id="l-2" style="display: none">
        <div class="cover">
          <img src="{{ URL::asset('sources/images/nguyentruongan.jpg') }}">
          <div class="color-layer"></div>
        </div>
        <div class="name">
          Nguyễn Trường An
        </div>
        <div class="description"></div>
        <div class="description-inner d-flex justify-content-center align-items-center">
          <div class="w-75 h-75">
            <div style="font-family: Roboto-Black;letter-spacing: 5px">
              BẢN THÂN
            </div>
            <div class="mt-5" style="font-family: Roboto-Black;letter-spacing: 3px">
              <i class="fas fa-users"></i> BAN ĐIỀU HÀNH
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-graduation-cap"></i> Đại học Y - Dược Huế
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-dot-circle"></i> Thế hệ 3
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> CLB Humans of Quoc Hoc : Thành viên ban Lấy Chuyện (mùa 2, 3, 4), Phó Chủ nhiệm CLB (mùa 3,4)
            </div>
            <div class="mt-2 w-100 d-flex justify-content-center" style="font-size:2em">
              <a href="https://www.facebook.com/phonghinhhinhphong" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="previous d-flex justify-content-center align-items-center">
          <button type="button" class="leader-previous-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
        </div>
        <div class="next">
          <button type="button" class="leader-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="leader-grid" id="l-3" style="display: none">
        <div class="cover">
          <img src="{{ URL::asset('sources/images/cattuong.jpg') }}">
          <div class="color-layer"></div>
        </div>
        <div class="name">
          Lê Minh Cát Tường
        </div>
        <div class="description"></div>
        <div class="description-inner d-flex justify-content-center align-items-center">
          <div class="w-75 h-75">
            <div style="font-family: Roboto-Black;letter-spacing: 5px">
              BẢN THÂN
            </div>
            <div class="mt-5" style="font-family: Roboto-Black;letter-spacing: 3px">
              <i class="fas fa-users"></i> BAN THIẾT KẾ - @DESTEAM
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-graduation-cap"></i> THPT chuyên Quốc Học
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-dot-circle"></i> Thế hệ 3
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Trưởng ban Truyền Thông CLB Quoc Hoc Artsy Zone
            </div>
            <div class="mt-2 w-100 d-flex justify-content-center" style="font-size:2em">
              <a href="https://www.facebook.com/marc.d.cttl" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="previous d-flex justify-content-center align-items-center">
          <button type="button" class="leader-previous-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
        </div>
        <div class="next">
          <button type="button" class="leader-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="leader-grid" id="l-4" style="display: none">
        <div class="cover">
          <img src="{{ URL::asset('sources/images/quynhthi.jpg') }}">
          <div class="color-layer"></div>
        </div>
        <div class="name">
          Nguyễn Nữ Quỳnh Thi
        </div>
        <div class="description"></div>
        <div class="description-inner d-flex justify-content-center align-items-center">
          <div class="w-75 h-75">
            <div style="font-family: Roboto-Black;letter-spacing: 5px">
              BẢN THÂN
            </div>
            <div class="mt-5" style="font-family: Roboto-Black;letter-spacing: 3px">
              <i class="fas fa-users"></i> TRƯỞNG BAN HẬU CẦN - QUAN HỆ TÀI TRỢ
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-graduation-cap"></i> THPT chuyên Quốc Học
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-dot-circle"></i> Thế hệ 3
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Chủ nhiệm Quoc Hoc Artsy Zone (CLB Mỹ thuật)
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Thành viên dự án môi trường Ngàn Dặm Xanh
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Đại diện Việt Nam tham gia trại hè AEC - Thái Lan
            </div>
            <div class="mt-2 w-100 d-flex justify-content-center" style="font-size:2em">
              <a href="https://www.facebook.com/profile.php?id=100008324312211" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="previous d-flex justify-content-center align-items-center">
          <button type="button" class="leader-previous-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
        </div>
        <div class="next">
          <button type="button" class="leader-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="leader-grid" id="l-5" style="display: none">
        <div class="cover">
          <img src="{{ URL::asset('sources/images/LP.jpg') }}">
          <div class="color-layer"></div>
        </div>
        <div class="name">
          Lê Lâm Phương
        </div>
        <div class="description"></div>
        <div class="description-inner d-flex justify-content-center align-items-center">
          <div class="w-75 h-75">
            <div style="font-family: Roboto-Black;letter-spacing: 5px">
              BẢN THÂN
            </div>
            <div class="mt-5" style="font-family: Roboto-Black;letter-spacing: 3px">
              <i class="fas fa-users"></i> TRƯỞNG BAN TRUYỀN THÔNG
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-graduation-cap"></i> THPT chuyên Quốc Học
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-dot-circle"></i> Thế hệ 3
            </div>
            <div class="mt-2 w-100 d-flex justify-content-center" style="font-size:2em">
              <a href="https://www.facebook.com/lamphuongle2202" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="previous d-flex justify-content-center align-items-center">
          <button type="button" class="leader-previous-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
        </div>
        <div class="next">
          <button type="button" class="leader-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

      <div class="leader-grid" id="l-6" style="display: none">
        <div class="cover">
          <img src="{{ URL::asset('sources/images/QD.jpg') }}">
          <div class="color-layer"></div>
        </div>
        <div class="name">
          Bùi Quang Đính
        </div>
        <div class="description"></div>
        <div class="description-inner d-flex justify-content-center align-items-center">
          <div class="w-75 h-75">
            <div style="font-family: Roboto-Black;letter-spacing: 5px">
              BẢN THÂN
            </div>
            <div class="mt-5" style="font-family: Roboto-Black;letter-spacing: 3px">
              <i class="fas fa-users"></i> TRƯỞNG BAN NỘI DUNG
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-graduation-cap"></i> THPT Nguyễn Huệ
            </div>
            <div class="mt-2" style="font-family: Roboto-Medium">
              <i class="fas fa-dot-circle"></i> Thế hệ 3
            </div>
            <div class="mt-3" style="font-family: Roboto-Medium;font-size:14px">
              <i class="fas fa-dot-circle"></i> Trưởng ban Kĩ Thuật CPO Nguyễn Huệ
            </div>
            <div class="mt-2 w-100 d-flex justify-content-center" style="font-size:2em">
              <a href="https://www.facebook.com/BiQaDi" target="_blank">
                <i class="fab fa-facebook-square"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="previous d-flex justify-content-center align-items-center">
          <button type="button" class="leader-previous-btn">
            <i class="fas fa-chevron-left"></i>
          </button>
        </div>
        <div class="next">
          <button type="button" class="leader-next-btn">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>

    </div>
  </div>

  </div>

</div>

@endsection

@section('js')
<script type="text/javascript" src="{{ URL::asset('js/vendor/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/about_us.js') }}"></script>
@endsection
