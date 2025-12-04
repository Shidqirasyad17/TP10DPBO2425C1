<?php require_once 'views/template/header.php'; ?>

<h2 class="mt-4">
    <?= isset($absen) ? 'Edit Absensi' : 'Add Absensi'; ?>
</h2>

<form action="index.php?entity=absensi&action=<?= isset($absen) ? 'update&id=' . $absen['id_absen'] : 'save'; ?>" 
      method="POST">

    <!-- PILIH SISWA -->
    <label for="id_siswa">Siswa:</label>
    <select name="id_siswa" id="id_siswa" required>
        <?php foreach ($siswaList as $siswa): ?>
            <option value="<?= $siswa['id_siswa']; ?>"
                <?= isset($absen) && $absen['id_siswa'] == $siswa['id_siswa'] ? 'selected' : '' ?>>
                <?= $siswa['nama']; ?>
            </option>
        <?php endforeach; ?>
    </select>

  
    <label for="id_kelas">Kelas:</label>
    <select name="id_kelas" id="id_kelas" required>
        <?php foreach ($kelasList as $kelas): ?>
            <option value="<?= $kelas['id_kelas']; ?>"
                <?= isset($absen) && $absen['id_kelas'] == $kelas['id_kelas'] ? 'selected' : '' ?>>
                <?= $kelas['nama_kelas']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="id_status">Status Absen:</label>
    <select name="id_status" id="id_status" required>
        <?php foreach ($statusList as $status): ?>
            <option value="<?= $status['id_status']; ?>"
                <?= isset($absen) && $absen['id_status'] == $status['id_status'] ? 'selected' : '' ?>>
                <?= $status['keterangan']; ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="tanggal">Tanggal:</label>
    <input type="date" name="tanggal" value="<?= isset($absen) ? $absen['tanggal'] : ''; ?>" required>

    <button type="submit">Save</button>

</form>

<?php require_once 'views/template/footer.php'; ?>
