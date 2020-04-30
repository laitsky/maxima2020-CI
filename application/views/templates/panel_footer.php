            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Malam Ekspresi Mahasiswa 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="las la-arrow-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik tombol keluar di bawah jika kamu ingin mengakhiri sesi ini.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Keluar</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="https://code.jquery.com/jquery-3.5.0.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            <script src="https:////cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js" crossorigin="anonymous"></script>
            <!-- Core plugin JavaScript-->
            <script src="<?= base_url('assets/js/jquery.easing.min.js'); ?>"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

            <script>
                $(document).ready(function() {
                    $('#tbl-list-kebutuhan').DataTable({
                        dom: 'Bfrtip',
                        columnDefs: [
                            {
                            targets: 1,
                            className: 'noVis'
                            }
                        ],
                        buttons: [
                            {
                                extend: 'colvis',
                                columns: ':not(.noVis)'
                            },
                            {
                                extend: 'copy',
                                title: 'Daftar Kebutuhan Organisator STATE MAXIMA 2020'
                            },
                            {
                                extend: 'csv',
                                title: 'Daftar Kebutuhan Organisator STATE MAXIMA 2020'
                            },
                            {
                                extend: 'excel',
                                title: 'Daftar Kebutuhan Organisator STATE MAXIMA 2020'
                            },
                            {
                                extend: 'pdf',
                                title: 'Daftar Kebutuhan Organisator STATE MAXIMA 2020'
                            },
                            {
                                extend: 'print',
                                title: 'Daftar Kebutuhan Organisator STATE MAXIMA 2020'
                            },
                        ]
                    });
                });
            </script>

            </body>

            </html>