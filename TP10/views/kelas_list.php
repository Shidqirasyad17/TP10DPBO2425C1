<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4">Daftar Kelas</h2>

<a href="index.php?entity=kelas&action=add" class="btn btn-primary">Add Kelas</a>

<table class="w-full border mt-4">
    <tr>
        <th>ID</th>
        <th>Nama Kelas</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($kelasList as $kelas): ?>
        <tr>
            <td class="border px-4 py-2"><?= $kelas['id_kelas'] ?></td>
            <td class="border px-4 py-2"><?= $kelas['nama_kelas'] ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=kelas&action=edit&id=<?= $kelas['id_kelas'] ?>">Edit</a> |
                <a href="index.php?entity=kelas&action=delete&id=<?= $kelas['id_kelas'] ?>"
                   onclick="return confirm('Hapus kelas?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/template/footer.php'; ?>
