<?= form_open("adminEncuesta/seleccionPart") ?>
<html> 
<head><!-- Insertamos el archivo CSS compilado y comprimido -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 <!-- Theme opcional -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
</head>
<body>
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
	
	<h3 class = "text-center"> <?= form_label('Seleccion de Estudio'); ?></h3>
   	<div class = "text-center">
          <select name= "idLogin" id="idLogin">
            <option  value="" selected >Selecciona Usuario</option>
            <?php
              foreach ($idLogin as $i){
                 echo '<option value="'. $i->idLogin .'">'. $i->user .'</option>';
               } 
            ?>
          </select>
          
           <select name= "idEstudio" id="idEstudio">
            <option  value="" selected >Selecciona Estudio</option>
            <?php
              foreach ($idEstudio as $i){
                 echo '<option value="'. $i->idEstudio .'">'. $i->nombre .'</option>';
               } 
            ?>
          </select>
          
          <select name= "IDcuestionario" id="IDcuestionario">
            <option value="" selected>Selecciona el cuestionario</option>
            <?php
              foreach ($IDcuestionario as $i){
                 echo '<option value="'. $i->IDcuestionario .'">'. $i->cuenombre .'</option>';
               } 
            ?>
          </select>
   </div>
   
   <h5 class = "text-center"><?= form_submit('','Asignar Usuario',"class='btn btn-success'")?></h5>
  
</div>
<p>&copy; Universidad Autonoma Metropolitana 2018 </p>
<!--Insertamos jQuery dependencia de Bootstrap-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!--Insertamos el archivo JS compilado y comprimido -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>