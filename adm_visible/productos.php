<?php
$type = isset($type) ? (int) $type : 0;
$api_url = "https://gpimagenes.com/adm_visible/obtener_productos_front_visible.php?type=" . $type;
$productos = json_decode(file_get_contents($api_url), true);
?>

<h1 class="text-center" style="margin-top: 10vh">Listado de Productos</h1>

<div>
  <div class="row">
    <?php if ($productos): ?>
      <?php foreach ($productos as $row): ?>
        <div class="col-md-6 mb-4">
          <div class="card shadow-sm h-100">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="card-title"><?= htmlspecialchars($row['nombre']) ?></h5>
                <span class="badge bg-secondary"><?= htmlspecialchars($row['cantidad']) ?> disponible</span>
              </div>

              <div class="d-flex justify-content-center gap-2 flex-wrap mb-3">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                  <?php if (!empty($row["imagen$i"])): ?>
                    <img src="https://gpimagenes.com/img_1/<?= urlencode(basename($row["imagen$i"])) ?>"
                         style="width: 20%; height: 20%; object-fit: cover; cursor: pointer;"
                         class="img-thumbnail"
                         onclick="mostrarImagenModal(this.src)">
                  <?php endif; ?>
                <?php endfor; ?>
              </div>

              <div class="descripcion-corta" id="desc<?= $row['id'] ?>">
                <?= nl2br(htmlspecialchars($row['descripcion'])) ?>
              </div>
              <button type="button" class="btn btn-link"  onclick="toggleDescripcion(<?= $row['id'] ?>)">Ver más</button>

            </div>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p class="text-center">No hay productos disponibles.</p>
    <?php endif; ?>
  </div>
</div>

<!-- Modal de imagen -->
<div class="modal fade" id="imagenModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-dark">
      
      <div class="modal-body text-center">
        <img id="imagenModalSrc" src="" class="img-fluid rounded" alt="Vista previa" style="max-height: 80vh; object-fit: contain;">
        <div class="modal-header border-0">
        <button type="button"  style="background-color:red; border-color:black; border-radius:5px; text-color:white;" data-bs-dismiss="modal">
            <text style="color:white;">
                Cerrar
            </text>
        </button>
      </div>
      </div>
    </div>
  </div>
</div>


