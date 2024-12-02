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
              <a href="/home/tkr" class="text-white">Tambah</a>
            </button>
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" width="3%">no</th>
                  <th>nama karyawan</th>
                  <th>nik</th>
                  <th>email</th>
                  <th>level</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $ms = 1;
                foreach ($kevinyappp as $key => $value) {
                  ?>
                  <tr>
                    <th scope="row"><?= $ms++ ?></th>
                    <td><?= $value->nama_karyawan ?></td>
                    <td><?= $value->nik ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->level ?></td>

                     <td>
                     <a href="<?=base_url('home/edit_karyawan/'.$value->id_user)?>"class="btn btn-danger" ><i class="fas fa-info-circle"></i>detail</a>
                   </td>

                 </tr>
               <?php } ?>
             </tbody>
           </table>
           <!-- End Table with stripped rows -->

         </div>
       </div>
     </div>
   </div>
 </section>

</main><!-- End #main -->
