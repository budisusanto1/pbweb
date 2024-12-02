 <h2>Form input  karyawan</h2>
<form action="<?=base_url('Home/aksi_tkr')?>" method="post">
   <div class="mb-3 mt-3">
     <label for="email" class="form-label">username:</label>
     <input type="text" class="form-control" id="username" placeholder="Enter usernama" name="username" 
      >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">password:</label>
     <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" 
      >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">level</label>
     <input type="number" class="form-control" id="level" placeholder="Masukkan level" name="level" 
      >
    </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">nama karyawan </label>
     <input type="text" class="form-control" id="namakaryawan" placeholder="Masukkan nama karyawan" name="namakaryawan" 
      >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">nik</label>
     <input type="text" class="form-control" id="nik" placeholder="Masukkan nik" name="nik" 
      >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">tempat lahir</label>
     <input type="text" class="form-control" id="tempatlahir" placeholder="Masukkan tempatlahir" name="tempatlahir" 
      >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">tanggal lahir</label>
     <input type="date" class="form-control" id="tanggallahir" placeholder="Masukkan tanggallahir" name="tanggallahir" 
      >
   </div>
   <div class="mb-3">
   <tr>
        <td>Jenis Kelamin</td>
          <td>
            <select class="form-select" name="jeniskelamin">
              <option value="">---Jenis Kelamin---</option>
              <option value="laki-laki" >laki-laki</option>
              <option value="perempuan" >perempuan</option>
            </select>
          </td>
        </tr>
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">alamat</label>
     <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat   " name="alamat" 
      >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">nohp </label>
     <input type="text" class="form-control" id="nohp" placeholder="Masukkan nohp   " name="nohp" 
     >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">agama </label>
     <input type="text" class="form-control" id="agama" placeholder="Masukkan agama   " name="agama" 
     >
   </div>
   <div class="mb-3">
     <label for="pwd"class="form-label">jabatan </label>
     <input type="text" class="form-control" id="jabatan" placeholder="Masukkan jabatan   " name="jabatan" 
     >
   </div>
   <button type="submit" class="btn btn-primary">Submit</button> 
</form>