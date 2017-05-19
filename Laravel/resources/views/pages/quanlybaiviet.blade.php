@extends('layout.adminmaster')
@section('content')

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li><a href="bangdieukhien"><i class="icon icon-dashboard"></i> <span>Bảng điều khiển</span></a> </li>
    <li class="active"> <a href="quanlybaiviet"><i class="icon icon-edit"></i> <span>Quản lý bài viết</span></a> </li>
    <li > <a href="quanlybangthi"><i class="icon icon-table"></i> <span>Quản lý bảng thi</span></a> </li>
    <li><a href="quanlykithi"><i class="icon icon-columns"></i> <span>Quản lý kỳ thi</span></a></li>
  <li><a href="quanlydotthi"><i class="icon icon-list"></i> <span>Quản lý đợt thi</span></a></li>
    <li><a href="quanlythisinh"><i class="icon icon-user"></i> <span>Quản lý thí sinh</span></a></li>
  <li><a href="quanlytruong"><i class="icon icon-briefcase"></i> <span>Quản lý trường</span></a></li>
  <li><a href="quanlyketqua"><i class="icon icon-trophy"></i> <span>Quản lý kết quả</span></a></li>
  <li><a href="quanlynguoidung"><i class="icon icon-group"></i> <span>Quản lý người dùng</span></a></li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Quản lý bài viết</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span6">               
	  <button class="btn btn-success btn-mini" id="taobaiviet">Tạo bài viết mới</button>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-file"></i> </span>
            <h5>Bài viết gần đây</h5>
          </div>
          <div class="widget-content nopadding">
            <ul class="recent-posts">
        @foreach($baiviet as $bv)
              <li>
                <div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
                <div class="article-post">
                  <div class="fr"><a href="{!! URL('sua',[$bv->mabaiviet]) !!}" class="btn btn-primary btn-mini" id="btnsua1">Sửa</a> 
                  <a href="#" class="btn btn-danger btn-mini">Xóa</a></div>
                  <span class="user-info">Ngày đăng:{!!$bv->ngaydang!!} </span>
                  <p><a href="#">{!!$bv->tenbaiviet!!}</a> </p>
                </div>
              </li>
        @endforeach



<?php

?>



              <li>
                <button class="btn btn-warning btn-mini">Xem tất cả</button>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="public/admin/css/css-popup/cssAdmin.css">
<script async="" src="public/admin/js/js-popup/analytics.js"></script>
<script type="text/javascript" src="public/admin/js/js-popup/jquery.min.js"></script>
<script src="public/admin/ckeditor/ckeditor.js"></script>
<script src="public/admin/ckfinder/ckfinder.js"></script>
<script>
$(document).ready(function() {
        //cho hiện hộp đăng nhập trong 300ms
     $('#taobaiviet').click(function(){
           $('.login').fadeIn(300);
 
           // thêm phần tử id="over" vào sau body
          $('body').append('<div id="over">');
          $('#over').fadeIn(300);
 
        return false;
      });
      $('#btnsua').click(function(){
           $('.login').fadeIn(300);
 
           // thêm phần tử id="over" vào sau body
          $('body').append('<div id="over">');
          $('#over').fadeIn(300);
 
        return false;
      });
     $('btnthoat').click(function(){

            $('.login').fadeOut(300);
            $('#over').fadeOut(300);
      });

});
</script>
<body class="myPage">
<center>
<div class="login" id="login-box" >
    <div class="formdangnhap" >  
        <div class="taikhoan">
        <form id="signupforms" name="signupforms" class="signupforms" method="post" action="{!!route('thembaiviet')!!}" >
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="loaibaiviet">
              <div class="lblloaibaiviet"><b>Loại bài viết</b></div>
              <select  id="cbbloaibaiviet" name="cbbloaibaiviet">
              @foreach($loaibaiviet as $lbv)
                  <option value="{!! $lbv->maloaibaiviet !!}">{!! $lbv->tenloaibaiviet !!}</option>
              @endforeach
              </select>  
            </div>
      </br>
            <div class="loaibang" >
              <div class="loaibang"><b>Loại bảng</b></div>
              <select  id="cbbloaibang" name="cbbloaibang" >
              @foreach($bangthi as $bt)
                  <option value="{!!$bt->mabangthi!!}">{!!$bt->tenbangthi!!}</option>
              @endforeach 
              </select> 
            </div>

            <div class="ngaysoan" >
              <div class="ngaysoan"><b>Ngày soạn</b></div>
              <input type="date"  id="txtngaysoan2" name="txtngaysoan"  />  
            </div>
            <div class="nguoidang" >
              <div class="nguoidang" "><b>Người đăng</b></div>
               <select  id="cbbnguoidang" name="cbbnguoidang" >
              @foreach($nguoidung as $nd)
                  <option>{!!$nd->tendangnhap!!}</option>
              @endforeach 
              </select> 
            </div>

      </br>


  <div class=""  style="clear: both;"">
            <textarea  id="editor1" name="noidung" cols="80" rows="10" ></textarea>
<script>
 
       // Replace the <textarea id="editor1"> with an CKEditor
       // instance, using default configurations.
    CKEDITOR.replace( 'editor1', {
           uiColor: '#14B8C4',
           toolbar: [
               [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
               [ 'FontSize', 'TextColor', 'BGColor' ]
           ]
       });
 
</script>
</div>
 </br>
              <button type="submit"  name="btndangnhap" class="btndangnhap">Thêm</button>
              <button  class="btnthoat" id="btnthoat"><span class=""></span>Thoát</button>
          </form>
        </div>
  
    </div>
@endsection