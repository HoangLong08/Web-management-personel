
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		  <meta name="csrf-token" content="{{csrf_token()}}">
        <title>Quản lý phòng ban</title>
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
                        <h3 class="txtTitle">QUẢN LÝ PHÒNG BAN</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="mahongban">Mã phòng ban</label>
									<input type="text" class="form-control" name="maphongban" id="maphongban" placeholder="Nhập mã phòng ban">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="tenphongban">Tên phòng ban</label>
                                    <input type="text" class="form-control" name="tenphongban" id="tenphongban" placeholder="Nhập tên phòng ban">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">CHI TIẾT PHÒNG BAN</h3>
                                <div class="form-group">
									<label  for="machitietphongban" >Mã chi tiết phòng ban</label></br>
                                    <?php 
                                    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="machitietphongban" id="machitietphongban" value="<?php echo $tmp ?>">
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
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM PHÒNG BAN</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
