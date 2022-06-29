<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="post" action="<?= base_url()?>paket_farrel/update_farrel">
                <div class="form-group">
                    <input type="text" name="kode_paket" value="<?= $data_farrel['kode_paket']?>" class="form-control" readonly>
                </div>

                <div class="form-group">
                    <input type="text" name="nama_paket" value="<?= $data_farrel['nama_paket']?>" class="form-control" placeholder="Nama paket" required>
                </div>

                <div class="form-group">
                    <input type="number" name="harga_paket" value="<?= $data_farrel['harga_paket']?>" class="form-control" placeholder="Harga paket" required>
                </div>

                

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url()?>paket_farrel" class="btn btn-danger">Batal</a>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>