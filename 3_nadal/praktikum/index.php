<!DOCTYPE html>
<html lang="et">
 <head>
 <link rel="stylesheet" type="text/css" href="style.css">
  <script>
  
function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
  <meta charset="UTF-8"/>
  <title> 
  Teretulemast!
  </title>
  
 </head>
 
 <body onload="startTime()">
 <div class="body">
	<h2>Tere, mina olen Tanel.</h2>
	<img class="mina" src="pics/ws83871f77-cec0-4f5c-a99f-58a58476fb19_portrait.jpg" alt="Mina">
	<h2>Ma näen sind: <?php echo $_SERVER['REMOTE_ADDR'];?></h2>
	<ul id="menu">
	  <li>
		<a href="index.php">Pealeht</a>
	  </li>
	  <li>
		<a href="galerii.html">Galerii</a>
	  </li>
	  <li>
		<a href="login.html">Logimine</a>
	  </li>
	  <li>
		<a href="registreerimine.html">Registreerimine</a>
	  </li>
	  <li>
		<a href="upload.html">Üleslaadimine</a>
	  </li>
	</ul>
	<div class="content">
	<p><?php echo 'Kasutatav PHP versioon: ' .phpversion();?></p>
	
	<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";

	$conn = new mysqli($host, $user, $pass, $db);
	
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT kasutajaID, kasutajanimi FROM 0001kasutajad";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr><th>ID</th><th>Kasutajanimi</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["kasutajaID"]. "</td><td>" . $row["kasutajanimi"]. "</td></tr>";
		}
		    echo "</table>";
			
	} else {
		echo "0 results";
	}
	$conn->close();
	?>
	

	
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat libero id mauris tempor, faucibus finibus risus gravida. Morbi id ex urna. Morbi vitae metus eget justo vulputate tempor et vitae libero. Cras leo mauris, semper sed mauris ac, rutrum viverra lectus. Ut eu lorem vel felis hendrerit fermentum et sit amet enim. Vestibulum tempus turpis est, nec pretium tellus porttitor ut. Praesent vel justo ut erat dignissim varius. Maecenas imperdiet velit vitae massa hendrerit rutrum. Cras maximus scelerisque efficitur. Quisque laoreet posuere orci. Etiam facilisis tempus lacinia.</p>
	<p>Duis tristique libero sit amet massa iaculis, non dignissim dui semper. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean ultricies consequat felis blandit tempus. Quisque risus metus, venenatis vel tellus vel, egestas facilisis augue. Phasellus ipsum elit, facilisis quis neque et, ultrices luctus tortor. Duis et libero convallis, ornare lacus sed, pellentesque justo. Quisque urna augue, mattis ac faucibus et, commodo vel nisi. Ut dapibus risus et nisl luctus, ac iaculis ex molestie. In dui odio, auctor sed imperdiet et, porta vel nulla. In sodales est dui, non euismod elit pharetra id.</p>
	<p>Maecenas imperdiet suscipit eros. Sed augue urna, iaculis nec ante a, euismod pretium orci. Donec ultricies congue neque, a dictum arcu molestie in. Nulla eget iaculis libero. Integer porttitor velit malesuada massa placerat elementum. Mauris ultricies varius orci. Donec vel est quis tellus mattis feugiat vitae lobortis orci. Fusce viverra sapien leo, condimentum blandit nibh imperdiet a. Nullam quis magna laoreet, volutpat ex sit amet, semper nunc. Proin hendrerit ultrices dignissim. Vivamus congue eros lacus, in fringilla massa consectetur a. Nunc non lacus orci. Duis ultricies dui magna, eget volutpat nisl scelerisque non. Nullam aliquam dictum dictum. In ut mi in dui sollicitudin mattis eleifend vitae nisi. Aliquam lobortis purus sed eros cursus sollicitudin.</p>
	
	<p>
 <a href="http://validator.w3.org/check?uri=http://enos.itcollege.ee/~tpeep/i244/3_nadal/praktikum/index.php">
  <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
 </a>
 <a href="http://jigsaw.w3.org/css-validator/check/http://enos.itcollege.ee/~tpeep/i244/3_nadal/praktikum/index.php">
  <img src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
</a>
</p>
 </div>
 </div>
 </body>
</html>
