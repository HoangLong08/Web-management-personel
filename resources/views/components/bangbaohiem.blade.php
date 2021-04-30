
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
                        <h3 class="txtTitle">BẢO HIỂM</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="mabaohiem">Mã BẢO HIỂM</label>
									<input type="text" class="form-control" name="macongtac" id="macongtac" placeholder="Nhập mã công tác">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="machitietbaohiem">Mã Chi tiết bảo hiểm</label>
									<?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="machitietbaohiem" id="machitietbaohiem" value="<?php echo $tmp ?>">
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
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">CHI TIẾT BẢO HIỂM</h3>
                                <div class="form-group">
									<label  for="tenbaohiem" >Tên bảo hiểm</label></br>
                                    <input type="text" class="form-control" name="tenbaohiem" id="tenbaohiem">
								</div> 
                                <div class="form-group">
									<label  for="loai" >Loại</label></br>
                                    <select class="form-control" name="loai" id="loai">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
								</div>
                                <div class="form-group">
									<label  for="tungay" >Từ ngày</label></br>
                                    <input type="date" class="form-control" name="tungay" id="tungay">
								</div> 
                                <div class="form-group">
									<label  for="denngay" >Đến ngày</label></br>
                                    <input type="date" class="form-control" name="denngay" id="denngay">
								</div> 

								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM BẢO HIỂM</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
