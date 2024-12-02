<?php

namespace App\Controllers;
use App\Models\M_belajar;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function login()
	{
		echo view('login');
	}
	public function register()
	{
		echo view('register');
	}
	public function editprofile()
	{
		
		echo view ('users-profile');
		
	}
	public function aksi_register()
	{
		
		$b=$this->request->getPost('username');
		$c=$this->request->getPost('password');
		$d=$this->request->getPost('level');
		$Joyce= new M_belajar();
		$data = array(
			"username"=>$b,
			"password"=>MD5($c),
			"level"=>$d
		);
		$Joyce->input('user',$data);
		$cek = $Joyce->getWhere('user', $data);
		if ($cek != null) {
			session()->set('id', $cek->id_user);
			session()->set('u', $cek->username);
			session()->set('level', $cek->level);

			//penulisan kode array isinya pakai $cek[isinya]//
			return redirect ()->to('home/dashboard');
		}else{
			return redirect ()->to('home/login');
		}
	}
	public function aksi_login()
	{
		$a=$this-> request->getPost('email');
		$b=$this-> request->getPost('pswd');

		$sim= new M_belajar;
		$chelsia= array('username'=> $a,'password'=>MD5($b),);
		$cek = $sim->getWhere('user',$chelsia);
		if ($cek != null) {
			session()->set('id',$cek->id_user);
			session()->set('u',$cek->username);
			session()->set('level',$cek->level);
			return redirect()->to('home/dashboard');
		}else{
			return redirect()->to('home/login');
		}}
		public function logout()
		{
			session()->destroy();
			return redirect()->to('home/login');
		}
		public function dashboard()
		{if(session()->get('id')>0){
			echo view('header');
			echo view('dashboard');
			echo view('menu');
			echo view('footer');
		}else{
			return redirect()->to('home');
		}	 
	}
	public function barang2()
	{ if(session()->get('id')>0){
		$Sim = new M_belajar;
		$where=('id_barang');
		$chichi['chelsica']=$Sim->tampil('barang',$where);
		echo view ('header');
		echo view('menu');
		echo view('tampilanbarang',$chichi);
		echo view ('footer');
	}else if(session()->get('level')>0){
		return redirect()->to('/error');
	}else{
		return redirect()->to('home/login');
	}	} 
	public function user1()
	{
		if (session()->get('id') > 0) {
			$Sim = new M_belajar;
			$where = ('id_user');
			$chichi['es1'] = $Sim->tampil('user', $where);
			echo view('header');
			echo view('menu');
			echo view('tampilanuser', $chichi);
			echo view('footer');
		} else if (session()->get('level') > 0) {
			return redirect()->to('/error');
		} else {
			return redirect()->to('home/login');
		}
	}
	public function edit_barang($id)
	{
		$Sim= new M_belajar;
		$wece = array('id_barang' => $id );
		$chichi['chelsica']=$Sim->getWhere('barang', $wece);
		echo view('header');
		echo view('menu');
		echo view('editbrg', $chichi); 
		echo view('footer');
	}
	public function hapus_barang($id)
	{
		$Sim = new M_belajar;
		$wece=  array('id_barang' => $id );
		$chichi['chelsica']=$Sim->hapus('barang',$wece);
		return redirect ()->to('home/barang2');
	}
	public function simpan_barang()
	{

		$a=$this->request->getPost('namabarang');
		$b=$this->request->getPost('jenis_barang');
		$c=$this->request->getPost('bahan_barang');
		$d=$this->request->getPost('waktu_pembuatan');
		$e=$this->request->getPost('harga');
		$f=$this->request->getPost('file');
		// $id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_barang' =>$id);
		$data = array(
			"nama_barang"=>$a,
			"jenis_barang"=>$b,
			"bahan_barang"=>$c,
			"waktu_pembuatan"=>$d,
			"harga"=>$e,
			"img"=>$f
		);    $file = $_FILES["file"];
		$validExtensions = ["jpg", "png", "jpeg"];
		$extension = pathinfo($file["name"], PATHINFO_EXTENSION);
		$timestamp = time(); 
		$newFileName = $timestamp . "_" . $file["name"]; 
		move_uploaded_file($file["tmp_name"], "img/" . $newFileName);
		$data['img'] = $newFileName; 

		$Sim = new M_belajar();
		$Sim->input('barang', $data,$wece);
		return redirect()->to('/home/barang2');
	}
	public function simpan_barang1()
	{
		
		$a=$this->request->getPost('namabarang');
		$b=$this->request->getPost('jenis_barang');
		$c=$this->request->getPost('bahan_barang');
		$d=$this->request->getPost('waktu_pembuatan');
		$e=$this->request->getPost('harga');
		
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_barang' =>$id);
		$data = array(
			"nama_barang"=>$a,
			"jenis_barang"=>$b,
			"bahan_barang"=>$c,
			"waktu_pembuatan"=>$d,
			"harga"=>$e

		);
		$Sim->edit('barang',$data,$wece);
		return redirect ()->to('home/barang2');
	}
	// public function inputbarang()
	// {
	// 	$Sim2 = new M_belajar;
	// 	$a=$this->request->getPost('namabarang');
	// 	$b=$this->request->getPost('jenis_barang');
	// 	$c=$this->request->getPost('bahan_barang');
	// 	$d=$this->request->getPost('waktu_pembuatan');
	// 	$e=$this->request->getPost('harga');

	// 	$Sim2= new M_belajar;
	// 	$data = array("nama_barang"=>$a,
	// 		"jenis_barang"=>$b,
	// 		"bahan_barang"=>$c,
	// 		"waktu_pembuatan"=>$d,
	// 		"harga"=>$e
	// 			);
	// 	$Sim2->input('barang',$data);
	// 	return redirect ()->to('home/barang2');
	// }
	public function tambahbarang()
	{
		echo view ('header');
		echo view ('tambahbarang');
		echo view ('footer');
	}
	public function tambahpesanan()
	{
		echo view ('header');
		echo view ('tambahpesanan');
		echo view ('footer');
	}
	public function tambahuser()
	{
		echo view ('header');
		echo view ('tambahuser');
		echo view ('footer');
	}public function tambahnota()
	{
		echo view ('header');
		echo view ('tambahnota');
		echo view ('footer');
	}
	public function edit_user($id)
	{
		$Sim= new M_belajar;
		$wece = array('id_user' => $id );
		$chichi['es1']=$Sim->getWhere('user', $wece);
		echo view('header');
		echo view('menu');
		echo view('edituser', $chichi); 
		echo view('footer');
	}
	public function hapus_user($id)
	{
		$Sim = new M_belajar;
		$wece=  array('id_user' => $id );
		$chichi['es1']=$Sim->hapus('user',$wece);
		return redirect ()->to('home/user1');
	}
	public function simpan_user()
	{

		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');
		$c=$this->request->getPost('level');
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_user' =>$id);
		$data = array(
			"username"=>$a,
			"password"=>MD5($b),
			"level"=>$c
		);
		$Sim->input('user',$data,$wece);
		return redirect ()->to('home/user1');
	}
	public function simpan_user1()
	{

		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');
		$c=$this->request->getPost('level');
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_user' =>$id);
		$data = array(
			"username"=>$a,
			"password"=>$b,
			"level"=>$c
		);
		$Sim->edit('user',$data,$wece);
		return redirect ()->to('home/user1');
	}
	public function tabelb()
	{
		$kevin = new M_belajar;
		$a=$this->request->getPost('tanggalawal');
		$b=$this->request->getPost('tanggalakhir');
		$yap['ss']=$kevin->filter('barang','pesanan','barang.id_barang=pesanan.id_barang',$a,$b);
		echo view('tabelb',$yap);

	}
	public function lb()
	{
		echo view ('header');
		echo view('menu');
		echo view ('lb');
		echo view ('footer');
	}
		public function lp()
	{
		echo view ('header');
		echo view('menu');
		echo view ('lp');
		echo view ('footer');
	}
		public function ln()
	{
		echo view ('header');
		echo view('menu');
		echo view ('ln');
		echo view ('footer');
	}
	public function pesanan2()
	{ if(session()->get('id')>0){
		$Sim = new M_belajar;
		$where=('id_pesanan');
		$chichi['chelsica']=$Sim->tampil('pesanan',$where);
		echo view ('header');
		echo view('menu');
		echo view('tampilanpesanan',$chichi);
		echo view ('footer');
	}else if(session()->get('level')>0){
		return redirect()->to('/error');
	}else{
		return redirect()->to('home/login');
	}	} 
	public function simpan_pesanan()
	{
		
		$a=$this->request->getPost('id_barang');
		$b=$this->request->getPost('id_user');
		$c=$this->request->getPost('id_nota');
		$d=$this->request->getPost('warna');
		$e=$this->request->getPost('preferensi_tanggal_kirim');
		$f=$this->request->getPost('jumlah_barang');
		$g=$this->request->getPost('tanggal_pesanan');
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_pesanan' =>$id);
		$data = array(
			"id_barang"=>$a,
			"id_user"=>$b,
			"id_nota"=>$c,
			"warna"=>$d,
			"preferensi_tanggal_kirim"=>$e,
			"jumlah_barang"=>$f,
			"tanggal_pesanan"=>$g



		);
		$Sim->input('pesanan',$data,$wece);
		return redirect ()->to('home/pesanan2');
	}
	public function hapus_pesanan($id)
	{
		$Sim = new M_belajar;
		$wece=  array('id_pesanan' => $id );
		$chichi['chelsica']=$Sim->hapus('pesanan',$wece);
		return redirect ()->to('home/pesanan2');
	}
	public function edit_pesanan($id)
	{
		$Sim= new M_belajar;
		$wece = array('id_pesanan' => $id );
		$chichi['es1']=$Sim->getWhere('pesanan', $wece);
		echo view('header');
		echo view('menu');
		echo view('editpesanan', $chichi); 
		echo view('footer');
	}
	public function simpan_pesanan1()
	{
		
		$a=$this->request->getPost('id_barang');
		$b=$this->request->getPost('id_user');
		$c=$this->request->getPost('id_nota');
		$d=$this->request->getPost('warna');
		$e=$this->request->getPost('preferensi_tanggal_kirim');
		$f=$this->request->getPost('jumlah_barang');
		$g=$this->request->getPost('tanggal_pesanan');
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_pesanan' =>$id);
		$data = array(
			"id_barang"=>$a,
			"id_user"=>$b,
			"id_nota"=>$c,
			"warna"=>$d,
			"preferensi_tanggal_kirim"=>$e,
			"jumlah_barang"=>$f,
			"tanggal_pesanan"=>$g
		);
		$Sim->edit('pesanan',$data,$wece);
		return redirect ()->to('home/pesanan2');
	}
	public function tabelp()
	{
		$kevin = new M_belajar;
		$a=$this->request->getPost('tanggalawal');
		$b=$this->request->getPost('tanggalakhir');
		$yap['chelsica']=$kevin->filter2('tanggal_pesanan>=','tanggal_pesanan<=',$a,$b);
		echo view('tabelp',$yap);
	}
	public function nota2()
	{ if(session()->get('id')>0){
		$Sim = new M_belajar;
		$where=('id_nota');
		$chichi['chelsica']=$Sim->tampil('nota',$where);
		echo view ('header');
		echo view('menu');
		echo view('tampilannota',$chichi);
		echo view ('footer');
	}else if(session()->get('level')>0){
		return redirect()->to('/error');
	}else{
		return redirect()->to('home/login');
	}	} 
	public function edit_nota($id)
	{
		$Sim= new M_belajar;
		$wece = array('id_nota' => $id );
		$chichi['chelsica']=$Sim->getWhere('nota', $wece);
		echo view('header');
		echo view('menu');
		echo view('editnota', $chichi); 
		echo view('footer');
	}
	public function simpan_nota()
	{
		$a=$this->request->getPost('nomor_nota');
		$b=$this->request->getPost('total');
		$c=$this->request->getPost('tanggal');
		$d=$this->request->getPost('id_pemesanan');
		$e=$this->request->getPost('bayar');
		$e=$this->request->getPost('kembali');
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_nota' =>$id);
		$data = array(
			"nomor_nota"=>$a,
			"total"=>$b,
			"tanggal"=>$c,
			"id_pemesanan"=>$d,
			"bayar"=>$e,
			"kembali"=>$f,
		);
		$Sim->input('nota',$data,$wece);
		return redirect ()->to('home/nota2');
	}
	public function simpan_nota2()
	{
		$a=$this->request->getPost('nomor_nota');
		$b=$this->request->getPost('total');
		$c=$this->request->getPost('tanggal');
		$d=$this->request->getPost('id_pemesanan');
		$e=$this->request->getPost('bayar');
		$e=$this->request->getPost('kembali');
		$id=$this->request->getPost('id');
		$Sim= new M_belajar;
		$wece= array('id_nota' =>$id);
		$data = array(
			"nomor_nota"=>$a,
			"total"=>$b,
			"tanggal"=>$c,
			"id_pemesanan"=>$d,
			"bayar"=>$e,
			"kembali"=>$f,
		);
		$Sim->edit('nota',$data,$wece);
		return redirect ()->to('home/nota2');
	}
	public function hapus_nota($id)
	{
		$Sim = new M_belajar;
		$wece=  array('id_nota' => $id );
		$chichi['chelsica']=$Sim->hapus('nota',$wece);
		return redirect ()->to('home/nota2');
	}
	public function tabeln()
	{
		$kevin = new M_belajar;
		$a=$this->request->getPost('tanggalawal');
		$b=$this->request->getPost('tanggalakhir');
		$yap['chelsica']=$kevin->filter('pesanan','nota','pesanan.id_nota=nota.id_nota','tanggal>=','tanggal<=',$a,$b);
		echo view('tabeln',$yap);
	}
	public function edit_karyawan ($id)
	{
		$Joyce= new M_belajar;
		$wece= array('karyawan.id_user' =>$id);
		$wendy['kevinyappp']=$Joyce->joinw('karyawan','user','karyawan.id_user=user.id_user',$wece);
		echo view ('header.php');
		echo view ('menu.php');
		echo view ('editkaryawan',$wendy);
		echo view ('footer.php');
	}
	public function hapus_karyawan ($id)
	{
		$sim= new M_belajar;
		$wece= array('id_user' =>$id);
		$sim->hapus('karyawan',$wece);
		$sim->hapus('user',$wece);
		return redirect()->to('home/karyawan1');
	}
public function tkr()
	{
		echo view ('header');
		echo view('tkr');
		echo view ('footer');
	}
	public function aksi_tkr()
	{
		$a=$this->request->getPost('username');
		$b=$this->request->getPost('password');
		$c=$this->request->getPost('level');
		$d=$this->request->getPost('namakaryawan');
		$e=$this->request->getPost('nik');
		$f=$this->request->getPost('tempatlahir');
		$g=$this->request->getPost('tanggallahir');
		$h=$this->request->getPost('jeniskelamin');
		$i=$this->request->getPost('agama');
		$j=$this->request->getPost('alamat');
		$k=$this->request->getPost('jabatan');
		$l=$this->request->getPost('nohp');
		$Sim1= new M_belajar();
		$data = array(
				"username"=>$a,
				"password"=>$b,
				"level"=>$c,
				);
		$Sim1->input('user',$data);
		$where=array(
			"username"=>$a);
		$chelsia=$Sim1->getWhere('user',$where);
		$data2=array(
				"id_user"=>$chelsia->id_user,
				"nama_karyawan"=>$d,
				"nik"=>$e,
				"tempat_lahir"=>$f,
				"tanggal_lahir"=>$g,
				"jenis_kelamin"=>$h,
                "alamat"=>$j,
				"no_hp"=>$l,
				"agama"=>$i,
				"jabatan"=>$k,
		);
		$Sim1->input('karyawan',$data2);
		return redirect ()->to('home/karyawan1');
	}
	public function karyawan1()
	{if(session()->get('id')>0){
	 $Sim = new M_belajar;
	 $where=('id_karyawan');
		$chichi['kevinyappp']=$Sim->join('karyawan','user','karyawan.id_user=user.id_user',$where);
		echo view ('header');
		 echo view('menu');
	 echo view('tampilkaryawan',$chichi);
	 echo view ('footer');
	}else if(session()->get('level')>0){
		return redirect()->to('/error');
	}else{
	return redirect()->to('home/login');
}	} 
public function simpan_karyawan()
	{
		$k=$this->request->getPost('username');
		$m=$this->request->getPost('level');
		$b=$this->request->getPost('namakaryawan');
		$c=$this->request->getPost('nik');
		$e=$this->request->getPost('tempatlahir');
		$d=$this->request->getPost('tanggallahir');
		$f=$this->request->getPost('jeniskelamin');
		$g=$this->request->getPost('agama');
		$h=$this->request->getPost('alamat');
		$i=$this->request->getPost('jabatan');
		$j=$this->request->getPost('nohp');
		$id=$this->request->getPost('id');
		$where = array(
				"id_user"=>$id
				);
		$Joyce= new M_belajar;
		$data = array(
				"username"=>$k,
				"level"=>$m
				);
		$Joyce->edit('user', $data, $where);
		// echo $wendy->id_user;
		$data2=array(
			"nama_karyawan"=>$b,
				"nik"=>$c,
				"tempat_lahir"=>$e,
				"tanggal_lahir"=>$d,
				"jenis_kelamin"=>$f,
				"agama"=>$g,
				"alamat"=>$h,
				"jabatan"=>$i,
				"no_hp"=>$j,
		);
		($where);
		$Joyce->edit('karyawan', $data2, $where);
		return redirect ()->to('home/karyawan1');
	}
}

