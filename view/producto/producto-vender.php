<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Producto">Producto</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm_producto" action="?c=Producto&a=Actualizar_stock" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $alm->nombre; ?>" class="form-control"  data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Referencia</label>
        <input type="text" name="referencia" value="<?php echo $alm->referencia; ?>" class="form-control"   data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php echo $alm->categoria; ?>" class="form-control"    data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Stock</label>
        <input type="number" name="stock" value="<?php echo $alm->stock; ?>" class="form-control"    data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Fecha de Creacion</label>
        <input readonly type="text" name="fecha_creacion" value="<?php echo $alm->fecha_creacion; ?>" class="form-control datepicker"   data-validacion-tipo="requerido" />
    </div>

    <div class="form-group">
        <label>Cantidad</label>
        <input   type="number" name="cantidad"  class="form-control"   data-validacion-tipo="requerido" />
    </div>
    
    <div class="form-group">
        <label>Fecha Ultima Venta</label>
        <input readonly type="text" name="fecha_ultima_venta" value="<?php echo $alm->fecha_ultima_venta; ?>" class="form-control datepicker"   data-validacion-tipo="requerido" />
    </div>
    
    <hr />
    <?php if($alm->stock == 0) { ?>
        <div class="alert alert-danger" role="alert">
            Stock igual a Cero, no puede venderse este producto
        </div>
    <?php } ?>

    <?php if($alm->stock > 0) { ?>
        <div class="text-right">
            <button class="btn btn-success">Vender</button>
        </div>
    <?php } ?>
   
</form>

<script>
    $(document).ready(function(){
        $("#frm_producto").submit(function(){
            return $(this).validate();
        });
    })
</script>