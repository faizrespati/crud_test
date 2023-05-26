<!-- app/Views/jabatanpegawai/create.php -->
<h1>Tambah Jabatan Pegawai</h1>

<form action="<?= site_url('/jabatanpegawai/store') ?>" method="post">
    <label for="nama_jabatan">Nama Jabatan:</label>
    <input type="text" name="nama_jabatan" id="nama_jabatan" required>

    <button type="submit">Simpan</button>
</form>
