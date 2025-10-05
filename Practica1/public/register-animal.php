<?php
    include(".../includes/header.php");
    include('.../data/datos.php');
?>

    <main>
        h1>Registrar nuevo animal</h1>

    <form action="process-animal.php" method="post" enctype="multipart/form-data">
        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" required>
            <?php
                foreach ($categorias as $id => $cat) {
                    echo '<option value="' . $id . '">' . htmlspecialchars($cat['nombre']) . '</option>';
                }
            ?>
        </select>
        <br>

        <label for="animal_id">ID del animal:</label>
        <input type="number" name="animal_id" id="animal_id" required>
        <br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>

        <label for="habitat">Hábitat:</label>
        <input type="text" name="habitat" id="habitat" required>
        <br>

        <label for="caracteristicas">Características (separa por comas):</label>
        <textarea name="caracteristicas" id="caracteristicas" rows="4" placeholder="Ejemplo 1, Ejemplo 2"></textarea>
        <br>

        <label for="imagen">Imagen:</label>
        <input type="file" name="imagen" id="imagen" accept="image/*">
        <br>

        <label for="pdf">PDF descriptivo:</label>
        <input type="file" name="pdf" id="pdf" accept="application/pdf">
        <br>

        <button type="submit">Registrar el animal</button>
    </form>
    </main>

<?php
    include(".../includes/footer.php");
?>