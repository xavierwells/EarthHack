
<!DOCTYPE>
<html >
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta charset="UTF-8">
  <title>Xpire</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">  
</head>

<body>
  <header id="home">
  <div class="hero">
    <div class="overlay"></div>
    <h1><img src="https://media.discordapp.net/attachments/546379030694330379/571793318724501563/icon3.png?width=921&height=293"></h1>
  </div>
</header>
<div class="sticky-wrapper">
<nav>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#item1">Inventory</a></li>
    <li><a href="#item2">Upcoming Expires</a></li>
    <li><a href="#item3">Water Watch</a></li>
  </ul>
</nav>
</div>

 <section id="item1">
<h3>Add Items</h3>
<h2>
<form method="post" action="action.php">
      <p>Quantity: <input type="number" name="quantity" id="quantity" min="1"></p>
      <p>Description of item: <input type="text" name="description" id="description"></p>
      <p>Expiration Date: <input type="date" name="expires" id="expires"></p>
	  <input class="clickme" type="submit" value="Submit">
</form>
</h2>
</section>

<section id="item2">
  <h3>Inventory</h3>
  <h4>
  <?php

	$con=mysqli_connect("localhost","root","root","xpire_foods");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
    $result = mysqli_query($con,"SELECT * FROM food ORDER BY expiry ASC");
	?>
	<html>
	<table style="width:100%">
		<tr>
			<th>ID</th>
			<th>Expiration</th>
			<th>Name</th>
			<th>Amount</th>
		</tr>
	</html>
	<?php
	$i = 0;
	while($row = mysqli_fetch_array($result))
    {
		$i++;
	
		echo "<tr>";
			echo "<td>" . $row ['ID'] . "</td>"; 
            echo "<td>" . $row ['expiry'] . "</td>";
            echo "<td>" . $row ['name'] . "</td>";
            echo "<td>" . $row ['quantity'] . "</td>";
		echo "</tr>";
	  }
	  echo "</table>";
    mysqli_close($con);
	?>
</h4>
  <h2>
    <form method="post" action="delete.php">
          <!--p>Quantity: <input type="number" name="quantity" id="quantity" min="1"></p!-->
          <p>ID To Delete: <input type="number" name="Identity" id="Identity"></p>
          <!--p>Expiration Date: <input type="date" name="expires" id="expires"></p!-->
        <input class="clickme" type="submit" value="Delete">
    </form>


	</h2>
</section>

<section id="item3">
<h3>Water Watch</h3>
  <h2>
    Enter Water Bill Cost $ to find out how much gallons you used<br>
    <input type="text" id="wbill">
    <p id="result"></p>
  </h2>
</section>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
  <script src="js/action.js"></script>

</body>

</html>
