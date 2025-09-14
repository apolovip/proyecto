<?php

session_start();

//inlcuir heaader, footer y demas elementos
include_once("assets/layouts/links.php");
include_once("assets/layouts/header.php");
include_once("html/" . $vista);
include_once("assets/layouts/footer.php");
include_once("assets/layouts/scripts.php");

<script>
let ultimaModificacion = null;

function verificarCambios() {
    fetch('/watch-all.php')
        .then(res => res.text())
        .then(timestamp => {
            if (ultimaModificacion === null) {
                ultimaModificacion = timestamp;
            } else if (timestamp !== ultimaModificacion) {
                location.reload();
            }
        });
}

setInterval(verificarCambios, 2000); // cada 2 segundos
</script>
