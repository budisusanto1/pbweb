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
          <div class="card-body"> <div class="mb-3 mt-3">
             <form action="<?=base_url('Home/simpan_pesanan')?>" method="POST" enctype="multipart/form-data">
          </div>
          <div class="mb-3 mt-3">
            <label for="id_barang" class="form-label">id Barang:</label>
            <input type="text" class="form-control" id="id_barang" placeholder="Enterid_barang" name="id_barang" 
              value="<?= $chelsica->id_barang ?>">
          </div>
          <div class="mb-3">
            <label for="id_user" class="form-label">id_user:</label>
            <input type="text" class="form-control" id="id_user" placeholder="Masukkan id_user" name="id_user" 
              value="<?= $chelsica->id_user ?>">
          </div>
          <div class="mb-3">
            <label for="id_nota" class="form-label">id_nota</label>
            <input type="text" class="form-control" id="id_nota" placeholder="Masukkan id_nota" name="id_nota" 
              value="<?= $chelsica->id_nota ?>">
          </div><div class="mb-3">
            <label for="warna" class="form-label">warna</label>
            <input type="text" class="form-control" id="warna" placeholder="Masukkan warna" name="warna" 
              value="<?= $chelsica->warna ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">preferensi_tanggal_kirim</label>
            <input type="date" class="form-control" id="preferensi_tanggal_kirim" placeholder="Masukkan preferensi_tanggal_kirim" name="preferensi_tanggal_kirim" 
              value="<?= $chelsica->preferensi_tanggal_kirim ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">jumlah_barang</label>
            <input type="text" class="form-control" id="jumlah_barang" placeholder="Masukkan jumlah_barang" name="jumlah_barang" 
              value="<?= $chelsica->jumlah_barang ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">tanggal_pesanan</label>
            <input type="date" class="form-control" id="tanggal_pesanan" placeholder="Masukkan tanggal_pesanan" name="tanggal_pesanan" 
              value="<?= $chelsica->jumlah_barang ?>">
          </div>
          <input type="hidden" value="<?=$chelsica->id_pesanan?>" name="id">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Preview Image -->
        
       </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</main>
