<!-- app/Views/kontrak/edit.php -->
<h1>Edit Kontrak</h1>

<form action="<?= site_url('/kontrak/update/' . $kontrak['id']) ?>" method="post">
    <label for="pegawai_id">Pegawai:</label>
    <select name="pegawai_id" id="pegawai_id" required>
        <?php foreach ($pegawai as $row) : ?>
            <option value="<?= $row['id'] ?>" <?= ($row['id'] == $kontrak['pegawai_id']) ? 'selected' : '' ?>>
                <?= $row['nama'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="tanggal_mulai">Tanggal Mulai:</label>
    <input type="date" name="tanggal_mulai" id="tanggal_mulai" value="<?= $kontrak['tanggal_mulai'] ?>" required>

    <label for="tanggal_selesai">Tanggal Selesai:</label>
    <input type="date" name="tanggal_selesai" id="tanggal_selesai" value="<?= $kontrak['tanggal_selesai'] ?>" required>

    <button type="submit">Simpan</button>
</form>
