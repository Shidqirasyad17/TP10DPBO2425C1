<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4">Daftar Absensi</h2>

<a href="index.php?entity=absensi&action=add" class="btn btn-primary">Add Absensi</a>

<table class="w-full border mt-4">
    <tr>
        <th>Siswa</th>
        <th>Kelas</th>
        <th>Status</th>
        <th>Tanggal</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($absensiList as $absen): ?>
        <tr>
            <td class="border px-4 py-2">
                <?= htmlspecialchars($absen['nama_siswa']); ?>
            </td>
            <td class="border px-4 py-2">
                <?= htmlspecialchars($absen['nama_kelas']); ?>
            </td>
            <td class="border px-4 py-2">
                <?= htmlspecialchars($absen['status_absen']); ?>
            </td>
            <td class="border px-4 py-2">
                <?= htmlspecialchars($absen['tanggal']); ?>
            </td>
            <td class="border px-4 py-2">
                <a href="index.php?entity=absensi&action=edit&id=<?= $absen['id_absen']; ?>">Edit</a>
                |
                <a href="index.php?entity=absensi&action=delete&id=<?= $absen['id_absen']; ?>"
                   onclick="return confirm('Hapus data absensi ini?');">
                   Delete
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'views/template/footer.php'; ?>
