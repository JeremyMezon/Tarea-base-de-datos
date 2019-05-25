<?php

function inputText($id,$nombre,$valor = ''){

    return "<div  class='input-group form-group espacio'>
                <label class='control-label col-sm-2'>{$nombre}</label>
                <input class='form-control' value = '{$valor}' required='' name='{$id}'/>
            </div>";
}

function selectItem($id,$nombre,$items=[],$valor = ''){
    $sentencia = "<div  class='form-group espacio'>
    <label class='control-label col-sm-2'>{$nombre}</label>
    <select name='{$id}' value = '{$valor}'>";
    
    echo $sentencia;
    
    foreach($items as $item){
        echo $prueba[] = "<option>{$item}</option>";
    }
    echo "</select></div>";
}

function selectores($id,$nombre,$type,$items=[],$valor = ''){
    
    
    echo $sentencia = "<div  class=' form-group espacio'>
    <label class='control-label col-sm-2'>{$nombre}</label>";

    foreach($items as $valor=>$item){
        $valor = $item;
        echo $mostrar = "<input required='' type='{$type}' name='{$id}' value='{$valor}'>{$item}";
    }
    echo "</div>";
}

function comentario($id,$nombre,$valor = ''){
    return "<div  class='campos espacio'>
        <label class='control-label col-sm-2'>{$nombre}: </label>
        <textarea class='form-control' value = '{$valor}' required='' name='{$id}'/></textarea>
        </div>";
}

function verificacion($id,$terminos){
    $valor = 0;
    $type = "checkbox";
    return "<div class='check'>
                <input required='' type='{$type}' name='{$id}' value='{$valor}'>{$terminos}
            </div>";
}
?>