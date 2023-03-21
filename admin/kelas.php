<h5>Halaman Data Kelas.</h5>
<a href="?url=tambah-kelas" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Tambah kelas </a>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Nama Kelas</td>
        <td>Kompetensi Keahlian</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM kelas ORDER BY id_kelas DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach ($query as $data) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nama_kelas'] ?></td>
            <td><?= $data['kompetensi_keahlian'] ?></td>
            <td>
                <a href="?url=edit-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-warning'><i class="bi bi-pen-fill"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?
                url=hapus-kelas&id_kelas=<?= $data['id_kelas'] ?>" class='btn btn-danger'><i class="bi bi-trash"></i></a>
            </td>
        </tr>
    <?php } ?>

</table>