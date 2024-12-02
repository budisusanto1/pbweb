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
            <!DOCTYPE html>
            <html>
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>laporan bk </title>
              <style type="text/css">
                table,
                th,
                td{
                  border:1px solid black;
                  border-collapse: collapse;
                  font-family: sans-serif;
                  padding: 5px;
                }
              </style>
            </head>
            <body>
              <h3 style="margin-top: 10px;">tabel bm</h3>
              <br>
              <table>
                <thead>
                  <tr>
                    <th scope="col" width="3%">No</th>
                    <th scope="col">id barang</th>
                    <th scope="col">id user</th>
                    <th scope="col">id nota</th>
                    <th scope="col">warna</th>
                    <th scope="col">preferensi tanggal kirim</th>
                    <th scope="col">jumlah barang</th>
                    <th scope="col">tanggal pesanan</th>
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
                  </tbody>
                  <?php 
                }
                ?>
              </table>
              <script type="text/javascript">
                window.print();
              </script>
            </body>
            </html>