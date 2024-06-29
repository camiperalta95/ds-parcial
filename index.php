<?php

require_once 'modelo.php/Almacen.php';
require_once 'modelo.php/Categoria.php';
require_once 'modelo.php/Producto.php';


$c=new Categoria();
$c->Id='1';
$c->Nombre= 'Iluminacion';


$a=new Almacen();
$a->Id='1';
$a->Nombre= 'Almacen Principal';
$a->Direccion= 'Av.Libertaador 123';

$p=new Producto();
$p->Codigo= '1234';
$p->Nombre= 'lampara LED';
$p->Precio= '$25.99';
$p->Stock= $_GET ['stock'];
$p->Almacen=$a;
$p->Categoria=$c;


$p->MostrarDatos();