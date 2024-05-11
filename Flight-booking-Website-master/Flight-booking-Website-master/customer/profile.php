<?php
	include "../config.php";

	$query = "SELECT * FROM client";
	$result=mysqli_query($db,$query);
	mysqli_fetch_all($result,MYSQLI_ASSOC);



	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Flight Now</title>
	<link rel="icon" href="../img/fav.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="../css/stylesheet.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">      
</head>

<body>
<style>
.feat
{
                background-color: #fff;
                padding: 5%;
                margin-bottom: 50px;
				border:1px solid black;
}

</style>
<div class="top">
	<a class="pat" href="index.php">Flight Now</a>

	<div class="vl"></div>
	
	
	<div class="top2">

		<input class="search"type="search" placeholder="Search"/>

		<a class="pat2" href="flights.php">Book Now</a>
		<a class="pat2" href="profile.php">Profile</a>
		<a class="pat2" href="../logout.php">Log Out</a>


	</div>
	
	
</div>


        <section>
            <div class="container">
            <div class="row">
            <?php
                if (isset($_GET['do']) && $_GET['do'] === 'done') {
                    echo "<h1 class='alert alert-success'><b>Success</b></h1>";
                }
                ?>
            </div>
                <div class="row col-lg-5 col-lg-offset-3">
				
                <?php
                foreach ($result as $k => $v) {?>
                    <div class="box  ">
                        <div class="feat">
							<form action="updateprofile.php" enctype="multipart/form-data" method="POST">
								<img src="<?=(IMG . $v['image'])?>" class="img-responsive"/>
								<h3>Name : <input  name="username" value="<?=($v['username'])?>"></h3>
								<h4>Password : <input name="password" value="<?=($v['password'])?>"></h4>								
								<h4>Address : <?=($v['Address'])?></h4>	
								<h4>Date Of Birth : <?=($v['DateOfBirth'])?></h4>								
								<input type="submit" value="Update" name="update" class="btn btn-success form-control"> <br><br>                          
								<input type="submit" name="del" value="DELETE" class="btn btn-danger form-control">
                            </form>
                        </div>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
			</div>
        </section>


<div class="clear"></div>

<div class="anim">

	<h1>
	  <a href="" style="color:#E57133; text-decoration:none; letter-spacing:.8em; padding:100px; font-weight: 700;" class="typewrite" data-period="2000" data-type='[ "Travel Now", "Low Price","Best Service" ]'>
		<span class="wrap"></span>
	  </a>
	</h1>
</div>



<div class="spa">
	<h1 style="text-align:center; padding-top:20px; color:#65D0E3;">Partner With<h1>
	
	<div id="part">
		<img src="../img/1.png"/>
		<img src="../img/2.png"/>
		<img src="../img/3.png"/>
	</div>




</div>

<div class="spa2">
<div class="footer-social-icons">
    <ul class="social-icons">
        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
    </ul>
</div>
	<div style="text-align:center;padding-top:50px;">    
		<a class="pat3" href="profile.php">profile</a>   |
		<a class="pat3" href="../index.php">logout </a>   

	</div>
	 <p style="text-align:center; color:white; font-size:15px; padding-top:50px;">Copyright &copy; Flight Now | Powered By: HTML5 | CSS | JavaScript</p>
	 
	 
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../js/js.js"></script>

</body>


</html>