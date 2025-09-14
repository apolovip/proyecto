<!--monitorear cambios en archivos y recargar-->
<script>
    let ultimaModificacion = null;

    function verificarCambios() {
        fetch('/src/helpers/php')
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

</body>

<!--cargar scripts-->

</html>