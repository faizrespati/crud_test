<!-- app/Views/kontrak/index.php -->
<h1>Daftar Kontrak</h1>

<a href="<?= site_url('/kontrak/create') ?>">Tambah Kontrak</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Pegawai ID</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kontrak as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['pegawai_id'] ?></td>
                <td><?= $row['tanggal_mulai'] ?></td>
                <td><?= $row['tanggal_selesai'] ?></td>
                <td>
                    <a href="<?= site_url('/kontrak/edit/' . $row['id']) ?>">Edit</a>
                    <a href="<?= site_url('/kontrak/delete/' . $row['id']) ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
