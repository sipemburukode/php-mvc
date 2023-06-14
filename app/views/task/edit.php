<?php include '../app/views/layout/header.php'; ?>

<form action="<?= BASE_URL . 'task/update'?>"  method="post">
    <input type="text" name="task" id="task">
    <button type="submit">Simpan</button>
</form>

<?php include '../app/views/layout/footer.php'; ?>
