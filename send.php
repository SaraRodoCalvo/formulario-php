<?php
extract($_REQUEST);

if (empty($nombre)) {
    echo "O campo nome é obrigatorio";
}

else if (empty($correo)) {
    echo "O campo correo é obrigatorio";
} else {
        echo "Hola o teu nome é $nombre $apelidos, eres $sexo, con teléfono $telefono e correo $correo";
    }



echo '<a href="./">Volver</a>';
