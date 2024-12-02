<?php

namespace App\Models;
use CodeIgniter\Model;

class M_belajar extends Model
{
	public function tampil($table,$by)
	{
		return $this->db
		->table($table)
		->orderby($by,'desc')
		->get()
		->getResult();
	}
	public function hapus($table,$where)
	{
		return $this->db->table($table)->delete($where);
	}
	public function getWhere($table,$where)
	{
		return $this->db->table($table)->getwhere($where)->getRow();
	}
	public function edit($table, $data, $where)
{
    return $this->db->table($table)->update($data, $where);
}

	public function input($table,$data)
	{
		return $this->db->table($table)->insert($data);
	}
	public function join($table,$table2,$on,$by)
	{
		return $this->db
		->table($table)
		->join($table2,$on)
		->orderby($by,'desc')
		->get()->getResult();
	}
	public function filter($table, $table2, $on, $filter1, $filter2, $awal, $akhir)
	{
		return $this->db
		->table($table)
		->join($table2,$on)
		->where($filter1,$awal)
		->where($filter2,$akhir)
		
		->get()
		->getResult();
	}
	public function filter2($filter1, $filter2, $awal, $akhir)
	{
		return $this->db
		->table('pesanan')
		->join('barang','pesanan.id_barang=barang.id_barang')
		->join('nota','pesanan.id_nota=nota.id_nota')
		->join('user','pesanan.id_user=user.id_user')
		->where($filter1,$awal)
		->where($filter2,$akhir)
		
		->get()
		->getResult();
	}
	public function joinw($table,$table2,$on,$w){
		return $this->db->table($table)
		->join($table2,$on)
		->where($w)
		->get()
		->getRow();
	}

}