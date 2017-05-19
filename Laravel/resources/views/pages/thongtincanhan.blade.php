@extends('pages.taikhoan')
@section('noidungtaikhoan')
        <div id="content-wr" class="content-wr transfer-wr">
            <div id="content" class="content">
                <form id="edit-profile" class="form-horizontal edit-profile-form" method="post" action="/user/profile/update.php"
      accept-charset="utf-8">
    <div class="personal-info">
        <div class="ge-update-title"><h4>Cập nhật thông tin cá nhân</h4></div>
        <div class="general-info ge2">
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">Họ và tên *</label>

                <div class="col-sm-7">
                    <input type="text" name="name" value="Dương Dương"
                           class="form-control" alt="Họ và tên đầy đủ" placeholder="Họ và tên">
                </div>
            </div>
          
            <div class="form-group ">
                <label for="phone" class="col-sm-2 col-xs-12 control-label">Ngày sinh *</label>
                <div class="clearfix">
                    <div class="col-sm-2 col-xs-2">
                        <select name="birth_date" id="birth-date" class="form-control" style="width: 80px !important;">
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
                        <select name="birth_month" id="birth-month" class="form-control" style="width: 80px !important;">
                            <option value="">Tháng</option>
                                                            <option value="1" >01</option>
                                                            <option value="2" >02</option>
                                                            <option value="3" >03</option>
                                                            <option value="4" >04</option>
                                                            
                                                    </select>
                    </div>
                    <div class="col-sm-2 col-xs-3 " style="margin-left: 5px;" >
                        <select name="birth_year" id="birth-year" class="form-control" style="width: 80px !important;">
                            <option value="">Năm</option>
                                                            <option value="2017" >2017</option>
                                                            <option value="2016" >2016</option>
                                                            <option value="2015" >2015</option>
                                                            <option value="2014" >2014</option>
                                                            <option value="2013" >2013</option>
                                                            
                                                    </select>

                    </div>
                    <div class="col-sm-2 col-xs-3">
                    
					</div>
                </div>
            </div>
			
		

            <div class="form-group">
                <label for="sex" class="col-sm-2 col-xs-12 control-label">Giới tính *</label>
                <div class="col-sm-7 col-xs-8">
                    <div class="clearfix">
                        <div class="col-sm-2 col">
                            <select name="sex" id="sex" class="form-control">
                                <option value="">Giới tính</option>
                                <option value="1" >Nam</option>
                                <option value="2" >Nữ</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-4 col-field mypublic-info" >

				</div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-2 col-xs-12 control-label">Số điện thoại</label>
                <!--<div class="col-sm-7 col-xs-8">
                    <label class="form-group-value">
                                                    <a href="#" class="btnAddphone">Thêm số điện thoại</a>
                                            </label>
                </div>-->
				<div class="col-sm-7 col-xs-8">
                    <input type="text" id="facebook" class="form-control" name="facebook"
                           value="">
                </div>
                <div class="col-sm-3 col-xs-4 col-field mypublic-info">

                </div>
            </div>

            <div class="form-group special-info type-1 type-4">
                <label for="address" class="col-sm-2 col-xs-12 control-label">Địa chỉ hiện tại</label>

                <div class="col-sm-7 col-xs-8">
                    <input type="text" id="address" class="form-control" name="address"
                           value="">
                </div>
                <div class="col-sm-3 col-xs-4 col-field">

                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-2 col-xs-12 control-label">Email</label>
                <div class="col-sm-7 col-xs-8">
                    <label class="form-group-value">
                        <span class="">duongryo96@gmail.com</span>

                    </label>
                    <label>
                        <a href="#" class="btnChangemail pull-right">Thay đổi email</i></a>

                    </label>
                </div>
                <div class="col-sm-3 col-xs-4 col-field mypublic-info" >

				</div>
            </div>

            <div class="form-group">
                <label for="facebook" class="col-sm-2 col-xs-12 control-label">Facebook</label>
                <div class="col-sm-7 col-xs-8">
                    <input type="text" id="facebook" class="form-control" name="facebook"
                           value="">
                </div>
                <div class="col-sm-3 col-xs-4 col-field mypublic-info">

                </div>
            </div>
        </div>
		
		<div class="ge-update-title"><h4>Cập nhật thông tin tài khoản</h4></div>
		<div class="general-info ge2">
			<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Mật khẩu</label>

					<div class="col-sm-7">
						<label class="form-group-value">
							<span class="matkhau-addr pull-left">********</span>
						</label>
					</div>			
					
		<div class="col-sm-3 col-xs-4 col-field mypublic-info" >
        <div class="btn-group btn-privacy pr-grouplink">
				
				
				<label>
                        <a href="#" class="btnChangematkhau pull-right">Thay đổi</i></a>
				</label>
			  
		</div>    
		</div>

			</div>
		</div>
    </div>


    <input type="hidden" id="userid" name="id" value="2842448">

    <div class="text-center">
        <button class="btn btn-primary btn-update-profile btn-lg" type="submit" data-loading-text="Đang thực hiện...">Cập nhật</button>
    </div>

</form>            </div>
        </div>

    </div>
@endsection