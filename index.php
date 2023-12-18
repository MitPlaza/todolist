<?php
include ("header.php");

?>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main><br>
    <div class="container">
        <div class="card" >
            <div class="card">
                <div class="card-header">
                    Lista de Tareas TODO LIST
                </div>
                <?php
                foreach($colores as $valor){ ?>
                    
                

             
                <div class="card-body" style="background:<?php echo $valor['color']; ?>;">
                    <?php } ?>

                    <div class="mb-3">
                    <form action="" method="post">
                      <label for="" class="form-label">Tarea:</label>
                      <input type="text"
                        class="form-control" name="tarea" id="tarea" 
                        aria-describedby="helpId" 
                        placeholder="Escriba su tarea"><br>

                        <input name="agregar_tarea" id="agregar_tarea" class="btn btn-primary" type="submit" value="Agregar Tarea">
                        </form>
                    </div>

                    <ul class="list-group">

<?php
foreach($registros as $registro){ ?>

<?php if($registro['mostrar']==1?'subrayado':'' ){ ?>

<li class="list-group-item"> <div class="form-check">

<form action="" method="post">

<input type="hidden" name="id" id="" value="<?php echo $registro['id']; ?>">

<input class="form-check-input" type="checkbox" name="completado" value="<?php echo $registro['completado']; ?>" id="" onChange="this.form.submit()" <?php echo($registro['completado']==1)?'checked':''; ?> >

</form>

                          
                      
            <span class="float-start <?php echo($registro['completado']==1)?'subrayado':''; ?>">&nbsp; <?php echo $registro['tarea']; ?> </span>
            <h6 class="float-start">&nbsp;<a href="?id=<?php echo $registro['id'] ?>"><span class="badge bg-danger"> x </span></a></h6>
 </li> 

<?php } ?>

<?php } ?>

                    </ul>


                    
                </div>
              
            </div>
        
        </div>

<div>
    <form action="" method="post">
        <input type="color" name="color" id="color" value="<?php echo $valor['color']; ?>">
        <input name="cambiar_color" id="cambiar_color" class="btn btn-primary" type="submit" value="Cambiar color">
    </form>
</div>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>