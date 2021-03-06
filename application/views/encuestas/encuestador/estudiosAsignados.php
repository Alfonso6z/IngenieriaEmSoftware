<?= form_open("encuestador/recibirDatosEstudiosAsignados") ?>
<?php
$pregunta=array(
  'name' => 'pregunta','placeholder' => ' Escribe una pregunta', 'maxlength'=>'100');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Theme opcional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    </head>

    <body>

        <div class="container">
        <br>
            <div class="jumbotron">
                <?php if(isset($error)){?>
                    <div class="alert alert-danger alert-dismissible">
                        <h5 class= "text-center"><a class="close" data-dismiss="alert" aria-label="close">&times;</a><strong class = "text-center"><?php echo $error; ?></strong></h5>
                        <h5 class = "text-center"> <?= validation_errors('*');?></h5>
                    </div>
                <?php } ?>
                <?php if(isset($correcto)){?>
                    <div class="alert alert-success alert-dismissible">
                        <h5 class= "text-center"><a class="close" data-dismiss="alert" aria-label="close">&times;</a><strong class = "text-center"><?php echo $correcto; ?></strong></h5>
                        <h5 class = "text-center"> <?= validation_errors('*');?></h5>
                    </div>
                <?php } ?>
            <h2 class = "text-center">Estudios asignados</h2>
            <br>
                <div class="text-center">
            		<table class="table table-hover">
                        <thead>
                        <tr>
                            <th class="text-center">Selección</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Descripcion</th>
                        </tr>
                        </thead>
                        <tbody>
                         <?php
                             if($estudios){
                                foreach ($estudios as $i){ 
                                echo "<tr><td><label><input type='radio' id='idEstudio' name='idEstudio' value = ".$i->idEstudio."></td><td>".$i->nombre."</td><td>".$i->descripcion." </label></td></tr>";
                                }
                            }else{
                                echo "<h2>No hay estudios asignados</h2>";
                            }
                        ?>
                        </tbody>
                </table>
                <h5><?= form_submit('Seleccionar','Seleccionar',"class='btn btn-info'")?>
                </div>
            </div>
        </div>
    <br>
    <p>&copy; Alfonso González Zempoalteca </p>
    <script type="text/javascript">
    /*funcion ajax que llena el combo dependiendo de la categoria seleccionada*/
    $(document).ready(function(){
       $("#idEstudio").change(function () {
               $("#idEstudio option:selected").each(function () {
                idEstudio=$('#idEstudio').val();
                $.post("<?php echo base_url('ControlComboBoxes/estudioCuestionario'); ?>", { idEstudio: idEstudio}, function(data){
                $("#idCuestionario").html(data);
                });            
            });
       })
    });
    /*fin de la funcion ajax que llena el combo dependiendo de la categoria seleccionada*/
    </script>
     <!--Insertamos jQuery dependencia de Bootstrap-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--Insertamos el archivo JS compilado y comprimido -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>

