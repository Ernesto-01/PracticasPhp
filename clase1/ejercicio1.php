

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
  <h2>Formulario</h2>
  <form class="form-horizontal" action="#">

    <div class="form-group">
      <label for="usr">Nombre 1:</label>
      <input type="text" class="form-control" id="usr" name="txtNombre1">
    
      <label for="usr">Salario:</label>
      <input type="text" class="form-control" id="usr" name="txtSalario1">
    </div>

    <div class="form-group">
    <label for="usr">Nombre 2:</label>
      <input type="text" class="form-control" id="usr" name="txtNombre2">
    
      <label for="usr">Salario:</label>
      <input type="text" class="form-control" id="usr" name="txtSalario2">
    </div>

    <div class="form-group">
    <label for="usr">Nombre 3:</label>
      <input type="text" class="form-control" id="usr" name="txtNombre3">
    
      <label for="usr">Salario:</label>
      <input type="text" class="form-control" id="usr" name="txtSalario3">
    </div>

    <div class="form-group">
    <label for="usr">Nombre 4:</label>
      <input type="text" class="form-control" id="usr" name="txtNombre4">
    
      <label for="usr">Salario:</label>
      <input type="text" class="form-control" id="usr" name="txtSalario4">
    </div>

    <div class="form-group">
    <label for="usr">Nombre 5:</label>
      <input type="text" class="form-control" id="usr" name="txtNombre5">
    
      <label for="usr">Salario:</label>
      <input type="text" class="form-control" id="usr" name="txtSalario5">
    </div>

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="btnProcesar" value="Procesar">Procesar</button>
      </div>
    </div>
  </form>
</div>


	
	
	
</form>
<?php


if(isset($_REQUEST["btnProcesar"])){
	$e1=$_REQUEST["txtNombre1"];
	$e2=$_REQUEST["txtNombre2"];
	$e3=$_REQUEST["txtNombre3"];
	$e4=$_REQUEST["txtNombre4"];
	$e5=$_REQUEST["txtNombre5"];

	$s1=$_REQUEST["txtSalario1"];
	$s2=$_REQUEST["txtSalario2"];
	$s3=$_REQUEST["txtSalario3"];
	$s4=$_REQUEST["txtSalario4"];
	$s5=$_REQUEST["txtSalario5"];





/*//nombres
$e1="juan";
$e2="manuel";
$e3="carlos";
$e4="roberto";
$e5="melissa";
//salario
$s1=100;
$s2=200;
$s3=350;
$s4=450;
$s5=190;*/
//descuentos
$AFP=0.05;
$RENTA= 0.10;
$SEGURO= 0.07;

$a1=$AFP*$s1;
$a2=$AFP*$s2;
$a3=$AFP*$s3;
$a4=$AFP*$s4;
$a5=$AFP*$s5;

$r1=$RENTA*$s1;
$r2=$RENTA*$s2;
$r3=$RENTA*$s3;
$r4=$RENTA*$s4;
$r5=$RENTA*$s5;

$se1=$SEGURO*$s1;
$se2=$SEGURO*$s2;
$se3=$SEGURO*$s3;
$se4=$SEGURO*$s4;
$se5=$SEGURO*$s5;

$n1=$s1-$a1-$r1-$se1;
$n2=$s2-$a2-$r2-$se2;
$n3=$s3-$a3-$r3-$se3;
$n4=$s4-$a4-$r4-$se4;
$n5=$s5-$a5-$r5-$se5;




?>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>AFP</th>
        <th>Renta</th>
        <th>Seguro</th>

      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $e1; ?></td>
        <td><?php echo $a1 ?></td>
        <td><?php echo $r1 ?></td>
        <td><?php echo $se1 ?></td>
      </tr>
      <tr>
        <td><?php echo $e2; ?></td>
        <td><?php echo $a2 ?></td>
        <td><?php echo $r2 ?></td>
        <td><?php echo $se2 ?></td>
      </tr>
      <tr>
        <td><?php echo $e3; ?></td>
        <td><?php echo $a3 ?></td>
        <td><?php echo $r3 ?></td>
        <td><?php echo $se3 ?></td>
      </tr>
      <tr>
        <td><?php echo $e4; ?></td>
        <td><?php echo $a4 ?></td>
        <td><?php echo $r4 ?></td>
        <td><?php echo $se4 ?></td>
      </tr>
      <tr>
        <td><?php echo $e5; ?></td>
        <td><?php echo $a5 ?></td>
        <td><?php echo $r5 ?></td>
        <td><?php echo $se5 ?></td>
      </tr>
    </tbody>
  </table>
  <?php
}
?>
</div>

</body>
</html>


