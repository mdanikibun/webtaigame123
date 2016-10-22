<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký Thành Viên</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cssdk/cssdk.css">
</head>
<body>
	<h3>Đăng Ký Thành Viên</h3>
	<form action="xu_ly_dang_ky.php" method="post">
		<table>
			<tr>
				<td>Họ và Tên :</td>
				<td><input type="text" name="fullname" placeholder="Họ và Tên"></td>
			</tr>
			<tr>
				<td>Tên Đăng Nhập :</td>
				<td><input type="text" name="username" placeholder="Tên Đăng Nhập"></td>
			</tr>
			<tr>
				<td>Mật Khẩu :</td>
				<td><input type="password" name="password" placeholder="Mật Khẩu"></td>
			</tr>
			<tr>
				<td>Địa Chỉ :</td>
				<td><input type="text" name="address" placeholder="Địa Chỉ"></td>
			</tr>
			<tr>
				<td>E-mail :</td>
				<td><input type="E-mail" name="email" placeholder="E-mail"></td>
			</tr>
			<tr>
				<td>Giới Tính :</td>
				<td>
					<select name="gender">
						<option value="1">Nam</option>
						<option value="2">Nữ</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
				<input type="submit" name="ok" value="Đăng Ký">
				<button href="../index.php">Quay Lại</button>
				</td>
			</tr>
		</table>
	</form>

</body>
</html>	