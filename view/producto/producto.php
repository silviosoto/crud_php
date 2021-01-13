<h1 class="page-header">Productos</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=Producto&a=Crud">Nuevo producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Nombre</th>
            <th style="width:120px;">Referencia</th>
            <th style="width:120px;">Categoria</th>
            <th style="width:120px;">Stock</th>
            <th style="width:120px;">Fecha Creacion</th>
            <th style="width:120px;">Fecha Ultima Venta</th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
            <th style="width:60px;"></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->referencia; ?></td>
            <td><?php echo $r->categoria; ?></td>
            <td><?php echo $r->stock; ?></td>
            <td><?php echo $r->fecha_creacion; ?></td>
            <td><?php echo $r->fecha_ultima_venta; ?></td>
            <td>
                <a href="?c=Producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
            <td>
                <a href="?c=Producto&a=vender&id=<?php echo $r->id; ?>">Vender</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
