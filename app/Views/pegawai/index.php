<!-- app/Views/pegawai/index.php -->
<h1>Daftar Pegawai</h1>

<a href="<?= site_url('/pegawai/create') ?>">Tambah Pegawai</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pegawai as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['jabatan_id'] ?></td>
                <td>
                    <a href="<?= site_url('/pegawai/edit/' . $row['id']) ?>">Edit</a>
                    <a href="<?= site_url('/pegawai/delete/' . $row['id']) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
