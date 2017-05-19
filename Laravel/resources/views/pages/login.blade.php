@extends('layout.master')
@section('noidung')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    <!--[if lt IE 9]>
    <link href="https://hocmai.vn/theme/new2/css/ie8.css?v=3.0.3c" rel="stylesheet" type="text/css" media="all" />
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

</script>    <script src="public/css/js/social-login/js/lib85ed.js?v=3.0.3c" type="text/javascript"></script>

    <script type="text/javascript" src="public/css/plugins/handlebars/handlebars.js"></script>

    <script type="text/javascript" src="public/css/plugins/MathJax/MathJaxb198.js?config=TeX-MML-AM_CHTML"></script>

    <script type="text/javascript" src="public/css/qa/asserts/js/qa85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/theme/new2/js/user-info85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/theme/new2/js/scripts85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/qa/asserts/js/comments85ed.js?v=3.0.3c"></script>

    <script type="text/javascript" src="public/css/theme/new2/js/notes85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/theme/new2/js/mycourse85ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/theme/new2/js/loginv285ed.js?v=3.0.3c"></script>
    <script type="text/javascript" src="public/css/theme/new2/js/section-level85ed.js?v=3.0.3c"></script>

<script language="JavaScript" type="text/javascript" src="../lib/javascript-static.js"></script>
<!--script language="JavaScript" type="text/javascript" src="https://hocmai.vn/lib/javascript-mod.php"></script-->
<script language="JavaScript" type="text/javascript" src="../lib/overlib.js"></script>
<script language="JavaScript" type="text/javascript" src="../lib/cookies.js"></script>

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
            
<div style="position: absolute; z-index: -100; bottom: 0;">

    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 995740040;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="../../www.googleadservices.com/pagead/f.txt">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/995740040/?value=0&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript> </div>
<script type="text/javascript">
    var pageTracker;
    var gaJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");

    function gaInit () {
        try {
            pageTracker = _gat._createTracker("UA-2509692-1");
            pageTracker._initData();
            var pluginUrl = "../../www.google-analytics.com/plugins/ga/inpage_linkid.js";
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
</script><script type="text/javascript">
            jQuery(document).ready(function($){
                var d = new Date();
                var time = d.getTime();
                $.ajax({
                    url: "/recontact.php",
                    type: "GET",
                    data: {t: time}
                });
            });
        </script>            </div>
        </div>
    </div>
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
    
<script type="text/javascript" src="public/css/theme/new2/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="public/css/theme/new2/js/jquery.cookie.js"></script>
<script type="text/javascript" src="public/css/plugins/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="public/css/theme/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="public/css/plugins/validation/jquery.validate.min.js"></script>
<script type="text/javascript" src="public/css/plugins/select2/select2.js"></script>     
<link href="public/css/stylesf3ee.css?v=3.2" rel="stylesheet">
<link href="public/css/jquery.alerts.css" rel="stylesheet">
<script src="public/js/jquery.alerts.js" type="text/javascript"></script>
<script src="public/js/scriptf3ee.js?v=3.2" type="text/javascript"></script>

<div id="main" class="wrapper with-sidebar-first clearfix">
    <div class="idealsteps-container">	
        <!-- Begin Form -->
        <div class="alertMsg"></div>
        <form id="sso-form" class="signupforms" method="post" action="#" enctype="multipart/form-data" accept-charset="utf-8">
            <input type="hidden" name="a" value="" id="a">
            <div class="title-signup">đăng nhập tài khoản dự thi</div>
            <div class="sub-title-signup">Cuộc thi tạo điều kiện cho sinh viên thử sức và nâng cao kiến thức. </div>
            <div class="row-signup mg40">
                <input type="text" id="username" name="username" value="" placeholder="Tên tài khoản"/>
            </div>
            <div class="clear-both"></div>
            <div class="row-signup">
                <input type="password" id="password" name="password" value="" placeholder="Mật khẩu"/>
            </div>
            <div class="clear-both"></div>
            <div class="row-signup mg40">
                <input class="submit register-btn" type="submit" value="Đăng nhập"/>
            </div>
            <div class="clear-both"></div>
            <div class="row-signup mg16"><div class="light-hight-left"></div><span class="or-txt"> hoặc </span><div class="light-hight-right"></div></div>
            <div class="clear-both"></div>
            <div class="row-signup"><div class="other-login-txt">Đăng nhập nhanh bằng:</div></div>
            <div class="clear-both"></div>
            <div class="row-signup">
                <div class="btn-groups">
                    <div class="other-login-btn facebook-btn fb-social" data-name="facebook">
                        <a class="facebook" href="https://www.facebook.com/v2.8/dialog/oauth?client_id=600873143331099&amp;state=04c574f87abca6db9298fa558a410a60&amp;response_type=code&amp;sdk=php-sdk-5.4.0&amp;redirect_uri=https%3A%2F%2Fhocmai.vn%2Flogin%2FloginFacebook.php&amp;scope=email%2Cpublic_profile">
                            <img src="public/img/images/fb.jpg" alt="Đăng nhập bằng Facebook">
                        </a>
                    </div>
                    <div class="other-login-btn google-plus-btn google-social" data-name="google">
                        <a class="google" href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=https%3A%2F%2Fhocmai.vn%2Flogin%2FloginGoogle2.php&amp;client_id=880785099124-b2mb58bvfppe88kmq2ir8omld7g122c6.apps.googleusercontent.com&amp;scope=profile+email&amp;access_type=online&amp;approval_prompt=auto">
                            <img src="public/img/images/google.jpg" alt="Đăng nhập bằng Google">
                        </a>
                    </div>
                    <div class="other-login-btn yahoo-btn yahoo-social" data-name="yahoo">
                        <a class="yahoo" href="https://accounts.google.com/o/oauth2/auth?response_type=code&amp;redirect_uri=https%3A%2F%2Fhocmai.vn%2Flogin%2FloginGoogle2.php&amp;client_id=880785099124-b2mb58bvfppe88kmq2ir8omld7g122c6.apps.googleusercontent.com&amp;scope=profile+email&amp;access_type=online&amp;approval_prompt=auto">
                            <img src="public/img/images/yahoo.jpg" alt="Đăng nhập bằng Yahoo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="clear-both"></div>
            <div class="row-signup mg30">
                <div class="light-forgot">
                    <a href="signup" class="loginv2-register">Đăng ký <span>hoặc</span></a>
                    <a class="loginv2-forgot" href="forgot_password.html">Quên mật khẩu?</a>
                </div>
            </div>
            <div class="clear-both"></div>
            <div class="row-signup footer-text">
                <div class="footer-txt">
                    <div class="se-box-note">(*) Thông tin đăng ký của bạn được bảo mật và chỉ sử dụng trong tư vấn liên quan đến cuộc thi <a href="../index.php" target="_blank">Solutions For Life</a> , cũng như đồng ý nhận email về các thông tin mới nhất từ cuộc thi.</div>                </div>
            </div>
            <div class="clear-both"></div>
        </form>
    </div>
</div>
    </div>
</div>
</div>
<div class="modal hocmai-modal fade" id="changeThemeModal" tabindex="-1" role="dialog" aria-labelledby="changeThemeModalTitle" aria-hidden="true">
    <div class="modal-dialog" style="width: 450px;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="changeThemeModalTitle">Xác nhận</h4>
            </div>
            <div class="modal-body">
                <div class="warning-des">Vui lòng xác nhận sử dụng giao diện cũ của Hocmai.vn</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Bỏ qua</button>
                <button id="changethemehocmai" type="button" class="btn btn-primary" data-dismiss="modal">Đồng ý</button>
            </div>
        </div>
    </div>
</div>
<div class="modal hocmai-modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog" style="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="loginModalTitle">đăng nhập</h4>
            </div>
            <div class="modal-body">
                <form id="login" name="login" method="post" action="https://hocmai.vn/loginv2/index.php">
                    <div class="alertMsg"></div>
                    <div class="clearfix">
                        <div class="login-element-wr input-username">
                            <input type="text" class="edit-login" size="30" name="username" placeholder="Tên đăng nhập"/>
                        </div>
                        <div class="login-element-wr input-password">
                            <input type="password" id="realpass" size="30" name="password" class="edit-login" placeholder="Mật khẩu"/>
                        </div>
                        <div class="clearfix">
                            <div class="login-actions">
                                <input type="hidden" id="a" value="https://hocmai.vn/loginv2/index.php" name="a"/>
                                <input type="hidden" id="testcookies" value="1" name="testcookies"/>
                                <div class="login-actions-left" style="display: none;">
                                    <div class="checkbox">
                                        <input type="checkbox" class="chkRemember" name="remember" value="1" style="margin-left: -20px;">
                                        <label><span>Ghi nhớ</span></label>
                                    </div>
                                </div>
                                <div class="login-actions-right">
                                    <input type="submit" class="btn-login" value="Đăng nhập"/>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="login-action-sub">
                                <ul>
                                    <li><a target="_blank" href="signup.html" class="login-register">Đăng ký</a></li>
                                    <li><a class="login-forgot" target="_blank" href="forgot_password.html">Quên mật khẩu?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../xac-nhan-chuyen-tien/warning.php"></script>
<div style="position: absolute; z-index: -100; bottom: 0;">
	<!-- Google Code dành cho Thẻ tiếp thị lại -->
	<!--------------------------------------------------
	Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup
	--------------------------------------------------->
	
	<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 995740040;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
	</script>
	<script type="text/javascript" src="../../www.googleadservices.com/pagead/f.txt">
	</script>
	<noscript>
	<div style="display:inline;">
	<img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/995740040/?value=0&amp;guid=ON&amp;script=0"/>
	</div>
	</noscript> </div>
<script type="text/javascript">
	var pageTracker;
	var gaJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");

	function gaInit () {
    	try {
			pageTracker = _gat._createTracker("UA-2509692-1");
			pageTracker._initData();
			var pluginUrl = "../../www.google-analytics.com/plugins/ga/inpage_linkid.js";
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
	document,"script","../../connect.facebook.net/en_US/fbevents.js");


	<!-- Facebook Pixel Code THCS -->
    fbq("init", "880291722070865", {em: "insert_email_variable"});
    <!-- Facebook Pixel Code THPT -->
	fbq("init", "436790669862559", {em: "insert_email_variable"});
    

	fbq("track", "PageView");
	</script>

	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=880291722070865&amp;ev=PageView&amp;noscript=1"/></noscript>
	<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=436790669862559&amp;ev=PageView&amp;noscript=1" /></noscript>
	<!-- End Facebook Pixel Code --><script type="text/javascript">
<!--
	(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "../../connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
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

<!-- Mirrored from hocmai.vn/loginv2/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Apr 2017 17:51:14 GMT -->
</html><!-- Execution took 0.015427 seconds, 1.5 MB -->
@endsection