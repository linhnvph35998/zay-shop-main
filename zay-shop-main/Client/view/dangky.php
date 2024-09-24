<?php
$regexEmail = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
?>
<div class="wrapper">
	<div class="login">
		<h1>Đăng ký</h1>
		<form action="index.php?act=dangky" method="post" class="form-login">
			<div class="form-input">
				<p>Tài khoản</p>
				<input type="text" name="username" />
			</div>
			<div class="form-input">
				<p>Email</p>
				<input type="text" name="email" />
			</div>
			<div class="form-input">
				<p>Số điện thoại</p>
				<input type="text" name="sdt" />
			</div>
			<div class="form-input">
				<p>Nhập mật khẩu</p>
				<input type="password" name="password" />
			</div>
			<div class="form-input">
				<p>Địa chỉ</p>
				<input type="text" name="diachi" />
			</div>
			<div class="forget-password">
				<a href="">Quên mật khẩu ?</a>
			</div>
			<div class="login-btn">
				<input type="submit" name="dangky" value="Đăng Ký">
			</div>
			<div class="forget-password">
				<a href="index.php?act=dangnhap">Đăng nhập</a>
			</div>
		</form>
	</div>
</div>