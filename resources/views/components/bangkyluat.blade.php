
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
							<img src="https://cv.com.vn/blog/wp-content/uploads/2020/03/60457512_6120053145952_6391742855001407488_n.png" alt="logo">
						</div>
					</div>
					<div class="col-md-6">
						<div class="login-content">
                        <h3 class="txtTitle">BẢNG THÔNG TIN KỸ LUẬT</h3>
                        <form action="/login" method="POST" id="login-form">
								@csrf   
                                <div class="form-group">
									<label for="makyluat">Mã kỹ luật</label>
									<?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="makyluat" id="makyluat" value="<?php echo $tmp ?>">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="manhanvien">Mã nhân viên bị kỹ luật</label>
                                    <select class="form-control" name="manhanvien" id="manhanvien">
                                        <option value="Nam">Kinh</option>
                                        <option value="Nữ">Tày</option>
                                        <option value="Nam">Thái</option>
                                    </select>
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div>
                                <div class="form-group">
									<label  for="machitietkyluat" >Mã chi tiết kỹ luật</label></br>
									<?php 
                                    $permitted_chars = '0123456789QWETYUIOPASDFGHJKLZXCVBNM';
                                    $tmp = substr(str_shuffle($permitted_chars), 0, 10)?>
                                    <input type="text" class="form-control" name="machitietkyluat" id="machitietkyluat" value="<?php echo $tmp ?>">
							
								</div> 
                                <div class="form-group">
									<label  for="tenkyluat">Tên kỹ luật</label></br>
                                    <input type="text" class="form-control" name="tenkyluat" id="tenkyluat" placeholder="Nhập mã chi tiết khen thưởng hoặc hệ thống tự tạo">
								</div> 
                                <div class="form-group">
									<label for="ngaykyluat">Ngày ngày kỹ luật</label>
                                    <input type="date" class="form-control" name="ngaykyluat" id="ngaykyluat">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="tienkyluat">Số tiền phạt (VNĐ)</label>
                                    <input type="number" class="form-control" name="tienkyluat" id="tienkyluat">
									<small id="passwordHelp" class="form-text" style="color: red"></small>
								</div> 
                                <div class="form-group">
									<label for="lydo">Lý do</label>
                                    <textarea class="form-control" name="lydo" id="lydo" rows="4" cols="50" ></textarea>
								</div> 
								<div class="btn-login text-center mb-4">
									<p class="notifyLogin" style="color: red"></p>
									<button type="submit" class="btn btn-primary form-control" style="background-color: #6c63ff" id="submitLogin">THÊM KỸ LUẬT</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
</html>
