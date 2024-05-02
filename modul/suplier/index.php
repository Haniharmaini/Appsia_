<div class="card mb-3">
    <div class="card-body">
        <form action="/proses_form_suplier" method="post" id="formSuplier">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama_suplier" class="form-label">Nama Suplier</label>
                    <input type="text" class="form-control" name="nama_suplier" id="nama_suplier">
                </div>
                <div class="col-md-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="telp" class="form-label">Telp</label>
                    <input type="text" class="form-control" name="telp" id="telp">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col text-end">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3>Data Suplier</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Suplier</th>
                        <th>Alamat</th>
                        <th>Telp</th>
                        <th>Email</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PT. ABC</td>
                        <td>Jl. ABC</td>
                        <td>08123456789</td>
                        <td>ok5Zt@example.com</td>
                        <td>
                            <a href="#editSuplier" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PT. XYZ</td>
                        <td>Jl. XYZ</td>
                        <td>08123456789</td>
                        <td>ok5Zt@example.com</td>
                        <td>
                            <a href="#editSuplier" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editSuplier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Suplier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/proses_edit_suplier" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="nama_suplier">Nama Suplier</label>
                        <input type="text" class="form-control" name="nama_suplier" id="nama_suplier" value="PT. ABC">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="Jl. ABC">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="telp">Telp</label>
                        <input type="text" class="form-control" name="telp" id="telp" value="08123456789">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email" value="ok5Zt@example.com">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>