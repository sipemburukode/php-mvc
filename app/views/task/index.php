<?php include '../app/views/layout/header.php'; ?>

<!-- Konten halaman "Tentang Kami" atau "Tentang Aplikasi" -->
<h1>Create Task</h1>

<form action="<?= BASE_URL . 'task/update'?>"  method="post">
    <input type="text" name="task" id="task">
    <button type="submit">Simpan</button>
</form>

<?php include '../app/views/layout/footer.php'; ?>
