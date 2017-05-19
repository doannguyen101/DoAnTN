@extends('layout.master')
@section('noidung')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="vi" xml:lang="vi" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
        <link rel="shortcut icon" href="../public/home/img/favicon.ico" />
    <!--[if IE]>
    <link href="/ie.css" rel="stylesheet" type="text/css" media="screen" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="public/css/template/theme/standard/stylesc676.css?forceconfig=new2" />
    <link rel="stylesheet" type="text/css" href="public/css/template/theme/new2/stylesc676.css?forceconfig=new2" />
    <link href="public/css/template/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/select2/select2.css" rel="stylesheet" type="text/css" media="all" />

    <link href="public/css/template/new2/css/styles85ed.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />

    <link href="public/css/template/new2/css/fw_qa85ed.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/new2/css/responsive85ed.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />
    
    <link href="public/css/template/new2/css/loginv285ed.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/new2/css/section-level85ed.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/new2/css/course-group85ed.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/template/fonts/roboto.css" rel="stylesheet" type="text/css" media="all" />
    <!--[if lt IE 9]>
    <link href="https://hocmai.vn/theme/new2/css/ie8.css?v=3.0.5s" rel="stylesheet" type="text/css" media="all" />
    <![endif]-->

    
<script type="text/javascript">
    var HMClient = {
        facebook: {
            appId: '600873143331099',
            scope: 'email,public_profile'
        },
        google: {
            clientId: '880785099124-b2mb58bvfppe88kmq2ir8omld7g122c6.apps.googleusercontent.com',
            scope: 'profile email'
        },
        yahoo: {
            clientId: 'dj0yJmk9alFreDNnUFVyYkhiJmQ9WVdrOU0zRnVVemxwTjJzbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD0zYg--'
        }
    };

</script> 

<script language="JavaScript" type="text/javascript" defer="defer">

<!-- // Non-Static Javascript functions

//setTimeout('fix_column_widths()', 20);

function openpopup(url,name,options,fullscreen) {
  fullurl = "https://hocmai.vn" + url;
  windowobj = window.open(fullurl,name,options);
  if (fullscreen) {
     windowobj.moveTo(0,0);
     windowobj.resizeTo(screen.availWidth,screen.availHeight);
  }
  windowobj.focus();
  return false;
}

function uncheckall() {
  void(d=document);
  void(el=d.getElementsByTagName('INPUT'));
  for(i=0;i<el.length;i++)
    void(el[i].checked=0)
}

function checkall() {
  void(d=document);
  void(el=d.getElementsByTagName('INPUT'));
  for(i=0;i<el.length;i++)
    void(el[i].checked=1)
}

function inserttext(text) {
  text = ' ' + text + ' ';
  if ( opener.document.forms['theform'].message.createTextRange && opener.document.forms['theform'].message.caretPos) {
    var caretPos = opener.document.forms['theform'].message.caretPos;
    caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
  } else {
    opener.document.forms['theform'].message.value  += text;
  }
  opener.document.forms['theform'].message.focus();
}


// done hiding -->
</script>
    <script type="text/javascript">
    <!--
    	$j = jQuery;
    -->
    
    </script>
</head>
<body  class="loginv2 course-1 lang-vi_utf8" id="loginv2-index">
<div id="fb-root"></div>
<div id="page">

</div>

   
   
   
 <!--       <div class="update-info-stick">
		
        <div class="wrapper clearfix update-info-wrap">
            <div class="update-info-cta">
                Chào Dương Dương! Vui lòng cập nhật thêm một số thông tin sau để HOCMAI có thể hỗ trợ Bạn tốt nhất.
            </div>
            <a class="update-info-cta-button" target="_blank" href="/loginv2/profile.php">Cập nhật</a>
        </div>
    </div> -->

        <style type="text/css">
        .reserve-wrapper, .reserve-wrapper-2, .reserve-wrapper-3 {
            height: 0px;
            width: 100%;
            background-color: #009bff;
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
            content: "ĐẶT CHỖ NỀN TẢNG 2018 >>";
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
            background-color: #009bff;

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
            border-left: 16px solid #009bff;
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
            background-color: #009bff;
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
            z-index: 999;
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
                color: #009bff;
            }

            .reserve-pen ul li.active .step:before {
                top: -3px;
                left: -20px;
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
                color: #009bff;
            }

            .reserve-pen ul li.active .step:before {
                top: -3px;
                left: -20px;
            }
        }
    </style>
    <script type="text/javascript">
        var schoolId = 0;
        var districtShort = '';
    </script>
  
<!-- <script type="text/javascript" src="public/css/template/new2/js/jquery.cookie.js"></script>
<script type="text/javascript" src="public/css/template/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="public/css/template/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/css/template/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="public/css/template/select2/select2.js"></script>


 <script src="public/css/template/js/lib85ed.js?v=3.0.3c" type="text/javascript"></script>


    <script type="text/javascript" src="public/css/template/handlebars/handlebars.js"></script>
    <script type="text/javascript" src="public/css/template/js/qa85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/template/new2/js/user-info85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/template/new2/js/scripts85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/template/js/comments85ed.js?v=3.0.3c"></script>

    <script type="text/javascript" src="public/css/template/new2/js/notes85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/template/new2/js/mycourse85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/template/new2/js/loginv285ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/template/new2/js/section-level85ed.js?v=3.0.3c"></script>
  
<script language="JavaScript" type="text/javascript" src="public/css/template/lib/javascript-static.js"></script>
script language="JavaScript" type="text/javascript" src="https://hocmai.vn/lib/javascript-mod.php"></script
<script language="JavaScript" type="text/javascript" src="public/css/template/lib/overlib.js"></script>
<script language="JavaScript" type="text/javascript" src="public/css/template/lib/cookies.js"></script> -->


<link rel="stylesheet" href="public/css/template/fonts/utmavo.css">
<link type="text/css" rel="stylesheet" href="public/css/template/asset/css/style.css?v=2.4">
<link href="public/css/template/skins/minimal/blue.css" rel="stylesheet">
<link rel="stylesheet" href="public/css/template/font-awesome/css/font-awesome.min.css">

<script src="public/css/template/icheck/icheck.min.js"></script>
<script type="text/javascript" src="public/css/template/asset/script.js?v=2.4"></script>

<link href="public/css/template/css/stylesf3ee.css?v=3.2" rel="stylesheet">
<link href="public/css/template/css/jquery.alerts.css" rel="stylesheet">

<!-- <script src="public/css/template/js/jquery.alerts.js" type="text/javascript"></script>
<script src="public/css/template/js/scriptf3ee.js?v=3.2" type="text/javascript"></script> -->


<div id="pr-banner">
    <div class="pr-cover">
        <div class="wrapper">
            <div class="pr-binfo">
                <div class="pr-avatar">
                    <div class="profile-image">
                        <img class="userpicture defaultuserpic" align="middle" src="public/template/pix/99.jpg" border="0" width="100" height="100" alt="" />                                                    <a class="change-profile-image" href="#"><img src="public/template/asset/img/camera.png" alt=""></a>
                                            </div>
                    <div class="profile-fullname">
                         Dương Dương                      
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<div class="pr-tabs">
    <div class="wrapper">
        <ul id="menu-coputer">
            <li class="active" ><a href="#">Dương Dương</a></li></ul>
		</ul>
	</div>
    </div>
</div>
    <div id="profile" class="wrapper with-sidebar-first clearfix">
        
<div id="sidebar-fisrt" class="sidebar-first">
    <div class="panel panel-default user-info-menu">
        <div class="panel-body">
                                <div class="tabrow r1">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="taikhoan">Cập nhật thông tin tài khoản</a></li>
                                <li class="active"><a href="hoatdong">Lịch sử</a></li>

							</ul>
                        </div>
                    </div>
                            </div>
    </div>
</div>
@yield('noidungtaikhoan')

<!--KHUNG THAY DOI ANH DAI DIEN-->
<div class="modal hocmai-modal fade" id="updateAvatarModal" tabindex="-1" role="dialog" aria-labelledby="updateAvatarModalTitle" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 700px; width: 100%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="updateAvatarModalTitle">Thay đổi ảnh đại diện</h4>
            </div>
            <div class="modal-body">
                <form id="update-avatar" action="/user/profile/update-profile-picture.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="row clearfix">
                        <div class="col-sm-8">
                            <input class="form-control" type="text" name="filename"  placeholder="Use. gif, .jpg, .jpeg or .png file">
                        </div>
                        <div class="col-sm-2">
                            <label class="choose-avatar btn btn-primary">
                                <input type="file" id="user-avatar" name="avatar">
                                Chọn ảnh
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-primary" id="btn-update-avatar" disabled="disabled">Cập nhật</button>
                        </div>
                    </div>
                    <div class="message-form">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- -->

<div class="modal fade profile-modal" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="emailModalTitle">HOCMAI</h4>
            </div>
            <div class="modal-body">
                <div class="email-form">
                    <form action="" method="post" id="email-confirm-form" class="form-horizontal" data-step="">
                        <div class="form-group hide-step2">
                            <div class="col-sm-12">
                                <div class="email-warning">Email dùng để đăng nhập vào tài khoản của bạn, nhận các tin tức từ HOCMAI. Vì vậy, chỉ thay đổi email khi thật sự cần thiết.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="email-message"></div>
                            </div>
                        </div>
                        <div class="form-group hide-step2">
                            <label class="col-sm-4 control-label">Email mới:</label>
                            <div class="col-sm-8 emailInput">
                                <input type="text" name="email" id="email" class="form-control" value="" placeholder="Địa chỉ email">
                            </div>
                        </div>
                        <div class="form-group hide-step2">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary btn-confirm-next">Thay đổi</button>
                            </div>
                        </div>
                        <div class="form-group hide-step1">
                            <div class="col-sm-12 ">
                                <input type="text" name="code" id="code" class="form-control" value="" placeholder="Nhập mã xác minh">
                                <div id="codemail-notmatch" class="error-code"></div>
                            </div>
                        </div>
                        <div class="form-group hide-step1 modal-action">
                            <div class="col-sm-6">
                                <a href="#" class="resendCode" id="resendMail" data-loading-text="Đang gửi lại email...">Gửi lại email</a>
                                <span class="resend-success">Đã gửi lại email thành công.</span>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button type="submit" class="btn btn-primary btn-confirm">Đồng ý</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade profile-modal" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="emailModalTitle">HOCMAI</h4>
            </div>
            <div class="modal-body">
                <div class="email-form">
                    <form action="" method="post" id="email-confirm-form" class="form-horizontal" data-step="">
                        <div class="form-group hide-step2">
                            <div class="col-sm-12">
                                <div class="email-warning">Email dùng để đăng nhập vào tài khoản của bạn, nhận các tin tức từ HOCMAI. Vì vậy, chỉ thay đổi email khi thật sự cần thiết.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="email-message"></div>
                            </div>
                        </div>
                        <div class="form-group hide-step2">
                            <label class="col-sm-4 control-label">Email mới:</label>
                            <div class="col-sm-8 emailInput">
                                <input type="text" name="email" id="email" class="form-control" value="" placeholder="Địa chỉ email">
                            </div>
                        </div>
                        <div class="form-group hide-step2">
                            <div class="col-sm-12 text-right">
                                <button type="submit" class="btn btn-primary btn-confirm-next">Thay đổi</button>
                            </div>
                        </div>
                        <div class="form-group hide-step1">
                            <div class="col-sm-12 ">
                                <input type="text" name="code" id="code" class="form-control" value="" placeholder="Nhập mã xác minh">
                                <div id="codemail-notmatch" class="error-code"></div>
                            </div>
                        </div>
                        <div class="form-group hide-step1 modal-action">
                            <div class="col-sm-6">
                                <a href="#" class="resendCode" id="resendMail" data-loading-text="Đang gửi lại email...">Gửi lại email</a>
                                <span class="resend-success">Đã gửi lại email thành công.</span>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button type="submit" class="btn btn-primary btn-confirm">Đồng ý</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade profile-modal" id="changePassModal" tabindex="-1" role="dialog" aria-labelledby="changePassModalTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header clearfix">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="changePassModalTitle">HOCMAI</h4>
            </div>
            <div class="modal-body">
                <div class="pass-form">
                    <form action="" method="post" id="password-confirm-form" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="pass-message">Nhập lại mật khẩu cho email mới.</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="password" name="password" id="password" class="form-control" value="" placeholder="Mật khẩu">
                            </div>
                        </div>
                        <div class="form-group hide-step1">
                            <div class="col-sm-12">
                                <input type="password" name="repassword" id="repassword" class="form-control" value="" placeholder="Nhập lại mật khẩu">
                            </div>
                        </div>
                        <div class="form-group hide-step1">
                            <div class="col-sm-12 text-center">
                                <button type="submit" class="btn btn-primary">Tiếp tục</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






</div>
</div>






<script type="text/javascript">
	var pageTracker;
	var gaJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");

	function gaInit () {
    	try {
			pageTracker = _gat._createTracker("UA-2509692-1");
			pageTracker._initData();
			var pluginUrl = "//www.google-analytics.com/plugins/ga/inpage_linkid.js";
			_gaq.push(["_require", "inpage_linkid", pluginUrl]);
			pageTracker._trackPageview();
            jQuery.event.trigger({
            	type: "gaInit",
            	message: "Google analytics loaded!",
            });
            
		} catch(err) {}
    }

	jQuery(window).load(function() {
	    jQuery.ajax({
	        url: gaJsHost+"google-analytics.com/ga.js", type: "get", dataType: "script", cache: true,
	        timeout: 5000,
	        success: gaInit,
	        error: function() {
	        	jQuery.ajax({
			        url: gaJsHost+"stats.g.doubleclick.net/dc.js", type: "get", dataType: "script", cache: true,
			        success: gaInit
			    });
	        }
	    });
	});
</script>
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version="2.0";n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,"script","//connect.facebook.net/en_US/fbevents.js");


	<!-- Facebook Pixel Code THCS -->
    fbq("init", "880291722070865", {em: "insert_email_variable"});
    <!-- Facebook Pixel Code THPT -->
	fbq("init", "436790669862559", {em: "insert_email_variable"});
    

	fbq("track", "PageView");
	</script>

	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=880291722070865&ev=PageView&noscript=1"/></noscript>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=436790669862559&ev=PageView&noscript=1" /></noscript>
	<!-- End Facebook Pixel Code --><script type="text/javascript">
<!--
	(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
-->
</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        var d = new Date();
        var time = d.getTime();
        $.ajax({
            url: "/settheme.php",
            type: "GET",
            data: {t: time}
        });
    });
</script>

</body>
</html>
@endsection
