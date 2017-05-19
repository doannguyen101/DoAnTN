@extends('layout.adminmaster')
@section('content')
<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i> Quản lý thí sinh</a>
  <ul>
    <li><a href="bangdieukhien"><i class="icon icon-dashboard"></i> <span>Bảng điều khiển</span></a> </li>
    <li> <a href="quanlybaiviet"><i class="icon icon-edit"></i> <span>Quản lý bài viết</span></a> </li>
    <li > <a href="quanlybangthi"><i class="icon icon-table"></i> <span>Quản lý bảng thi</span></a> </li>
    <li><a href="quanlykithi"><i class="icon icon-columns"></i> <span>Quản lý kỳ thi</span></a></li>
  <li><a href="quanlydotthi"><i class="icon icon-list"></i> <span>Quản lý đợt thi</span></a></li>
    <li class="active"><a href="quanlythisinh"><i class="icon icon-user"></i> <span>Quản lý thí sinh</span></a></li>
  <li ><a href="quanlytruong"><i class="icon icon-briefcase"></i> <span>Quản lý trường</span></a></li>
  <li><a href="quanlyketqua"><i class="icon icon-trophy"></i> <span>Quản lý kết quả</span></a></li>
  <li><a href="quanlynguoidung"><i class="icon icon-group"></i> <span>Quản lý người dùng</span></a></li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Quản lý thí sinh</a> </div>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <button class="btn btn-success btn-mini" id="themthisinh">Thêm thí sinh</button>
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Danh sách thí sinh</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Mã thí sinh</th>
                  <th>Tên đăng nhập</th>
                  <th>Họ tên</th>
				  <th>MSSV</th>
				  <th>Giới tính</th>
				  <th>Ngày sinh</th>
				  <th>Số điện thoại</th>
				  <th>Email</th>
				  <th>Hình đại diện</th>
				  <th>Mã trường</th>
				  <th>Lớp</th>
				  <th>Trạng thái</th>
				  <th></th>
                </tr>
              </thead>
              <tbody>
@foreach($thisinh as $ts)
                <tr class="gradeX">
                  <td>{!! $ts->mathisinh !!}</td>
                  <td>{!! $ts->tendangnhap !!}</td>
                  <td>{!! $ts->hoten !!}</td>
				  <td>{!! $ts->mssv !!}</td>
				        <?php
                if($ts->gioitinh=='nam'){
                ?>
                  <td><input type="checkbox" checked="checked" name="trangthai" /></td>
                <?php
                }
                else{
                ?>
                  <td><input type="checkbox" name="trangthai" /></td>
                <?php
                }
                ?>
				  <td>{!! $ts->ngaysinh !!}/td>
				  <td>{!! $ts->sodienthoai !!}</td>
				  <td>{!! $ts->email !!}</td>
				  <td>{!! $ts->hinhdaidien !!}</td>
				  <td>{!! $ts->tentruong !!}</td>
				  <td>{!! $ts->lop !!}</td>
				        <?php
                if($ts->trangthai=='1'){
                ?>
                  <td><input type="checkbox" checked="checked" name="trangthai" /></td>
                <?php
                }
                else{
                ?>
                  <td><input type="checkbox" name="trangthai" /></td>
                <?php
                }
                ?>
				  <td><div class="fr"><a href="#" class="btn btn-primary btn-mini">Sửa</a> <a href="#" class="btn btn-danger btn-mini">Xóa</a></div></td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="public/admin/css/css-popup/cssadminquanlythisinh.css">
<script async="" src="public/admin/js/js-popup/analytics.js"></script>
<script type="text/javascript" src="public/admin/js/js-popup/jquery.min.js"></script>
<script src="public/admin/ckeditor/ckeditor.js"></script>
<script src="public/admin/ckfinder/ckfinder.js"></script>
<script>
$(document).ready(function() {
        //cho hiện hộp đăng nhập trong 300ms
     $('#themthisinh').click(function(){
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
<!-- @if (count($errors) >0)
    <ul>
        @foreach ($errors->all() as $error)
        @endforeach
    </ul>
@endif   -->
        <form id="signupforms" name="signupforms" class="signupforms" method="post" action="{!!route('themthisinh')!!}" >
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="ngaysoan" >
              <div class="ngaysoan"><b>Tên đăng nhập</b></div>
              <select id="txttenbang" name="cbbtendangnhap">
             @foreach($nguoidung as $ng)
                <option >{!! $ng->tendangnhap !!}</option> 
              @endforeach
               </select> 
              <!-- {!! $errors->first('txttenbang') !!} -->
            </div>
            <div class="ngaysoan" >
              <div class="ngaysoan"><b>Tên trường</b></div>
              <select id="txttenbang" name="cbbtentruong"  >
              @foreach($truong as $t)
                <option value="{!! $ts->matruong !!}">{!! $t->tentruong !!}</option>
              @endforeach
              </select> 
              <!-- {!! $errors->first('txttenbang') !!} -->
            </div>

              <button type="submit"  name="btnthem" class="btnthem">Thêm</button>
              <button  class="btnthoat" id="btnthoat"><span class=""></span>Thoát</button>
          </form>
        </div>
  
    </div>
@endsection