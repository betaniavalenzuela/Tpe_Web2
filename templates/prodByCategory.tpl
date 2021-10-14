{include file='templates/header.tpl'}

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h4 > Productos </h4>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <ul class="list-group">
                        {foreach from=$categorias item=$prod}
                            <li  class="list-group-item" > 
                                <p class="list-group-item-text"> {$prod->nombre_producto}</p>
                            </li>
                        {/foreach}
            </ul>
        </div>
    </div>
 </div>