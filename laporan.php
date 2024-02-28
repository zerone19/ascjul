<h1 class="mt-4">Laporan Peminjaman Buku</h1>
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-12">
                <a href="cetak.php" target="_blank" class="btn btn-info"><i class="fa fa-print"></i> Cetak Data</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>no</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>tanggal Peminjaman</th>
                        <th>tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT*FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $data['nama_lengkap']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                            <td><?php echo $data['status_peminjaman']; ?></td>

                        <?php
                    }
                        ?>
                </table>
            </div>

        </div>
    </div>
</div>