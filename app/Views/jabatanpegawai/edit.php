<!-- app/Views/jabatanpegawai/edit.php -->
<h1>Edit Jabatan Pegawai</h1>

<form action="<?= site_url('/jabatanpegawai/update/' . $jabatanpegawai['id']) ?>" method="post">
    <label for="nama_jabatan">Nama Jabatan:</label>
    <input type="text" name="nama_jabatan" id="nama_jabatan" value="<?= $jabatanpegawai['nama_jabatan'] ?>" required>

    <button type="submit">Simpan</button>
</form>
