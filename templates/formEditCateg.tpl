{include file='templates/header.tpl'}

<div class="container">
    <div class="row">
        <div class="col-12 border text center alert alert-primary">
            <h2 >Editar Categoria</h2>
        </div>
    </div>
    <div class="row alert alert-secondary">
        <div class="col-12 border text center">
            <form action="editCateg/{$categoria->id_categoria}" method="POST">
                <div class="row ">
                    <div class="col">
                       <input type="text" class="form-control"  aria-label="Nombre categoria:"name="categoria" value="{$categoria->nombre_categoria}">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control"  aria-label="Descripción"name="descripcion" value="{$categoria->descripcion}">
                    </div>
                    <div class="col"> 
                        <input type="submit" value="EDITAR" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>
    </div>
</div>
