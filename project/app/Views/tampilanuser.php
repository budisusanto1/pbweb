<main id="main" class="main">
  <div class="pagetitle">
    <h1>Table user</h1>
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
              <a href="/home/tambahuser" class="text-white">Tambah</a>
            </button>
             <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col" width="3%">no</th>
                  <th>username</th>
                  <th>password</th>
                  <th>level</th>
                   <th>aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $ms = 1;
                foreach ($es1 as $key => $value) {
                  ?>
                  <tr>
                    <th scope="row"><?= $ms++ ?></th>
                    <td><?= $value->username ?></td>
                    <td><?= $value->password ?></td>
                    <td><?= $value->level ?></td>
                    <td>
                      <a href="<?= base_url('Home/edit_user/'.$value->id_user)?>" class="btn btn-warning">Edit</a>
                      <a href="<?= base_url('Home/hapus_user/'.$value->id_user)?>" class="btn btn-danger">Hapus</a>
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
