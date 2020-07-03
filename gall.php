<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adi-Ajinkya Catereres</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .adi{
      font-size: 20px;
    }
    .Navbar{
      background-color: black;
      font-size: 20px;
    }
    .service{
      font-size: 20px;
      color: green;
    }
    .para{
      font: 15px;
      color: black;
    }
    .footer{
      background-color: black;
      font-size: 15px;
      height: 30px;
      margin-left: 100px;
      margin-right: 100px;
      color: white;
    }
    .copy{
      padding-right: 720px;
    }
    .tablehead{
      font-size: 50px;
    }
    .tabledata{
      font-size: 25px;
    }
   
    .container{
    	margin-left: 200px;
    }

  </style>
</head>
<body class="body">
  <header style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(img/samosa.jpg);">
<!--Start Navbar-->
  <nav class="navbar navbar-inverse Navbar">
    <div class="logo">
          <img src="img/logo1.png"> 
    </div>
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand adi" href="index.html">Adi-Ajinkya Catreres</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dishes<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="our.html">Our Dishes</a></li>
              <li><a href="creat.html">Create Your Order</a></li>
            </ul>
          </li>
          <li><a href="service.html">Services</a></li>
          <li class="active"><a href="gall.php">Gallery</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
      </ul>
      </div>
    </div>
  </nav>

<?php
mysql_connect("localhost","root","");
mysql_select_db("web");
if (isset($_POST['submit'])) 
{
	$filename=$_FILES['img']['name'];
	$tmpname=$_FILES['img']['tmp_name'];
	$filetype=$_FILES['img']['type'];
	for ($i=0; $i <=count($tmpname)-1 ; $i++) { 
		$name=addslashes($filename[$i]);
		$tmp=addslashes(file_get_contents($tmpname[$i]));
		mysql_query("INSERT into image1(name,image) values('$name','$tmp')");
	}
}
?>
<div class="container">
	<div class="row">
		<div class="column">
			<div class="image">
			<?php
			//display
			$res=mysql_query("SELECT * from image1");
			while ($row=mysql_fetch_array($res)) {
				echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="200" height="200">';
			}
			echo "<br>";
			?>
			</div>
		</div>
	</div>
</div>
</header>
</body>
</html>