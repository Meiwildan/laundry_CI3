<div class="container-fluid">

    <?php
        if (!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat</strong> <?= $this->session->flashdata('info') ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    <?php }   
    ?>

    <div class="row">
        <div class="col-md-12">
            <a href="<?= base_url()?>konsumen_farrel/tambah_konsumen" class="btn btn-primary">Tambah Konsumen</a>
        </div>
    </div>
<br>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
                    
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $judul?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode</th>
                                            <th>Nama_Konsumen</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                        $no = 1;    
                                            foreach ($data as $rowfarrel) {?>
                                            <tr>
                                                <td><?= $no++;?> </td>
                                                <td><?= $rowfarrel->kode_konsumen;?></td>
                                                <td><?= $rowfarrel->nama_konsumen;?></td>
                                                <td><?= $rowfarrel->alamat_konsumen;?></td>
                                                <td><?= $rowfarrel->no_telp;?></td>
                                                <td><a href="<?= base_url()?>konsumen_farrel/edit_farrel/<?= $rowfarrel-> kode_konsumen;?>" class="btn btn-success ">Edit</a>
                                                    <a href="<?= base_url()?>konsumen_farrel/delete_farrel/<?= $rowfarrel-> kode_konsumen;?>" class="btn btn-danger ml-2" onclick="return confirm('Hapus Data?')">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>