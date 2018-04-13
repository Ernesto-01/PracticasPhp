<?php
if(isset($_REQUEST["btnProcesar"])){


$a=$_REQUEST["txtA"];
$b=$_REQUEST["txtB"];
$c=$_REQUEST["txtC"];

$x1=(-$b + sqrt(($b*$b)-4*$a*$c))/(2*$a);
$x2=(-$b - sqrt(($b*$b)-4*$a*$c))/(2*$a);



	echo "<script>alert('x1=$x1  |  x2=$x2')</script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cuadratica</h2>
  
  <form class="form-inline" action="#">
    <div class="form-group">
      <label for="usr">a:</label>
      <input type="text" class="form-control" id="usr" name="txtA">
    
      <label for="usr">b:</label>
      <input type="text" class="form-control" id="usr" name="txtB">

      <label for="usr">c:</label>
      <input type="text" class="form-control" id="usr" name="txtC">
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="btnProcesar" value="Procesar">Procesar</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
