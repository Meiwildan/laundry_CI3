<div class="container-fluid">

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
                                            <th>Tanggal Masuk</th>
                                            <th>Kode Transaksi</th>
                                            <th>Konsumen</th>
                                            <th>Paket</th>
                                            <th>Berat (Kg)</th>
                                            <th>Grand Total</th>
                                            <th>Tanggal Ambil</th>
                                            <th>Status Bayar</th>
                                            <th>Status</th>
                                            <!-- <th>Aksi</th> -->
                                        </tr>
                                    </thead>

                                    <tbody>
                                       <?php
                                       $no = 1;
                                            foreach($data_farrel as $row_farrel) {?>
                                            <tr>
                                                <td><?= $no++;?></td>
                                                <td><?= $row_farrel->tgl_masuk;?></td>
                                                <td><?= $row_farrel->kode_transaksi;?></td>
                                                <td><?= $row_farrel->nama_konsumen;?></td>
                                                <td><?= $row_farrel->nama_paket;?></td>
                                                <td><?= $row_farrel->berat;?></td>
                                                <td><?= "Rp. ".number_format($row_farrel->grand_total,0,',','.')?></td>
                                                <td><?= $row_farrel->tgl_ambil;?></td>
                                                <td><?= $row_farrel->bayar;?></td>
                                                <td><?= $row_farrel->status;?></td>
                                                
                                                <!-- <a href="<?= base_url()?>transaksi_farrel/detail_farrel/<?= $row_farrel-> kode_transaksi;?>" class="btn btn-sm btn-primary ">Detail</a> -->
                                                <!-- <a href="<?= base_url()?>transaksi_farrel/edit_farrel/<?= $row_farrel-> kode_transaksi;?>" class="btn btn-sm btn-success ml-2 ">Edit</a> -->
                                                    <!-- <a href="<?= base_url()?>transaksi_farrel/delete_farrel/<?= $row_farrel-> kode_transaksi;?>" class="btn btn-sm btn-danger mt-2" onclick="return confirm('Hapus Data?')">Hapus</a> -->
                                                
                                            </tr>
                                            <?php }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>