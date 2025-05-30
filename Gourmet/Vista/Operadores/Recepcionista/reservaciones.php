<link rel="stylesheet" href="/IGourmet/Gourmet/CSS/Recepcionista/reservaciones.css">

<a href="RecepcionistaController.php?accion=reservar&idmesa=<?= $mesa['IdMesa'] ?>">Reservar</a>

<div class="container">
    <?php foreach ($mesas as $mesa): ?>
        <div class="container-cards">
            <div class="mesa-card">
                <h2>Mesa <?php echo $mesa['IdMesa']; ?></h2>
                <p>Capacidad: <?php echo $mesa['Capacidad']; ?></p>
                <p>Estado: <?php echo $mesa['Estado']; ?></p>
                <a href="RecepcionistaController.php?accion=reservar&idmesa=<?= $mesa['IdMesa'] ?> ">Resercvar</a>
            </div>
            <div class="operador-card">
                <?php if (!empty($mesa['IdOperador'])): ?>
                    <h2>Mesero: <?= $mesa['IdOperador'] ?></h2>
                    <p>Nombre: <?= $mesa['Nombres'] . ' ' . ($mesa['Apellidos'] ?? '') ?></p>
                <?php else: ?>
                    <h2>Sin operador asignado</h2>
                <?php endif; ?>
            </div>

        </div>
    <?php endforeach; ?>
</div>