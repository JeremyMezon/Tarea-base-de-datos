<?php 
    
    if($_POST){
        $persona = $_POST;
        contacto::guardar($persona);
        redirect('home/lista');
    }

    $persona = new stdClass;
    $persona->id='';
    $persona->Cedula = '';
    $persona->Nombre = '';
    $persona->Apellido = '';
    $persona->Sangre = '';
    $persona->Genero = '';
    $persona->textarea = '';
    
    
    if(isset($id)){
        $rs = contacto::editar($id);
        if(count($rs) > 0){
            $persona = $rs[0];
        }
    }

    
    
        

    plantilla::aplicar();
    
?>
<br>
<h2>Nuevo Contacto</h2>
<br>
<form class="form-vertical" method="post" action="">
    <div class="form-group">
        <input type="hidden" name="id" value='<?= $persona->id ?>' >
    <?= inputText("cedula","Cedula",$persona->Cedula);?>
    <?= inputText("nombre","Nombre",$persona->Nombre);?>
    <?= inputText("apellido","Apellido",$persona->Apellido);?>
    <?= selectItem("sangre","Tipo de Sangre",['A+','A-','B+','B-','AB+','AB-','O+','O-'],$persona->Sangre);?>
    <div class="radio-inline"><?= selectores("genero","Genero:","radio",['Masculino','Femenino'],$persona->Genero);?> </div>
    <?= comentario("textarea","Comentario",$persona->textarea);?>
    <?= verificacion("verificacion"," Acepto los terminos de contrato");?>
    </div>
    
    <button type="submit" class='btn btn-success'><i class='fa fa-save'></i> Guardar</button>
    <button class="btn" id='borrar' type="reset"><i class="fas fa-eraser"></i> Limpiar</button>
  
</form>

