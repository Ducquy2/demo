// scroll images
$(function() {
  $('a[href*=#home]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
// end scroll images

// check email register
$(document).ready(function() 
{
	$("#email").keyup(function (e) {	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var email = $(this).val();
		if(email.length < 8){$("#email-result").html('');return;}
		
		if(email.length >= 8){
			$("#email-result").html('<img src="http://anphuoc.com.vn/images/loading.gif" />');
			$.post('http://anphuoc.com.vn/include/ajax_checkEmail.php', {'email':email}, function(data) {
				if (data=='1')
				{
					document.getElementById("btnRegister").disabled = false;
					$("#email-result").html('<img src="http://anphuoc.com.vn/images/layout/available.png" />');
				}			  		
			  	if (data=='2'){
			  		emailinvalid = document.getElementById("emailinvalid").value;
			  		document.getElementById("btnRegister").disabled = true;
			  		$("#email-result").html('<img src="http://anphuoc.com.vn/images/layout/not-available.png" style="margin:0;"/><span style="color:#1D86DE;">'+emailinvalid+'</span>');
			  	}
			});
		}
	});
	
	$("#cardVip").keyup(function (e) {	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var cardVip = $(this).val();
		if(cardVip.length < 8)
		{$("#card-result").html('<img src="http://anphuoc.com.vn/images/loading.gif" />');}
		
		if(cardVip.length >= 8)
		{		
			$.post('http://anphuoc.com.vn/include/ajax_cardVip.php', {'cardVip':cardVip}, function(data) {
			  $("#card-result").html(data);
			});
		}
	});
});

function keypress(e)
{ //Hàm dùng để ngăn người dùng nhập các ký tự khác ký tự số vào TextBox
	var keypressed = null;
	if (window.event)
	{
		keypressed = window.event.keyCode; //IE
	}
	else
	{ 
		keypressed = e.which; //NON-IE, Standard
	}
	
	if (keypressed < 48 || keypressed > 57)
	{ //CharCode của 0 là 48 (Theo bảng mã ASCII), CharCode của 9 là 57 (Theo bảng mã ASCII)
		if (keypressed == 8 || keypressed == 127) //Phím Delete và Phím Back
		{
			return;
		}
		return false;
	}
}

function checkSearchForm()
{
	if(document.frmSearchProduct.txtSearch.value=="")
	{
		alert("Vui lòng nhập từ khóa cần tìm kiếm");
		document.frmSearchProduct.txtSearch.focus();
		return false;
	}
	document.frmSearchProduct.submit();
	return true;
}

function checkRegisterEmail()
{
	var flag = true;
	
	var email = document.frmRegisterEmail.txtEmailRegis.value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!filter.test(email) || email == '')
	{	
		alert("Vui lòng nhập chính xác địa chỉ Email");		
		document.frmRegisterEmail.txtEmailRegis.focus();	
		flag = false;		
	}	
	if (flag)
	{	
		alert("Cảm ơn bạn đã đăng ký nhận thông tin sản phẩm mới của chúng tôi");
		document.frmRegisterEmail.submit();		
	}
	return false;
}

function loadPage(){
	window.open(document.frmSelLink.selLink.value);
}

function formatCurrency(num) 
{
	num = num.toString().replace(/\$|\,/g,'');
	if(isNaN(num))
	num = "0";
	sign = (num == (num = Math.abs(num)));
	num = Math.floor(num*100+0.50000000001);
	num = Math.floor(num/100).toString();
	for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
	num = num.substring(0,num.length-(4*i+3))+','+num.substring(num.length-(4*i+3));
	return (((sign)?'':'-') + num);
}