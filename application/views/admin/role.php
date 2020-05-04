<div class="container">
    <div class="row">
        <div class="col-md-6">

            <?= form_error(
                'title',
                '<div class="alert alert-danger alert-dismissible fade show" role="danger">',
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>'
            ); ?>
            <?= form_error(
                'url',
                '<div class="alert alert-danger alert-dismissible fade show" role="danger">',
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>'
            ); ?>
            <?= form_error(
                'icon',
                '<div class="alert alert-danger alert-dismissible fade show" role="danger">',
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>'
            ); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newRoleModal">
                <i class="las la-plus"></i>Tambah submenu baru
            </button>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Role</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($role as $k => $r) : ?>
                    <tr>
                        <th scope="row" class="text-center"><?= ($k + 1); ?></th>
                        <td class="text-center"><?= $r['role']; ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('admin/role_access/' . $r['id']); ?>"><span class="badge badge-success p-2">Access</span></a>
                            <a href="edit_kelola_submenu/<?= $r['id']; ?>"><span class="badge badge-warning p-2">Edit</span></a>
                            <a href="hapus_kelola_submenu/<?= $r['id']; ?>"><span class="badge badge-danger p-2">Hapus</span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Tambah submenu baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul Submenu</label>
                        <input type="text" name="title" id="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="menu_id">Menu</label>
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="">Select Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="form-group">
                            <label for="url">URL / Route</label>
                            <input type="text" name="url" id="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon</label>
                            <input type="text" name="icon" id="icon" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                <label class="form-check-label" for="is_active">
                                    Aktif?
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
            </form>
        </div>
    </div>
</div>