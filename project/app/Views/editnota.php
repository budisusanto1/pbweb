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
             <form action="<?=base_url('Home/simpan_nota1')?>" method="POST" enctype="multipart/form-data">
          </div>
          <div class="mb-3 mt-3">
            <label for="tanggal_nota" class="form-label">tanggal_nota:</label>
            <input type="date" class="form-control" id="tanggal_nota" placeholder="Enterid_barang" name="tanggal_nota" 
              value="<?= $chelsica->tanggal_nota ?>">
          </div>
          <div class="mb-3">
            <label for="detail_barang" class="form-label">detail_barang:</label>
            <input type="text" class="form-control" id="detail_barang" placeholder="Masukkan detail_barang" name="detail_barang" 
              value="<?= $chelsica->detail_barang ?>">
          </div>
          <div class="mb-3">
            <label for="total_harga" class="form-label">total_harga</label>
            <input type="text" class="form-control" id="id_nota" placeholder="Masukkan total_harga" name="total_harga" 
              value="<?= $chelsica->total_harga ?>">
          </div><div class="mb-3">
            <label for="metode_pembayaran" class="form-label">metode_pembayaran</label>
            <input type="text" class="form-control" id="metode_pembayaran" placeholder="Masukkan metode_pembayaran" name="metode_pembayaran" 
              value="<?= $chelsica->metode_pembayaran ?>">
          </div>
          <div class="mb-3">
            <label for="status_pembayaran" class="form-label">status_pembayaran</label>
            <input type="text" class="form-control" id="status_pembayaran" placeholder="Masukkan status_pembayaran" name="status_pembayaran" 
              value="<?= $chelsica->status_pembayaran ?>">
          </div>
          <input type="hidden" value="<?=$chelsica->id_nota?>" name="id">
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
