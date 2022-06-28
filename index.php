<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Venta de celulares</title>
</head>
<body>

    <header class="container">
<img src="imgs/forsale.png" alt="">

</header>
<section id="galeria" class="container ">
<div class="row gap-3 text-center">
<div class="col-lg-4 col-sm-12 pb-3" style="border:1px outset; background-color:rgb(250, 250, 250);">
<img src="imgs/Samsung.png" alt="">
<p class="mb-1">Samsung Galaxy A32</p>
<p class="precio mb-0"><?php include_once("celular.php");
$Samsung = new celular("Samsung Galaxy A32",429.00);
$Precio = $Samsung->getPrecio(); 
echo 'U$S ' . $Precio?></p>
<button type="button" class="btn btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#ModalFormUno" data-bs-whatever="@mdo" style="color:rgb(250, 250, 250); border-radius:17px;">Comprar</button>
</div>
<div class="col pb-3" style="border:1px outset; background-color:rgb(250, 250, 250);">
<img src="imgs/Redmi.png" alt="">
<p class="mb-1">XIAOMI Redmi 9C</p>
<p class="precio mb-0"><?php include_once("celular.php");
$Xiaomi = new celular("XIAOMI Redmi 9C",229.00);
$Precio = $Xiaomi->getPrecio(); 
echo 'U$S ' . $Precio?></p>
<button type="button" class="btn btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#ModalFormDos" data-bs-whatever="@mdo" style="color:rgb(250, 250, 250); border-radius:17px;">Comprar</button>
</div>
<div class="col-lg-4 col-sm-12 pb-3" style="border:1px outset; background-color:rgb(250, 250, 250);">
<img src="imgs/Huawei.png" alt="">
<p class="mb-1">HUAWEI Y8P 2020</p>
<p class="precio mb-0"><?php include_once("celular.php");
$Huawei = new celular("HUAWEI Y8P 2020",369.00);
$Precio = $Huawei->getPrecio(); 
echo 'U$S ' . $Precio?></p>
<button type="button" class="btn btn-dark mt-1" data-bs-toggle="modal" data-bs-target="#ModalFormTres" data-bs-whatever="@mdo" style="color:rgb(250, 250, 250); border-radius:17px;">Comprar</button>
</div>




<!--MODAL PARA COMPRAR SAMSUNG-->

<div class="modal fade container" id="ModalFormUno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modalbody">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method="post" action="index.php">
                <div class="form-row row mb-5">
                  <div class="form-group col-6 mt-3">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" name="InputNombre"  id="InputNombre" placeholder="Nombre">
                  </div>
                  <div class="form-group col-6 mt-3">
                    <label for="inputApellido">Apellido</label>
                    <input type="text" class="form-control" name="InputApellido"  id="InputApellido" placeholder="Apellido">
                </div>
                <div class="form-group col-6 mt-3">
                  <label for="inputDireccion">Dirección</label>
                  <input type="text" class="form-control" name="InputDireccion"  id="InputDireccion" placeholder="Dirección">
                </div>
                <div class="form-group col-6 mt-3">
                  <label for="inputNumero">Numero de teléfono</label>
                  <input type="number" class="form-control" name="InputNumero"  id="InputNumero" placeholder="Numero">
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="inputState">Metodo de pago</label>
                    <select name="producto" id="producto" class="form-control">
                      <option value="TransferenciaBancaria">Transferencia Bancaria</option>
                      <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                      <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                    </select>
                  </div>    
                  <div class="form-check col-6 mt-5">
                   <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">Solicitar envio por U$S 5.00</label>
                  </div>
                  <div class="col-12" style="border:1px outset; margin-top:14%; background-color:rgb(250, 250, 250);">
                    <label for="" style="font-size:15px; padding:8px;"><b>La transferencia bancaria tiene una bonificación del 10% sobre el precio del equipo</b></label>
                  </div>
            </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" style="color:rgb(250, 250, 250); border-radius:17px;">Cerrar</button>
                    <button type="submit" class="btn btn-dark" name="comprar" data-bs-whatever="@mdo" style="color:rgb(250, 250, 250); border-radius:17px;" onclick="ShowSelected()">Comprar</button>
                  </div>
              </form>
      </div>
    </div>
  </div>

  <!--MODAL PARA COMPRAR XIAOMI-->

  <div class="modal fade container" id="ModalFormDos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modalbody">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method="post" action="index.php">
                <div class="form-row row mb-5">
                  <div class="form-group col-6 mt-3">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" name="InputNombre" id="InputNombreUno" placeholder="Nombre">
                  </div>
                  <div class="form-group col-6 mt-3">
                    <label for="inputApellido">Apellido</label>
                    <input type="text" class="form-control" name="InputApellido" id="InputApellidoUno" placeholder="Apellido">
                </div>
                <div class="form-group col-6 mt-3">
                  <label for="inputDireccion">Dirección</label>
                  <input type="text" class="form-control" name="InputDireccion" id="InputDireccionUno" placeholder="Dirección">
                </div>
                <div class="form-group col-6 mt-3">
                  <label for="inputNumero">Numero de teléfono</label>
                  <input type="number" class="form-control" name="InputNumero" id="InputNumeroUno" placeholder="Numero">
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="inputState">Metodo de pago</label>
                    <select name="producto" id="productoUno" class="form-control">
                    <option value="TransferenciaBancaria">Transferencia Bancaria</option>
                    <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                    <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                    </select>
                    </div>    
                  <div class="form-check col-6 mt-5">
                   <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminateUno">
                        <label class="form-check-label" for="flexCheckIndeterminate">Solicitar envio por U$S 5.00</label>
                  </div>
                  <div class="col-12" style="border:1px outset; margin-top:14%; background-color:rgb(250, 250, 250);">
                    <label for="" style="font-size:15px; padding:8px;"><b>La transferencia bancaria tiene una bonificación del 10% sobre el precio del equipo</b></label>
                  </div>
            </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" style="color:rgb(250, 250, 250); border-radius:17px;">Cerrar</button>
                    <button type="submit" class="btn btn-dark" name="comprar" data-bs-whatever="@mdo" style="color:rgb(250, 250, 250); border-radius:17px;" onclick="ShowSelectedUno()" >Comprar</button>
                  </div>
              </form>
      </div>
    </div>
  </div>

  <!--MODAL PARA COMPRAR HUAWEI-->

  <div class="modal fade container" id="ModalFormTres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="modalbody">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Datos de compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form method="post" action="index.php">
                <div class="form-row row mb-5">
                  <div class="form-group col-6 mt-3">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" class="form-control" name="InputNombre" id="InputNombreDos" placeholder="Nombre">
                  </div>
                  <div class="form-group col-6 mt-3">
                    <label for="inputApellido">Apellido</label>
                    <input type="text" class="form-control" name="InputApellido" id="InputApellidoDos" placeholder="Apellido">
                </div>
                <div class="form-group col-6 mt-3">
                  <label for="inputDireccion">Dirección</label>
                  <input type="text" class="form-control" name="InputDireccion" id="InputDireccionDos" placeholder="Dirección">
                </div>
                <div class="form-group col-6 mt-3">
                  <label for="inputNumero">Numero de teléfono</label>
                  <input type="number" class="form-control" name="InputNumero" id="InputNumeroDos" placeholder="Numero">
                </div>
                <div class="form-group col-6 mt-3">
                    <label for="inputState">Metodo de pago</label>
                    <select name="producto" id="productoDos" class="form-control">
                    <option value="TransferenciaBancaria">Transferencia Bancaria</option>
                    <option value="Tarjeta de Crédito">Tarjeta de Crédito</option>
                    <option value="Tarjeta de Débito">Tarjeta de Débito</option>
                    </select>
                    </div>    
                  <div class="form-check col-6 mt-5">
                   <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminateDos">
                        <label class="form-check-label" for="flexCheckIndeterminate">Solicitar envio por U$S 5.00</label>
                  </div>
                  <div class="col-12" style="border:1px outset; margin-top:14%; background-color:rgb(250, 250, 250);">
                    <label for="" style="font-size:15px; padding:8px;"><b>La transferencia bancaria tiene una bonificación del 10% sobre el precio del equipo</b></label>
                  </div>
            </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal" style="color:rgb(250, 250, 250); border-radius:17px;" >Cerrar</button>
                    <button type="submit" class="btn btn-dark" name="comprar" data-bs-whatever="@mdo" style="color:rgb(250, 250, 250); border-radius:17px;" onclick="ShowSelectedDos()">Comprar</button>
                  </div>
              </form>
      </div>
    </div>
  </div>

<!-- HACER DESCUENTO A LOS PRECIOS DE LOS OBJETOS DE PHP -->  

<?php  
include_once("celular.php");
$Samsung = new celular("Samsung Galaxy A32",429.00);
$Precio = $Samsung->getPrecio();
$Descontar = $Precio * 0.10;
$Descuento = $Precio - $Descontar;

$Xiaomi = new celular("XIAOMI Redmi 9C",229.00);
$PrecioUno = $Xiaomi->getPrecio();
$DescontarUno = $PrecioUno * 0.10;
$DescuentoUno = $PrecioUno - $DescontarUno;

$Huawei = new celular("HUAWEI Y8P 2020",369.00);
$PrecioDos = $Huawei->getPrecio();
$DescontarDos = $PrecioDos * 0.10;
$DescuentoDos = $PrecioDos - $DescontarDos;
?>

<script>

/*FUNCION PARA MOSTRAR METODO DE PAGO Y HACER DESCUENTO DE SAMSUNG EN JS*/
function ShowSelected(){
var metodo = document.getElementById("producto").value;
if(metodo == "TransferenciaBancaria"){
var descuento = <?php echo $Descuento;?>;
}else if(metodo == "Tarjeta de Crédito"){
  var descuento = <?php echo $Precio;?>;
}else if(metodo == "Tarjeta de Débito"){
  var descuento = <?php echo $Precio;?>;
}
if(document.getElementById('flexCheckIndeterminate').checked){
  var precioenvio = 5.00;
  descuento = descuento + precioenvio;
}

var combo = document.getElementById("producto");
var selected = combo.options[combo.selectedIndex].text;
var nombre =  document.getElementById("InputNombre").value;
var apellido = document.getElementById("InputApellido").value;
var direccion = document.getElementById("InputDireccion").value;
var numero = document.getElementById("InputNumero").value;
/*alert("Bievenido: " + nombre   + " " + apellido  + "\nSu direccion es: " + direccion  + "\nSu numero es: " + numero  + "\nEl modelo del celular a comprar es: Samsung Galaxy A32" + "\nUsted selecciono el metodo de pago: " + selected + "\nEl precio final a pagar es: U$S " + descuento);*/

document.write(`<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="css/bootstrap.min.css"> <title>Document</title> </head> <body> <div class="container"><div class="row"> <table class="table table-bordered"> <thead> <tr> <th scope="col">Datos</th> <th scope="col">Nombre</th> <th scope="col">Apellido</th> <th scope="col">Dirección</th> <th scope="col">Número</th> <th scope="col">Modelo Celular</th> <th scope="col">Método de pago</th> <th scope="col">Precio final</th> </tr> </thead> <tbody> <tr> <th scope="row">Cliente 1</th> <td>${nombre}</td> <td>${apellido}</td> <td>${direccion}</td> <td>${numero}</td> <td>Samsung Galaxy A32</td> <td>${selected}</td> <td>U$S ${descuento}</td> </tr> </tbody> </table></div><div class="row"> <div class="col-12 d-flex justify-content-center"> <button class="btn btn-dark" style="outline: none;box-shadow: none; border-radius:17px;"><a href="index.php" style="text-decoration:none; list-style:none; color:rgb(250, 250, 250);">Volver</a></button> </div></div></body> </html>`);



}
/*FUNCION PARA MOSTRAR METODO DE PAGO Y HACER DESCUENTO DE XIAOMI EN JS*/
function ShowSelectedUno(){
var metodo = document.getElementById("productoUno").value;
if(metodo == "TransferenciaBancaria"){
var descuento = <?php echo $DescuentoUno;?>;
}else if(metodo == "Tarjeta de Crédito"){
  var descuento = <?php echo $PrecioUno;?>;
}else if(metodo == "Tarjeta de Débito"){
  var descuento = <?php echo $PrecioUno;?>;
}
if(document.getElementById('flexCheckIndeterminateUno').checked){
  var precioenvio = 5.00;
  descuento = descuento + precioenvio;
}
var combo = document.getElementById("productoUno");
var selected = combo.options[combo.selectedIndex].text;
var nombre =  document.getElementById("InputNombreUno").value;
var apellido = document.getElementById("InputApellidoUno").value;
var direccion = document.getElementById("InputDireccionUno").value;
var numero = document.getElementById("InputNumeroUno").value;
/*alert("Bievenido: " + nombre   + " " + apellido  + "\nSu direccion es: " + direccion  + "\nSu numero es: " + numero  + "\nEl modelo del celular a comprar es: XIAOMI Redmi 9C" + "\nUsted selecciono el metodo de pago: " + selected + "\nEl precio final a pagar es: U$S " + descuento);*/

document.write(`<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="css/bootstrap.min.css"> <title>Document</title> </head> <body> <div class="container"><div class="row"> <table class="table table-bordered"> <thead> <tr> <th scope="col">Datos</th> <th scope="col">Nombre</th> <th scope="col">Apellido</th> <th scope="col">Dirección</th> <th scope="col">Número</th> <th scope="col">Modelo Celular</th> <th scope="col">Método de pago</th> <th scope="col">Precio final</th> </tr> </thead> <tbody> <tr> <th scope="row">Cliente 1</th> <td>${nombre}</td> <td>${apellido}</td> <td>${direccion}</td> <td>${numero}</td> <td>XIAOMI Redmi 9C</td> <td>${selected}</td> <td>U$S ${descuento}</td> </tr> </tbody> </table></div><div class="row"> <div class="col-12 d-flex justify-content-center"> <button class="btn btn-dark" style="outline: none;box-shadow: none; border-radius:17px;"><a href="index.php" style="text-decoration:none; list-style:none; color:rgb(250, 250, 250);">Volver</a></button> </div></div></body> </html>`);

}

/*FUNCION PARA MOSTRAR METODO DE PAGO Y HACER DESCUENTO DE HUAWEI EN JS*/
function ShowSelectedDos(){
var metodo = document.getElementById("productoDos").value;
if(metodo == "TransferenciaBancaria"){
var descuento = <?php echo $DescuentoDos;?>;
}else if(metodo == "Tarjeta de Crédito"){
var descuento = <?php echo $PrecioDos;?>;
}else if(metodo == "Tarjeta de Débito"){
var descuento = <?php echo $PrecioDos;?>;
}
if(document.getElementById('flexCheckIndeterminateDos').checked){
  var precioenvio = 5.00;
  descuento = descuento + precioenvio;
}
var combo = document.getElementById("productoDos");
var selected = combo.options[combo.selectedIndex].text;
var nombre =  document.getElementById("InputNombreDos").value;
var apellido = document.getElementById("InputApellidoDos").value;
var direccion = document.getElementById("InputDireccionDos").value;
var numero = document.getElementById("InputNumeroDos").value;
/*alert("Bievenido: " + nombre   + " " + apellido  + "\nSu direccion es: " + direccion  + "\nSu numero es: " + numero  + "\nEl modelo del celular a comprar es: HUAWEI Y8P 2020" + "\nUsted selecciono el metodo de pago: " + selected + "\nEl precio final a pagar es: U$S " + descuento);*/

document.write(`<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="css/bootstrap.min.css"> <title>Document</title> </head> <body> <div class="container"><div class="row"> <table class="table table-bordered"> <thead> <tr> <th scope="col">Datos</th> <th scope="col">Nombre</th> <th scope="col">Apellido</th> <th scope="col">Dirección</th> <th scope="col">Número</th> <th scope="col">Modelo Celular</th> <th scope="col">Método de pago</th> <th scope="col">Precio final</th> </tr> </thead> <tbody> <tr> <th scope="row">Cliente 1</th> <td>${nombre}</td> <td>${apellido}</td> <td>${direccion}</td> <td>${numero}</td> <td>HUAWEI Y8P 2020</td> <td>${selected}</td> <td>U$S ${descuento}</td> </tr> </tbody> </table></div><div class="row"> <div class="col-12 d-flex justify-content-center"> <button class="btn btn-dark" style="outline: none;box-shadow: none; border-radius:17px;"><a href="index.php" style="text-decoration:none; list-style:none; color:rgb(250, 250, 250);">Volver</a></button> </div></div></body> </html>`);

}

</script>

<!-- FOOTER -->

    <footer id="footer" class="container-fluid d-flex justify-content-center bg-dark">
        <p class="text-light p-4">Pagina hecha por Matias Perreng, ITI ©2022</p>
    </footer>
    
    </section>
</body>
<script src="js/bootstrap.min.js"></script>

<?php 

include_once("datos.php");

if(isset($_POST['comprar'])){
if(isset($_POST['InputNombre']) && isset($_POST['InputApellido']) && isset($_POST['InputDireccion']) && isset($_POST['InputNumero'])) {
$nombre = trim($_POST['InputNombre']);
$apellido = trim($_POST['InputApellido']);
$direccion = trim($_POST['InputDireccion']);
$numero = trim($_POST['InputNumero']);

$obj1 = new datos();
$obj1->setNombre($nombre);
$obj1->setApellido($apellido);
$obj1->setDireccion($direccion);
$obj1->setNumero($numero);

  }
}
include_once("celular.php");

$Samsung = new celular("Samsung Galaxy A32",429.00);
$Samsung->setModelo("Samsung Galaxy A32");
$Samsung->setPrecio(429.00);

$Xiaomi = new celular("XIAOMI Redmi 9C",229.00);
$Xiaomi->setModelo("XIAOMI Redmi 9C");
$Xiaomi->setPrecio(229.00);

$Huawei = new celular("HUAWEI Y8P 2020",369.00);
$Huawei->setModelo("HUAWEI Y8P 2020");
$Huawei->setPrecio(369.00);
?>

</html>