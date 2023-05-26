<!-- app/Views/pegawai/edit.php -->
<h1>Edit Pegawai</h1>

<form action="<?= site_url('/pegawai/update/' . $pegawai['id']) ?>" method="post">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" value="<?= $pegawai['nama'] ?>" required>

    <label for="jabatan_id">Jabatan:</label>
    <input type="text" name="jabatan_id" id="jabatan_id" value="<?= $pegawai['jabatan_id'] ?>" required>

    <button type="submit">Simpan</button>
</form>
