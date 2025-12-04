<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4">Daftar Siswa</h2>

<a href="index.php?entity=siswa&action=add" class="btn btn-primary">Add Siswa</a>

<table class="w-full border mt-4">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($siswaList as $siswa): ?>
        <tr>
            <td class="border px-4 py-2"><?= $siswa['id_siswa'] ?></td>
            <td class="border px-4 py-2"><?= $siswa['nama'] ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=siswa&action=edit&id=<?= $siswa['id_siswa'] ?>">Edit</a> |
                <a href="index.php?entity=siswa&action=delete&id=<?= $siswa['id_siswa'] ?>"
                   onclick="return confirm('Hapus siswa?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/template/footer.php'; ?>
