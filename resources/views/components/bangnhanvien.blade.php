<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Quản lý thông tin nhân viên</title>
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
							<img src="https://cv.com.vn/blog/wp-content/uploads/2020/03/59889964_6119338099152_5746829704208318464_n.png" alt="logo">
						</div>
                        <h3 class="txtTitle">BẢNG THÔNG TIN NHÂN VIÊN</h3>
							<form action="/login" method="POST" id="login-form">
								@csrf
								<div class="form-group">
									<label for="manhanvien">Mã nhân viên</label>
									<input type="text" class="form-control" name="manhanvien" id="manhanvien" placeholder="Nhập mã nhân viên">
									<small id="emailHelp" class="form-text" style="color: red"></small>
								</div>
								<div class="form-group">
									<label for="hoten">Họ và tên</label>
									<input type="text" class="form-control" name="hoten" id="hoten" placeholder="Nhập họ và tên nhân viên">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="ngaysinh">Ngày sinh</label>
									<input type="text" class="form-control" name="ngaysinh" id="ngaysinh" placeholder="Nhập ngày sinh">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="noisinh">Nơi sinh</label>
									<input type="text" class="form-control" name="noisinh" id="noisinh" placeholder="Nhập nơi sinh">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="gioitinh">Giới tính</label>
                                    <select class="form-control" name="gioitinh" id="gioitinh">
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
                                        <label for="sodienthoai">Số điện thoại</label>
                                        <input type="text" class="form-control" name="sodienthoai" id="sodienthoai" placeholder="Nhập số điện thoại">
                                        <small id="passwordHelp" class="form-text" style="color: red"></small>
                                </div> 
                                
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">...</h3>
                               
                                <div class="form-group">
									<label for="email">Email</label>
									<input type="text" class="form-control" name="email" id="email" placeholder="Nhập email">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="dantoc">Dân Tộc</label>
                                    <select class="form-control" name="dantoc" id="dantoc">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                        <option value="Nữ">Mường</option>
                                        <option value="Nam">Hoa</option>
                                        <option value="Nữ">Nùng</option>
                                        <option value="Nam">HMông</option>
                                        <option value="Nữ">Khmer</option>
                                        <option value="Nam">Dao</option>
                                        <option value="Nữ">Khơ Mú</option>
                                        <option value="Nam">Thổ</option>
                                        <option value="Nữ">Cơ Tu</option>
                                        <option value="Nam">Tà ôi</option>
                                        <option value="Nữ">Chơ Ro</option>
                                        <option value="Nam">Xinh Mun</option>
                                        <option value="Nữ">Co</option>
                                        <option value="Nữ">Khác...</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="hokhauthuongtru" class="label_title">Hộ Khẩu thường trú</label></br>
									<label for="tinhhk">Tỉnh/T.phố:  </label>
                                    <select class="" name="tinhhk" id="tinhhk">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                    <label for="huyenhk">Q.Huyện:  </label>
                                    <select class="" name="huyenhk" id="huyenhk">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                    <label for="xahk">P.Xã:  </label>
                                    <select class="" name="xahk" id="xahk">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
								</div> 
                                <div class="form-group">
									<label  for="noiohientai" class="label_title">Nơi ở hiện tại</label></br>
									<label for="tinhno">Tỉnh/T.phố:  </label>
                                    <select class="" name="tinhno" id="tinhno">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                    <label for="huyenno">Q.Huyện:  </label>
                                    <select class="" name="huyenno" id="huyenno">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                    <label for="xano">P.Xã:  </label>
                                    <select class="" name="xano" id="xano">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                    <input type="text" class="form-control" name="chitiet" id="chitiet" placeholder="Nhập địa chỉ chi tiết (Số nhà , tên đường)">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="cmnd">CMND</label>
									<input type="text" class="form-control" name="cmnd" id="cmnd" placeholder="Nhập số chứng minh nhân dân">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="noicap">Nơi cấp</label>
                                    <select class="form-control" name="noicap" id="noicap">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="ngaytao">Ngày tạo</label>
                                    <input type="date" class="form-control" name="ngaytao" id="ngaytao">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="maphongban">Mã phòng ban</label>
                                    <select  class="form-control" name="maphongban" id="maphongban">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                 	<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="machucvu">Mã chức vụ</label>
                                    <select  class="form-control" name="machucvu" id="machucvu">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                 	<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="matrinhdo">Mã trinh do-Chuyen mon</label>
                                    <select  class="form-control" name="machucvu" id="machucvu">
                                        <option value="">Đà Nẵng</option>
                                        <option value="">Quảng Nam</option>
                                    </select>
                                 	<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>

								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM NHÂN VIÊN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
