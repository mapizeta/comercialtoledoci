<h2>Categorías</h2>
<?php if(isset($error)){ ?>
<div class="alert alert-danger">
    <?php echo $error; ?>
</div>
<?php } ?>
<a href="<?php echo admin_url('category/add'); ?>">Nueva categoría</a>
<?php echo form_open(admin_url('category/save'), array('role' => 'form'));?>
    <table class="table table-responsive table-bordered">
        <thead>
            <tr>
                <td>Categoría #</td>
                <td>Nombre</td>
                <td>Orden</td>
                <td>Superior</td>
                <td>Acción</td>
            </tr>
        </thead>
        <tbody>
            <?php $count = 1; ?>
            <?php foreach($categories->result() as $category){ ?>
            <tr>
                <?php echo form_hidden('categoryid' . $count, $category->id); ?>
                <td><?php echo $count; ?></td>
                <td>
                    <input  type="text" 
                            name="<?php echo "categoryname$count"; ?>" 
                            value="<?php echo set_value("cateogryname$count", $category->name); ?>"/>
                </td>
                <td>
                    <input type="number" 
                            step="1" 
                            name="<?php echo "categoryorder$count"; ?>" 
                            value="<?php echo set_value("cateogryorder$count", $category->order); ?>"/>
                </td>
                <!--
                <td>
                    <input type="number" 
                            step="1" 
                            name="<?php echo "categorypadre$count"; ?>" 
                            value="<?php echo set_value("cateogrypadre$count", $category->padre); ?>"/>
                </td>
                -->
                <td>
                    <div class="form-group">
                        <select name="<?php echo "categorypadre$count"; ?>" 
                                class="form-control">
                            <?php foreach($categories->result() as $categoria){ ?>
                            <option value="<?php echo $categoria->id; ?>" 
                                <?php if($categoria->id == $category->padre){ echo 'selected'; } ?>>
                                <?php echo $categoria->name; ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </td>
                <td>
                    <a href="<?php echo admin_url('category/delete?id=' . $category->id) ?>">Eliminar</a>
                </td>
            </tr>
            <?php $count++; ?>
            <?php } ?>
        </tbody>
    </table>
    <input type="submit" class="btn btn-primary" value="Save Categories"/>
</form>