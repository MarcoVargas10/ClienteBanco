<?php 
header('Access-Control-Allow-Origin: *'); 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>repl.it</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
    </script>
</head>

<?php
$numero_cuenta = 0;
if (isset($_SESSION['cuenta'])) {
	$numero_cuenta = $_SESSION['cuenta'];
}

$nombre = "";
if (isset($_SESSION['nombre'])) {
	$nombre = $_SESSION['nombre'];
}

$nip = 0;
if (isset($_SESSION['nip'])) {
	$nip = $_SESSION['nip'];
}

$saldo = 0;
if (isset($_GET['saldo'])) {
	$saldo = $_GET['saldo'];
}

?>
<style>
*{
	box-sizing: border-box;
}

body {
	background-color: #28223F;
	font-family: Montserrat, sans-serif;
	
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;

	min-height: 100vh;
	margin: 0;
}

h3{
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-color: #231E39;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #B3B8CD;
	padding-top: 30px;
	position: relative;
	width: 350px;
	max-width: 100%;
	text-align: center;
}

.card-container .pro {
	color: #231E39;
	background-color: #FEBB0B;
	border-radius: 3px;
	font-size: 14px;
	font-weight: bold;
	padding: 3px 7px;
	position: absolute;
	top: 30px;
	left: 30px;
}

.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}

button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #1F1A36;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
</style>

<body>

  <div class="card-container">
    <h3><?php echo $nombre ?></h3>
    <img src="img/tarjeta.png" alt="user" width="300px" />
    <p>
      <b>N??mero de cuenta</b> <br />
      <?php echo $numero_cuenta ?>
    </p>
    <p>
      <b>Saldo Actual</b> <br />
      <?php echo $saldo ?>
    </p>
    <form action="realizarRetiro.php"  method="GET">
      <p>
        <b>Monto a retirar</b>
      </p>
	  <input name="no_cuenta" type="text" value="<?php echo $numero_cuenta?>" hidden>
      <input name="cantidad" class="form-control" type="text" placeholder="$00000"><br><br>
      <button type="submit" class="primary ghost">HACER RETIRO</button>
    </form>

    <div class="skills">
      <center>
        <ul>
          <li><button onclick="location.href= 'cliente.php'" class="primary">REGRESAR</button></li>
        </ul>
      </center>
    </div>
  </div>
  <footer></footer>
</body>

</html>