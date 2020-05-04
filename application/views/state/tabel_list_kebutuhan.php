<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List Kebutuhan Organisator STATE 2020</h1>
    <div class="table-responsive">
    <table id="tbl-list-kebutuhan" class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama UKM</th>
                <th scope="col">Nama PJ</th>
                <th scope="col">Contact PJ</th>
                <th scope="col">Deskripsi Kegiatan</th>
                <th scope="col">Waktu (jam)</th>
                <th scope="col">Ruangan</th>
                <th scope="col">Kuota Peserta</th>
                <th scope="col">Jumlah Meja</th>
                <th scope="col">Jumlah Kursi</th>
                <th scope="col">Jumlah Kabel Roll</th>
                <th scope="col">Jumlah Microphone</th>
                <th scope="col">Jumlah Sound System</th>
                <th scope="col">Jumlah Layar</th>
                <th scope="col">Jumlah Proyektor</th>
                <th scope="col">Jumlah PC</th>
                <th scope="col">Perlengkapan Peserta STATE 2020</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($list_kebutuhan as $keys=>$lk): ?>
                <tr>
                    <th scope="row"><?= ($keys+1); ?></th>
                    <td><?= $lk['nama_ukm']; ?></td>
                    <td><?= $lk['nama_pj']; ?></td>
                    <td><?= $lk['contact_pj']; ?></td>
                    <td><?= $lk['deskripsi_kegiatan']; ?></td>
                    <td><?= $lk['waktu']; ?></td>
                    <td><?= $lk['ruangan']; ?></td>
                    <td><?= $lk['kuota_peserta']; ?></td>
                    <td><?= $lk['jml_meja']; ?></td>
                    <td><?= $lk['jml_kursi']; ?></td>
                    <td><?= $lk['jml_kabelroll']; ?></td>
                    <td><?= $lk['jml_mic']; ?></td>
                    <td><?= $lk['jml_soundsystem']; ?></td>
                    <td><?= $lk['jml_layar']; ?></td>
                    <td><?= $lk['jml_proyektor']; ?></td>
                    <td><?= $lk['jml_pc']; ?></td>
                    <td><?= $lk['perlengkapan_peserta']; ?></td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->