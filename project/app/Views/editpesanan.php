 <main id="main" class="main">
  <div class="pagetitle">
    <h1>edit user</h1>
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
            <h2>Form Edit user</h2>
            <form action="<?=base_url('Home/simpan_pesanan1')?>" method="post">
              <!-- <form action="<?=base_url('Home/inputuser')?>" method="Post"> -->
                <div class="mb-3">
                 <label for="pwd"class="form-label">id barang:</label>
                 <input type="text" class="form-control" id="id_barang" placeholder="Masukkan id_barang" name="id_barang" 
                 value="<?= $es1->id_barang?>">
               </div>

               <div class="mb-3">
                 <label for="pwd"class="form-label">id_user</label>
                 <input type="id_user" class="form-control" id="id_user" placeholder="Masukkan id_user" name="id_user" 
                 value="<?= $es1->id_user ?>">
               </div>
               <div class="mb-3">
                 <label for="pwd"class="form-label">id_nota</label>
                 <input type="number" class="form-control" id="id_nota" placeholder="Masukkan id_nota  " name="id_nota" 
                 value="<?= $es1->id_nota ?>">
               </div>
               <div class="mb-3">
                 <label for="pwd"class="form-label">warna</label>
                 <input type="text" class="form-control" id="warna" placeholder="Masukkan warna  " name="warna" 
                 value="<?= $es1->warna ?>">
               </div>
               <div class="mb-3">
                 <label for="pwd"class="form-label">preferensi_tanggal_kirim</label>
                 <input type="date" class="form-control" id="id_nota" placeholder="Masukkan preferensi_tanggal_kirim  " name="preferensi_tanggal_kirim" 
                 value="<?= $es1->preferensi_tanggal_kirim ?>">
               </div>
             </div><div class="mb-3">
               <label for="pwd"class="form-label">jumlah_barang</label>
               <input type="number" class="form-control" id="jumlah_barang" placeholder="Masukkan jumlah_barang  " name="jumlah_barang" 
               value="<?= $es1->jumlah_barang ?>">
             </div>
             <div class="mb-3">
               <label for="pwd"class="form-label">tanggal_pesanan</label>
               <input type="date" class="form-control" id="tanggal_pesanan" placeholder="Masukkan tanggal_pesanan  " name="tanggal_pesanan" 
               value="<?= $es1->jumlah_barang ?>">
             </div>
             <input type="hidden" value="<?=$es1->id_pesanan?>" name="id">
             <button type="submit" class="btn btn-primary">Submit</button> 
           </form>
         </div>
       </div>
     </div>
   </div>
 </section>
</main>