<?php
// Kode PHP untuk file jurnal.php
?>

<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
            <!-- Form jurnal -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <div class="col-md-6">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3" required></textarea>
                </div>
                <div class="col-md-4">
                    <label for="debit_total" class="form-label">Debit total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="debit_total">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="kredit_total" class="form-label">kredit total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="kredit_total">
                    </div>
                </div>
            </div>
            <hr class="text-secondary">
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3>Data Jurnal</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Debit Total</th>
                        <th>Kredit Total</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2024-03-20</td>
                        <td>Keterangan jurnal 1</td>
                        <td>100000</td>
                        <td>50000</td>
                        <td>
                            <a href="#editJurnal" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-03-19</td>
                        <td>Keterangan jurnal 2</td>
                        <td>75000</td>
                        <td>30000</td>
                        <td>
                            <a href="" class="text-decoration-none">
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

<!-- Modal Edit Jurnal -->
<div class="modal fade" id="editJurnal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Jurnal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form edit jurnal -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="edit_debit_total" class="form-label">Debit Total</label>
                            <input type="number" class="form-control" id="edit_debit_total" name="edit_debit_total" required>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_kredit_total" class="form-label">Kredit Total</label>
                            <input type="number" class="form-control" id="edit_kredit_total" name="edit_kredit_total" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>