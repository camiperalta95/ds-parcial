<?php

class Producto {

public $Codigo;
public $Nombre;
public $Precio;
public $Stock;
public $Almacen;
public $Categoria;

function MostrarDatos(){
    echo 'Codigo: ' . $this->Codigo . '<br>';
    echo 'Nombre: ' . $this->Nombre . '<br>';
    echo 'Precio: ' . $this->Precio . '<br>';
    echo 'Stock: ' . $this->Stock . '<br>';

    echo ' Id Almacen: ' . $this->Almacen->Id . '<br>';
    echo 'Nombre de almacen:' . $this->Almacen->Nombre . '<br>';
    echo 'Direccion de almacen: ' . $this->Almacen->Direccion . '<br>';


    echo ' Id Categoria: ' . $this->Categoria->Id . '<br>';
    echo 'Nombre de categoria:' . $this->Categoria->Nombre . '<br>';

 
    


 


    if ($this->Stock >= 100) {
        echo 'Producto en abundancia';
    }
    if ($this->Stock >= 50 && $this->Stock < 100) {
        echo 'Stock moderado';
    }
    if ($this->Stock < 50) {
        echo 'Stock bajo';
    }
    


    
}
}

