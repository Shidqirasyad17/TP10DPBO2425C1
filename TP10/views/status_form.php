<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4"><?= isset($status) ? 'Edit Status' : 'Add Status' ?></h2>

<form action="index.php?entity=status&action=<?= isset($status) ? 'update&id='.$status['id_status'] : 'save' ?>" method="POST">
    
    <label>Keterangan Status:</label>
    <input type="text" name="keterangan" 
           value="<?= isset($status) ? $status['keterangan'] : '' ?>" required>

    <button type="submit">Save</button>
</form>

<?php require_once 'views/template/footer.php'; ?>
