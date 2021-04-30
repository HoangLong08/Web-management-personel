
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
							<img src="https://www.bbconsult.co.uk/wp-content/uploads/2019/07/hire-software-developer.jpg" alt="logo">
						</div>
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">BẢNG THÔNG TIN KHEN THƯỞNG</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="makhenthuong">Mã khen thưởng</label>
									<?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="makhenthuong" id="makhenthuong" value="<?php echo $tmp ?>">
							
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="manhanvien">Mã nhân viên được khen thưởng</label>
                                    <select class="form-control" name="manhanvien" id="manhanvien">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="machitietkhenthuong" >Mã chi tiết khen thưởng</label></br>
									<?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="machitietkhenthuong" id="machitietkhenthuong" value="<?php echo $tmp ?>">
								</div> 
                                <div class="form-group">
									<label  for="tenkhenthuong">Tên khen thưởng</label></br>
                                    <input type="text" class="form-control" name="tenkhenthuong" id="tenkhenthuong" placeholder="Nhập mã tên khen thưởng">
								</div> 
                                <div class="form-group">
									<label for="ngaykhenthuong">Ngày khen thưởng</label>
                                    <input type="date" class="form-control" name="ngaykhenthuong" id="ngaykhenthuong">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="sotienthuong">Số tiền thưởng (VNĐ)</label>
                                    <input type="number" class="form-control" name="sotienthuong" id="sotienthuong">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM KHEN THƯỞNG</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
