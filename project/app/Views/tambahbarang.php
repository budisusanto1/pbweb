<main id="main" class="main">
  <div class="pagetitle">
    <h1>Tambah Barang</h1>
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
        <h2>Form Tambah Barang</h2>
        <form action="<?=base_url('Home/simpan_barang')?>" method="POST" enctype="multipart/form-data">
         <div class="mb-3 mt-3">
          <tr>
        <td>Foto</td>
        <td><input type="file" class="form-control" name="file" accept="img/" required></td>
      </tr>
          </div>
          <div class="mb-3 mt-3">
            <label for="namabarang" class="form-label">Nama Barang:</label>
            <input type="text" class="form-control" id="namabarang" placeholder="Enter nama barang" name="namabarang" 
              value="<?= $chelsica->nama_barang ?>">
          </div>
          <div class="mb-3">
            <label for="jenis" class="form-label">jenis Barang:</label>
            <input type="text" class="form-control" id="jenis_barang" placeholder="Masukkan jenis_barang" name="jenis_barang" 
              value="<?= $chelsica->jenis_barang ?>">
          </div>
          <div class="mb-3">
            <label for="bahan_barang" class="form-label">bahan_barang</label>
            <input type="text" class="form-control" id="bahan_barang" placeholder="Masukkan bahan_barang" name="bahan_barang" 
              value="<?= $chelsica->bahan_barang ?>">
          </div><div class="mb-3">
            <label for="waktu" class="form-label">waktu pembuatan</label>
            <input type="text" class="form-control" id="waktu_pembuatan" placeholder="Masukkan waktu_pembuatan" name="waktu_pembuatan" 
              value="<?= $chelsica->waktu_pembuatan ?>">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">harga</label>
            <input type="text" class="form-control" id="harga" placeholder="Masukkan harga" name="harga" 
              value="<?= $chelsica->harga ?>">
          </div>
          <input type="hidden" value="<?=$chelsica->id_barang?>" name="id">
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Preview Image -->
        <div id="previewContainer" class="mt-3">
          <img id="previewImage" src="" alt="Image Preview" style="display:none; max-width:100%; height:auto;">
        </div>
       </div>
        </div>
      </div>
    </div>
  </div>
  </section>
</main>


<!-- <script>
  document.getElementById('formFile').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function(e) {
        const previewImage = document.getElementById('previewImage');
        previewImage.src = e.target.result; // Set image source to the file data
        previewImage.style.display = 'block'; // Display the image
      };
      reader.readAsDataURL(file); // Convert file to base64 string
    }
  });
</script>
 -->