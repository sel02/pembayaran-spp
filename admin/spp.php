<h5>Halaman Data SPP.</h5>
<a href="?url=tambah-spp" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i> Tambah SPP </a>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<hr>
<table class=" table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>Tahun</td>
        <td>Nominal</td>
        <td>Edit</td>
        <td>Hapus</td>
    </tr>
    <?php
    include'../koneksi.php';
    $no = 1;
    $sql = "SELECT*FROM spp ORDER BY id_spp DESC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data){ ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= $data['nominal'] ?></td>
            <td>
                <a href="?url=edit-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-warning'><i class="bi bi-pen-fill"></i></a>
            </td>
            <td>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data')" href="?
                url=hapus-spp&id_spp=<?= $data['id_spp'] ?>" class='btn btn-danger'><i class="bi bi-trash"></i></a>
            </td>
        </tr>
    <?php } ?>

</table>