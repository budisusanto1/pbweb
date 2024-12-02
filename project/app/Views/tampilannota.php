<main id="main" class="main">
  <div class="pagetitle">
    <h1>Table nota</h1>
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
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" width="3%">No</th>
                  <th scope="col">nomor_nota</th>
                  <th scope="col">total</th>
                  <th scope="col">tanggal</th>
                  <th scope="col">id_pemesanan</th>
                  <th scope="col">bayar</th>
                  <th scope="col">kembali</th>
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
                    <td><?= $value->nomor_nota ?></td>
                    <td><?= $value->total ?></td>
                    <td><?= $value->tanggal ?></td>
                    <td><?= $value->id_pesanan ?></td>
                    <td><?= $value->bayar ?></td>
                     <td><?= $value->kembali ?></td>
                    <!-- <td><img src="<?= base_url('img/'.$value->img);?>" width="30px"></td>
                  </tr> -->
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
