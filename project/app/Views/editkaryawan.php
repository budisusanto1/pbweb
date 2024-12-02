 <h2>Form Edit Barang masuk</h2>
<form action="<?=base_url('Home/simpan_karyawan')?>" method="post">
   <div class="mb-3">
     <label for="pwd"class="form-label">nama karyawan </label>
     <input type="text" class="form-control" id="namakaryawan" placeholder="Masukkan nama karyawan" name="namakaryawan" 
      value="<?= $kevinyappp->nama_karyawan ?>">
   </div>
   <div class="mb-3 mt-3">
     <label for="email" class="form-label">email:</label>
     <input type="text" class="form-control" id="username" placeholder="Enter usernama" name="username" 
      value="<?= $kevinyappp->username ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">level</label>
     <input type="number" class="form-control" id="level" placeholder="Masukkan level" name="level" 
      value="<?= $kevinyappp->level ?>">
    </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">nik</label>
     <input type="text" class="form-control" id="nik" placeholder="Masukkan nik" name="nik" 
      value="<?= $kevinyappp->nik ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">tempat lahir</label>
     <input type="text" class="form-control" id="tempatlahir" placeholder="Masukkan tempatlahir" name="tempatlahir" 
      value="<?= $kevinyappp->tempat_lahir ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">tanggal lahir</label>
     <input type="date" class="form-control" id="tempatlahir" placeholder="Masukkan tanggallahir" name="tanggallahir" 
      value="<?= $kevinyappp->tanggal_lahir ?>">
   </div>
   <div class="mb-3">
     <tr>
          <td>Jenis Kelamin</td>
          <td>
            <select class="form-select" name="jeniskelamin">
              <option value="">---Jenis Kelamin---</option>
              <option value="laki-laki" <?= ($kevinyappp->jenis_kelamin == 'laki-laki') ? 'selected' : '' ?>>Laki Laki</option>
              <option value="perempuan" <?= ($kevinyappp->jenis_kelamin == 'perempuan') ? 'selected' : '' ?>>Perempuan</option>
            </select>
          </td>
        </tr>
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">agama </label>
     <input type="text" class="form-control" id="agama" placeholder="Masukkan agama   " name="agama" 
      value="<?= $kevinyappp->agama ?>">
   </div>
<div class="mb-3">
     <label for="pwd"class="form-label">alamat</label>
     <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat   " name="alamat" 
      value="<?= $kevinyappp->alamat ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">jabatan </label>
     <input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan   " name="jabatan" 
      value="<?= $kevinyappp->jabatan ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">nohp </label>
     <input type="text" class="form-control" id="nohp" placeholder="Masukkan nohp   " name="nohp" 
      value="<?= $kevinyappp->no_hp ?>">
   </div>
<tr>
      <td></td>
      <td><input type="hidden" name="id" value="<?= $kevinyappp->id_user ?>">
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= base_url('home/hapus_karyawan/'.$kevinyappp->id_user) ?>" class="btn btn-danger">Hapus </a>
        <!-- <input type="reset" value="reset" class="form-control">
        <input type="button" value="kembali" class="form-control"> -->
      </td>
    </tr>
</form>
