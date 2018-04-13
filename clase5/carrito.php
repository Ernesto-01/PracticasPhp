<?php
session_start();

if(isset($_REQUEST["btnAgregar"]))
{
	$cant=0;
	if (isset($_SESSION['carrito'][$_REQUEST["txtProducto"]])) {
		$cantidad = $_REQUEST["txtCantidad"];
		$cant += $array["cant"]+$cantidad;
	}
	$prod = $_REQUEST["txtProducto"];
	if($cant==0){
	$cant = $_REQUEST["txtCantidad"];	
	}

	
	$precio = $_REQUEST["txtPrecio"];

	$sCantidad=$_SESSION["carrito"][$prod]["cant"]=$cant;
	$sPrecio=$_SESSION["carrito"][$prod]["precio"]=$precio;
	
		
	
}

if(isset($_REQUEST["btnE"])){
	session_destroy();

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>Registro de compra</h1></center>
	<hr>
<form method="get">
	<center>
		<tr>
			<td>
				<input type="text" name=" txtProducto" placeholder="Nombre de producto">
			</td>
			<br>
		</tr>
		
		<tr>
			<td>
				<input type="text" name=" txtCantidad" placeholder="Cantidad de producto">
			</td>
			<br>
		</tr>

		<tr>
			<td>
				<input type="text" name=" txtPrecio" placeholder="Precio de producto $">
			</td>
			<br>
		</tr>
		
		<tr>
			<td>
				<input type="submit" name="btnAgregar" value="Agregar">
				<input type="submit" name="btnVer" value="Ver producto">
				<input type="submit" name="btnTotalCompra" value="Totalizar Compra">
				<input type="submit" name="btnE" value="Vaciar carrito">
			</td>
			<br>
		</tr>
	</center>
	
<?php 

if (isset($_REQUEST["btnVer"])) 
{

	if(isset($_SESSION["carrito"]))
	{
		echo "<hr>";
		foreach ($_SESSION["carrito"] as $prod => $arreglo)
		{
			echo "producto: ".$prod."<br>" ;
			foreach ($arreglo as $indice => $valor) 
			{
				echo $indice. " = ". $valor . "<br>";
			
			}
			echo "<hr width='200px' align='left'>";
		}
	}else{
		echo "No tiene productos en el carrito";
	}
}
if (isset($_REQUEST["btnTotalCompra"])) {
	if(isset($_SESSION["carrito"]))
	{
		foreach ($_SESSION["carrito"] as $prod => $array) 
		{
			$total += $array["cant"] * $array["precio"];
		}
		echo "Total de la compra es: $".$total;
	}else{
		echo "Carrito vacio, total $0.00";
	}
}

?>
</form>
</body>
</html>