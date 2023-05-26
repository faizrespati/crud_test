<!-- app/Views/jabatanpegawai/index.php -->
<h1>Daftar Jabatan Pegawai</h1>

<a href="<?= site_url('/jabatanpegawai/create') ?>">Tambah Jabatan Pegawai</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($jabatanpegawai as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama_jabatan'] ?></td>
                <td>
                    <a href="<?= site_url('/jabatanpegawai/edit/' . $row['id']) ?>">Edit</a>
                    <a href="<?= site_url('/jabatanpegawai/delete/' . $row['id']) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
