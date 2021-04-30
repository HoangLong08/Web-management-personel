
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Quản lý khen thưởng</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		  <link rel="shortcut icon" href="{{ asset('asset/img/icon_shop.jpg') }}" />
		  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
		  <link rel="stylesheet" type="text/css" href="{{ asset('asset/css/style_form.css') }}">
    </head>
    <body>
		<div class="home-wrap">
			<div class="login-wrap">
				<div class="row content-login">
					<div class="col-md-6">
                        <h4 class="txtleft">INSERT DATA</h4>
						<div class="login-image">
							<img src="https://media.dau.edu.vn/Media/1_TH1057/Images/202012/3-cong-khai-20201228094625-e.jpg" alt="logo">
						</div>
                        <h3 class="txtTitle">BẢNG THÔNG TIN LƯƠNG</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="mabangluong">Mã bảng lương</label>
									<?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="mabangluong" id="mabangluong" value="<?php echo $tmp ?>">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="manhanvien">Mã nhân viên</label>
                                    <select class="form-control" name="manhanvien" id="manhanvien">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="luongcoban" >Lương cơ bản</label></br>
                                    <input type="number" class="form-control" name="luongcoban" id="luongcoban">
								</div> 
                                <div class="form-group">
									<label  for="trocapchucvu" >Trợ cấp chức vụ</label></br>
                                    <input type="number" class="form-control" name="trocapchucvu" id="trocapchucvu">
								</div> 
                                <div class="form-group">
									<label  for="trocapkhac" >Trợ cấp khác</label></br>
                                    <input type="number" class="form-control" name="trocapkhac" id="trocapkhac">
								</div> 
					</div>
					<div class="col-md-6">
						<div class="login-content">
                                <div class="form-group">
									<label  for="ghichu">Ghi chú</label></br>
                                    <input type="text" class="form-control" name="ghichu" id="ghichu" placeholder="Nhập ghi chú">
								</div> 
                                <div class="form-group">
									<label for="ngaycap">Ngày cấp lương</label>
                                    <input type="date" class="form-control" name="ngaycap" id="ngaycap">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <h3  class="txtTitle" >BẢNG CÔNG</h3>
                                <div class="form-group">
									<label for="mabangcong">Mã bảng công</label>
                                    <?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="mabangcong" id="mabangcong" value="<?php echo $tmp ?>">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="sogiolam" >Số giờ làm</label></br>
                                    <input type="number" class="form-control" name="sogiolam" id="sogiolam">
								</div> 
                                <div class="form-group">
									<label  for="sogiolamthemngaythuong" >Số giờ làm thêm ngày thường</label></br>
                                    <input type="number" class="form-control" name="sogiolamthemngaythuong" id="sogiolamthemngaythuong">
								</div> 
                                <div class="form-group">
									<label  for="sogiolamthemngaynghi" >Số giờ làm thêm ngày nghỉ</label></br>
                                    <input type="number" class="form-control" name="sogiolamthemngaynghi" id="sogiolamthemngaynghi">
								</div> 
                                <div class="form-group">
									<label  for="sogiolamthemngayletet" >Số giờ làm thêm ngày lễ tết</label></br>
                                    <input type="number" class="form-control" name="sogiolamthemngayletet" id="sogiolamthemngayletet">
								</div> 
                                <div class="form-group">
									<label  for="songaynghiphep" >Số ngày nghỉ phép</label></br>
                                    <input type="number" class="form-control" name="songaynghiphep" id="songaynghiphep">
								</div> 
                                <div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">XÁC NHẬN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
