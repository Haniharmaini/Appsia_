<?php
// Kode PHP untuk file profile.php
?>

<div class="card">
    <div class="card-header">
        <h3>Profil Pengguna</h3>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="Nama Pengguna">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="email@example.com">
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label">No. Telepon</label>
                <input type="tel" class="form-control" id="telepon" name="telepon" value="08123456789">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>