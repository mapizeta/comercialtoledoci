<h1>Productos</h1>
<a href="<?php echo admin_url('product/add'); ?>">Nuevo Producto</a>
<table class="table table-responsive table-bordered">
    <thead>
        <tr>
            <td>Nombre</td>
            <td>SKU</td>
            <td>Precio</td>
            <td>Cantidad</td>
            <td></td>
            <td></td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products->result() as $product){ ?>
        <tr>
            <td><?php echo $product->name; ?></td>
            <td><?php echo $product->sku; ?></td>
            <td><?php echo '£' . number_format($product->price, 2, '.', ''); ?></td>
            <td><?php echo $product->quantity; ?></td>
            <td><a href="<?php echo admin_url('product/single?id=' . $product->id); ?>">Edit</a></td>
            <td><a href="<?php echo admin_url('product/delete?id=' . $product->id); ?>">Eliminar</a></td>
        </tr>
        <?php } ?>
    </tbody>
</table>