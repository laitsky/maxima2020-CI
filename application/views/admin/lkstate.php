<div class="container-fluid">
    <!-- Button trigger modal -->
    <div class="row">
        <div class="col-md-6">
        <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Truncate tabel LK STATE 2020
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Perhatian!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah kamu yakin ingin melakukan proses truncate pada tabel Form List Kebutuhan STATE 2020?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <a href="truncate_lkstate" class="btn btn-primary">Ya, lanjutkan</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>