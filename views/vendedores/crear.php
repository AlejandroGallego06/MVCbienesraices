<main class="contenedor seccion">
    <h1>Crear Vendedor</h1>

    <?php foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>

    <a href="/admin" class="boton boton-verde">Volver</a>

    <form class="formulario" method="POST" action="/vendedores/crear">
        <?php include __DIR__ . '/formulario.php'; ?>
        <input type="submit" value="Crear Vendedor" class="boton-verde">

</main>