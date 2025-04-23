<?php
require_once '../connection_adm.php';

$result = $conn->query("SELECT * FROM productos ORDER BY creado_en DESC");


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['nombre']) ?></td>
            <td><?= htmlspecialchars($row['descripcion']) ?></td>
            <td><?= htmlspecialchars($row['cantidad']) ?></td>
            <td>
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <?php if (!empty($row["imagen$i"])): ?>
                        <img src="<?= htmlspecialchars($row["imagen$i"]) ?>" width="50" class="img-thumbnail me-1">
                    <?php endif; ?>
                <?php endfor; ?>
            </td>
            <td><?= htmlspecialchars($row['type_']) ?></td>
            <td><?= htmlspecialchars($row['creado_en']) ?></td>
        </tr>
<?php endwhile;
} else {
    echo '<tr><td colspan="6" class="text-danger">No hay productos</td></tr>';
}
?>