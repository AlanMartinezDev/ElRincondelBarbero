<h1 class="nombre-pagina">Crear nueva cita</h1>
<p class="descripcion-pagina">Elige tus servicios y coloca tus datos</p>

<div id="app">
    <div class="seccion" id="paso-1">
        <h2>Servicios</h2>
        <p>Elige tus servicios a continuación</p>
        <div class="listado-servicios" id="servicios"></div>
    </div>

    <div class="seccion" id="paso-2">
        <h2>Tus datos y cita</h2>
        <p>Coloca tus datos y fecha de tu cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" value="<?php echo $nombre; ?>" id="nombre" disabled>
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha">
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input type="time" id="hora">
            </div>
        </form>
    </div>

    <div class="seccion" id="paso-3">
        <h2>Resumen</h2>
        <p>Verifica que la información sea correcta</p>
    </div>
</div>