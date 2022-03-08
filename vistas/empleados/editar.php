<div class="card">
    <div class="card-header text-center bg-dark text-light">
        <h5>EDITAR EMPLEADO</h5>
    </div>

    <div class="card-body">
        
        <form action="" method="post">


        <div class="mb-3">
          <label for="" class="form-label">ID</label>
          <input readonly type="text"
            class="form-control" value="<?php echo $empleado->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="ID empleado">
        </div>

        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input required type="text"
            class="form-control" value="<?php echo $empleado->nombre; ?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre del empleado">
        </div>    
        
        <div class="mb-3">
          <label for="correo" class="form-label">Correo:</label>
          <input required type="email"
           class="form-control" value="<?php echo $empleado->correo; ?>" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo del empleado">
        </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
        <a href="?controlador=empleados&accion=inicio" class="btn btn-primary">Cancelar</a>

        </form>

    </div>
    
</div>