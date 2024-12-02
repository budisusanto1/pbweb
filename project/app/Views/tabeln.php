
            <!DOCTYPE html>
            <html>
            <head>
              <meta charset="utf-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <title>laporan n</title>
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
              <h3 style="margin-top: 10px;">tabel nota</h3>
              <br>
              <table>
                <thead>
                  <tr>
                    <th scope="col" width="3%">No</th>
                    <th scope="col">nomor nota</th>
                    <th scope="col">Total </th>
                    <th scope="col">Tanggal </th>
                    <th scope="col">bayar</th>
                    <th scope="col">Id Pemesana</th>
                    <th scope="col">Kembalian</th>
<!--                     <th scope="col">Image</th>
                    <th scope="col">Action</th> -->
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
                    <td><?= $value->total?></td>
                    <td><?= $value->tanggal ?></td>
                    <td><?= $value->id_pesanan?></td>
                    <td><?= $value->bayar ?></td>
                       <td><?= $value->kembali ?></td>
                  </tr>
                  <?php 
                }
                ?>

                  </tbody>

              </table>
              <script type="text/javascript">
                window.print();
              </script>
            </body>
            </html>