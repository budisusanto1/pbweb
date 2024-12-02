<main id="main" class="main">
  <div class="pagetitle">
    <h1>Table Barang</h1>
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
              <a href="/home/tambahbarang" class="text-white">Tambah</a>
            </button>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" width="3%">No</th>
                  <th scope="col">Nama Barang</th>
                  <th scope="col">jenis barang</th>
                  <th scope="col">bahan barang</th>
                   <th scope="col">waktu pembuatan</th>
                    <th scope="col">harga barang</th>
                  <th scope="col">Image</th>
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
                    <td><?= $value->nama_barang ?></td>
                    <td><?= $value->jenis_barang ?></td>
                       <td><?= $value->bahan_barang ?></td>
                          <td><?= $value->waktu_pembuatan ?></td>
                    <td><?= $value->harga ?></td>
                    <td><img src="<?= base_url('img/'.$value->img);?>" width="30px"></td>
                    <td>
                      <a href="<?= base_url('Home/edit_barang/'.$value->id_barang)?>" class="btn btn-warning">Edit</a>
                      <a href="<?= base_url('Home/hapus_barang/'.$value->id_barang)?>" class="btn btn-danger">Hapus</a>
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
