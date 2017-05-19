
@extends('layout.master')
@section('noidung')
<div id="login-wrapper"> 
    <div style="position: fixed;width: 100%;height: 100%;top: 0;left: 0;background: #000;opacity: 0.5;z-index: -1;"></div>
    <div class="box-header login"> 
    <span class="fr"><a href="javascript:void(0);" onclick="popup(1);"></a></span>
    Đăng nhập hocmai.vn
    </div> 
    <div class="box"> 
      
    <form method="post" action="#" class="login"> 
      <div class="row"> 
        <label>Tên đăng nhập:</label> 
        <input type="text" name="username"> 
     </div> 
     
      <div class="row"> 
        <label>Mật khẩu:</label> 
        <input type="password" name="password"> 
     </div> 
       <div class="row tr"> 
        <input type="submit" value="Login" class="button" style="width:90px!important;"> 
        </div>
        <div class="row" style="border-top: 1px solid #c7c7c7;"> 
             <a href="#" class="facebook"><i></i>Đăng nhập bằng Facebook</a>
             <a href="#" class="google"><i></i>Đăng nhập bằng Google</a>
             <a href="#" class="yahoo"><i></i>Đăng nhập bằng Yahoo</a>
         </div> 
     </form>                  
    </div> 
</div>
<style type="text/css">
    #login-wrapper {
        display: none;
        margin: 0 auto;
        width: 400px;
        position: fixed;
        z-index: 10000;
        top: 20%;
        left: 50%;
        margin-left: -200px;
    }
    .box-header.login {
        font-size: 19px;
        padding: 10px 15px;
        -moz-border-radius-topleft: 20px;
        border-top-left-radius: 20px;
    }
    .box-header {
        border: 1px solid #154991;
        font-weight: bold;
        font-size: 14px;
        background: #154991;
        padding: 10px 15px;
        color: #FFF;
        -moz-border-radius-topleft: 3px;
        -moz-border-radius-topright: 3px;
        -webkit-border-top-left-radius: 3px;
        -webkit-border-top-right-radius: 3px;
    }
    .box-header.login {
        font-size: 19px;
        padding: 10px 15px;
    }
    .fr {
        float: right;
    }
    .box-header .fr a {
        display: block;
        width: 23px;
        height: 23px;
        background: url('public/admin/img/close_x.png');
        margin-right: -5px;
    }
    #login-wrapper .box {
        background: #fff;
        border: 1px solid #9d9d9d;
        margin-bottom: 15px;
        padding: 15px;
        border-top: 0;
        -moz-border-radius-bottomleft: 3px;
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-left-radius: 3px;
        -webkit-border-bottom-right-radius: 3px;
    }
    #login-wrapper .box form{
        padding: 0;
        margin:0;
    }
    #login-wrapper .box form div.row {
        clear: both;
        padding: 4px 0;
        margin-bottom: 15px;
        margin-left: 0;
    }
    #login-wrapper .box form.login label {
        width: 110px;
    }
    #login-wrapper .box form .row label {
        width: 110px;
    }
    #login-wrapper .box form .row a{
        margin-top: 10px;
        display: inline-block;
        padding: 5px 8px;
        font-size: 14px;
        color: #FFF;
        border-radius: 4px;
        border: 1px solid;
        box-shadow: 2px 1px 5px 0px #c7c7c7;
        -moz-border-radius-topleft: 10px;
        -moz-border-radius-topright: 3px;
         -webkit-border-top-left-radius: 10px; 
         -webkit-border-top-right-radius: 3px; 
    }
    #login-wrapper .box form .row i{
        float: left;
        display: inline-table;
        display: block;
        margin-right: 5px;
        width: 19px;
        height: 20px;
        background: url('public/img/d_social_buttons.png');
    }
    #login-wrapper .box form .row .facebook{
        background: #3e5b98;
    }
    #login-wrapper .box form .row .facebook i{
        background-position: 0 0;
    }
    #login-wrapper .box form .row .google{
        background: #da4f2e;
    }
    #login-wrapper .box form .row .google i{
        background-position: -40px;
    }
    #login-wrapper .box form .row .yahoo{
        background: #6E329D;
    }
    #login-wrapper .box form .row .yahoo i{
        background-position:-80px;
    }
    #login-wrapper .box form label {
        padding-top: 5px;
        margin-right: 8px;
        display: block;
        color: #454545;
        font-size: 17px;;
        float: left;
    }
    #login-wrapper .box form.login input {
        width: 235px;
    }
    #login-wrapper .box form input, form textarea, form select {
        background: #FFFFFF url('public/img/input-bg.gif') repeat-x top;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border: 1px solid #c7c6c6;
        outline: medium none;
        padding: 7px 6px 6px 6px;
        margin: 0;
    }
    #login-wrapper .box .tr {
        text-align: right;
    }
    #login-wrapper .box .button {
        -moz-border-radius: 0.5em 0.5em 0.5em 0.5em;
        -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        display: inline-block;
        font: 14px/100% Arial, Helvetica, sans-serif;
        margin: 0 2px;
        outline: medium none;
        padding: 0.5em 2em 0.55em;
        text-align: center;
        text-decoration: none;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
        vertical-align: baseline;
        background: #154992;
        color: #E9E9E9;
    }

    .reserve-wrapper, .reserve-wrapper-2, .reserve-wrapper-3 {
        height: 0px;
        width: 100%;
        background-color: #0072bc;
        text-align: center;
        padding: 0;
        position: relative;
        z-index: 20;
        margin: 0 0 10px;
        opacity: 0;
        visibility: hidden;
        display: none;
    }
    
    .reserve-wrapper::before {
        content: "";
        display: block;
        height: 40px;
        left: 5px;
        position: absolute;
        top: 0;
        width: 338px;
    }

    .reserve-wrapper-2:before {
        line-height: 40px;
        content: "HOC THỬ MIỄN PHÍ PEN-I >>";
        display: block;
        height: 40px;
        left: 5px;
        position: absolute;
        top: 0;
        width: 338px;
        color: white;
        font-weight: bold;
        font-size: 22px;
    }

    .reserve-wrapper:before {
        line-height: 40px;
        content: "ĐẶT CHỖ PEN 2017 >>";
        display: block;
        height: 40px;
        left: 5px;
        position: absolute;
        top: 0;
        width: 338px;
        color: white;
        font-weight: bold;
        font-size: 22px;
    }

    .reserve-pen {
        max-width: 670px;
        margin: 0 auto;
        color: #ffffff;
    }

    .reserve-wrapper-2 .reserve-pen, .reserve-wrapper-3 .reserve-pen {
        max-width: 700px;
    }

    .reserve-wrapper-2 .reserve-pen ul li, .reserve-wrapper-3 .reserve-pen ul li {
        width: 220px;
        float: left;
    }

    .reserve-pen ul {
        list-style: none;
        padding: 0;
        padding-left: 30px;
    }

    .reserve-pen ul li {
        width: 160px;
        float: left;
    }

    .reserve-pen ul li .step {
        display: block;
        height: 40px;
        padding: 8px 0;
        line-height: 24px;
        position: relative;
    }

    .reserve-pen ul li .step .step-number {
        position: absolute;
        width: 40px;
        height: 40px;
        border: 2px solid white;
        border-radius: 29px;
        left: -20px;
        top: 0;
        z-index: 4;
        line-height: 36px;
        font-size: 14px;
        background-color: #0072bc;

    }

    .reserve-pen ul li .step-content {
        position: relative;
        display: block;
        overflow-y: hidden;
        padding-left: 12px;
        font-size: 16px;
    }

    .reserve-pen ul li .step-content:before {
        position: absolute;
        height: 0;
        width: 0;
        content: '';
        top: 50%;
        left: 12px;
        margin-top: -28px;
        border-left: 16px solid white;
        border-bottom: 28px solid transparent;
        border-top: 28px solid transparent;
        z-index: 1;
    }

    .reserve-pen ul li .step-content:after {
        position: absolute;
        height: 0;
        width: 0;
        content: '';
        top: 50%;
        left: 10px;
        margin-top: -28px;
        border-left: 16px solid #0072bc;
        border-bottom: 28px solid transparent;
        border-top: 28px solid transparent;
        z-index: 2;
    }

    .reserve-pen ul li.active {
        background-color: #fd9e00;
        color: white;
    }

    .reserve-pen ul li.active .step:before {
        content: '!';
        height: 16px;
        width: 16px;
        line-height: 16px;
        font-size: 12px;
        font-weight: 500;
        border-radius: 5px;
        position: absolute;
        top: 3px;
        left: -25px;
        z-index: 10;
        background-color: #fd9e00;
    }

    .reserve-pen ul li.active .step .step-number {
        background-color: #0072bc;
        border-color: #ffffff;
    }

    .reserve-pen ul li.active .step-content:before {
        border-left-color: #ffffff;
    }

    .reserve-pen ul li.active .step-content:after {
        border-left-color: #fd9e00;
    }

    .stickyTop {
        position: fixed;
        z-index: 1000000;
        width: 100%;
        top: 0;
        left: 0;
    }

    .show-bar {
        height: 40px;
        opacity: 1;
        display: block;
        visibility: visible;
        -webkit-transition: height 0s, opacity 1s,  visibility 1s;
        transition: height 0s, opacity 1s,  visibility 1s;
    }

    @media only screen and  (max-width: 1200px){
        .reserve-wrapper:before {
            display: none;
        }
    }

    @media only screen and  (max-width: 768px){
        .reserve-wrapper:before, .reserve-wrapper-2:before .reserve-wrapper-3:before{
            display: none;
        }

        .reserve-pen {
            max-width: 390px;
        }

        .reserve-pen ul {
            padding-left: 40px;
            text-align: center;
        }

        .reserve-pen ul li {
            float: none;
            width: 60px;
            display: inline-block;
        }

        .reserve-pen ul li.active {
            width: 150px;
        }

        .reserve-pen ul li.active .step-content {
            font-size: 14px;
            color: #ffffff;
        }

        .reserve-pen ul li .step-content {
            font-size: 1px;
            color: #0072bc;
        }

        .reserve-pen ul li.active .step:before {
            top: -3px;
            left: -20px;
        }

        .reserve-wrapper:before {
            display: none;
        }
    }

    @media only screen and  (max-width: 480px){
        .reserve-pen ul {
            padding-left: 40px;
        }

        .reserve-pen ul li {
            width: 46px;
        }

        .reserve-pen ul li.active {
            width: 130px;
        }

        .reserve-pen ul li.active .step-content {
            font-size: 14px;
            color: #ffffff;
        }

        .reserve-pen ul li .step-content {
            font-size: 1px;
            color: #0072bc;
        }

        .reserve-pen ul li.active .step:before {
            top: -3px;
            left: -20px;
        }

        .reserve-wrapper:before {
            display: none;
        }
    }
</style>

    <div class="reserve-wrapper">
        <a href="luyen-thi-quoc-gia/luyen-thi-pen-m/index.html" target="_blank">
            <div class="reserve-pen">
                <ul class="ms-list clearfix">
                    <li>
                        <div class="step">
                            <span class="step-number">1</span>
                        <span class="step-content">
                            Tạo tài khoản
                        </span>
                        </div>
                    </li>
                    <li class="st-money">
                        <div class="step">
                            <span class="step-number">2</span>
                        <span class="step-content">
                            Nạp tiền
                        </span>
                        </div>
                    </li>
                    <li class="st-reserve">
                        <div class="step">
                            <span class="step-number">3</span>
                        <span class="step-content">
                            Đặt chỗ
                        </span>
                        </div>
                    </li>
                    <li>
                        <div class="step">
                            <span class="step-number">4</span>
                        <span class="step-content">
                            Mua khóa học
                        </span>
                        </div>
                    </li>
                </ul>
            </div>
        </a>
    </div>
    <script type="text/javascript" src="luyen-thi-quoc-gia/luyen-thi-pen-m/check.html"></script>

<div class="modal fade" id="classModal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="class-wr">
                    <div class="ctitle">Chọn lớp Bạn quan tâm</div>
                    <div class="csub">để được HOCMAI gợi ý các khóa học phù hợp</div>
                    <div class="class-input">
                        <select name="user-class" id="user-class">
                            <option value="">Chọn lớp</option>
                                                            <option value="1">Lớp 1</option>
                                                            <option value="2">Lớp 2</option>
                                                            <option value="3">Lớp 3</option>
                                                            <option value="4">Lớp 4</option>
                                                            <option value="5">Lớp 5</option>
                                                            <option value="6">Lớp 6</option>
                                                            <option value="7">Lớp 7</option>
                                                            <option value="8">Lớp 8</option>
                                                            <option value="9">Lớp 9</option>
                                                            <option value="10">Lớp 10</option>
                                                            <option value="11">Lớp 11</option>
                                                            <option value="12">Lớp 12</option>
                                                            <option value="13">Lớp 13</option>
                                                    </select>
                    </div>
                    <div class="class-btn">
                        <a href="#" class="btn-start">bắt đầu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    #classModal .modal-content {
        border-top: 11px solid #0a72ba;
        border-radius: 10px;
    }

    #classModal .modal-body {
        text-align: center;
    }

    .class-wr {
        width: 67%;
        margin: 0 auto;
    }

    #classModal .modal-body:before {
        content: '';
        background: url("public/img/slogo.png") no-repeat;
        width: 48px;
        height: 46px;
        display: block;
        margin: 0 auto;
    }

    .ctitle {
        font-size: 28px;
        color: #0072bc;
        margin-top: 25px;
    }

    .csub {
        font-size: 15px;
        color: #777777;
        margin-top: 5px;
    }

    .class-input {
        margin-top: 20px;
    }

    .class-input .err-message {
        display: block;
        text-align: left;
        margin-top: 5px;
        color: #ef4a6b;
    }

    #user-class {
        width: 100%;
        height: 40px;
        border: 1px solid #0072bc;
        color: #000;
        border-radius: 5px;
        padding-left: 8px;
    }

    .class-btn {
        margin-top: 20px;
    }

    .btn-start {
        width: 100%;
        height: 46px;
        background: #0072bc;
        color: white;
        font-size: 22px;
        font-weight: bold;
        text-transform: uppercase;
        display: inline-block;
        line-height: 46px;
        border-radius: 6px;
        margin-bottom: 15px;
    }

    .btn-start:hover, .btn-start:focus {
        color: white;
    }
</style>

<script type="text/javascript" src="loginv2/check.php"></script>            
<!-- end-header -->
<!-- header-content -->
                
<div class="header-content">
    <div class="clearfix">
        <div class="header-left"><div class="header-left-content">
                    <div class="slide-banner">
            <div id="carousel-banner" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">

                                                    <div class="item active" data-timeout="10">
                                    <a href="thi-thu-thpt-quoc-gia/indexf28e.html?utm_source=Hocmai.vn&amp;utm_medium=845.300" class="bxslider-one">
                                                                            </a>
                                    <a class="gg-analytic" data-event="banner-service" href='thi-thu-thpt-quoc-gia/indexf28e.html?utm_source=Hocmai.vn&amp;utm_medium=845.300' style='width:100%;height:100%;position:absolute;'></a><div><img src="public/img/845X300_KHXH.jpg" /></div>                                </div>
                                                        <div class="item " data-timeout="5">
                                    <a href="luyen-thi-quoc-gia/nen-tang-2018/index7170.html?utm_source=Website&amp;utm_medium=BA_1804_NENTANG_845X300&amp;utm_campaign=NEN-TANG-2018&amp;utm_term=HocMai" class="bxslider-one">
                                                                            </a>
                                    <a class="gg-analytic" data-event="banner-service" href='luyen-thi-quoc-gia/nen-tang-2018/index7170.html?utm_source=Website&amp;utm_medium=BA_1804_NENTANG_845X300&amp;utm_campaign=NEN-TANG-2018&amp;utm_term=HocMai' style='width:100%;height:100%;position:absolute;'></a><div><img src="public/img/845x300_Nen_tang.png" /></div>                                </div>
                                                        <div class="item " data-timeout="5">
                                    <a href="luyen-thi-quoc-gia/luyen-thi-pen-m/indexc29a.html?utm_source=WEBSITE&amp;utm_medium=WEBSITE_1904_BANNER_DNGD2_PENM_845X300_3NGAY&amp;utm_campaign=PEN-M-2017&amp;utm_term=BANNER" class="bxslider-one">
                                                                            </a>
                                    <a class="gg-analytic" data-event="banner-service" href='luyen-thi-quoc-gia/luyen-thi-pen-m/indexc29a.html?utm_source=WEBSITE&amp;utm_medium=WEBSITE_1904_BANNER_DNGD2_PENM_845X300_3NGAY&amp;utm_campaign=PEN-M-2017&amp;utm_term=BANNER' style='width:100%;height:100%;position:absolute;'></a><div><img src="public/img/845x300-penm3.png" /></div>                                </div>
                                                        <div class="item " data-timeout="5">
                                    <a href="luyen-thi-quoc-gia/luyen-thi-pen-m/index3658.html?utm_source=WEBSITE&amp;utm_medium=WEBSITE_1804_BANNER_PENM_845X300_KHAIGIANG&amp;utm_campaign=PEN-M-2017&amp;utm_term=BANNER" class="bxslider-one">
                                                                            </a>
                                    <a class="gg-analytic" data-event="banner-service" href='luyen-thi-quoc-gia/luyen-thi-pen-m/index3658.html?utm_source=WEBSITE&amp;utm_medium=WEBSITE_1804_BANNER_PENM_845X300_KHAIGIANG&amp;utm_campaign=PEN-M-2017&amp;utm_term=BANNER' style='width:100%;height:100%;position:absolute;'></a><div><img src="public/img/845x300.jpg" /></div>                                </div>
                                        </div>
                <ol class="banner-carousel-indicators carousel-indicators">
                                        <li data-target="#carousel-banner" data-slide-to="0" class="active">1</li>
                                        <li data-target="#carousel-banner" data-slide-to="1" class="">2</li>
                                        <li data-target="#carousel-banner" data-slide-to="2" class="">3</li>
                                        <li data-target="#carousel-banner" data-slide-to="3" class="">4</li>
                                    </ol>
            </div>
        </div>
                <div class="slide-learn">
                <ul class="home_sub_banner bxslider">
                                <li class="item_sub_banner" id="sub_banner_427">
                <a target="_blank"  href="luyen-thi-quoc-gia/luyen-thi-pen-m/index2d6a.html?utm_source=WEBSITE&amp;utm_medium=FA_0304_BANNER_PENM_275X165_DCGD1&amp;utm_campaign=PEN-M-2017&amp;utm_term=BANNER"  title="">
                <img style="width: 275px;height:165px;" alt="" src="public/img/275x165_trong_dc.png" />
                    <div class="hover-detail">
                        <div class="learn-online"></div>
                        <p></p>
                    </div>
                </a>

            </li>
                                <li class="item_sub_banner" id="sub_banner_436">
                <a target="_blank"  href="http://blog.hocmai.vn/hocmai-chao-voi-uu-dai-khung-danh-cho-khach-hang-thiet/"  title="">
                <img style="width: 275px;height:165px;" alt="" src="public/img/unnamed.png" />
                    <div class="hover-detail">
                        <div class="learn-online"></div>
                        <p></p>
                    </div>
                </a>

            </li>
                                <li class="item_sub_banner" id="sub_banner_441">
                <a target="_blank"  href="luyen-thi-quoc-gia/nen-tang-2018/index828e.html?utm_source=Website&amp;utm_medium=BA_1804_NENTANG_275x165&amp;utm_campaign=NEN-TANG-2018&amp;utm_term=HocMai"  title="">
                <img style="width: 275px;height:165px;" alt="" src="public/img/275x165_nen_tang.png" />
                    <div class="hover-detail">
                        <div class="learn-online"></div>
                        <p></p>
                    </div>
                </a>

            </li>
                                <li class="item_sub_banner" id="sub_banner_379">
                <a target="_blank"  href="luyen-thi-quoc-gia/luyen-thi-pen-i-1/indexfb40.html?utm_source=Website&amp;utm_campaign=PEN-I-2017&amp;utm_medium=BA_1703_HTPENI_275x165_tangtoc&amp;utm_term=HocMai"  title="">
                <img style="width: 275px;height:165px;" alt="" src="public/img/tangtoc.png" />
                    <div class="hover-detail">
                        <div class="learn-online"></div>
                        <p></p>
                    </div>
                </a>

            </li>
                                <li class="item_sub_banner" id="sub_banner_377">
                <a target="_blank"  href="luyen-thi-quoc-gia/luyen-thi-pen-c-1/indexa06e.html?utm_source=Website&amp;utm_campaign=PEN-C-2017&amp;utm_medium=BA_2202_275x165_HTPENC_lapkienthuc&amp;utm_term=HocMai"  title="">
                <img style="width: 275px;height:165px;" alt="" src="public/img/lapkienthuc.png" />
                    <div class="hover-detail">
                        <div class="learn-online"></div>
                        <p></p>
                    </div>
                </a>

            </li>
        
</ul>
<script type="text/javascript">
    var id_sub='';
     $('.home_sub_banner').bxSlider({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 275,
                slideMargin: 10
    });

     $(".home_sub_banner  li a").mouseover(function() {
         id_sub=$(this).parent('.item_sub_banner').attr('id');
         $("#"+id_sub+' .hover-detail p').show();
     }).mouseout(function() {
          id_sub=$(this).parent('.item_sub_banner').attr('id');
         $("#"+id_sub+' .hover-detail p').hide();
     });

    function click_to_gs(){
        $('html,body').animate({
                scrollTop: $("#filter").offset().top},
            'slow');
    }
</script>

            </div>

<div class="header-search">
        <link rel="stylesheet" type="text/css" href="public/css/style.css" />
        <script language="javascript"  type="text/javascript" src="public/js/search.js"></script>
         </div>
        </div></div>
        <div class="header-right-content">
            <div class="header-news">
                <div class="top-header-news clearfix">
                    <div class="news-header active"><a href="http://blog.hocmai.vn/">TIN MỚI NHẤT</a></div>

                </div>
                <div class="content-header-news">
                    <ul>
                <li><a class="gg-analytic" data-event="click-xem-tin-moi" data-track-label="Ưu đãi khủng chào hè dành cho phụ huynh học sinh lớp 4 đến lớp 9" target="_blank" title="Ưu đãi khủng chào hè dành cho phụ huynh học sinh lớp 4 đến lớp 9" href="http://blog.hocmai.vn/hocmai-chao-voi-uu-dai-khung-danh-cho-khach-hang-thiet/">
                <i  class="icon-list"></i><span>Ưu đãi khủng chào hè dành cho phụ huynh học sinh lớp 4 đến lớp 9</span></a>
            </li>
                    <li><a class="gg-analytic" data-event="click-xem-tin-moi" data-track-label="PEN-M-chìa khóa giúp teen 99 thành công trong 2 tháng cuối" target="_blank" title="PEN-M-chìa khóa giúp teen 99 thành công trong 2 tháng cuối" href="http://blog.hocmai.vn/pen-m-chia-khoa-giup-teen-99-thanh-cong-trong-2-thang-cuoi/">
                <i  class="icon-list"></i><span>PEN-M-chìa khóa giúp teen 99 thành công trong 2 tháng cuối</span></a>
            </li>
                    <li><a class="gg-analytic" data-event="click-xem-tin-moi" data-track-label="Hạ gục điểm 8 Vật lí trong 59 ngày" target="_blank" title="Hạ gục điểm 8 Vật lí trong 59 ngày" href="http://blog.hocmai.vn/ha-guc-diem-8-vat-li-trong-59-ngay/">
                <i  class="icon-list"></i><span>Hạ gục điểm 8 Vật lí trong 59 ngày</span></a>
            </li>
                    <li><a class="gg-analytic" data-event="click-xem-tin-moi" data-track-label="CẨM NANG ÔN THI THPT QUỐC GIA 2017: ”BẢO BỐI” DÀNH CHO TEEN 99" target="_blank" title="CẨM NANG ÔN THI THPT QUỐC GIA 2017: ”BẢO BỐI” DÀNH CHO TEEN 99" href="http://blog.hocmai.vn/cam-nang-on-thi-thpt-quoc-gia-2017/">
                <i  class="icon-list"></i><span>CẨM NANG ÔN THI THPT QUỐC GIA 2017: ”BẢO BỐI” DÀNH CHO TEEN 99</span></a>
            </li>
                    <li><a class="gg-analytic" data-event="click-xem-tin-moi" data-track-label="Tập dượt toàn diện trước kỳ thi THPTQG nhiều đổi mới" target="_blank" title="Tập dượt toàn diện trước kỳ thi THPTQG nhiều đổi mới" href="http://blog.hocmai.vn/tap-duot-toan-dien-truoc-ky-thi-thptqg-nhieu-doi-moi/">
                <i  class="icon-list"></i><span>Tập dượt toàn diện trước kỳ thi THPTQG nhiều đổi mới</span></a>
            </li>
        </ul>                </div>
            </div>
            <style>
                .header-countdown {
                    padding: 5px;
                    margin: 5px 0;
                    border: 1px solid #8eb3d9;
                    background: white;
                }

                .countdown-title {
                    text-align: center;
                    color: #6a7090;
                    font-size: 12px;
                    margin: 5px 0 5px;
                }

                .countdown-time-value {
                    display: inline-block;
                    width: 25%;
                    float: left;
                    padding: 5px;
                }

                .clock-item .inner {
                    height: 0px;
                    padding-bottom: 100%;
                    position: relative;
                    width: 100%;
                }

                .clock-canvas {
                    background-color: #ddebf4;
                    border-radius: 50%;
                    height: 0px;
                    padding-bottom: 100%;
                }

                .text {
                    color: #6a7090;
                    font-weight: bold;
                    position: absolute;
                    top: 0;
                    text-align: center;
                    width: 100%;
                    height: 100%;
                    padding: 8px;
                }

                .text span {
                    background: #ffffff;
                    display: block;
                    border-radius: 20px;
                    height: 100%;
                    padding-top: 5px;
                    box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.57);
                }

                .text p {
                    margin-bottom: 0;
                }


                .text .val {
                    font-size: 15px;
                }

                .text .type-time {
                    font-size: 8px;
                }

            </style>
            
            <div class="header-traditional-room">
                <div class="images-traditional">
                                        <a href="10th-year-anniversary/index.html" class="gg-analytic" data-event="traditional-room">
                        <img src="public/home/img/traditional-room/ten-anni.png">
                    </a>
                </div>
                <div class="title-traditional">
                    <div><a href="10th-year-anniversary/index.html">10 năm - Mái trường HOCMAI</a></div>
                </div>
            </div>
            <div class="fb-like" data-href="https://www.facebook.com/Hocmai.vnOnline" data-show-faces="false" data-width="260" data-layout="standard" data-action="like"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
function change_type_news(element,value) {
    $.ajax({
        url: 'https://hocmai.vn/home/get_news/'+value,
        success: function(response) {
            $('.news').removeClass("active");
            element.parentNode.parentNode.className += ' active';
            $('.content-header-news').html(response);
        }
    });
}
</script>
<style type="text/css">
.scroll{
    cursor: pointer;
}
</style>                <!-- end-header-content -->

<script type="text/javascript">

    function chose_cate(element){
        var $catemap = $.parseJSON('{"58":{"name":"Luy\u1ec7n thi PEN-C ","courses":{"270":{"fullname":"Ng\u1eef v\u0103n","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-C m\u00f4n Ng\u1eef v\u0103n 2017","subject":"28","visible":"1","id":270,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/270\/luyen-thi-thpt-quoc-gia-pen-c-mon-ngu-van-2017.html"},"266":{"fullname":"To\u00e1n","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-C m\u00f4n To\u00e1n 2017","subject":"27","visible":"1","id":266,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/266\/luyen-thi-thpt-quoc-gia-pen-c-mon-toan-2017.html"},"269":{"fullname":"Ti\u1ebfng Anh","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-C m\u00f4n Ti\u1ebfng Anh 2017","subject":"22","visible":"1","id":269,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/269\/luyen-thi-thpt-quoc-gia-pen-c-mon-tieng-anh-2017.html"},"268":{"fullname":"V\u1eadt l\u00ed","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-C m\u00f4n V\u1eadt l\u00ed 2017","subject":"29","visible":"1","id":268,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/268\/luyen-thi-thpt-quoc-gia-pen-c-mon-vat-li-2017.html"},"267":{"fullname":"H\u00f3a h\u1ecdc","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-C m\u00f4n H\u00f3a h\u1ecdc 2017","subject":"18","visible":"1","id":267,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/267\/luyen-thi-thpt-quoc-gia-pen-c-mon-hoa-hoc-2017.html"},"310":{"fullname":"Sinh h\u1ecdc","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-C m\u00f4n Sinh h\u1ecdc","subject":"24","visible":"1","id":310,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/310\/luyen-thi-thpt-quoc-gia-pen-c-mon-sinh-hoc.html"},"732":{"fullname":"Khoa h\u1ecdc t\u1ef1 nhi\u00ean","shortname":"Khoa h\u1ecdc t\u1ef1 nhi\u00ean","subject":"24","visible":"1","id":732,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/732\/khoa-hoc-tu-nhien.html"},"730":{"fullname":"Khoa h\u1ecdc x\u00e3 h\u1ed9i","shortname":"Khoa h\u1ecdc x\u00e3 h\u1ed9i","subject":"0","visible":"1","id":730,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/730\/khoa-hoc-xa-hoi.html"}}},"56":{"name":"Luy\u1ec7n thi PEN-M","courses":{"771":{"fullname":"KHXH","shortname":"KHXH","subject":"33","visible":"1","id":771,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/771\/khxh.html"},"305":{"fullname":"Ng\u1eef v\u0103n","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-M Ng\u1eef v\u0103n","subject":"28","visible":"1","id":305,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/305\/luyen-thi-thpt-quoc-gia-pen-m-ngu-van.html"},"302":{"fullname":"To\u00e1n","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-M To\u00e1n","subject":"27","visible":"1","id":302,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/302\/luyen-thi-thpt-quoc-gia-pen-m-toan.html"},"375":{"fullname":"Ti\u1ebfng Anh","shortname":"Luy\u1ec7n thi qu\u1ed1c gia PEN-M Ti\u1ebfng Anh","subject":"22","visible":"1","id":375,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/375\/luyen-thi-quoc-gia-pen-m-tieng-anh.html"},"304":{"fullname":"V\u1eadt l\u00ed","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-M V\u1eadt l\u00ed","subject":"29","visible":"1","id":304,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/304\/luyen-thi-thpt-quoc-gia-pen-m-vat-li.html"},"303":{"fullname":"H\u00f3a h\u1ecdc","shortname":"Luy\u1ec7n thi qu\u1ed1c gia PEN-M H\u00f3a h\u1ecdc","subject":"18","visible":"1","id":303,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/303\/luyen-thi-quoc-gia-pen-m-hoa-hoc.html"},"446":{"fullname":"Sinh h\u1ecdc","shortname":"Luy\u1ec7n thi qu\u1ed1c gia PEN-M Sinh h\u1ecdc","subject":"24","visible":"1","id":446,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/446\/luyen-thi-quoc-gia-pen-m-sinh-hoc.html"}}},"57":{"name":"Luy\u1ec7n thi PEN-I","courses":{"288":{"fullname":"Ng\u1eef v\u0103n","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-I: m\u00f4n Ng\u1eef v\u0103n","subject":"28","visible":"1","id":288,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/288\/luyen-thi-thpt-quoc-gia-pen-i-mon-ngu-van.html"},"283":{"fullname":"To\u00e1n","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-I: m\u00f4n To\u00e1n","subject":"27","visible":"1","id":283,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/283\/luyen-thi-thpt-quoc-gia-pen-i-mon-toan.html"},"287":{"fullname":"Ti\u1ebfng Anh","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-I: m\u00f4n Ti\u1ebfng Anh","subject":"22","visible":"1","id":287,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/287\/luyen-thi-thpt-quoc-gia-pen-i-mon-tieng-anh.html"},"284":{"fullname":"V\u1eadt l\u00ed","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-I: m\u00f4n V\u1eadt l\u00ed","subject":"29","visible":"1","id":284,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/284\/luyen-thi-thpt-quoc-gia-pen-i-mon-vat-li.html"},"285":{"fullname":"H\u00f3a h\u1ecdc","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-I: m\u00f4n H\u00f3a h\u1ecdc","subject":"18","visible":"1","id":285,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/285\/luyen-thi-thpt-quoc-gia-pen-i-mon-hoa-hoc.html"},"286":{"fullname":"Sinh h\u1ecdc","shortname":"Luy\u1ec7n thi THPT qu\u1ed1c gia PEN-I: m\u00f4n Sinh h\u1ecdc","subject":"24","visible":"1","id":286,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/286\/luyen-thi-thpt-quoc-gia-pen-i-mon-sinh-hoc.html"},"749":{"fullname":"Khoa h\u1ecdc x\u00e3 h\u1ed9i","shortname":"PEN-I - Khoa h\u1ecdc x\u00e3 h\u1ed9i","subject":"0","visible":"1","id":749,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/749\/pen-i-khoa-hoc-xa-hoi.html"}}},"40":{"name":"L\u1edbp 12","courses":{"130":{"fullname":"Ng\u1eef v\u0103n","shortname":"Ng\u1eef v\u0103n 12","subject":"28","visible":"1","id":130,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/130\/ngu-van-12.html"},"134":{"fullname":"To\u00e1n","shortname":"C\u01a1 b\u1ea3n 12","subject":"27","visible":"1","id":134,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/134\/co-ban-12.html"},"126":{"fullname":"Ti\u1ebfng Anh","shortname":"Ti\u1ebfng Anh 12","subject":"22","visible":"1","id":126,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/126\/tieng-anh-12.html"},"133":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 12","subject":"29","visible":"1","id":133,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/133\/vat-li-12.html"},"132":{"fullname":"H\u00f3a h\u1ecdc","shortname":"H\u00f3a h\u1ecdc 12","subject":"18","visible":"1","id":132,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/132\/hoa-hoc-12.html"},"131":{"fullname":"Sinh h\u1ecdc","shortname":"Sinh h\u1ecdc 12","subject":"24","visible":"1","id":131,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/131\/sinh-hoc-12.html"}}},"41":{"name":"L\u1edbp 11","courses":{"803":{"fullname":"Sinh h\u1ecdc 11 - Th\u1ea7y Nguy\u1ec5n Th\u00e0nh C\u00f4ng (2017 - 2018)","shortname":"Sinh h\u1ecdc 11 - Th\u1ea7y Nguy\u1ec5n Th\u00e0nh C\u00f4ng (2017 - 2018)","subject":"24","visible":"1","id":803,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/803\/sinh-hoc-11-thay-nguyen-thanh-cong-2017-2018.html"},"139":{"fullname":"Ng\u1eef v\u0103n","shortname":"Ng\u1eef v\u0103n 11","subject":"28","visible":"1","id":139,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/139\/ngu-van-11.html"},"143":{"fullname":"To\u00e1n","shortname":"To\u00e1n 11","subject":"27","visible":"1","id":143,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/143\/toan-11.html"},"136":{"fullname":"Ti\u1ebfng Anh","shortname":"Ti\u1ebfng Anh 11","subject":"22","visible":"1","id":136,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/136\/tieng-anh-11.html"},"142":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 11","subject":"29","visible":"1","id":142,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/142\/vat-li-11.html"},"141":{"fullname":"H\u00f3a h\u1ecdc","shortname":"H\u00f3a h\u1ecdc 11","subject":"18","visible":"1","id":141,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/141\/hoa-hoc-11.html"}}},"42":{"name":"L\u1edbp 10 ","courses":{"148":{"fullname":"Ng\u1eef v\u0103n 10 ","shortname":"Ng\u1eef v\u0103n 10 ","subject":"28","visible":"1","id":148,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/148\/ngu-van-10.html"},"306":{"fullname":"To\u00e1n","shortname":"To\u00e1n 10","subject":"27","visible":"1","id":306,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/306\/toan-10.html"},"145":{"fullname":"Ti\u1ebfng Anh","shortname":"Ti\u1ebfng Anh 10","subject":"22","visible":"1","id":145,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/145\/tieng-anh-10.html"},"151":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 10","subject":"29","visible":"1","id":151,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/151\/vat-li-10.html"},"150":{"fullname":"H\u00f3a h\u1ecdc","shortname":"H\u00f3a h\u1ecdc 10","subject":"18","visible":"1","id":150,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/150\/hoa-hoc-10.html"}}},"60":{"name":"Luy\u1ec7n thi v\u00e0o 10","courses":{"712":{"fullname":"Ti\u1ebfng Anh","shortname":"Luy\u1ec7n thi v\u00e0o l\u1edbp 10 m\u00f4n Ti\u1ebfng Anh (GV: th\u1ea7y Nguy\u1ec5n Danh Chi\u1ebfn)","subject":"22","visible":"1","id":712,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/712\/luyen-thi-vao-lop-10-mon-tieng-anh-gv-thay-nguyen-danh-chien.html"},"610":{"fullname":"Ng\u1eef v\u0103n","shortname":"Luy\u1ec7n thi v\u00e0o l\u1edbp 10 m\u00f4n V\u0103n (GV: c\u00f4 Nguy\u1ec5n Th\u1ecb Thu Trang)","subject":"28","visible":"1","id":610,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/610\/luyen-thi-vao-lop-10-mon-van-gv-co-nguyen-thi-thu-trang.html"},"524":{"fullname":"To\u00e1n","shortname":"C\u00e1c kh\u00f3a luy\u1ec7n thi v\u00e0o l\u1edbp 10 m\u00f4n To\u00e1n","subject":"27","visible":"1","id":524,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/524\/cac-khoa-luyen-thi-vao-lop-10-mon-toan.html"}}},"19":{"name":"L\u1edbp 9","courses":{"818":{"fullname":"Sinh h\u1ecdc","shortname":"Sinh h\u1ecdc 9","subject":"24","visible":"1","id":818,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/818\/sinh-hoc-9.html"},"817":{"fullname":"L\u1ecbch s\u1eed","shortname":"L\u1ecbch s\u1eed 9","subject":"23","visible":"1","id":817,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/817\/lich-su-9.html"},"508":{"fullname":"Ng\u1eef v\u0103n","shortname":"Ng\u1eef v\u0103n 9","subject":"28","visible":"1","id":508,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/508\/ngu-van-9.html"},"473":{"fullname":"To\u00e1n","shortname":"To\u00e1n 9","subject":"27","visible":"1","id":473,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/473\/toan-9.html"},"765":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 9","subject":"29","visible":"1","id":765,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/765\/vat-li-9.html"},"431":{"fullname":"Ti\u1ebfng Anh","shortname":"Ti\u1ebfng Anh 9","subject":"22","visible":"1","id":431,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/431\/tieng-anh-9.html"},"351":{"fullname":"H\u00f3a h\u1ecdc","shortname":"H\u00f3a h\u1ecdc 9","subject":"18","visible":"1","id":351,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/351\/hoa-hoc-9.html"}}},"20":{"name":"L\u1edbp 8","courses":{"815":{"fullname":"L\u1ecbch s\u1eed","shortname":"L\u1ecbch s\u1eed 8","subject":"23","visible":"1","id":815,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/815\/lich-su-8.html"},"814":{"fullname":"Sinh h\u1ecdc","shortname":"Sinh h\u1ecdc 8","subject":"24","visible":"1","id":814,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/814\/sinh-hoc-8.html"},"437":{"fullname":"Ng\u1eef v\u0103n","shortname":"Ng\u1eef v\u0103n 8","subject":"28","visible":"1","id":437,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/437\/ngu-van-8.html"},"455":{"fullname":"To\u00e1n","shortname":"To\u00e1n 8","subject":"27","visible":"1","id":455,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/455\/toan-8.html"},"517":{"fullname":"Ti\u1ebfng Anh","shortname":"Ti\u1ebfng Anh 8","subject":"22","visible":"1","id":517,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/517\/tieng-anh-8.html"},"515":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 8","subject":"29","visible":"1","id":515,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/515\/vat-li-8.html"},"461":{"fullname":"H\u00f3a h\u1ecdc","shortname":"H\u00f3a h\u1ecdc 8","subject":"18","visible":"1","id":461,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/461\/hoa-hoc-8.html"}}},"34":{"name":"L\u1edbp 7","courses":{"823":{"fullname":"L\u1ecbch s\u1eed","shortname":"L\u1ecbch s\u1eed 7","subject":"23","visible":"1","id":823,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/823\/lich-su-7.html"},"822":{"fullname":"Sinh h\u1ecdc","shortname":"S\u1ecbnh h\u1ecdc 7","subject":"24","visible":"1","id":822,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/822\/sinh-hoc-7.html"},"464":{"fullname":"Ng\u1eef v\u0103n","shortname":"Ng\u1eef v\u0103n 7","subject":"28","visible":"1","id":464,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/464\/ngu-van-7.html"},"462":{"fullname":"To\u00e1n","shortname":"To\u00e1n 7","subject":"27","visible":"1","id":462,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/462\/toan-7.html"},"466":{"fullname":"Ti\u1ebfng Anh","shortname":"Ti\u1ebfng Anh 7","subject":"22","visible":"1","id":466,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/466\/tieng-anh-7.html"},"465":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 7","subject":"29","visible":"1","id":465,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/465\/vat-li-7.html"}}},"35":{"name":"L\u1edbp 6","courses":{"820":{"fullname":"Sinh h\u1ecdc","shortname":"Sinh h\u1ecdc 6","subject":"24","visible":"1","id":820,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/820\/sinh-hoc-6.html"},"819":{"fullname":"L\u1ecbch s\u1eed","shortname":"L\u1ecbch s\u1eed 6","subject":"23","visible":"1","id":819,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/819\/lich-su-6.html"},"113":{"fullname":"Ng\u1eef v\u0103n","shortname":"Ng\u1eef v\u0103n l\u1edbp 6","subject":"28","visible":"1","id":113,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/113\/ngu-van-lop-6.html"},"281":{"fullname":"To\u00e1n","shortname":"To\u00e1n 6","subject":"27","visible":"1","id":281,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/281\/toan-6.html"},"468":{"fullname":"Ti\u1ebfng Anh","shortname":"C\u00e1c kh\u00f3a m\u00f4n Ti\u1ebfng anh l\u1edbp 6","subject":"22","visible":"1","id":468,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/468\/cac-khoa-mon-tieng-anh-lop-6.html"},"514":{"fullname":"V\u1eadt l\u00ed","shortname":"V\u1eadt l\u00ed 6","subject":"29","visible":"1","id":514,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/514\/vat-li-6.html"}}},"54":{"name":"L\u1edbp 5","courses":{"519":{"fullname":"Ti\u1ebfng Vi\u1ec7t","shortname":"Ti\u1ebfng Vi\u1ec7t l\u1edbp 5","subject":"28","visible":"1","id":519,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/519\/tieng-viet-lop-5.html"},"470":{"fullname":"To\u00e1n","shortname":"To\u00e1n 5","subject":"27","visible":"1","id":470,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/470\/toan-5.html"}}},"63":{"name":"L\u1edbp 4","courses":{"381":{"fullname":"Ti\u1ebfng Vi\u1ec7t","shortname":"Chuy\u00ean \u0111\u1ec1 Ti\u1ebfng Vi\u1ec7t l\u1edbp 4 (GV: c\u00f4 Nguy\u1ec5n Thanh H\u1eb1ng)","subject":"28","visible":"1","id":381,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/381\/chuyen-de-tieng-viet-lop-4-gv-co-nguyen-thanh-hang.html"},"513":{"fullname":"To\u00e1n","shortname":"To\u00e1n 4","subject":"27","visible":"1","id":513,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/513\/toan-4.html"}}},"67":{"name":"L\u1edbp 3","courses":{"420":{"fullname":"To\u00e1n","shortname":"To\u00e1n b\u1ed3i d\u01b0\u1ee1ng l\u1edbp 3 (GV: c\u00f4 Nguy\u1ec5n Th\u1ecb Hoa)","subject":"27","visible":"1","id":420,"rewriteurl":"https:\/\/hocmai.vn\/khoa-hoc-truc-tuyen\/420\/toan-boi-duong-lop-3-gv-co-nguyen-thi-hoa.html"}}}}');
        var $cateID = $(element).val();
        if($catemap[$cateID]){
            var courses = $catemap[$cateID].courses
            $('#chose-course').html('');
            for (var i in courses) 
            {
                $('#chose-course').append('<option value="'+courses[i].rewriteurl+'">'+courses[i].fullname+'</option>');
            }
        }
        return false;
    }
    function course_filter(){
        var $url = $('#chose-course').val();
        window.location.href = $url;
        return false;
    }
    chose_cate($('#chose-cate'));
</script>
                        </div>
                </div>
                        <div class="main-wrapper">
                <div class="wrapper-content">
                    <!-- content -->
                    <div class="section" id="learn-online">
    <div class="section-content">
        <div class="section" id="support-thpt">
            <div class="section-head">
                <div class="section-head-name">
                    <a href="dstintuc" target="_blank"><div>BẢNG JUNIOR - CKCIT</div></a>
                    <a class="shn-bt-wr active gg-analytic" data-event="course-thpt-hot" onclick="get_course(this,2,2);" target="_blank"><div class="shn-bt">Nóng</div></a>
                    <a class="shn-bt-wr gg-analytic" data-event="course-thpt-new" onclick="get_course(this,1,2);" target="_blank"><div class="shn-bt">Mới</div></a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="section-content">
                
<div id="rg-gallery" class="rg-gallery">
    <div class="loading" style="">
        <img src="public/home/img/loading.gif" style="margin-top: -55px;">
    </div>
    <div class="rg-thumbs">
        <!-- Elastislide Carousel Thumbnail Viewer -->
        <div class="slick-carousel-wrapper" course="1" data-item-width="264" data-margin="13">
            <!--div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
            </div -->
            <div class="slick-carousel">
                                        <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/444/pen-m-vat-li-k-g-thay-do-ngoc-ha.html">
                                    <img src="course/images/pen-m-vat-li-k-g-thay-do-ngoc-ha-1491221550.png" alt="PEN-M Vật lí (K-G) - Thầy Đỗ Ngọc Hà"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Vật lí (K-G) - Thầy Đỗ Ngọc Hà" href="khoa-hoc-truc-tuyen/444/pen-m-vat-li-k-g-thay-do-ngoc-ha.html">PEN-M Vật lí (K-G) - Thầy Đỗ Ngọc Hà</a>
                                </h3>
                                <!-- <p>Dành cho các sĩ tử muốn hạ gục môn Toán với điểm số cao trong kì thi THPT quốc gia 2017. Giờ học thoải mái, bài giảng dễ hiểu cùng thầy Đỗ Ngọc Hà &quot;đẹp trai&quot; của chúng ta nào. Học ngay!
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/161/thay-do-ngoc-ha.html" target="_blank">Đỗ Ngọc Hà</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/444/pen-m-vat-li-k-g-thay-do-ngoc-ha.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/441/pen-m-hoa-hoc-k-g-thay-vu-khac-ngoc.html">
                                    <img src="course/images/pen-m-hoa-hoc-k-g-thay-vu-khac-ngoc-1491217042.png" alt="PEN-M Hóa học (K-G) - Thầy Vũ Khắc Ngọc"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Hóa học (K-G) - Thầy Vũ Khắc Ngọc" href="khoa-hoc-truc-tuyen/441/pen-m-hoa-hoc-k-g-thay-vu-khac-ngoc.html">PEN-M Hóa học (K-G) - Thầy Vũ Khắc Ngọc</a>
                                </h3>
                                <!-- <p> Dành cho các sĩ tử muốn hạ gục môn Hóa với điểm số cao trong kì thi THPT quốc gia 2017. Giờ học thoải mái, bài giảng dễ hiểu cùng thầy Vũ Khắc Ngọc. Xem ngay!
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/90/thay-vu-khac-ngoc.html" target="_blank">Vũ Khắc Ngọc</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/441/pen-m-hoa-hoc-k-g-thay-vu-khac-ngoc.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/443/pen-m-toan-k-g-thay-le-ba-tran-phuong.html">
                                    <img src="course/images/pen-m-toan-k-g-thay-le-ba-tran-phuong-1491220144.png" alt="PEN-M Toán (K-G) - Thầy Lê Bá Trần Phương"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Toán (K-G) - Thầy Lê Bá Trần Phương" href="khoa-hoc-truc-tuyen/443/pen-m-toan-k-g-thay-le-ba-tran-phuong.html">PEN-M Toán (K-G) - Thầy Lê Bá Trần Phương</a>
                                </h3>
                                <!-- <p> Nắm chắc 6-8 điểm thi THPT quốc gia trong 45-60 ngày trước kỳ thi với PEN-M cùng thầy Lê Bá Trần Phương &quot;bụng bự&quot; </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/91/thay-le-ba-tran-phuong.html" target="_blank">Lê Bá  Trần Phương</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/443/pen-m-toan-k-g-thay-le-ba-tran-phuong.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/447/pen-m-sinh-hoc-k-g-thay-nguyen-thanh-cong.html">
                                    <img src="course/images/pen-m-sinh-hoc-k-g-thay-nguyen-thanh-cong-1491218589.png" alt="PEN-M Sinh học (K-G) - Thầy Nguyễn Thành Công"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Sinh học (K-G) - Thầy Nguyễn Thành Công" href="khoa-hoc-truc-tuyen/447/pen-m-sinh-hoc-k-g-thay-nguyen-thanh-cong.html">PEN-M Sinh học (K-G) - Thầy Nguyễn Thành Công</a>
                                </h3>
                                <!-- <p>Dành cho các sĩ tử muốn đạt 8-10 điểm Sinh học trong kì thi THPT quốc gia 2017.
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/126/thay-nguyen-thanh-cong.html" target="_blank">Nguyễn Thành Công</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/447/pen-m-sinh-hoc-k-g-thay-nguyen-thanh-cong.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/347/pen-m-toan-k-g-nguyen-thanh-tung.html">
                                    <img src="course/images/pen-m-toan-nguyen-thanh-tung-1491220358.png" alt="PEN-M Toán (K-G) - Nguyễn Thanh Tùng"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Toán (K-G) - Nguyễn Thanh Tùng" href="khoa-hoc-truc-tuyen/347/pen-m-toan-k-g-nguyen-thanh-tung.html">PEN-M Toán (K-G) - Nguyễn Thanh Tùng</a>
                                </h3>
                                <!-- <p> Dành cho các sĩ tử muốn hạ gục môn Toán với điểm số cao trong kì thi THPT quốc gia 2017. Giờ học thoải mái, bài giảng dễ hiểu cùng thầy Nguyễn Thanh Tùng. Học ngay! </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/169/thay-nguyen-thanh-tung.html" target="_blank">Nguyễn Thanh Tùng</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/347/pen-m-toan-k-g-nguyen-thanh-tung.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/609/pen-m-toan-k-g-thay-nguyen-ba-tuan.html">
                                    <img src="course/images/pen-m-toan-k-g-thay-nguyen-ba-tuan-1491219761.png" alt="PEN-M Toán (K-G) - Thầy Nguyễn Bá Tuấn"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Toán (K-G) - Thầy Nguyễn Bá Tuấn" href="khoa-hoc-truc-tuyen/609/pen-m-toan-k-g-thay-nguyen-ba-tuan.html">PEN-M Toán (K-G) - Thầy Nguyễn Bá Tuấn</a>
                                </h3>
                                <!-- <p> Dành cho sĩ tử tham dự kì thi THPT quốc gia 2017. Chắc kiến thức, vững bài tập cùng thạc sĩ Nguyễn Bá Tuấn đã có trên 10 năm kinh nghiệm ôn thi Toán. Xem ngay! </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/163/thay-nguyen-ba-tuan.html" target="_blank">Nguyễn Bá Tuấn</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/609/pen-m-toan-k-g-thay-nguyen-ba-tuan.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/608/pen-m-tieng-anh-k-g-co-huong-fiona.html">
                                    <img src="course/images/pen-m-tieng-anh-k-g-co-huong-fiona-1491221880.png" alt="PEN-M Tiếng Anh (K-G) - Cô Hương Fiona"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Tiếng Anh (K-G) - Cô Hương Fiona" href="khoa-hoc-truc-tuyen/608/pen-m-tieng-anh-k-g-co-huong-fiona.html">PEN-M Tiếng Anh (K-G) - Cô Hương Fiona</a>
                                </h3>
                                <!-- <p> Dành cho sĩ tử tham dự kì thi THPT quốc gia 2017. Luyện, nâng cao kỹ năng làm bài nhanh và chính xác môn Tiếng Anh với cô Hương Fiona. Xem ngay!
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/167/co-huong-fiona.html" target="_blank">Hương Fiona</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/608/pen-m-tieng-anh-k-g-co-huong-fiona.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/585/pen-m-hoa-hoc-tb-tbk-thay-le-dang-khuong.html">
                                    <img src="course/images/pen-m-hoa-hoc-tb-tbk-thay-le-dang-khuong-1491216411.png" alt="PEN-M Hóa học (TB-TBK) - Thầy Lê Đăng Khương"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Hóa học (TB-TBK) - Thầy Lê Đăng Khương" href="khoa-hoc-truc-tuyen/585/pen-m-hoa-hoc-tb-tbk-thay-le-dang-khuong.html">PEN-M Hóa học (TB-TBK) - Thầy Lê Đăng Khương</a>
                                </h3>
                                <!-- <p> Nắm chắc 6-8 điểm thi THPT quốc gia trong 45-60 ngày trước kỳ thi với PEN-M thầy Lê Đăng Khương.

</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/171/thay-le-dang-khuong.html" target="_blank">Lê Đăng Khương</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/585/pen-m-hoa-hoc-tb-tbk-thay-le-dang-khuong.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/773/pen-m-sinh-hoc-tb-tbk-thay-dinh-duc-hien.html">
                                    <img src="course/images/pen-m-sinh-hoc-tb-tbk-thay-dinh-duc-hien-1491218003.png" alt="PEN-M Sinh học (TB-TBK) - Thầy Đinh Đức Hiền"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Sinh học (TB-TBK) - Thầy Đinh Đức Hiền" href="khoa-hoc-truc-tuyen/773/pen-m-sinh-hoc-tb-tbk-thay-dinh-duc-hien.html">PEN-M Sinh học (TB-TBK) - Thầy Đinh Đức Hiền</a>
                                </h3>
                                <!-- <p> Dành cho các sĩ tử muốn đạt 6-8 điểm Sinh học trong kì thi THPT quốc gia 2017.
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/187/thay-dinh-duc-hien.html" target="_blank">Đinh Đức Hiền</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/773/pen-m-sinh-hoc-tb-tbk-thay-dinh-duc-hien.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/442/pen-m-ngu-van-tb-tbk-thay-pham-huu-cuong.html">
                                    <img src="course/images/pen-m-ngu-van-tb-tbk-thay-pham-huu-cuong-1491220331.png" alt="PEN-M Ngữ văn (TB-TBK) - Thầy Phạm Hữu Cường"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Ngữ văn (TB-TBK) - Thầy Phạm Hữu Cường" href="khoa-hoc-truc-tuyen/442/pen-m-ngu-van-tb-tbk-thay-pham-huu-cuong.html">PEN-M Ngữ văn (TB-TBK) - Thầy Phạm Hữu Cường</a>
                                </h3>
                                <!-- <p> Dành cho học sinh tham gia kì thi THPT quốc gia 2017, nắm chắc kiến thức văn học cùng thầy Hữu Cường-Chuyên bồi dưỡng học sinh giỏi Văn.
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/120/thay-pham-huu-cuong.html" target="_blank">Phạm Hữu Cường</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/442/pen-m-ngu-van-tb-tbk-thay-pham-huu-cuong.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/248/luyen-thi-thpt-quoc-gia-pen-m-mon-ngu-van-co-trinh-thu-tuyet.html">
                                    <img src="course/images/luyen-thi-thpt-quoc-gia-pen-m-mon-ngu-van-co-trinh-thu-tuyet-1491220773.png" alt="Luyện thi THPT quốc gia PEN-M: môn Ngữ văn (Cô Trịnh Thu Tuyết)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="Luyện thi THPT quốc gia PEN-M: môn Ngữ văn (Cô Trịnh Thu Tuyết)" href="khoa-hoc-truc-tuyen/248/luyen-thi-thpt-quoc-gia-pen-m-mon-ngu-van-co-trinh-thu-tuyet.html">Luyện thi THPT quốc gia PEN-M: môn Ngữ văn (Cô Trịnh Thu Tuyết)</a>
                                </h3>
                                <!-- <p>Ôn luyện chọn lọc kiến thức cần thiết cho kỳ thi THPT quốc gia môn Ngữ văn 2 tháng cuối với PEN-M cô Trịnh Thu Tuyết.
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/88/co-trinh-thu-tuyet.html" target="_blank">Trịnh Thu Tuyết</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/248/luyen-thi-thpt-quoc-gia-pen-m-mon-ngu-van-co-trinh-thu-tuyet.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/767/pen-m-toan-k-g-thay-le-anh-tuan.html">
                                    <img src="course/images/pen-m-toan-k-g-thay-le-anh-tuan-1491219210.png" alt="PEN-M Toán (K-G) - Thầy Lê Anh Tuấn"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Toán (K-G) - Thầy Lê Anh Tuấn" href="khoa-hoc-truc-tuyen/767/pen-m-toan-k-g-thay-le-anh-tuan.html">PEN-M Toán (K-G) - Thầy Lê Anh Tuấn</a>
                                </h3>
                                <!-- <p> Dành cho các sĩ tử muốn hạ gục môn Toán với điểm số cao trong kì thi THPT quốc gia 2017. Giờ học thoải mái, bài giảng dễ hiểu cùng thầy Lê Anh Tuấn. Học ngay!
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/135/thay-le-anh-tuan.html" target="_blank">Lê Anh Tuấn</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/767/pen-m-toan-k-g-thay-le-anh-tuan.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/611/pen-m-tieng-anh-tb-tbk-co-nguyet-ca.html">
                                    <img src="course/images/pen-m-tieng-anh-tb-tbk-co-nguyet-ca-1491220818.png" alt="PEN-M Tiếng Anh (TB-TBK) - Cô Nguyệt Ca"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Tiếng Anh (TB-TBK) - Cô Nguyệt Ca" href="khoa-hoc-truc-tuyen/611/pen-m-tieng-anh-tb-tbk-co-nguyet-ca.html">PEN-M Tiếng Anh (TB-TBK) - Cô Nguyệt Ca</a>
                                </h3>
                                <!-- <p> Nắm chắc 6-8 điểm thi THPT quốc gia trong 45-60 ngày trước kỳ thi với PEN-M cô Nguyệt Ca.
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/159/co-nguyet-ca.html" target="_blank">Nguyệt Ca</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/611/pen-m-tieng-anh-tb-tbk-co-nguyet-ca.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/766/pen-m-toan-tb-tbk-thay-luu-huy-thuong.html">
                                    <img src="course/images/pen-m-toan-tb-tbk-thay-luu-huy-thuong-1491218182.png" alt="PEN-M Toán (TB-TBK) - Thầy Lưu Huy Thưởng"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Toán (TB-TBK) - Thầy Lưu Huy Thưởng" href="khoa-hoc-truc-tuyen/766/pen-m-toan-tb-tbk-thay-luu-huy-thuong.html">PEN-M Toán (TB-TBK) - Thầy Lưu Huy Thưởng</a>
                                </h3>
                                <!-- <p> Nắm chắc 6-8 điểm thi THPT quốc gia trong 45-60 ngày trước kỳ thi với PEN-M thầy Lưu Huy Thưởng. </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/147/thay-luu-huy-thuong.html" target="_blank">Lưu Huy Thưởng</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/766/pen-m-toan-tb-tbk-thay-luu-huy-thuong.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/768/pen-m-vat-li-k-g-thay-tran-duc.html">
                                    <img src="course/images/pen-m-vat-li-thay-tran-duc-1491222369.png" alt="PEN-M Vật lí (K-G) - Thầy Trần Đức"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Vật lí (K-G) - Thầy Trần Đức" href="khoa-hoc-truc-tuyen/768/pen-m-vat-li-k-g-thay-tran-duc.html">PEN-M Vật lí (K-G) - Thầy Trần Đức</a>
                                </h3>
                                <!-- <p>Nắm chắc 6-8 điểm thi THPT quốc gia trong 45-60 ngày trước kỳ thi với PEN-M thầy Trần Đức.

</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/229/thay-tran-duc.html" target="_blank">Trần Đức</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/768/pen-m-vat-li-k-g-thay-tran-duc.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/772/pen-m-khoa-hoc-xa-hoi-thay-ha-co-huong-thay-nang.html">
                                    <img src="course/images/pen-m-khoa-hoc-xa-hoi-thay-ha-co-huong-thay-nang-1491219730.png" alt="PEN-M Khoa học xã hội - Thầy Hà, Cô Hương, Thầy Năng"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-M Khoa học xã hội - Thầy Hà, Cô Hương, Thầy Năng" href="khoa-hoc-truc-tuyen/772/pen-m-khoa-hoc-xa-hoi-thay-ha-co-huong-thay-nang.html">PEN-M Khoa học xã hội - Thầy Hà, Cô Hương, Thầy Năng</a>
                                </h3>
                                <!-- <p>Vượt qua kỳ thi tốt nghiệp THPT tổ hợp Khoa học xã hội với PEN-M.
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/168/co-le-thi-thu-huong.html" target="_blank">Lê Thị Thu Hương</a>, <a href="giao-vien/226/thay-tran-van-nang.html" target="_blank">Trần Văn Năng</a>, <a href="giao-vien/227/thay-nguyen-manh-ha.html" target="_blank">Nguyễn Mạnh Hà</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/772/pen-m-khoa-hoc-xa-hoi-thay-ha-co-huong-thay-nang.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>

                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" href="khoa-hoc-truc-tuyen/425/pen-i-hoa-hoc-k-g-thay-vu-khac-ngoc.html">
                                    <img src="course/images/pen-i-mon-hoa-hoc-thay-vu-khac-ngoc-1479980865.png" alt="PEN-I Hoá học (K-G) - Thầy Vũ Khắc Ngọc"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt" title="PEN-I Hoá học (K-G) - Thầy Vũ Khắc Ngọc" href="khoa-hoc-truc-tuyen/425/pen-i-hoa-hoc-k-g-thay-vu-khac-ngoc.html">PEN-I Hoá học (K-G) - Thầy Vũ Khắc Ngọc</a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/90/thay-vu-khac-ngoc.html" target="_blank">Vũ Khắc Ngọc</a></span></p>
                                    
                                        <p class="course-fee">&nbsp;</span></p>

                                    <a href="khoa-hoc-truc-tuyen/425/pen-i-hoa-hoc-k-g-thay-vu-khac-ngoc.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thpt">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                                </div>
        </div>
        <!-- End Elastislide Carousel Thumbnail Viewer -->
    </div><!-- rg-thumbs -->
</div><!-- rg-gallery -->            </div>
        </div>
        <div class="section" id="support-thcs">
            <div class="section-head">
                <div class="section-head-name">
                    <a href="dstintuc" target="_blank"><div>BẢNG SENIOR - CKCIT</div></a>
                    <a class="shn-bt-wr active gg-analytic" data-event="course-thcs-hot" onclick="get_course(this,2,1);" target="_blank"><div class="shn-bt">Nóng</div></a>
                    <a class="shn-bt-wr gg-analytic" data-event="course-thcs-new" onclick="get_course(this,1,1);" target="_blank"><div class="shn-bt">Mới</div></a>

                </div>
            </div>
            <div class="clear"></div>
            <div class="section-content">
                
<div id="rg-gallery" class="rg-gallery">
    <div class="loading" style="">
        <img src="public/home/img/loading.gif" style="margin-top: -55px;">
    </div>
    <div class="rg-thumbs">
        <!-- Elastislide Carousel Thumbnail Viewer -->
        <div class="slick-carousel-wrapper" course="1" data-item-width="264" data-margin="13">
            <div class="slick-carousel">
                                        <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/663/luyen-thi-vao-lop-10-chuyen-ct1-gv-thay-hong-tri-quang.html">
                                    <img src="course/images/luyen-thi-vao-lop-10-chuyen-ct1-gv-thay-hong-tri-quang-1471405823.png" alt="Luyện thi vào lớp 10 Chuyên CT1 (GV: thầy Hồng Trí Quang)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Luyện thi vào lớp 10 Chuyên CT1 (GV: thầy Hồng Trí Quang)" href="khoa-hoc-truc-tuyen/663/luyen-thi-vao-lop-10-chuyen-ct1-gv-thay-hong-tri-quang.html">Luyện thi vào lớp 10 Chuyên CT1 (GV: thầy Hồng Trí Quang)</a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/191/thay-hong-tri-quang.html" target="_blank">Hồng Trí Quang</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>900.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/663/luyen-thi-vao-lop-10-chuyen-ct1-gv-thay-hong-tri-quang.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/664/luyen-thi-vao-lop-10-chuyen-ct2-gv-thay-hong-tri-quang.html">
                                    <img src="course/images/luyen-thi-vao-lop-10-chuyen-ct2-gv-thay-hong-tri-quang-1471405840.png" alt="Luyện thi vào lớp 10 Chuyên CT2 (GV: thầy Hồng Trí Quang)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Luyện thi vào lớp 10 Chuyên CT2 (GV: thầy Hồng Trí Quang)" href="khoa-hoc-truc-tuyen/664/luyen-thi-vao-lop-10-chuyen-ct2-gv-thay-hong-tri-quang.html">Luyện thi vào lớp 10 Chuyên CT2 (GV: thầy Hồng Trí Quang)</a>
                                </h3>
                                <!-- <p> Dành cho các bạn thi chuyên toán vòng 2 (và toán vòng 1 của trường Khoa học tự nhiên thuộc ĐHQG HN).
</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/191/thay-hong-tri-quang.html" target="_blank">Hồng Trí Quang</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>1.800.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/664/luyen-thi-vao-lop-10-chuyen-ct2-gv-thay-hong-tri-quang.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/362/on-luyen-toan-9-co-nguyen-thi-hue.html">
                                    <img src="course/images/chuyen-de-toan-lop-9-gv-co-nguyen-thi-hue-1464649644.png" alt="Ôn luyện Toán 9 - Cô Nguyễn Thị Huệ "/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Ôn luyện Toán 9 - Cô Nguyễn Thị Huệ " href="khoa-hoc-truc-tuyen/362/on-luyen-toan-9-co-nguyen-thi-hue.html">Ôn luyện Toán 9 - Cô Nguyễn Thị Huệ </a>
                                </h3>

                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/183/co-nguyen-thi-hue.html" target="_blank">Nguyễn Thị Huệ</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>500.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/362/on-luyen-toan-9-co-nguyen-thi-hue.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>

                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/507/nang-cao-toan-7-thay-ta-anh-son.html">
                                    <img src="course/images/toan-nang-cao-lop-7-gv-thay-ta-anh-son.png" alt="Nâng cao Toán 7 - Thầy Tạ Anh Sơn"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Nâng cao Toán 7 - Thầy Tạ Anh Sơn" href="khoa-hoc-truc-tuyen/507/nang-cao-toan-7-thay-ta-anh-son.html">Nâng cao Toán 7 - Thầy Tạ Anh Sơn</a>
                                </h3>

                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/158/thay-ta-anh-son.html" target="_blank">Tạ Anh Sơn</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>700.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/507/nang-cao-toan-7-thay-ta-anh-son.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>

                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/647/nang-cao-ngu-van-8-co-nguyen-thi-thu-trang.html">
                                    <img src="course/images/bo-tro-va-nang-cao-ngu-van-lop-8-gv-co-nguyen-thu-trang-1464235555.png" alt="Nâng cao Ngữ văn 8 - Cô Nguyễn Thị Thu Trang"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Nâng cao Ngữ văn 8 - Cô Nguyễn Thị Thu Trang" href="khoa-hoc-truc-tuyen/647/nang-cao-ngu-van-8-co-nguyen-thi-thu-trang.html">Nâng cao Ngữ văn 8 - Cô Nguyễn Thị Thu Trang</a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">&nbsp;</p>
                                    
                                        <p class="course-fee">Học phí: <span>400.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/647/nang-cao-ngu-van-8-co-nguyen-thi-thu-trang.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/649/luyen-tap-toan-7-co-nguyen-thu-trang.html">
                                    <img src="course/images/luyen-tap-toan-co-ban-lop-7-gv-co-nguyen-thu-trang-1471405485.png" alt="Luyện tập Toán 7 - Cô Nguyễn Thu Trang"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Luyện tập Toán 7 - Cô Nguyễn Thu Trang" href="khoa-hoc-truc-tuyen/649/luyen-tap-toan-7-co-nguyen-thu-trang.html">Luyện tập Toán 7 - Cô Nguyễn Thu Trang</a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/185/co-nguyen-thu-trang.html" target="_blank">Nguyễn Thu Trang</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>300.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/649/luyen-tap-toan-7-co-nguyen-thu-trang.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/654/on-luyen-vat-li-6-co-bui-thi-tuyet.html">
                                    <img src="course/images/on-luyen-vat-li-lop-6-gv-bui-thi-tuyet-1469698712.png" alt="Ôn luyện Vật lí 6 - Cô Bùi Thị Tuyết "/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Ôn luyện Vật lí 6 - Cô Bùi Thị Tuyết " href="khoa-hoc-truc-tuyen/654/on-luyen-vat-li-6-co-bui-thi-tuyet.html">Ôn luyện Vật lí 6 - Cô Bùi Thị Tuyết </a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/194/co-bui-thi-tuyet.html" target="_blank">Bùi Thị Tuyết</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>300.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/654/on-luyen-vat-li-6-co-bui-thi-tuyet.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/744/vat-li-8-hoc-ky-ii-thay-vu-van-tuan.html">
                                    <img src="course/images/vat-li-co-ban-lop-8-hoc-ky-ii-1480584241.png" alt="Vật lí 8 (Học kỳ II) - Thầy Vũ Văn Tuân"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Vật lí 8 (Học kỳ II) - Thầy Vũ Văn Tuân" href="khoa-hoc-truc-tuyen/744/vat-li-8-hoc-ky-ii-thay-vu-van-tuan.html">Vật lí 8 (Học kỳ II) - Thầy Vũ Văn Tuân</a>
                                </h3>

                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/172/thay-vu-van-tuan.html" target="_blank">Vũ Văn Tuân</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>210.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/744/vat-li-8-hoc-ky-ii-thay-vu-van-tuan.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/734/chuyen-de-ky-thuat-tao-hinh-thay-tran-tuan-viet.html">
                                    <img src="course/images/chuyen-de-ky-thuat-tao-hinh-gv-thay-tran-tuan-viet-1474968834.png" alt="Chuyên đề Kỹ thuật tạo hình - Thầy Trần Tuấn Việt"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Chuyên đề Kỹ thuật tạo hình - Thầy Trần Tuấn Việt" href="khoa-hoc-truc-tuyen/734/chuyen-de-ky-thuat-tao-hinh-thay-tran-tuan-viet.html">Chuyên đề Kỹ thuật tạo hình - Thầy Trần Tuấn Việt</a>
                                </h3>
                                <!-- <p> Chuyên đề. Kỹ thuật tạo hình (GV: thầy Trần Tuấn Việt) </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/195/thay-tran-tuan-viet.html" target="_blank">Trần Tuấn Việt</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>80.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/734/chuyen-de-ky-thuat-tao-hinh-thay-tran-tuan-viet.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/711/luyen-thi-vao-lop-10-mon-toan-gv-thay-dinh-van-toan.html">
                                    <img src="course/images/luyen-thi-vao-lop-10-mon-toan-gv-thay-dinh-van-toan-1471404530.png" alt="Luyện thi vào lớp 10 môn Toán (GV: thầy Đinh Văn Toản)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Luyện thi vào lớp 10 môn Toán (GV: thầy Đinh Văn Toản)" href="khoa-hoc-truc-tuyen/711/luyen-thi-vao-lop-10-mon-toan-gv-thay-dinh-van-toan.html">Luyện thi vào lớp 10 môn Toán (GV: thầy Đinh Văn Toản)</a>
                                </h3>

</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/225/thay-dinh-van-toan.html" target="_blank">Đinh Văn Toản</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>800.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/711/luyen-thi-vao-lop-10-mon-toan-gv-thay-dinh-van-toan.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/712/luyen-thi-vao-lop-10-mon-tieng-anh-gv-thay-nguyen-danh-chien.html">
                                    <img src="theme/new/images/cimg2.png" alt="Luyện thi vào lớp 10 môn Tiếng Anh (GV: thầy Nguyễn Danh Chiến)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Luyện thi vào lớp 10 môn Tiếng Anh (GV: thầy Nguyễn Danh Chiến)" href="khoa-hoc-truc-tuyen/712/luyen-thi-vao-lop-10-mon-tieng-anh-gv-thay-nguyen-danh-chien.html">Luyện thi vào lớp 10 môn Tiếng Anh (GV: thầy Nguyễn Danh Chiến)</a>
                                </h3>
                                <!-- <p> Đây là khóa học nền tảng, giúp học sinh luyện thi tiếng Anh cơ bản vào lớp 10 THPT, nhận diện các dạng bài thi, củng cố kiến thức, rèn luyện kỹ năng ngôn ngữ và phương pháp làm bài thi để đạt điểm cao.

</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/175/thay-nguyen-danh-chien.html" target="_blank">Nguyễn Danh Chiến</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>800.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/712/luyen-thi-vao-lop-10-mon-tieng-anh-gv-thay-nguyen-danh-chien.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" href="khoa-hoc-truc-tuyen/751/on-tap-hoc-ky-i-toan-9-thay-dinh-quoc-toan-2016-2017.html">
                                    <img src="course/images/on-tap-hoc-ky-i-mon-toan-lop-9-gv-thay-dinh-quoc-toan-1480583102.png" alt="Ôn tập học kỳ I Toán 9 - Thầy Đinh Quốc Toản (2016-2017)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs" title="Ôn tập học kỳ I Toán 9 - Thầy Đinh Quốc Toản (2016-2017)" href="khoa-hoc-truc-tuyen/751/on-tap-hoc-ky-i-toan-9-thay-dinh-quoc-toan-2016-2017.html">Ôn tập học kỳ I Toán 9 - Thầy Đinh Quốc Toản (2016-2017)</a>
                                </h3>
                                <!-- <p> Ôn tập học kỳ I môn Toán lớp 9 (GV: Thầy Đinh Quốc Toản) </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/225/thay-dinh-van-toan.html" target="_blank">Đinh Văn Toản</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>0 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/751/on-tap-hoc-ky-i-toan-9-thay-dinh-quoc-toan-2016-2017.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-thcs">Xem thêm</a>

                            </div>
                        </div>
                                </div>
        </div>
        <!-- End Elastislide Carousel Thumbnail Viewer -->
    </div><!-- rg-thumbs -->
</div><!-- rg-gallery -->            </div>
        </div>
        <div class="section" id="support-tieuhoc">
            <div class="section-head">
                <div class="section-head-name">
                    <a href="dstintuc" target="_blank"><div>Luật thi & thể lệ</div></a>
                    <a class="shn-bt-wr active gg-analytic" data-event="course-th-hot" onclick="get_course(this,2,3);" target="_blank"><div class="shn-bt">Nóng</div></a>
                    <a class="shn-bt-wr gg-analytic" data-event="course-th-new" onclick="get_course(this,1,3);" target="_blank"><div class="shn-bt">Mới</div></a>

                </div>
            </div>
            <div class="clear"></div>
            <div class="section-content">
                
<div id="rg-gallery" class="rg-gallery">
    <div class="loading" style="">
        <img src="public/home/img/loading.gif" style="margin-top: -55px;">
    </div>
    <div class="rg-thumbs">
        <!-- Elastislide Carousel Thumbnail Viewer -->
        <div class="slick-carousel-wrapper" course="1" data-item-width="264" data-margin="13">
            <!--div class="es-nav">
                <span class="es-nav-prev">Previous</span>
                <span class="es-nav-next">Next</span>
            </div -->
            <div class="slick-carousel">
                                        <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/393/toan-nang-cao-va-boi-duong-hsg-toan-lop-5-gv-thay-bui-minh-man.html">
                                    <img src="course/images/toan-boi-duong-lop-5-gv-thay-bui-minh-man.png" alt="Toán nâng cao và bồi dưỡng HSG Toán lớp 5 (GV: thầy Bùi Minh Mẫn)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Toán nâng cao và bồi dưỡng HSG Toán lớp 5 (GV: thầy Bùi Minh Mẫn)" href="khoa-hoc-truc-tuyen/393/toan-nang-cao-va-boi-duong-hsg-toan-lop-5-gv-thay-bui-minh-man.html">Toán nâng cao và bồi dưỡng HSG Toán lớp 5 (GV: thầy Bùi Minh Mẫn)</a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/154/thay-bui-minh-man.html" target="_blank">Bùi Minh Mẫn</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>600.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/393/toan-nang-cao-va-boi-duong-hsg-toan-lop-5-gv-thay-bui-minh-man.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/382/chuyen-de-toan-co-ban-lop-4-gv-co-phung-thu-hoa.html">
                                    <img src="course/images/toan.png" alt="Chuyên đề Toán cơ bản lớp 4 (GV: cô Phùng Thu Hòa)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Chuyên đề Toán cơ bản lớp 4 (GV: cô Phùng Thu Hòa)" href="khoa-hoc-truc-tuyen/382/chuyen-de-toan-co-ban-lop-4-gv-co-phung-thu-hoa.html">Chuyên đề Toán cơ bản lớp 4 (GV: cô Phùng Thu Hòa)</a>
                                </h3>

                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/138/co-phung-thu-hoa.html" target="_blank">Phùng Thu Hòa</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>500.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/382/chuyen-de-toan-co-ban-lop-4-gv-co-phung-thu-hoa.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/381/chuyen-de-tieng-viet-lop-4-gv-co-nguyen-thanh-hang.html">
                                    <img src="course/images/tieng-viet-lop-4-gv-co-nguyen-thanh-hang-1.png" alt="Chuyên đề Tiếng Việt lớp 4 (GV: cô Nguyễn Thanh Hằng)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Chuyên đề Tiếng Việt lớp 4 (GV: cô Nguyễn Thanh Hằng)" href="khoa-hoc-truc-tuyen/381/chuyen-de-tieng-viet-lop-4-gv-co-nguyen-thanh-hang.html">Chuyên đề Tiếng Việt lớp 4 (GV: cô Nguyễn Thanh Hằng)</a>
                                </h3>
                                <!-- <p>Chuyên đề Tiếng Việt lớp 4 giúp các em ôn tập, nắm vững  kiến thức cơ bản của chương trình tiếng việt lớp 4 phân theo 11 chuyên đề tổng hợp, đồng thời hỗ trợ các em học sinh có kỹ năng làm các bài tập cơ bản liên quan đến kiến thức bộ môn Tiếng Việt lớp 4. </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/137/co-nguyen-thi-thanh-hang.html" target="_blank">Nguyễn Thị Thanh Hằng</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>500.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/381/chuyen-de-tieng-viet-lop-4-gv-co-nguyen-thanh-hang.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
    
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/420/toan-boi-duong-lop-3-gv-co-nguyen-thi-hoa.html">
                                    <img src="course/images/boi-duong-hsg-toan-3-gv-co-nguyen-thi-hoa.png" alt="Toán bồi dưỡng lớp 3 (GV: cô Nguyễn Thị Hoa)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Toán bồi dưỡng lớp 3 (GV: cô Nguyễn Thị Hoa)" href="khoa-hoc-truc-tuyen/420/toan-boi-duong-lop-3-gv-co-nguyen-thi-hoa.html">Toán bồi dưỡng lớp 3 (GV: cô Nguyễn Thị Hoa)</a>
                                </h3>
                                <!-- <p>Khóa học giúp các con tiếp cận 26 dạng toán cơ bản và nâng cao thuộc chương trình Toán lớp 3, nhằm bồi dưỡng tư duy toán và nền tảng cho các con theo tiếp chương trình toán nâng cao lớp 4. 

</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/160/co-nguyen-thi-hoa.html" target="_blank">Nguyễn Thị Hoa</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>400.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/420/toan-boi-duong-lop-3-gv-co-nguyen-thi-hoa.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/510/toan-co-ban-lop-4-gv-co-tran-le-dung.html">
                                    <img src="course/images/toan-co-ban-lop-4-gv-co-tran-thi-le-dung-1471405792.png" alt="Toán cơ bản lớp 4 (GV: cô Trần Lê Dung)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Toán cơ bản lớp 4 (GV: cô Trần Lê Dung)" href="khoa-hoc-truc-tuyen/510/toan-co-ban-lop-4-gv-co-tran-le-dung.html">Toán cơ bản lớp 4 (GV: cô Trần Lê Dung)</a>
                                </h3>
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/184/co-tran-thi-le-dung.html" target="_blank">Trần Thị Lê Dung</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>500.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/510/toan-co-ban-lop-4-gv-co-tran-le-dung.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/471/toan-nang-cao-va-boi-duong-hsg-toan-lop-4-gv-thay-bui-minh-man.html">
                                    <img src="course/images/toan-boi-duong-hsg-toan-lop-4-gv-thay-bui-minh-man-1464372475.png" alt="Toán nâng cao và bồi dưỡng HSG Toán lớp 4 (GV: thầy Bùi Minh Mẫn)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Toán nâng cao và bồi dưỡng HSG Toán lớp 4 (GV: thầy Bùi Minh Mẫn)" href="khoa-hoc-truc-tuyen/471/toan-nang-cao-va-boi-duong-hsg-toan-lop-4-gv-thay-bui-minh-man.html">Toán nâng cao và bồi dưỡng HSG Toán lớp 4 (GV: thầy Bùi Minh Mẫn)</a>
                                </h3>
                                <!-- <p> Đăng ký khóa học được tặng:
- Bộ 600 câu hỏi theo 30 dạng Toán có trong kỳ thi Violympic (các con làm sai hoặc không làm được câu nào thầy sẽ giảng trực tiếp để các con và Phụ huynh hiểu; bộ đề được mở vào dịp cuộc thi VIO năm 2016 bắt đầu vòng tự luyện).
- Khóa Ôn thi Tổng hợp và bộ 30 đề thi Toán lớp 4 giúp các con ôn thi cuối năm học (khai giảng tháng 4/2017). </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/154/thay-bui-minh-man.html" target="_blank">Bùi Minh Mẫn</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>500.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/471/toan-nang-cao-va-boi-duong-hsg-toan-lop-4-gv-thay-bui-minh-man.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/789/on-tap-hoc-ki-ii-6-mon-lop-11-2016-2017.html">
                                    <img src="course/images/on-tap-hoc-ki-ii-6-mon-lop-11-2017-2018-1490327228.png" alt="Ôn tập học kì II 6 môn lớp 11 (2016-2017)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Ôn tập học kì II 6 môn lớp 11 (2016-2017)" href="khoa-hoc-truc-tuyen/789/on-tap-hoc-ki-ii-6-mon-lop-11-2016-2017.html">Ôn tập học kì II 6 môn lớp 11 (2016-2017)</a>
                                </h3>
                                <!-- <p> Khóa học này sẽ giúp học sinh tổng kết, ôn tập lại các dạng bài, kiến thức trong chương trình học kỳ II ở 6 môn Toán, Vật lí, Hóa học, Sinh học, Ngữ văn, Tiếng Anh. </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/86/thay-nguyen-ngoc-hai.html" target="_blank">Nguyễn Ngọc Hải</a>, <a href="giao-vien/121/thay-nguyen-manh-cuong.html" target="_blank">Nguyễn Mạnh Cường</a>, <a href="giao-vien/126/thay-nguyen-thanh-cong.html" target="_blank">Nguyễn Thành Công</a>, <a href="giao-vien/167/co-huong-fiona.html" target="_blank">Hương Fiona</a>, <a href="giao-vien/171/thay-le-dang-khuong.html" target="_blank">Lê Đăng Khương</a>, <a href="giao-vien/174/thay-dang-ngoc-khuong.html" target="_blank">Đặng Ngọc Khương</a>, <a href="giao-vien/187/thay-dinh-duc-hien.html" target="_blank">Đinh Đức Hiền</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>200.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/789/on-tap-hoc-ki-ii-6-mon-lop-11-2016-2017.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/797/on-thi-hoc-ki-ii-5-mon-lop-10-2016-2017.html">
                                    <img src="course/images/on-thi-hoc-ki-ii-6-mon-lop-10-2016-2017-1490327559.png" alt="Ôn thi học kì II 5 môn lớp 10 (2016-2017)"/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Ôn thi học kì II 5 môn lớp 10 (2016-2017)" href="khoa-hoc-truc-tuyen/797/on-thi-hoc-ki-ii-5-mon-lop-10-2016-2017.html">Ôn thi học kì II 5 môn lớp 10 (2016-2017)</a>
                                </h3>
                                <!-- <p> Tổng kết kiến thức học kỳ II lớp 10 ở 5 môn Ngữ văn, Toán, Tiếng Anh, Vật lí, Hóa học trong khóa học này. </p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/70/thay-pham-ngoc-son.html" target="_blank">Phạm Ngọc Sơn</a>, <a href="giao-vien/128/thay-vu-manh-hai.html" target="_blank">Vũ Mạnh Hải</a>, <a href="giao-vien/147/thay-luu-huy-thuong.html" target="_blank">Lưu Huy Thưởng</a>, <a href="giao-vien/148/co-nguyen-thi-phuong.html" target="_blank">Nguyễn Thị Phương</a>, <a href="giao-vien/162/thay-pham-van-tung.html" target="_blank">Phạm Văn Tùng</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>200.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/797/on-thi-hoc-ki-ii-5-mon-lop-10-2016-2017.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                            <div class="slick-item">
                            <div class="course">
                                <a class="course-image gg-analytic" data-event="click-xem-khoa-hoc-nong-th" href="khoa-hoc-truc-tuyen/798/on-thi-hoc-ky-ii-mon-toan.html">
                                    <img src="course/images/on-thi-hoc-ky-ii-mon-toan-1490330397.png" alt="Ôn thi học kỳ II môn Toán "/>
                                </a>
                                <h3 class="course-name">
                                    <a  class="gg-analytic" data-event="click-xem-khoa-hoc-nong-th" title="Ôn thi học kỳ II môn Toán " href="khoa-hoc-truc-tuyen/798/on-thi-hoc-ky-ii-mon-toan.html">Ôn thi học kỳ II môn Toán </a>
                                </h3>
                                <!-- <p>Là nhóm khóa học giúp học sinh ôn tập và hệ thống hóa kiến thức, dạng bài để đạt kết quả cao trong kỳ thi HK II.


</p> -->
                                <div class="course-info">
                                                                        <p class="course-teachers">Giáo viên: <span><a href="giao-vien/121/thay-nguyen-manh-cuong.html" target="_blank">Nguyễn Mạnh Cường</a></span></p>
                                    
                                        <p class="course-fee">Học phí: <span>100.000 đồng </span></p>

                                    <a href="khoa-hoc-truc-tuyen/798/on-thi-hoc-ky-ii-mon-toan.html" title="Xem chi tiết" class="course-view-more gg-analytic" data-event="click-xem-khoa-hoc-nong-th">Xem thêm</a>
                                    <!-- <p class="p star">Đánh giá:</p>
                                    <div class="star_vote vote_js" vote="3">
                                        <div class="z_index1"></div>
                                        <div class="z_index2"></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                                </div>
        </div>
        <!-- End Elastislide Carousel Thumbnail Viewer -->
    </div><!-- rg-thumbs -->
</div><!-- rg-gallery -->            </div>
        </div>
    </div>
</div>
<!-- trung tam tieng anh -->
<!-- end trung tam tieng anh -->

<!-- trung tam bdvh -->
<!-- end trung tam bdvh -->
<script type="text/javascript">
    function courseSlide (target) {
        var slider = target.find('.slick-carousel');
        var slickConfig = {
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1120,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },

                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 580,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }
            ]
        };

        slider.slick(slickConfig);
    }

    courseSlide ($('.section-content'));

    function get_course(element,type,block){
        $element = $(element);

        if ($element.hasClass("active")) {
            return false;
        }

        var element_class = 0;
        var subject = 0;
        var element_responce = '';

        if (block == 1) {
            element_responce = '#support-thcs';
        }else if(block == 2){
            element_responce = '#support-thpt';
        }else if(block == 3){
            element_responce = '#support-tieuhoc';
        }
        $(element_responce+' .rg-thumbs').css('opacity','0.5');
        $(element_responce+' .loading').css('display','block');

        $.ajax({
            url: 'https://hocmai.vn/home/get_list_course_type/'+element_class+'/'+subject+'/'+type+'/'+block,
            success: function(response) {
                if (response!=0) {
                    var courseContent = $(element_responce+' .section-content');
                    courseContent.html(response);
                    courseSlide(courseContent);
                    box_hover();
                    voteStar();
                    $(element_responce+' .rg-thumbs').css('opacity','1');
                    $(element_responce+' .loading').css('display','none');
                    
                    $element.parent().children('a.shn-bt-wr ').removeClass('active');
                    $element.addClass('active');
                };
            }
        });
        void(0);
    }
</script>                    <!-- end-content -->
                </div>
            </div>
                                        <div id="main-bottom" class="main-bottom">
                    <div class="wrapper-content clearfix">
                        <div class="group-section">
    <div class="box-section" >
        <div class="section">
            <div class="section-head">
                <div class="section-head-name">
                    <a href="http://diendan.hocmai.vn/" target="_blank" class="gg-analytic" data-event="forum"><div>Bình luận</div></a>
                </div>
            </div>
            <div class="clear"></div>
            <div class="section-content rbc">
                <table>
                    <!--<tr class="table-head">
                        <td><a href="javascript:void(0);" class="active" elebefore="news-post" thisele="news-post" onclick="active_element(this,'table-head a');">Bài viết mới</a></td>
                        <td><a href="javascript:void(0);" class="" elebefore="news-post" thisele="news-topic" onclick="active_element(this,'table-head a');">Chủ đề mới</a></td>
                        <td><a href="javascript:void(0);" class="" elebefore="news-post" thisele="topic-hot" onclick="active_element(this,'table-head a');">Chủ đề nóng</a></td>
                        <td><a href="javascript:void(0);" class="" elebefore="news-post" thisele="top-user" onclick="active_element(this,'table-head a');">Thành viên tiêu biểu</a></td>-->
                    </tr>
                    <tr>  
                        <td colspan="4">
                            <div class="table-content">
                                <div class="news-post active">
                                    <h4>5 Bài viết mới</h4>
    <table>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612988" title="Viết đoạn văn bằng Tiếng Anh">Viết đoạn văn bằng Tiếng Anh</a></td>
                <td><span>Thời gian:</span> 13:49 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612987" title="Đề UBND e cần gấp trong hôm nay ạ">Đề UBND e cần gấp trong hôm nay ạ</a></td>
                <td><span>Thời gian:</span> 12:44 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612986" title="Thánh Địa 12 cung hoàng đạo!">Thánh Địa 12 cung hoàng đạo!</a></td>
                <td><span>Thời gian:</span> 12:42 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612984" title="Toán 8[ Đề cương ôn tập giữa kì]">Toán 8[ Đề cương ôn tập giữa kì]</a></td>
                <td><span>Thời gian:</span> 10:58 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612983" title="[ toán 10 ] Vécto">[ toán 10 ] Vécto</a></td>
                <td><span>Thời gian:</span> 10:42 20/10/16</td>
            </tr>
            </table>                                </div>
                                <div class="news-topic">
                                    <h4>5 Chủ đề mới</h4>
    <table>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612988" title="Viết đoạn văn bằng Tiếng Anh">Viết đoạn văn bằng Tiếng Anh</a></td>
                <td><span>Thời gian:</span> 13:45 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612987" title="Đề UBND e cần gấp trong hôm nay ạ">Đề UBND e cần gấp trong hôm nay ạ</a></td>
                <td><span>Thời gian:</span> 12:44 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612986" title="Thánh Địa 12 cung hoàng đạo!">Thánh Địa 12 cung hoàng đạo!</a></td>
                <td><span>Thời gian:</span> 12:42 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612985" title="hình chữ nhật">Hình chữ nhật</a></td>
                <td><span>Thời gian:</span> 12:03 20/10/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=612984" title="Toán 8[ Đề cương ôn tập giữa kì]">Toán 8[ Đề cương ôn tập giữa kì]</a></td>
                <td><span>Thời gian:</span> 10:58 20/10/16</td>
            </tr>
            </table>                                </div>
                                <div class="topic-hot">
                                    <h4>5 Chủ đề nóng</h4>
    <table>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=608342" title="Sự kiện “ĐIỂM DANH NGAY - NHẬN QUÀ LIỀN TAY”">Sự kiện “ĐIỂM DANH NGAY - NHẬN QUÀ LIỀN TAY”</a></td>
                <td><span>Thời gian:</span> 19:58 26/08/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=594409" title="THAO THỨC">THAO THỨC</a></td>
                <td><span>Thời gian:</span> 23:51 14/06/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=587461" title="Tổng Giám Đốc Độc Ác Tuyệt Tình - Thích Thích">Tổng Giám Đốc Độc Ác Tuyệt Tình - Thích Thích</a></td>
                <td><span>Thời gian:</span> 12:03 10/06/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=577865" title="Vật lý 7 - ๖ۣۜNgôi trường ๖ۣۜVật ๖ۣۜLý">Vật lý 7 - ๖ۣۜNgôi trường ๖ۣۜVật ๖ۣۜLý</a></td>
                <td><span>Thời gian:</span> 23:03 05/03/16</td>
            </tr>
                            <tr>
                <td><a class="gg-analytic" data-event="click-xem-forum-post" target="_blank" href="http://diendan.hocmai.vn/showthread.php?t=574555" title="[ Toán 7]toán hình">[ Toán 7]toán hình</a></td>
                <td><span>Thời gian:</span> 10:56 07/02/16</td>
            </tr>
            </table>                                </div>
                                <div class="top-user">
                                    <h4>5 Thành viên tích cực nhất</h4>
    <table>
                    <tr>
                <td><a target="_blank" href="http://diendan.hocmai.vn/members/truyenonline.2274056" title="truyenonline">truyenonline</a></td>
                <td><span>Bài viết:</span> 5774</td>
            </tr>
                    <tr>
                <td><a target="_blank" href="http://diendan.hocmai.vn/members/quynhphamdq.2150606" title="quynhphamdq">quynhphamdq</a></td>
                <td><span>Bài viết:</span> 5333</td>
            </tr>
                    <tr>
                <td><a target="_blank" href="http://diendan.hocmai.vn/members/hardyboywwe.1128408" title="hardyboywwe">hardyboywwe</a></td>
                <td><span>Bài viết:</span> 5624</td>
            </tr>
                    <tr>
                <td><a target="_blank" href="http://diendan.hocmai.vn/member.php?u=2235224" title="books4u">books4u</a></td>
                <td><span>Bài viết:</span> 5667</td>
            </tr>
                    <tr>
                <td><a target="_blank" href="http://diendan.hocmai.vn/member.php?u=1447813" title="nguyenbahiep1">nguyenbahiep1</a></td>
                <td><span>Bài viết:</span> 9976</td>
            </tr>
            </table>                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

</div>                    </div>
                </div>
            
                                </div>

        <div class="clear"></div>

        


<style>
    #registerCountdownModal .modal-dialog {
        max-width: 900px;
        width: 100%;
        margin: 10px auto;
    }

    #registerCountdownModal .modal-dialog .modal-body {
        padding: 0;
    }

    #registerCountdownModal .c-content {
        background: transparent url("public/img/pop/popup-bg.jpg") no-repeat scroll center bottom 0;
        min-height: 550px;
        position: relative;
    }

    #registerCountdownModal .countdown-circle {
        position: absolute;
        background: transparent url("public/img/pop/time-circle.png") no-repeat scroll 0 0;
        width: 259px;
        height: 259px;
        left: 45%;
        top: 40px;
        text-align: center;
        transform: translateX(-50%);
    }

    #registerCountdownModal .countdown-circle .num {
        color: #1b1b40;
        font-size: 90px;
        font-weight: 900;
        margin-top: 50px;
        line-height: 1.0;
    }

    #registerCountdownModal .countdown-circle .c-text {
        font-size: 20px;
        color: #000000;
        font-weight: 700;
    }

    #registerCountdownModal .bg {
        position: absolute;
        background: transparent url("public/img/pop/sketboarder.png") no-repeat scroll 0 0;
        width: 232px;
        height: 357px;
        left: 40px;
        top: 100px;
    }

    #registerCountdownModal .texture {
        position: absolute;
        right: 25px;
        font-size: 32px;
        font-weight: 900;
        color: #f3b981;
        top: 220px;
        text-transform: uppercase;
    }

    #registerCountdownModal .texture span {
        color: #faaf3a;
    }

    #registerCountdownModal .cta {
        position: absolute;
        bottom: 40px;
        left: 0;
        width: 100%;
    }

    #registerCountdownModal .cta .cta-text {
        float: left;
        color: #3f3f3f;
        font-size: 24px;
        font-weight: 400;
        margin-left: 40px;
        margin-top: 15px;
    }

    #registerCountdownModal .cta .cta-btn {
        display: inline-block;
        padding: 10px 20px;
        color: #ffffff;
        font-size: 24px;
        background-color: #ec1c23;
        -webkit-box-shadow: 0px 8px 0px 0px rgba(193,39,44,1);
        -moz-box-shadow: 0px 8px 0px 0px rgba(193,39,44,1);
        box-shadow: 0px 8px 0px 0px rgba(193,39,44,1);
        float: right;
        margin-right: 30px;
        border-radius: 8px;
    }

    #registerCountdownModal .close-popup {
        position: absolute;
        top: 5px;
        right: 10px;
        color: white;
        opacity: 0.8;
    }

    @media only screen and (max-width: 920px) {
        #registerCountdownModal .modal-dialog {
            max-width: 300px;
            width: 100%;
        }

        #registerCountdownModal .modal-dialog .modal-body {
            padding: 0;
        }

        #registerCountdownModal .c-content {
            text-align: center;
            min-height: 500px;
        }

        #registerCountdownModal .countdown-circle {
            position: relative;
            left: auto;
            transform: translateX(0);
            display: inline-block;
            width: 200px;
            height: 200px;
            background-size: 200px;
        }

        #registerCountdownModal .countdown-circle .num {
            font-size: 60px;
            margin-top: 40px;
        }

        #registerCountdownModal .countdown-circle .c-text {
            font-size: 18px;
        }

        #registerCountdownModal .bg {
            display: none;
        }

        #registerCountdownModal .texture {
            position: relative;
            display: block;
            right: auto;
            font-size: 24px;
            color: #f3b981;
            top: 60px;
            text-align: center;
        }

        #registerCountdownModal .cta {
            bottom: 20px;
        }

        #registerCountdownModal .cta .cta-text {
            float: none;
            color: #3f3f3f;
            font-size: 20px;
            font-weight: 400;
            margin-left: 0;
            margin-top: 15px;
            padding: 0 20px 5px;
        }

        #registerCountdownModal .cta .cta-btn {
            display: inline-block;
            padding: 8px 18px;
            font-size: 22px;
            float: none;
            margin-right: 0px;
        }

    }

</style>
<div class="modal fade" tabindex="-1" id="registerCountdownModal" role="dialog" aria-labelledby="registerCountdownModalTitle" aria-hidden="true" data-backdrop="static" style="display: none">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="c-content">
                    <button type="button" data-dismiss="modal" class="close close-popup" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="countdown-circle">
                        <div class="num">07</div>
                        <div class="c-text">NGÀY <br> CUỐI CÙNG</div>
                    </div>
                    <div class="texture">
                        để không mất <br>
                        <span>100.000đ</span> phí đặt chỗ<br>
                        một cách vô ích!
                    </div>
                    <div class="bg"></div>
                    <div class="cta clearfix">
                        <div class="cta-text">Nhanh tay đăng ký khóa học để được giảm 30% học phí</div>
                        <a class="cta-btn" href="cart/index.html" target="_blank">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="luyen-thi-quoc-gia/giai-phap-pen/check.php"></script>


<div class="modal hocmai-modal fade" tabindex="-1" id="testTrialModal" role="dialog" aria-labelledby="testTrialModalTitle" aria-hidden="true" data-backdrop="static" style="display: none">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="testTrialModalTitle">Thông báo</h4>
            </div>
            <div class="modal-body">
                <div>
                    <p>Ưu đãi đặt chỗ PEN-M của em chỉ còn‎ thời hạn đến ngày 29.04.2016. Đăng kí khoá học ngay hôm nay để nắm chắc 6 điểm trong 6 tuần về đích!</p>
                </div>
                <div class="dc-btn-wrapper text-center">
                    <a class="btn btn-primary" href="cart/index.html">Đăng kí ngay</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    </script>       
 <!-- end-footer -->
    </div>

    <!--<script language="javascript"  type="text/javascript" src="public/popup/app.js?v="></script>-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../www.google-analytics.com/analytics.js','ga');
     
      ga('create', 'UA-2509692-1', 'auto');
      ga('send', 'pageview');

    $(document).ready(function () {
        var eventCategory = 'HocmaiHome';
        $(document).on('click', '.gg-analytic', function (e) {
            var $this = $(this);
            var $action = $this.data('event');
            var $label = $this.data('track-label');

            if(typeof $label == typeof undefined){
                ga('send', 'event', eventCategory, $action);
            }else{
                ga('send', 'event', eventCategory, $action, $label);
            }
        });

        if ($(window).width() > 1319) {
            $(".side-banner").stick_in_parent({
                offset_top: 20,
                parent: '.side-banner-container'
            });
        } else {
            $('.side-banner-wrapper').hide();
        }

        /*var endDate = new Date(2015, 12, 14, 23, 59, 59);
        var today = new Date();
        if (window.innerWidth > 480 && endDate > today) {
            if(!$.cookie('testTrial')){
                var testTrial = $('#testTrialModal');
                testTrial.modal('show');
                testTrial.on('hidden.bs.modal', function(e) {
                    $.cookie('testTrial', 1, 1);
                    $('#testTrialModal').hide();
                });
                testTrial.find("a").click(function() {
                    $.cookie('testTrial', 1, 1);
                });
            }
        }*/



        var modalDialog = $('#popup-modal');

        
        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var div_top = $('.slide-learn').offset().top;
            if (window_top > div_top) {
                $('#banner-hm').addClass('stick');
            } else {
                $('#banner-hm').removeClass('stick');
            }
        }

        if ($.cookie('hide-banner-2')) {
            $('#banner-hm').addClass('hidden');
        }

        $(window).scroll(sticky_relocate);
        sticky_relocate();

        $('#banner-hm').find('.close').click(function (e) {
            e.preventDefault();
            $('#banner-hm').addClass('hidden');
            $.cookie('hide-banner-2', '1', { expires: null });
        })

    });
     
    </script>
    <script language="JavaScript", type="text/javascript", src="support-chat.php"></script>

    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=600873143331099";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version="2.0";n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,"script","../connect.facebook.net/en_US/fbevents.js");

    fbq("init", "436790669862559");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=436790669862559&amp;ev=PageView&amp;noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->

    <!-- Facebook Pixel Code THCS -->
    <script>
        fbq('init', '880291722070865', {
            em: 'insert_email_variable,'
        });
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=880291722070865&amp;ev=PageView&amp;noscript=1"
            /></noscript>
@endsection