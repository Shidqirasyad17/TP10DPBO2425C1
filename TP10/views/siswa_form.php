<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4"><?= isset($siswa) ? 'Edit Siswa' : 'Add Siswa' ?></h2>

<form action="index.php?entity=siswa&action=<?= isset($siswa) ? 'update&id='.$siswa['id_siswa'] : 'save' ?>" method="POST">
    
    <label>Nama:</label>
    <input type="text" name="nama" value="<?= isset($siswa) ? $siswa['nama'] : '' ?>" required>

    <button type="submit">Save</button>
</form>

<?php require_once 'views/template/footer.php'; ?>
