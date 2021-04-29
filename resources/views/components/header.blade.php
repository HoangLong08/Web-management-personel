<header>
	<div class="container-header">
		<a href="/">
			<h3>QUẢN LÝ NHÂN SỰ TIỀN LƯƠNG</h3>
		</a>
		
		<ul class="header-menu">
			
			@if(Session::has('user'))
				<li class="hover-user" title="Trang cá nhân">
					<a href="/profile">
						<div class="text-center" style="font-size: 24px">
							<span><i class="far fa-user"></i></span>
						</div>
						<div class="scroll">
							<span >{{Session::get('user')['tendangnhap']}}</span>
						</div>
					</a>
					<ul class="sub-menu">
						<li>
							<div class="text-center" style="font-size: 24px">
								<span><i class="far fa-user"></i></span>
							</div>
							<div class="text-center">
								<span >{{Session::get('user')['name']}}</span>
							</div>
						</li>
						<li>
							<a href="/profile" class="sub-a"> <span><i class="far fa-user"></i></span> Thông tin tài khoản</a>
						</li>
						<li>
							<a href="/profile/manager-order" class="sub-a"><span><i class="fal fa-clipboard-check"></i></span>Quản lý đơn hàng</a>
						</li>
						<li>
							<a href="/profile/change-password" class="sub-a"><span><i class="far fa-sync-alt"></i></i></span>Đổi mật khẩu</a>
						</li>
						<li>
							<a class="btn btn-primary form-control sub-ab" href="{{ url('/logout') }}"> Đăng xuất </a>
						</li>
					</ul>
				</li>
			
			@endif
			
		</ul>
		
	</div>
</header>
