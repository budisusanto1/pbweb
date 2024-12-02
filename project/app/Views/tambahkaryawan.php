 <h2>Form Edit Barang masuk</h2>
<form action="<?=base_url('Home/simpan_karyawan1')?>" method="post">
      <div class="mb-3">
     <label for="pwd"class="form-label">id user:</label>
     <input type="text" class="form-control" id="iduser" placeholder="Masukkan iduser" name="iduser" 
      value="<?= $kevinyappp->id_user ?>">
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">nama karyawan </label>
     <input type="text" class="form-control" id="namakaryawan" placeholder="Masukkan nama karyawan" name="namakaryawan" 
      value="<?= $kevinyappp->nama_karyawan ?>">
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
     <label for="pwd"class="form-label">jeniskelamin </label>
     <input type="text" class="form-control" id="jeniskelamin" placeholder="Masukkan jeniskelamin" name="jeniskelamin" 
      value="<?= $kevinyappp->jenis_kelamin ?>">
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
   <input type="hidden" value="<?=$kevinyappp->id_karyawan?>" name="id">
   <button type="submit" class="btn btn-primary">Submit</button> 
</form>