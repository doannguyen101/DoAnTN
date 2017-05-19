
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cao Thắng - Cuộc thi SOLUTIONS FOR LIFE</title>
    <meta name="robots" content="index, follow">
    <meta name="description" content="Dịch vụ học qua mạng với các chương trình ôn, luyện thi, thi thử đại học trực tuyến, dành cho học sinh trung học phổ thông, trung học cơ sở và tiểu học">
        <!-- stylesheet -->

   
    <!-- javascript -->
    <!-- favico -->
    <link rel="shortcut icon" href="public/img/favicon.ico">
<!-- stylesheet trangchu -->
    <link type="text/css" rel="stylesheet" href="public/css/roboto.css"/>
    <link type="text/css" rel="stylesheet" href="public/css/bootstrap.minf8cb.css?v=9.0.17"/>
    <!-- file dinh dang menu mobi -->
     <link href="public/css/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <!-- file dinh dang menu mobi -->
    <link type="text/css" rel="stylesheet" href="public/css/stylef8cb.css"/>
    
    <link type="text/css" rel="stylesheet" href="public/css/responsivef8cb.css?v=9.0.17"/>
    <link rel="stylesheet" type="text/css" href="public/css/jquery.bxsliderf8cb.css?v=9.0.17" />
    <link rel="stylesheet" type="text/css" href="public/css/elastislidef8cb.css?v=9.0.17" />
    <link rel="stylesheet" type="text/css" href="public/css/slickf8cb.css?v=9.0.17" />



    <meta name="keywords" content="Học trực tuyến, luyện thi, luyện thi trực tuyến, ôn thi đại học, luyện thi đại học, thi thử đại học, luyện thi cấp tốc, đề thi thử đại học">
    <script type="text/x-mathjax-config">
      MathJax.Hub.Config({
        extensions: ["tex2jax.js"],
        jax: ["input/TeX", "output/HTML-CSS"],
        tex2jax: {
          inlineMath: [ ['$','$'], ["\\(","\\)"] ],
          displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
          processEscapes: true
        },
        "HTML-CSS": { availableFonts: ["TeX"] }
      });
    </script>
    <script language="javascript"  type="text/javascript" src="public/js/jquery.minf8cb.js?v=9.0.17"></script>
    <script type="text/javascript" src="public/js/MathJaxbb58.js?config=TeX-AMS_HTML?v=9.0.17"></script>
    <script type="text/javascript" src="public/js/jquery.marquee.minf8cb.js?v=9.0.17"></script>
    <script type="text/javascript" src="public/js/jquery.bxsliderf8cb.js?v=9.0.17"></script>
    <script type="text/javascript" src="public/js/slick.minf8cb.js?v=9.0.17"></script>


    <style type="text/css">
        math{
            color: #154991;
        }
    </style>
</head>
    <div class="Wrapper">
        <div class="container-wrapper">
            <dliv class="Header">
                <!-- header -->
 <!-- file javascript MENU mobi -->
    <script language="javascript"  type="text/javascript" src="public/js/jquery-ui-1.10.4.min.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/bootstrap.minf8cb.js?v=9.0.17"></script>
    <script language="javascript"  type="text/javascript" src="public/js/jquery.elastislide.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/jquery.cookie.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/kinetic.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/jquery.final-countdown.min.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/jquery.sticky-kit.min.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/gallery.js"></script>
    <script language="javascript"  type="text/javascript" src="public/js/megaMenuf8cb.js?v=9.0.17"></script>
    <script language="javascript"  type="text/javascript" src="public/js/mainf8cb.js?v=9.0.17"></script>



<!-- file javascript MENU mobi -->
<script type="text/javascript">
    function showSubMenuCourse(){
        if($("#sp_sup_menu_course").hasClass('open')){
            $("#sp_sup_menu_course > a").addClass('active');
            $("#sp_sup_menu_course").removeClass('open');
            $("div.grid_sub_menu_course").show();

            if (window.innerWidth >= 992) {
                $('ul.mega-menu > li:nth-child(2) > a').addClass('active').next('.sub-menu').show();
            }

        }else{
            $("#sp_sup_menu_course > a").removeClass('active');
            $("#sp_sup_menu_course").addClass('open');
            $("div.grid_sub_menu_course").hide();
        }
    }

    $(document).ready(function(){

        if (window.innerWidth >= 992) {
            $("div.right_sub_menu_course").css('height',$(".grid_sub_menu_course").height());
            $("ul.home-menu li").hover(function(){
                if($(this).attr('id')!=='sp_sup_menu_course'){
                    $("#sp_sup_menu_course > a").removeClass('active');
                    $("#sp_sup_menu_course").addClass('open');
                    $("div.grid_sub_menu_course").hide();
                }
            });

            $(".item_left_course").hover(function(){
                var item_cts=$(this).attr('data-content');
                $(".item_right_course").removeClass('sub_course_active');
                $(".item_left_course").removeClass('hover_active');
                $(this).addClass('hover_active');
                $("#"+item_cts).addClass('sub_course_active');
            });

            $("div.menu-wrapper").mouseleave(function(){
                $("#sp_sup_menu_course").addClass('open');
                $("#sp_sup_menu_course > a").removeClass('active');
                $("div.grid_sub_menu_course").hide();
            });

            $("#sp_sup_menu_course > a").mouseleave(function() {
                setTimeout(function () {
                    if (!$(".menu-wrapper:hover").length) {
                        $("#sp_sup_menu_course").addClass('open');
                        $("#sp_sup_menu_course > a").removeClass('active');
                        $("div.grid_sub_menu_course").hide();
                    }
                }, 200);
            });

            $('#sp_sup_menu_course > a').mouseenter(function () {
                showSubMenuCourse();
            });
        }
    });

</script>

<div class="grid_sub_menu_course">
    <script type="text/javascript">
        $(document).ready(function () {
            $('.mega-menu').megaMenu({
                mouseCancel: (window.innerWidth < 992 ),
                activate : function(row) {
                    var $row = $(row),
                        $submenu = $row.children('.sub-menu'),
                        $ref = $submenu.parents('.mega-menu').find('> li > a');

                    // Show the submenu
                    $submenu.parents('.mega-menu').find('.sub-menu').css({
                        display: "none"// padding for main dropdown's arrow
                    });

                    $ref.removeClass('active');

                    $submenu.css({
                        display: "block"// padding for main dropdown's arrow
                    });
                    // Keep the currently activated row's highlighted look
                    $row.children("a").addClass("active");

                    if (window.innerWidth < 992 ) {
                        $row.children("a").find('i').removeClass().addClass('glyphicon glyphicon-chevron-down pull-right');
                    }
                },
                deactivate: function (row) {
                    var $row = $(row),
                        $submenu = $row.children('.sub-menu'),
                        $ref = $submenu.parents('.mega-menu').find('> li > a');
                    // Hide the submenu and remove the row's highlighted look
                    $submenu.css("display", "none");
                    $row.children("a").removeClass("active");

                    if (window.innerWidth < 992 ) {
                        $row.children("a").find('i').removeClass().addClass('glyphicon glyphicon-chevron-right pull-right');
                    }
                }
            });
        });
    </script>


</div>

<div class="nav-header clearfix">
    <div class="site-logo">
                <a class="logo " href="index">Trang chủ</a>
    </div>
    <div class="nav-header-right">
        <div class="nav-header-menu">
            <div class="menu-pie">
                <a href="#" class="active-menu">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <div class="top-menu clearfix">
                <ul class="home-menu">
                    <li><a class="gg-analytic" data-event="gioi-thieu" href="" target="_blank">Trang chủ</a></li>
                    <li><a class="gg-analytic" data-event="gioi-thieu" href="gioi-thieu.html" target="_blank">Giới thiệu</a></li>
                    <!-- -->
                    <li class="open sub-menu">
                        <a href="#">Thông báo<span class="caret" style=""></span></a>
                        <ul class="sub-home-menu row">
                            <li><a href="">Thông báo chung</a></li>
                            <li><a href="">BẢNG JUNIOR - CKCIT</a></li>
                            <li><a href="">BẢNG SENIOR - CKCIT</a></li>
                        </ul>
                    </li>
                    
                    <li class="open sub-menu">
                        <a href="#">Thể lệ cuộc thi<span class="caret" style=""></span></a>
                        <ul class="sub-home-menu row">
                            <li><a href="">BẢNG JUNIOR - CKCIT</a></li>
                            <li><a href="">BẢNG SENIOR - CKCIT</a></li>
                        </ul>
                    </li>
                    
                    <li class="open sub-menu">
                        <a href="#">Kết quả<span class="caret" style=""></span></a>
                        <ul class="sub-home-menu row">
                            <li><a href="">BẢNG JUNIOR - CKCIT</a></li>
                            <li><a href="">BẢNG SENIOR - CKCIT</a></li>
                        </ul>
                    </li>
                    <li><a href="bangxephang" target="_blank">Bảng xếp hạng</a></li>
                    <!--<li><a href="kho-tai-lieu/index.html" target="_blank">Thư viện</a></li>
                    <li><a href="http://blog.hocmai.vn/" target="_blank">Blog</a></li>
                    <li><a target="_blank" href="http://diendan.hocmai.vn/index.php" class="gg-analytic" data-event="forum">Diễn đàn</a></li>-->
                    <li><a target="_blank" href="ho-tro/index.html" class="gg-analytic" data-event="helpdesk">Liên hệ - Hỗ trợ</a></li>
                </ul>
                <ul class="header-acount">
                                        <li class="header-acount-one login" id="btn-login"><a  href="#"><i class="icon-login"></i> Đăng nhập</a></li>
                    <li class="header-acount-one register" id="btn-signup"><a href="#"><i class="icon-register"></i> Đăng ký</a></li>
                                        <!-- <li class="header-acount-one login"><a  href="javascript:void(0);" onclick="popup(0);"><i class="icon-login"></i> Đăng nhập</a></li> -->
                </ul>
            </div>
            <div class="clear"></div>
        </div>
        <!-- Phần marquee-->
        <div class="hot-notif">
            <div>
                <span>Tin nóng:</span>
            </div>
            <div style="width:91.741%;">
                <div style="position: relative; overflow: hidden; height: 20px; width: 100%;"><ul id="marquee-vertical"><li><a class="gg-analytic" data-event="click-xem-tin-nong" data-track-label="Hiện tại 6, 7 điểm thì có thể đạt 8, 9, 10 không?" target="_blank" href="http://blog.hocmai.vn/5-ly-khien-pen-m-de-dang-giup-teen-99-toi-da-hoa-diem/">Hiện tại 6, 7 điểm thì có thể đạt 8, 9, 10 không?</a></li><li><a class="gg-analytic" data-event="click-xem-tin-nong" data-track-label="Chiến thuật giành điểm 9, điểm 10 thi THPT cho học sinh khá giỏi" target="_blank" href="http://blog.hocmai.vn/chien-thuat-gianh-diem-9-diem-10-cho-hoc-sinh-kha-gioi/">Chiến thuật giành điểm 9, điểm 10 thi THPT cho học sinh khá giỏi</a></li><li><a class="gg-analytic" data-event="click-xem-tin-nong" data-track-label="Chỉ còn 2 tháng, nên tập trung nhiều hơn vào kiến thức hay kỹ năng?" target="_blank" href="http://blog.hocmai.vn/chi-con-2-thang-nen-tap-trung-nhieu-hon-vao-kien-thuc-hay-ky-nang/">Chỉ còn 2 tháng, nên tập trung nhiều hơn vào kiến thức hay kỹ năng?</a></li><li><a class="gg-analytic" data-event="click-xem-tin-nong" data-track-label="Mách học sinh Trung bình-khá cách đạt 8 điểm thi THPT quốc gia" target="_blank" href="http://blog.hocmai.vn/mach-hoc-sinh-trung-binh-kha-cach-dat-8-diem-thi-thpt-quoc-gia/">Mách học sinh Trung bình-khá cách đạt 8 điểm thi THPT quốc gia</a></li><li><a class="gg-analytic" data-event="click-xem-tin-nong" data-track-label="2 tháng cuối cùng, học làm sao để đạt điểm cao nhất?" target="_blank" href="http://blog.hocmai.vn/2-thang-cuoi-cung-hoc-lam-sao-de-dat-diem-cao-nhat/">2 tháng cuối cùng, học làm sao để đạt điểm cao nhất?</a></li></ul></div>                <script type="text/javascript">
                <!--
                  $('#marquee-vertical').marquee({delay: 6000, timing: 20});  
                -->
                </script>
            </div>
        </div>
        <!--  -->
    </div>
    <div class="search-course">
        <form class="search hidden" method="get" action="https://hocmai.vn/home/search_all">
            <div class="search-content">
                <input class="search-input" type="text" name="keyword" value="" placeholder="Tìm kiếm khóa học..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
                <input type="hidden" name="type" value="course">
                <ul id="default_result" class="results"></ul>
                <button class="search-submit" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>

        </form>
    </div>
    <div class="mobile-account">
        <div class="account-icon">
            <a class="active-account-box" href="#"><i class="fa fa-caret-down"></i></a>
        </div>
        <ul class="account-menu">
                            <li class="header-acount-one login"><a  href="login"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                <li class="header-acount-one register"><a href="signup"><i class="fa fa-user"></i> Đăng ký</a></li>
                    </ul>

    </div>
</div>
@yield('noidung')

<script type="text/javascript" src="public/tem_dk/js/jquery.min.js"></script>
<script type="text/javascript" src="public/tem_dk/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="public/tem_dk/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="public/tem_dk/css/style.css" />
<!--JS FORMLOGIN-->
        
    
    <script type="text/javascript">
    $(document).ready(function () {
        $("#btn-login").click(function () {
            $('#myModal').modal('show')
        });
    });
    $(document).ready(function () {
        $("#btn-signup").click(function () {
            $('#myModal-signup').modal('show')
        });
    });
    $(document).ready(function () {
        $("#link-nopbai").click(function () {
            $('#myModal-nopbai').modal('show')
        });
    });

    </script>
<!-- POPUP LOGIN -->
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" align="center">ĐĂNG NHẬP</h4>
                <hr>
                <form name="frmLogin" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tên đăng nhập</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu" >
                            
                        </div>
                    </div>
                </form>
              </div>
                    <div class="modal-footer">
                        <button type="button" id="btn-login-ok" class="btn btn-primary">Đăng nhập</button>
                    </div>
              
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.POPUP -->
        <!--JS POPUP-->
<!-- POPUP SIGNUP -->
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal-signup">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" align="center">ĐĂNG KÝ</h4>
                <hr>
                <form name="frmSinhVien" class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Tên đăng nhập</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập" />
                            <!--<span id="helpBlock2" class="help-block">Vui lòng nhập tên đăng nhập</span>-->
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Mật khẩu" >
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Họ và tên</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Vui lòng nhập họ tên" />
                            
                        </div>
                    </div>
                    
                    <div class="form-group ">
                    <label for="inputEmail3" class="col-sm-3 control-label">Ngày sinh</label>
                    <div class="clearfix">
                        <div class="col-sm-2 col-xs-2">
                            <select name="birth_date" id="birth-date" class="form-control" style="width: 90px !important;">
                                <option value="">Ngày</option>
                                                                <option value="1" > 01</option>
                                                                <option value="2" > 02</option>
                                                                <option value="3" > 03</option>
                                                                <option value="4" > 04</option>
                                                                <option value="5" > 05</option>
                                                                <option value="6" > 06</option>
                                                                <option value="7" > 07</option>                 
                            </select>
                            
                        </div>
                        <div class="col-sm-2 col-xs-2" style="margin-left: 5px;">
                            <select name="birth_month" id="birth-month" class="form-control" style="width: 90px !important;">
                                <option value="">Tháng</option>
                                                                <option value="1" >01</option>
                                                                <option value="2" >02</option>
                                                                <option value="3" >03</option>
                                                                <option value="4" >04</option>
                                                                
                                                        </select>
                        </div>
                        <div class="col-sm-2 col-xs-3 " style="margin-left: 5px;" >
                            <select name="birth_year" id="birth-year" class="form-control" style="width: 90px !important;">
                                <option value="">Năm</option>
                                                                <option value="2017" >2017</option>
                                                                <option value="2016" >2016</option>
                                                                <option value="2015" >2015</option>
                                                                <option value="2014" >2014</option>
                                                                <option value="2013" >2013</option>
                                                                
                                                        </select>

                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="inputEmail3" class="col-sm-3 control-label">Giới tính</label>
                    <div class="clearfix">
                        <div class="col-sm-2 col-xs-2">
                            <select name="sex" id="sex" class="form-control" style="width: 90px !important;">
                                                                <option value="1" selected="selected"> Nam</option>
                                                                <option value="2" > Nữ</option>                 
                            </select>
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-group ">
                    <label for="inputEmail3" class="col-sm-3 control-label">Sinh viên</label>
                    <div class="clearfix">
                        <div class="col-sm-2 col-xs-2">
                            <select name="truong" id="truong" class="form-control" style="width: 395px !important;">
                                                                <option value="1" selected="selected"> Cao đẳng Cao Thắng</option>
                                                                <option value="2" > Đại học KHTN</option>
                                                                <option value="3" > Đại học công nghiệp</option>                        
                            </select>
                            
                        </div>
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="inputEmail3" class="col-sm-3 control-label">Lớp</label>
                    <div class="clearfix">
                        <div class="col-sm-2 col-xs-2">
                            <select name="truong-lop" id="truong-lop" class="form-control" style="width: 395px !important;">
                                                                <option value="1" selected="selected"> CĐTH 14C</option>
                                                                <option value="2" > CĐTH 14A</option>
                                                                <option value="3" > CĐTH 14B</option>                       
                            </select>
                            
                        </div>
                    </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Vui lòng nhập Email" />
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Vui lòng nhập số điện thoại" />
                        </div>
                    </div>
                    
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Đăng ký</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.POPUP -->
        <!--JS POPUP-->     
<!--ooo-->  
<div class="footer">
    <div class="panel_social">
        <a target="_blank" href="https://www.facebook.com/Hocmai.vnOnline"><img alt="Học mãi facebook" style="max-width: 100%;" src="public/img/hm_facebook.png"></a>
        <a target="_blank" href="https://www.youtube.com/user/videohocmai"><img alt="Học mãi youtube" style="max-width: 100%;" src="public/img/hm_youtube.png"></a>
        <a target="_blank" href="https://play.google.com/store/apps/details?id=hocmai.vn.activity&amp;hl=vi"><img alt="Học mãi lectures" style="max-width: 100%;" src="public/img/hm_lectures.png"></a>
    </div>
    <div class="footer-content">
        <div class="footer-menu row-fluid clearfix">
            <div style="padding-left:5px;">
                <ul class="footer-menu-content footer-menu-2 row-fluid" style="">
                    <li class="menu-content-one span6">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Các kênh hỗ trợ</h3>
                            <ul class="footer-block-list social-list">
                                <li>
                                    <div class="hotline-icon social-link">
                                        <ul class="hotline-number">
                                            <li><span>Tel:</span><span>08 3 8212360</span></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="gov-link">
                                    <a href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=2332" target="_blank">
                                        <img src="public/css/theme/new2/images/congthuong.png" class="gov-img" alt="Bộ Công thương">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-content-one span3">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Solutions For Life</h3>
                            <ul class="footer-block-list">
                                <li><a href="#" target="_blank">Giới thiệu</a></li>
                                <li><a href="#" target="_blank">Thông báo</a></li>
                                <li><a href="#" target="_blank">Thí sinh dự thi</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-content-one span3">
                        <div class="footer-block">
                            <h3 class="footer-block-title">Thông tin Cao Thắng</h3>
                            <ul class="footer-block-list">
                                <li><a target="learn-online" class="scroll" href="http://www.caothang.edu.vn/">Giới thiệu</a></li>
                                <li><a href="http://www.caothang.edu.vn/bai_viet/Tuyen-Sinh-2" target="_blank">Tuyển Sinh</a></li>
                                <li><a href="http://www.caothang.edu.vn/bai_viet/Tin-Giao-Duc-17" target="_blank">Giảng dạy</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-page-info row-fluid clearfix">
            <div class="span6">
                <p class="footer-des">
                    Trường Cao Đẳng kỹ thuật Cao Thắng<br />
                    Địa chỉ: 65 Huỳnh Thúc Kháng, P.Bến Nghé, Q.1, Tp.HCM.<br />
                    Tel: 08 3 8212868 Fax: 08 3 8215951.<br />
                    Email:ktcaothang@caothang.edu.vn.
                </p>
            </div>
            <div class="span6">
                <p class="footer-des">
                 Copyright © 2014. All Rights Reserved. 9<br>
                </p>
            </div>
        </div>
    </div>
</html>
