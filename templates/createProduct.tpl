<div class="container">
    <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2>Cargar productos:</h2>
            </div>
    </div>
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <form action="createProd" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Producto" aria-label="nombre"name="nombre" >
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Cantidad" aria-label="cantidad"name="cantidad">
                    </div> 
                    <div class="col">
                        <input type="number" class="form-control" placeholder="Precio" aria-label="precio"name="precio">
                    </div> 
                    <div class="col">
                        <select class="form-control" name="categoria" aria-label="cantidad" id="">
                            {foreach from=$categorias item=$cat}       
                                <option value="{$cat->id_categoria}">{$cat->nombre_categoria}</option>
                            {/foreach} 
                        </select> 
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="Cargar" class="btn btn btn-secondary">
                    </div>
                </div>
            </form>
        </div>
    </div> 
</div>


