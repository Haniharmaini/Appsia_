<?php
include "koneksi.php";

// Memeriksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama = $_POST["nama"];
    $stok = $_POST["stok"];
    $hargabeli = $_POST["hargabeli"];
    $hargajual = $_POST["hargajual"];

    // Mengeksekusi query INSERT untuk menyimpan data ke dalam tabel Barang
    $sql = "INSERT INTO barang (nama_barang, stok, harga_beli, harga_jual) VALUES ('$nama', $stok, $hargabeli, $hargajual)";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }
}

// Mengambil data dari tabel Barang
$sql = "SELECT * FROM Barang";
$result = $conn->query($sql);
?>
<div class="card mb-3">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="hargabeli" class="form-label">Harga beli</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="hargabeli">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="hargajual" class="form-label">Harga jual</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="hargajual">
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
        <h3>Daftar Data</h3>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga beli</th>
                    <th scope="col">Harga jual</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $row["barang_id"]; ?></th>
                            <td><?php echo $row["nama_barang"]; ?></td>
                            <td><?php echo $row["harga_beli"]; ?></td>
                            <td><?php echo $row["harga_jual"]; ?></td>
                            <td><?php echo $row["stok"]; ?></td>
                            <td>
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#editBarang">
                                    <i class="bi bi-pencil-square text-success"></i>
                                </a>
                                <a href="#" class="text-decoration-none">
                                    <i class="bi bi-trash text-danger"></i>
                                </a>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</div>

    <!-- Modal edit data -->
    <div class="modal fade" id="editBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="" method="post">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Barang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="editNama">
                                </div>
                                <div class="col-md-6">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input type="number" class="form-control" name="stok" id="editStok">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="hargabeli" class="form-label">Harga beli</label>
                                    <input type="text" class="form-control" name="hargabeli" id="editHargaBeli">
                                </div>
                                <div class="col-md-6">
                                    <label for="hargajual" class="form-label">Harga jual</label>
                                    <input type="text" class="form-control" name="hargajual" id="editHargaJual">
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
    </div>

