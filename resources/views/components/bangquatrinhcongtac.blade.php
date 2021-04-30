
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Quản lý quá trình công tác</title>
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
							<img src="https://vox-cpaas.com/assets/temp/industries/hr%20recruitment/hr-recruitment-illustration.svg" alt="logo">
						</div>
                        <h3 class="txtTitle">QUẢN LÝ QUÁ TRÌNH CÔNG TÁC</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="macongtac">Mã công tác</label>
									<?php 
                                    $permitted_chars = '0123456789QWETRYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="macongtac" id="macongtac" value="<?php echo $tmp ?>">
							
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="maphongban">Mã phòng ban</label>
                                    <select class="form-control" name="maphongban" id="maphongban">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label for="machucvu">Mã chức vụ</label>
                                    <select class="form-control" name="machucvu" id="machucvu">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
					</div>
					<div class="col-md-6">
						<div class="login-content">
                                <div class="form-group">
									<label  for="manhanvien" >Mã nhân viên</label></br>
                                    <select class="form-control" name="manhanvien" id="manhanvien">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
								</div> 
                                <div class="form-group">
									<label  for="thoigian">Thời gian</label></br>
                                    <input type="date" class="form-control" name="thoigian" id="thoigian" >
								</div> 
                                <div class="form-group">
									<label for="noidung">Nội dung: </label></br>
                                    <textarea class="form-group"  rows="4" cols="50"name="noidung" id="noidung"></textarea>
								</div> 
                                <div class="form-group">
									<label for="quyetdinh">Quyết định</label>
                                    <input type="text" class="form-control" name="quyetdinh" id="quyetdinh">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label  for="matrangthai" >Mã trạng thái</label></br>
                                    <select class="form-control" name="matrangthai" id="matrangthai">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
								</div> 

								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM QUÁ TRÌNH CÔNG TÁC</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
