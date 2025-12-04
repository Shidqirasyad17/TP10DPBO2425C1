<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4"><?= isset($kelas) ? 'Edit Kelas' : 'Add Kelas' ?></h2>

<form action="index.php?entity=kelas&action=<?= isset($kelas) ? 'update&id='.$kelas['id_kelas'] : 'save' ?>" method="POST">
    
    <label>Nama Kelas:</label>
    <input type="text" name="nama_kelas" value="<?= isset($kelas) ? $kelas['nama_kelas'] : '' ?>" required>

    <button type="submit">Save</button>
</form>

<?php require_once 'views/template/footer.php'; ?>
