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
            <h2>Form Edit Barang</h2>
<form action="<?=base_url('Home/simpan_barang1')?>" method="post">
  <!-- <form action="<?=base_url('Home/inputbarang')?>" method="Post"> -->
   <div class="mb-3 mt-3">
     <label for="email" class="form-label">Nama Barang:</label>
     <input type="text" class="form-control" id="namabarang" placeholder="Enter nama barang" name="namabarang" 
      value="<?= $chelsica->nama_barang ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">jenis barang:</label>
     <input type="text" class="form-control" id="jenis_barang" placeholder="Masukkan jenis_barang" name="jenis_barang" 
      value="<?= $chelsica->jenis_barang ?>">
   </div>
    <div class="mb-3">
     <label for="pwd"class="form-label">bahan</label>
     <input type="text" class="form-control" id="bahan_barang" placeholder="Masukkan bahan_barang" name="bahan_barang" 
      value="<?= $chelsica->bahan_barang ?>">
   </div>
    <div class="mb-3">
            <label for="waktu" class="form-label">waktu pembuatan</label>
            <input type="text" class="form-control" id="waktu_pembuatan" placeholder="Masukkan waktu_pembuatan" name="waktu_pembuatan" 
              value="<?= $chelsica->waktu_pembuatan ?>">
          </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">harga</label>
     <input type="text" class="form-control" id="harga" placeholder="Masukkan harga" name="harga" 
      value="<?= $chelsica->harga ?>">
   </div>
   <input type="hidden" value="<?=$chelsica->id_barang?>" name="id">
   <button type="submit" class="btn btn-primary">Submit</button> 
</form> </div>
        </div>
      </div>
    </div>
  </section>
</main>