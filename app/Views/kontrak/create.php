<!-- app/Views/kontrak/create.php -->
<h1>Tambah Kontrak</h1>

<p><form action="<?= site_url('/kontrak/store') ?>" method="post">
    <label for="pegawai_id">Pegawai:</label>
    <select name="pegawai_id" id="pegawai_id" required>
        <?php foreach ($pegawai as $row) : ?>
            <option value="<?= $row['id'] ?>"><?= $row['nama'] ?></option>
        <?php endforeach; ?>
    </select></p>

    <label for="tanggal_mulai">Tanggal Mulai:</label>
    <input type="date" name="tanggal_mulai" id="tanggal_mulai" required>

    <label for="tanggal_selesai">Tanggal Selesai:</label>
    <input type="date" name="tanggal_selesai" id="tanggal_selesai" required>

    <button type="submit">Simpan</button>
</form>
