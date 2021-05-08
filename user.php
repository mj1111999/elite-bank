<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking system');
$name=$_POST['name'];
$q="select * from users where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['email'];
$amount=$row['amount'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="button.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.1.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 10px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  text-transform:uppercase;
		}

		.nav-li a:hover:not(.active) {
		  background-color: #00ccff;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:black;
			font-size:24px;
			padding:16px;
		}
		
		td{
			font-size:22px;
			color: black;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		body{
			background-image:url("images/details.jpg");
			background-position: center;
			background-repeat: no-repeat;
			background-size:cover;
		}
		.flat-table-1 {
			background: #32a891;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}

		.btn:hover {
			background-color:Blue;
		}
		.marquee {
            height: 50px;
            overflow: hidden;
            position: relative;
            
            color: red;
            
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
</head>
    <body>
	<ul class="nav-ul" style="height:53px;">
	<a href="index.php">
		<li class="nav-li"><button class="btn"><i class="fa fa-home" style="font-size:24px"></i></button></li>
	</a>
		<li class="nav-li" style="float:right;height:53px;text-align:center;font-size:20px;" ><a class="nav-link"><?php echo $name?></a></li>
	</ul>
	<br><br><br>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Balance</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<center><button class="btn-grad" style="font-size:24px"> Transfer To</button></center>
	</a>
	</div>
	<br>
	

               
    
		<a href="ministatement.php">
		<center><button class="btn-grad" style="font-size:24px">Mini Statement</button></center>
		</a>
	<br>
               
		<marquee width="60%" direction="left" height="100px" class="marquee">Made By Mohit Jain| The Sparks Foundation</marquee>

    </body>
</html>