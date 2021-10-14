{include file='templates/header.tpl'}

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Lista de categorías</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 border text center ">
            <ul class="list-group ">
                {foreach from=$categorias item=$cat}
                    <li  class="list-group-item">
                        <a class="list-group-item-text" href="Categoria/{$cat->id_categoria}">  {$cat->nombre_categoria}</a>
                        {if $log}<a class=" btn-sm btn btn btn-secondary" href="borrar/{$cat->id_categoria}"> BORRAR</a>
                        <a class=" btn-sm btn btn-primary list-group-item-text" href="edit/{$cat->id_categoria}"> EDITAR</a>{/if}
                    </li>
                {/foreach}
            </ul>
            {if $log}
                {include file='templates/createCateg.tpl'}
                {/if}
        </div>
    </div>
</div>