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
    .footer { 
      color: blue;
      text-align: center;
      font-size: 20px;
    }
    .scroll{
      margin-left: 100px;
      margin-right: 100px;
    }
  </style>
</head>
<body>
<!--Start Header-->
  
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
          <li class="active"><a href="index.html">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Dishes<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="our.html">Our Dishes</a></li>
              <li><a href="creat.html">Create Your Order</a></li>
            </ul>
          </li>
          <li><a href="service.html">Services</a></li>
          <li><a href="gall.php">Gallery</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span>Login</a></li>
      </ul>
      </div>

    </div>

  </nav>

<?php
include_once('connection.php');
$query="select * from user_order";
$result=mysql_query($query);

?>
	<table align="center" border="2px" style="width: 1400px; line-height:30px;	">
		<tr >	
			<th colspan="15"><h2><center>User Order</center></h2></th>
		</tr>
		<tr>
			<th>Id</th>
			<th>Drink</th>
			<th>Vegetable</th>
			<th>Salad</th>
			<th>Sweet</th>
			<th>Roti</th>
			<th>Snacks</th>
			<th>Rice</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Date</th>
			<th>Mobile Number</th>
			<th>Email</th>
			<th>Venue</th>
		</tr>
		<?php
		while ($rows=mysql_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $rows['id']; ?></td>
			<td><?php echo $rows['drink']; ?></td>
			<td><?php echo $rows['vege']; ?></td>
			<td><?php echo $rows['salad']; ?></td>
			<td><?php echo $rows['sweet']; ?></td>
			<td><?php echo $rows['roti']; ?></td>
			<td><?php echo $rows['snacks']; ?></td>
			<td><?php echo $rows['rice']; ?></td>
			<td><?php echo $rows['fname']; ?></td>
			<td><?php echo $rows['mname']; ?></td>
			<td><?php echo $rows['lname']; ?></td>
			<td><?php echo $rows['date']; ?></td>
			<td><?php echo $rows['mob']; ?></td>
			<td><?php echo $rows['email']; ?></td>
			<td><?php echo $rows['venue']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>