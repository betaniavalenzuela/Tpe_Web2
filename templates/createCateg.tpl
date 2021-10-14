<div class="container">
    <div class="row">
            <div class="col-12 border text center alert alert-primary">
                <h2>Cargar categorias:</h2>
            </div>
    </div>
    <div class="row">
        <div class="col-12 border text center alert-secondary">
            <form action="createCateg" method="POST">
                <div class="row ">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Categoria" aria-label="nombre_categoria"name="nombre_categoria" id="">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Descripción" aria-label="descripcion"name="descripcion">
                    </div> 
                    <div class="col"> 
                        <input type="submit" value="Cargar" class="btn btn btn-secondary">
                    </div>   
                </div>
            </form>
        </div>
    </div> 
</div>