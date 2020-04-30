<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?= form_error('nama_menu', '<div class="alert alert-danger" role="danger">', '</div>'); ?>
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <form action="" method="POST">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <input type="text" class="form-control" id="nama-menu" name="nama_menu" placeholder="Tambah menu...">
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary">Tambah menu</button>
            </div>
        </div>
    </form>

    <table class="table table-hover mt-2">
        <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">Menu</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu as $k => $m) : ?>
                <tr>
                    <th scope="row" class="text-center"><?= ($k + 1); ?></th>
                    <td class="text-center"><?= $m['menu']; ?></td>
                    <td class="text-center">
                        <a href="edit_kelola_menu/<?= $m['id']; ?>"><span class="badge badge-warning p-2">Edit</span></a>
                        <a href="hapus_kelola_menu/<?= $m['id']; ?>"><span class="badge badge-danger p-2">Hapus</span></a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
</div>

</div>