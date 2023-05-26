<!-- app/Views/pegawai/create.php -->
<h1>Tambah Pegawai</h1>

<form action="<?= site_url('/pegawai/store') ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required>

    <label for="jabatan_id">Jabatan:</label>
    <input type="text" name="jabatan_id" id="jabatan_id" required>

    <button type="submit">Simpan</button>
</form>
