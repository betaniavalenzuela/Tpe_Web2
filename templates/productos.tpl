
    {include file='templates/header.tpl'}
    <div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >{$titulo}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 border text center ">
            <ul class="list-group ">
            {foreach from=$productos item=$prod}
                    <li class="list-group-item">
                        <a class="list-group-item-text" href="producto/{$prod->id_producto}">{$prod->nombre_producto}</a>
                        {if $log}<a class=" btn-sm btn btn btn-secondary" href="borrarProd/{$prod->id_producto}"> BORRAR</a>
                        <a class=" btn-sm btn btn-primary list-group-item-text" href="editar/{$prod->id_producto}"> EDITAR</a>{/if}
                    </li>
                {/foreach}
            </ul>
            {if $log}
                {include file='templates/createProduct.tpl'}
                {/if}
        </div>
    </div>
</div>