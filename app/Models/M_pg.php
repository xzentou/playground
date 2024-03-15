<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pg extends Model
{
     

	public function tampil($s){
		return $this->db->table($s)
						->get()
						->getResult();

	}

    public function tampil2($s){
    return $this->db->table($s)
                    ->orderBy('jam_keluar', 'asc') // Mengurutkan berdasarkan kolom 'tanggal' secara ascending
                    ->get()
                    ->getResult();
}

public function tampil3($s){
    return $this->db->table($s)
                    ->orderBy('jam_keluar', 'asc') // Mengurutkan berdasarkan kolom 'tanggal' secara ascending
                    ->get()
                    ->getResult();
}
	public function tambah($table, $isi)
	{
			return $this->db->table($table)
						->insert($isi);
	}
    public function tambahkembaliid($table, $data)
{
    $this->db->table($table)->insert($data);
    return $this->db->insertID(); // Mengembalikan ID dari data yang baru saja dimasukkan
}
	public function hapus($table,$where)
    {
        return $this->db->table($table)
                        ->delete($where);

    }
    public function edit($tabel, $isi, $where){
        return $this->db->table($tabel)
                        ->update($isi,$where);
    }
    public function getWhere($tabel,$where){
        return $this->db->table($tabel)
                        ->getwhere($where)
                        ->getRow();
    }

    public function tampilwhere($tabel,$where){
        return $this->db->table($tabel)
                        ->getwhere($where)
                        ->getResult();
    }
    public function join($pil,$tabel1,$on,$where)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on,"right")
                        ->getWhere($where)->getRow();
                        // return $this->db->query('select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
                        // ->getResult();
    }

    public function joinresult($pil,$tabel1,$on,$where)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on,"right")
                        ->getWhere($where)->getResult();
                        // return $this->db->query('select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
                        // ->getResult();
    }

     public function joinnowhere($pil,$tabel1,$on)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on,"inner")
                        ->get()
                        ->getResult();
                        // return $this->db->query('select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
                        // ->getResult();
    }

    public function join3table2where($pil, $tabel1, $tabel2, $on, $on2, $where1, $where2)
{
    return $this->db->table($pil)
                    ->join($tabel1, $on)
                    ->join($tabel2, $on2)
                    ->where($where1)
                    ->where($where2)
                    ->orderBy('selesai', 'ASC')
                    ->get()
                    ->getResult();
}

public function joinwhere3($pil, $tabel1, $on, $where1, $where2,$where3)
{
    return $this->db->table($pil)
                    ->join($tabel1, $on)
                    ->where($where1)
                    ->where($where2)
                    ->where($where3)
                    ->get()
                    ->getResult();
}

public function join3where3($pil, $tabel1,$tabel2, $on,$on2, $where1, $where2,$where3)
{
    return $this->db->table($pil)
                    ->join($tabel1, $on)
                    ->join($tabel2, $on2)
                    ->where($where1)
                    ->where($where2)
                    ->where($where3)
                    ->orderBy('selesai', 'ASC')
                    ->get()
                    ->getResult();
}

    public function join2($pil,$tabel1,$on,$where)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on,"left")
                        ->getWhere($where)->getRow();
                        // return $this->db->query('select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
                        // ->getResult();
    }

    public function join4table1where($pil,$tabel1,$tabel2,$tabel3,$on,$on2,$on3,$where)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on)
                        ->join($tabel2,$on2)
                        ->join($tabel3,$on3)
                        ->getWhere($where)->getRow();
                        // return $this->db->query('select * from brg_msk join barang on brg_msk.id_brg=barang.id_brg')
                        // ->getResult();
    }
    public function tampil_join($pil,$tabel1,$on)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on,"right")
                        ->get()
                        ->getresult();
    }
    public function joinWhere($tabel1, $tabel2, $tabel3, $on1, $on2, $where)
{
    return $this->db->table($tabel1)
        ->join($tabel2, $on1)
        ->join($tabel3, $on2)
        ->getWhere($where)
        ->getRow();
}

public function join4Where($tabel1, $tabel2, $tabel3, $tabel4, $on1, $on2, $on3, $where)
{
    return $this->db->table($tabel1)
        ->join($tabel2, $on1)
        ->join($tabel3, $on2)
        ->join($tabel4, $on3)
        ->getWhere($where)
        ->getRow();
}

    public function joinWhere1($tabel, $tabel2, $tabel3, $on, $on1, $where)
    {
        return $this->db->table($tabel)
        ->join($tabel2, $on, 'right')
        ->join($tabel3, $on1, 'right')
        ->getWhere($where)
        ->getRow();
    }

    public function join3where($tabel, $tabel2, $tabel3, $on, $on1, $where)
    {
        return $this->db->table($tabel)
        ->join($tabel2, $on)
        ->join($tabel3, $on1)
        ->getWhere($where)
        ->getResult();
    }

     public function join3($tabel, $tabel2, $tabel3, $on, $on1)
    {
        return $this->db->table($tabel)
        ->join($tabel2, $on, 'right')
        ->join($tabel3, $on1, 'right')
        ->get()
        ->getResult();
    }
    public function upload($file)
    {
            $imageName = $file->getName();
            $file->move(ROOTPATH . 'public/img', $imageName);
    }

     public function upload1($file)
    {
            $imageName = $file->getName();
            $file->move(ROOTPATH . 'public/img', $imageName);
    }
//     public function getResult($table, $where)
// {
//     return $this->db->table($table)
//                     ->getWhere($where)
//                     ->getResult();
// }

    public function getResult($table, $where)
    {
        return $this->db->table($table)
                    ->where('id_user', $where)
                    ->where('delete', null)
                    ->get()
                    ->getResult();
    }

      public function getResult1($table, $where)
    {
        return $this->db->table($table)
                    ->where('id_user', $where)
                    ->where('delete', 1)
                    ->get()
                    ->getResult();
    }


public function tampil_join_result($pil,$tabel1,$on, $where)
    {
        return $this->db->table($pil)
                        ->join($tabel1,$on,"right")
                        ->getWhere($where)
                        ->getResult();
    }

// public function tampil_join_result($pil, $tabel1, $on, $where)
// {
//     return $this->db->table($pil)
//                     ->join($tabel1, $on, "right")
//                     ->where('id_userk', $where)
//                     ->where('delete', null)
//                     ->get()
//                     ->getResult();
// }

public function getSiswaDetails($id_siswa) {
    return $this->db->table('siswa')
        ->select('siswa.*, jurusan.nama_jurusan') // Select the columns you need
        ->join('jurusan', 'siswa.id_jurusan = jurusan.id_jurusan', 'left')
        ->where('siswa.id_siswa', $id_siswa)
        ->get()
        ->getRow();
}

public function between($table, $tanggalAwal, $tanggalAkhir)
    {
        return $this->db->table($table)
            ->where('tanggal >=', $tanggalAwal)
            ->where('tanggal <=', $tanggalAkhir)
            ->get()
            ->getResult();
    }

    public function betweenjoin($tanggalAwal, $tanggalAkhir)
    {
        return $this->db->table('pelanggan')
            ->join('anak', 'pelanggan.id_anak=anak.id_anak')
            ->join('paket', 'pelanggan.id_paket=paket.id_paket')
            ->join('transaksi', 'pelanggan.no_trans=transaksi.no_transaksi')
            ->where('transaksi.tanggal_transaksi >=', $tanggalAwal)
            ->where('transaksi.tanggal_transaksi <=', $tanggalAkhir) // Perbaikan disini
            ->get()
            ->getResultArray();
    }

    public function betweenjoin1($table1,$table2,$table3,$table4,$on1,$on2,$on3,$tanggalAwal, $tanggalAkhir)
{
    return $this->db->table($table1)
        ->join($table2,$on1)
        ->join($table3,$on2)
        ->join($table4,$on3)
        ->where('transaksi.tanggal_transaksi >=', $tanggalAwal)
        ->where('transaksi.tanggal_transaksi <=', $tanggalAkhir)
        ->get()
        ->getResult();
}

public function betweenjoin3($tanggalAwal, $tanggalAkhir)
    {
        return $this->db->table('pelanggan')
            ->join('anak', 'pelanggan.id_anak=anak.id_anak')
            ->join('paket', 'pelanggan.id_paket=paket.id_paket')
            ->join('transaksi', 'pelanggan.no_trans=transaksi.no_transaksi')
            ->where('transaksi.create_at >=', $tanggalAwal)
            ->where('transaksi.create_at <=', $tanggalAkhir) // Perbaikan disini
            ->get()
            ->getResult();
    }
   

public function getResult2($where)
{
    return $this->db->query("select * from suratm where id_user='$where' and delete=0 ")
                        ->getResult();
}

// public function getPelangganById($customerId)
// {
//     // Ambil data pelanggan berdasarkan ID
//     $query = $this->db->table($this->table)
//                 ->where('id_pelanggan', $customerId);
                
//     return $query;
// }

public function getPelangganById($table, $where) {
    return $this->db->table($table)
                    ->where('id_pelanggan', $where)
                    ->get('pelanggan')
                    ->getrow();
}

public function hapus1($table,$where)
    {
        return $this->db->table($table)
                        ->delete($where);

    }

public function tambahPelangganHabis($data) {
    return $this->db->table('pelangganhabis')
                    ->insert($data);
}

// public function getDataPelangganTerbaru()
// {
//     // Lakukan query ke database untuk mengambil data pelanggan terbaru
    
//     $query = $db->query('SELECT * FROM pelanggan ORDER BY id_pelanggan DESC LIMIT 10'); // Ubah query sesuai dengan kebutuhan 
//     $data_pelanggan = $query->getResult(); // Mendapatkan hasil query sebagai array objek

//     // Kembalikan data pelanggan dalam format JSON
//     return $this->response->setJSON($data_pelanggan);
// }



public function ubah_status_transaksi($noTrans)
{
    // Lakukan update status transaksi menjadi "habis" di tabel pelanggan
    $this->db->table('pelanggan')->update(['status_transaksi' => 'habis'], ['no_trans' => $noTrans]);

    // Lakukan update status transaksi menjadi "habis" di tabel transaksi
    $this->db->table('transaksi')->update(['status_transaksi' => 'habis'], ['no_transaksi' => $noTrans]);
}

public function softdelete($noTrans)
{
    // Lakukan update status transaksi menjadi "habis" di tabel pelanggan
    $this->db->table('pelanggan')->update(['delete' => '1'], ['no_trans' => $noTrans]);

    // Lakukan update status transaksi menjadi "habis" di tabel transaksi
    $this->db->table('transaksi')->update(['delete' => '1'], ['no_transaksi' => $noTrans]);
}

public function restore($noTrans)
{
    
    $this->db->table('pelanggan')->update(['delete' => '0'], ['no_trans' => $noTrans]);
    $this->db->table('transaksi')->update(['delete' => '0'], ['no_transaksi' => $noTrans]);
}

public function softdelete1($table,$kolom, $noTrans)
{
    
    $this->db->table($table)->update(['delete' => '1'], [$kolom => $noTrans]);
   
}

public function restore1($table,$kolom,$noTrans)
{
    
    $this->db->table($table)->update(['delete' => '0'], [$kolom => $noTrans]);
   
}

public function restore2($noTrans)
{
    
    $this->db->table('anak')->update(['delete' => '0'], ['id_anak' => $noTrans]);
   
}


public function getDataByNoTransaksi($noTransaksi)
{
    // Query data dari database berdasarkan nomor transaksi
    $query = $this->db->table('pelanggan')
                     ->select('pelanggan.*, paket.*, anak.*, transaksi.*')
                     ->join('transaksi', 'pelanggan.no_trans = transaksi.no_transaksi')
                     ->join('paket', 'pelanggan.id_paket = paket.id_paket')
                     ->join('anak', 'pelanggan.id_anak = anak.id_anak')
                     ->where('transaksi.no_transaksi', $noTransaksi)
                     ->get();

    // Mengembalikan hasil query dalam format array
    return $query->getRowArray();
}

public function tambahwaktu($noTrans,$t_waktu)
{
    // Lakukan update status transaksi menjadi "habis" di tabel pelanggan
    $this->db->table('transaksi')->where('no_transaksi', $noTrans)->update(['selesai' => $t_waktu]);

    
    
}
}