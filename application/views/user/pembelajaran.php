<!-- Main Content -->
<div id="content">



    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->

        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Pembelajaran Sekolah Antang</h6>
            </div>
            <div class="row">
                <div class="col-lg mt-4">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahPembelajaranModal">
                        Tambah Pembelajaran
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">No</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Judul Materi: activate to sort column ascending" style="width: 61px;">Kelas</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 49px;">Materi</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">Absensi</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">Tugas</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <tr class="odd">
                                            <td class="sorting_1">1</td>
                                            <td>Rumah Tahfidz</td>
                                            <td>Hafalan</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5">
                                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                            </div>
                            <div class="col-sm-12 col-md-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                        <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                        <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                        <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->




<!-- Modal -->
<div class="modal fade" id="TambahPembelajaranModal" tabindex="-1" role="dialog" aria-labelledby="TambahPembelajaranModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TambahPembelajaranModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="NO">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Kelas">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Materi">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Absensi">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="Tugas">
                </div>

            </div>
            <div class=" modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambah Pembelajaran</button>
            </div>
        </div>
    </div>
</div>