<html>
<head>
    <title>Elite Bank</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
	<style>

	body
	{
		text-align:center;
	}
		body{
		background-image:url("images/bank.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	p{
		text-align: justify;
		font-size: 250%;
		color: black;
		font-family: serif;
		padding: 100px;
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
</head>
<body >

	<div id="header">
       <br>
       <h1 style=" font-family:Agency FB; font-size: 70px; color:#0000ff;text-shadow: 2px 2px black;"> Elite Bank </h1>
    
    </div>
        <div id="section">
            
				<a href="getdetail.php">
               <button class="btn btn-primary btn-lg navbar-btn" id="button "type="button" href="getdetail.php"><i class="fas fa-users"> View Users</i> </button>
                </a>

        
			   <a href="transfer.php">
			   <button class="btn btn-primary btn-lg navbar-btn" id="button" type="button"><i class="fas fa-coins"> Transfer Money</i></button>
               </a>
               
              
			   <a href="transaction.php">
			   <button class="btn btn-primary btn-lg navbar-btn" id="button" type="button"><i class="fas fa-history"> Transaction History</i></button>
               </a>

            
    </div>
	<p>The Elite Bank of America Corporation is a Government owned bank and financial services holding company headquartered in Charlotte, North Carolina. Founded in San Francisco, Elite bank was formed through NationsBank's acquisition in 1998.</p>  
	<marquee width="60%" direction="left" height="100px" class="marquee">Made By Mohit Jain| The Sparks Foundation</marquee>         
</body>
</html>