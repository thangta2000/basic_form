function signup(){
	var flag=0;
	var day=document.getElementById("day").value;
	var month=document.getElementById("month").value;
	var year=document.getElementById("year").value;
	var contact = document.getElementById("contact").value;
	var kiemTraDT = isNaN(contact);
	var aCong=contact.indexOf('@');
	var dauCham = contact.lastIndexOf('.');
	if (kiemTraDT == true) {
		if ((aCong<1) || (dauCham<aCong+2) || (dauCham+2>contact.length)) {
		alert("Email bạn điền không chính xác");
		return false;
		}
		else flag=1;
	}
	if(day=="ngày") {
		alert("Bạn chưa nhập ngày");
		return false;
	}
	if(month=="tháng") {
		alert("Bạn chưa nhập tháng");
		return false;
	}
	if(year=="năm") {
		alert("Bạn chưa nhập năm");
		return false;
	}
	if((kiemTraDT==false)&&(flag==1)) alert("Thanh cong!");
}	
	