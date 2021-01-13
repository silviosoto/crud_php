<?php
require_once 'model/producto.php';

class  ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function vender(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-vender.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->referencia = $_REQUEST['referencia'];
        $alm->categoria = $_REQUEST['categoria'];
        $alm->stock = $_REQUEST['stock'];
        $alm->fecha_creacion = $_REQUEST['fecha_creacion'];
        $alm->fecha_ultima_venta = $_REQUEST['fecha_ultima_venta'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }

    public function Actualizar_stock(){
        $alm = new Producto();
        $stock =  $_REQUEST['stock']-  $_REQUEST['cantidad'];
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->referencia = $_REQUEST['referencia'];
        $alm->categoria = $_REQUEST['categoria'];
        $alm->stock = $stock;
        $alm->fecha_creacion = $_REQUEST['fecha_creacion'];
        $alm->fecha_ultima_venta = $_REQUEST['fecha_ultima_venta'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}