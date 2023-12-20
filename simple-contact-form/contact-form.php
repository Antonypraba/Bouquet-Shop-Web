<!DOCTYPE html>
<html>
<head>

<style>
	body{
		font-family:verdana;
	  margin-left: 30%;
		margin-right: 30%;
		align-content: center;
	  margin-top: 10%;
	}

	.form-wrapper{
		background-color:#FADBD8;

		padding: 50px;
	}

	.form-wrapper label{
		display:block;
			margin-left: 30px;
		font-size:14px;
	}

	.form-wrapper input[type=text], .form-wrapper input[type=email]{
		margin-bottom:5px;
		margin-left: 30px;
		width:180px;
		height:20px;
		border:1px solid #eeeeee;
	}
	.form-wrapper span{
		color:#ee0000;
	}

	.form-wrapper input[type=submit]{
		display:block;
		margin-top:5px;
		margin-left: 100px;
		border:0px;
		background:#ee0000;
		color:#ffffff;
		height:30px;
		border-radius:5px;
	}

	.form-wrapper input[type=submit]:hover{
		background:#ee0022;
	}

	.form-wrapper textarea{
		border:1px solid #eeeeee;
	}

	#loading-img{
		display:none;
	}

	.response_msg{
		margin-top:10px;
		font-size:13px;
		background:#E5D669;
		color:#ffffff;
		margin-left:30px;
		width:250px;
		padding:3px;
		display:none;
	}

</style>
</head>
<body>
	<div class="form-wrapper">
	<form name="contact-form" action="" method="post" id="contact-form">
		<label>Name <span>*</span></label>
		<input type="text" name="your_name">

		<label>Email <span>*</span></label>
		<input type="email" name="your_email">

		<label>Phone </label>
		<input type="text" name="your_phone">

		<label>Comment</label>
		<textarea name="comments" cols="28" rows="5"></textarea>
		<input type="submit" name="submit" value="Submit" id="submit_form">
		<img src="img/loading.gif" id="loading-img">
	</form>
	<div class="response_msg"></div>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
	e.preventDefault();
	if($("#contact-form [name='your_name']").val() === '')
	{
		$("#contact-form [name='your_name']").css("border","1px solid red");
	}
	else if ($("#contact-form [name='your_email']").val() === '')
	{
		$("#contact-form [name='your_email']").css("border","1px solid red");
	}
	else
	{
		$("#loading-img").css("display","block");
		var sendData = $( this ).serialize();
		$.ajax({
			type: "POST",
			url: "get_response.php",
			data: sendData,
			success: function(data){
				$("#loading-img").css("display","none");
				$(".response_msg").text(data);
				$(".response_msg").slideDown().fadeOut(3000);
				$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
			}

		});
	}
});

$("#contact-form input").blur(function(){
	var checkValue = $(this).val();
	if(checkValue != '')
	{
		$(this).css("border","1px solid #eeeeee");
	}
});
});
</script>
</body>
</html>
