<main id="main" class="main">
  <div class="pagetitle">
    <h1>Table pesanan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Tables</li>
        <li class="breadcrumb-item active">Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <button class="btn btn-success mb-3">
              <a href="/home/tambahpesanan" class="text-white">tambah</a>
            </button>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" width="3%">No</th>
                    <th scope="col">id barang</th>
                  <th scope="col">id_user</th>
                  <th scope="col">id nota</th>
                    <th scope="col">warna</th>
                    <th scope="col">preferensi_tanggal_kirim</th>
                    <th scope="col">jumlah_barang</th>
                    <th scope="col">tanggal_pesanan</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $ms = 1;
                foreach ($chelsica as $key => $value) {
                  ?>
                  <tr>
                    <th scope="row"><?= $ms++ ?></th>
                    <td><?= $value->id_barang ?></td>
                    <td><?= $value->id_user ?></td>
                       <td><?= $value->id_nota ?></td>
                        <td><?= $value->warna ?></td>
                         <td><?= $value->preferensi_tanggal_kirim ?></td>
                          <td><?= $value->jumlah_barang ?></td>
                           <td><?= $value->tanggal_pesanan ?></td>
                    <td><img src="<?= base_url('img/'.$value->img);?>" width="30px"></td>
                    <td>
                      <a href="<?= base_url('Home/edit_pesanan/'.$value->id_pesanan)?>" class="btn btn-warning">Edit</a>
                      <a href="<?= base_url('Home/hapus_pesanan/'.$value->id_pesanan)?>" class="btn btn-danger">Hapus</a>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- Add your form for uploading images here as previously mentioned -->
