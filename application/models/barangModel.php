<?php

class BarangModel extends CI_Model
{

	function get_product_keyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi', $keyword);
		return $this->db->get()->result();
	}

	function get_product_keyword_filter($keyword, $location, $kategori, $jenis)
	{
		$this->db->select('*');
		$this->db->from('barang');
		if ($kategori != 'Kategori') {
			$this->db->where('kategori', $kategori);
			$this->db->like('nama_barang', $keyword);
			$this->db->or_like('deskripsi', $keyword);
		}
		if ($location != 'Lokasi') {
			$this->db->where('lokasi', $location);
			$this->db->like('nama_barang', $keyword);
			$this->db->or_like('deskripsi', $keyword);
		}
		if ($jenis != 'Jenis') {
			$this->db->where('jenis', $jenis);
		}
		$this->db->like('nama_barang', $keyword);
		$this->db->or_like('deskripsi', $keyword);

		return $this->db->get()->result();
	}
}
