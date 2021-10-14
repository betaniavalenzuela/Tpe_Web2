 {include file='templates/header.tpl'}

 <div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 > Detalle del producto {$producto->nombre_producto}:</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <ul class="list-group">
                <li  class="list-group-item">
                    <h4 class="list-group-item-heading">Categoria</h4>
                    <p class="list-group-item-text">{$producto->nombre_categoria}</p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"> Precio</h4>
                    <p class="list-group-item-text">{$producto->precio}</p>
                </li>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"> Cantidad disponible</h4>
                    <p class="list-group-item-text">{$producto->cantidad}</p>
                </li>
            </ul>
        </div>
    </div>
 </div>

