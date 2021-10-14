{include file='templates/header.tpl'}


<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Editar Producto</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <form action="editProd/{$producto->id_producto}" method="POST">
                <div class="row ">
                    <div class="col">
                       <input type="text" class="form-control"  aria-label="Nombre categoria:"name="nombre" value="{$producto->nombre_producto}">
                    </div>
                    <div class="col">
                      <input type="number" class="form-control"  aria-label="cantidad"name="cantidad" value="{$producto->cantidad}">
                    </div>
                    <div class="col">
                      <input type="number" class="form-control"  aria-label="precio"name="precio" value="{$producto->precio}">
                    </div>
                    <div class="col">
                        <select class="form-control" name="categoria" aria-label="cantidad" id="">
                            {foreach from=$categorias item=$cat}       
                                <option value="{$cat->id_categoria}">{$cat->nombre_categoria}</option>
                            {/foreach} 
                        </select> 
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="EDITAR" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>
    </div>
</div>
