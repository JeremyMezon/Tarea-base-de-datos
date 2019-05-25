<?php plantilla::aplicar() ?>
<br>
<h2>Lista de Contactos</h2>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Genero</th>
            <th>Tipo de Sangre</th>
            <th>Comentario</th>
        </tr>
        <tbody>

        <?php
            $rs = contacto::mostrar();
           
            foreach ($rs as $personas){
                $urlEditar = base_url("Home/editar/{$personas->id}");
                $urlBorrar = base_url("Home/borrar/{$personas->id}");
                echo "
                <tr>
                <td>{$personas->Cedula}</td>
                <td>{$personas->Nombre}</td>
                <td>{$personas->Apellido}</td>
                <td>{$personas->Genero}</td>
                <td>{$personas->Sangre}</td>
                <td>{$personas->textarea}</td>
                <td><a href='{$urlEditar}'><i class='fas fa-edit'></i></a></td>
                <td><a href='{$urlBorrar}'><i class='fas fa-trash'></i></a></td>
                </tr>";
            }
        ?>

        </tbody>
    </thead>
</table>