<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4">Daftar Status Absen</h2>

<a href="index.php?entity=status&action=add" class="btn btn-primary">Add Status</a>

<table class="w-full border mt-4">
    <tr>
        <th>ID</th>
        <th>Keterangan</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($statusList as $status): ?>
        <tr>
            <td class="border px-4 py-2"><?= $status['id_status'] ?></td>
            <td class="border px-4 py-2"><?= $status['keterangan'] ?></td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=status&action=edit&id=<?= $status['id_status'] ?>">Edit</a> |
                <a href="index.php?entity=status&action=delete&id=<?= $status['id_status'] ?>"
                   onclick="return confirm('Hapus status?');">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/template/footer.php'; ?>
