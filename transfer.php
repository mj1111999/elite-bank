<?php
session_start();
$con=mysqli_connect('localhost','root','','banking system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send Money</title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	body{
		text-align:center;
	}
	body{
		background-color: rgb(47,137,158);
		background-image:url("images/transfer.gif");
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color:#ff86b3;
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.butto1{
		background-color:#bebebe;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: #28048a;
		font-size:17px;
		font-weight:bold;
		background:#26abff;
	}
	.button:hover{
		background-color:#2600ff;
	}
	.marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            
            color: #2424ff;
            
        }
        
        .marquee p {
            position: absolute;
            width: 100%;
            height: 100%;
            margin: 0;
            line-height: 50px;
            text-align: center;
            -moz-transform: translateX(100%);
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
            -moz-animation: scroll-left 2s linear infinite;
            -webkit-animation: scroll-left 2s linear infinite;
            animation: scroll-left 20s linear infinite;
        }
        
        @-moz-keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
            }
        }
        
        @-webkit-keyframes scroll-left {
            0% {
                -webkit-transform: translateX(100%);
            }
            100% {
                -webkit-transform: translateX(-100%);
            }
        }
        
        @keyframes scroll-left {
            0% {
                -moz-transform: translateX(100%);
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
            }
            100% {
                -moz-transform: translateX(-100%);
                -webkit-transform: translateX(-100%);
                transform: translateX(-100%);
            }
        }

	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Vivek"){
				 var arr=["Vimlesh","Atharva","Mohit","Craig","Dhruv","Sonu","Raunak","Atif","Vaibhav"];
				 }
				 else if(a==="Vimlesh"){
					var arr=["Vivek","Atharva","Mohit","Craig","Dhruv","Sonu","Raunak","Atif","Vaibhav"];
				}
				else if(a==="Atharva"){
					var arr=["Vivek","Vimlesh","Mohit","Craig","Dhruv","Sonu","Raunak","Atif","Vaibhav"];
				}
				else if(a==="Mohit"){
					var arr=["Vivek","Vimlesh","Atharva","Craig","Dhruv","Sonu","Raunak","Atif","Vaibhav"];
				 }
				 else if(a==="Craig"){
					var arr=["Vivek","Vimlesh","Atharva","Mohit","Dhruv","Sonu","Raunak","Atif","Vaibhav"];
				 }
				 else if(a==="Dhruv"){
					var arr=["Vivek","Vimlesh","Atharva","Mohit","Craig","Sonu","Raunak","Atif","Vaibhav"];
				 }
				 else if(a==="Sonu"){
					var arr=["Vivek","Vimlesh","Atharva","Mohit","Craig","Dhruv","Raunak","Atif","Vaibhav"];
				 }
				 else if(a==="Raunak"){
					var arr=["Vivek","Vimlesh","Atharva","Mohit","Craig","Dhruv","Sonu","Atif","Vaibhav"];
				 }
				 else if(a==="Atif"){
					var arr=["Vivek","Vimlesh","Atharva","Mohit","Craig","Dhruv","Sonu","Raunak","Vaibhav"];
				 }
				 else if(a==="Vaibhav"){
				 var arr=["Vivek","Vimlesh","Atharva","Mohit","Craig","Dhruv","Sonu","Raunak","Atif"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:45px;color:#e0115f;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Senders Name: &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Vivek">Vivek</option>
			<option value="Vimlesh">Vimlesh</option>
			<option value="Atharva">Atharva</option>
			<option value="Mohit">Mohit</option>
			<option value="Craig">Craig</option>
			<option value="Dhruv">Dhruv</option>
			<option value="Sonu">Sonu</option>
			<option value="Raunak">Raunak</option>
			<option value="Atif">Atif</option>
			<option value="Vaibhav">Vaibhav</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name:&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
		<option value="Vaibhav">Vaibhav</option>
		<option value="Atif">Atif</option>
		<option value="Raunak">Raunak</option>
		<option value="Sonu">Sonu</option>
		<option value="Craig">Craig</option>
		<option value="Mohit">Mohit</option>
		<option value="Atharva">Atharva</option>
		<option value="Vimlesh">Vimlesh</option>
		<option value="Vivek">Vivek</option>
		<option value="Dhruv">Dhruv</option>
		</select><br><br>
		<label for="transfer" align="left">Amount: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="button" onMouseOver="this.style.color='#26ff00'"onMouseOut="this.style.color='green'"type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <center><button class="btn-grad"><i class="fa fa-home" style="font-size:24px"> HOME</i></button></center>
	</a>
</div>
<marquee width="60%" direction="left" height="100px" class="marquee">Made By Mohit Jain| The Sparks Foundation</marquee>
</body>
</html>