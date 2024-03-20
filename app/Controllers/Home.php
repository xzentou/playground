<?php
namespace App\Controllers;

use CodeIgniter\Models\Controller;
use App\Models\M_pg;


class Home extends BaseController
{
	public function index()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			echo view('header');
			echo view('menu', $data);
			echo view('dashboard');
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function paket()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where1 = array('paket.delete' => '0');
			$data['dua'] = $model->tampilWhere('paket',$where1);
			echo view('header');
			echo view('menu', $data);
			echo view('paket', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function rpaket()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where1 = array('paket.delete' => '1');
			$data['dua'] = $model->tampilWhere('paket',$where1);
			echo view('header');
			echo view('menu', $data);
			echo view('rpaket', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function t_paket()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);

			echo view('header');
			echo view('menu', $data);
			echo view('t_paket');
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_t_paket()
	{
		$model = new M_pg;

		// Retrieve form data
		$a = $this->request->getPost('nama_paket');
		$b = $this->request->getPost('durasi');
		$c = $this->request->getPost('harga');

		$data = array(
			'nama_Paket' => $a,
			'durasi' => $b,
			'harga' => $c,
			'delete' =>'0'

		);

		$model->tambah('paket', $data);

		// Redirect or perform additional actions as needed
		return redirect()->to('home/paket');
	}

	public function hapus_paket($id)
	{
		$model = new M_pg();
		$where = array('id_paket' => $id);
		$model->hapus('paket', $where);

		return redirect()->to('Home/paket/');
	}

	public function epaket($id)
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where = array('id_paket' => $id);
			$data['dua'] = $model->getwhere('paket', $where);
			echo view('header');
			echo view('menu', $data);
			echo view('e_paket', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_e_paket()
	{

		$model = new M_pg();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('durasi');
		$c = $this->request->getPost('harga');
		$id = $this->request->getPost('id');

		$where = array('id_paket' => $id);

		$isi = array(
			'nama_Paket' => $a,
			'durasi' => $b,
			'harga' => $c,
		);



		$model->edit('paket', $isi, $where);


		return redirect()->to('Home/paket');

	}

	public function restorepaket($noTrans)
	{
		$model = new M_pg;
		// Pass the where condition directly to the softdelete() function
		$model->restore1('paket','id_paket',$noTrans);
		// print_r($id);
		// Redirect to 'home/recyclebin'
		return redirect()->to('home/rpaket');
	}

	public function softdeletepaket($noTrans)
	{
		$model = new M_pg;
		// Ubah status transaksi menjadi "habis" di kedua tabel
		$model->softdelete1('paket','id_paket',$noTrans);

		// Kirim respons (jika diperlukan)
		return redirect()->to('home/paket');
	}

	

	public function anak()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where1 = array('anak.delete' => '0');
			$data['dua'] = $model->tampilwhere('anak',$where1);
			echo view('header');
			echo view('menu', $data);
			echo view('anak', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function ranak()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where1 = array('anak.delete' => '1');
			$data['dua'] = $model->tampilwhere('anak',$where1);
			echo view('header');
			echo view('menu', $data);
			echo view('ranak', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function t_anak()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);

			echo view('header');
			echo view('menu', $data);
			echo view('t_anak');
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_t_anak()
	{
		$model = new M_pg;

		// Retrieve form data
		$a = $this->request->getPost('nama_anak');
		$b = $this->request->getPost('orangtua');
		$c = $this->request->getPost('umur');

		$data = array(
			'nama_anak' => $a,
			'orang_tua' => $b,
			'umur' => $c,
			'delete' =>'0'

		);

		$model->tambah('anak', $data);

		// Redirect or perform additional actions as needed
		return redirect()->to('home/anak');
	}

	public function eanak($id)
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where = array('id_anak' => $id);
			$data['dua'] = $model->getwhere('anak', $where);
			echo view('header');
			echo view('menu', $data);
			echo view('e_anak', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_e_anak()
	{

		$model = new M_pg();
		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('orangtua');
		$c = $this->request->getPost('umur');
		$id = $this->request->getPost('id');

		$where = array('id_anak' => $id);

		$isi = array(
			'nama_anak' => $a,
			'orang_tua' => $b,
			'umur' => $c,
		);



		$model->edit('anak', $isi, $where);


		return redirect()->to('Home/anak');

	}

	public function restoreanak($noTrans)
	{
		$model = new M_pg;
		// Pass the where condition directly to the softdelete() function
		$model->restore1('anak','id_anak',$noTrans);
		// print_r($id);
		// Redirect to 'home/recyclebin'
		return redirect()->to('home/ranak');
	}

	public function softdeleteanak($noTrans)
	{
		$model = new M_pg;
		// Ubah status transaksi menjadi "habis" di kedua tabel
		$model->softdelete1('anak','id_anak',$noTrans);

		// Kirim respons (jika diperlukan)
		return redirect()->to('home/anak');
	}

	public function login()
	{

		echo view('header');
		echo view('login');

	}

	public function aksi_login()
	{
		$u = $this->request->getPost('username');
		$p = $this->request->getPost('password');

		$where = array(
			'username' => $u,
			'password' => md5($p)
		);
		$model = new M_pg;
		$cek = $model->getWhere('user', $where);

		if ($cek > 0) {
			session()->set('nama', $cek->username);
			session()->set('id', $cek->id_user);
			session()->set('level', $cek->level);
			return redirect()->to('home/');
		} else {
			return redirect()->to('home/login');
		}

	}

	public function logout()
	{
		session()->destroy();
		return redirect()->to('home/login');
	}

	public function pelanggan()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where = array('transaksi.status_transaksi' => 'udah');
			$where1 = array('transaksi.delete' => '0');
			$data['tiga'] = $model->join3table2where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where, $where1);
			$where = array('transaksi.status_transaksi' => 'belum');
			$data['empat'] = $model->join3table2where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where, $where1);
			// $data['dua'] = $model->joinnowhere('pelanggan','transaksi','pelanggan.no_trans=transaksi.no_transaksi');
			// $data['lima'] = $model->join('pelanggan','user','pelanggan.create_by=user.id_user',$where);
			echo view('header');
			echo view('menu', $data);
			echo view('pelanggan', $data);
			echo view('footer');
			// print_r($data);
		} else {
			return redirect()->to('Home/login');
		}
	}


	public function dpelanggan($id)
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where = array('id_pelanggan' => $id);
			$data['dua'] = $model->join4table1where('pelanggan', 'paket', 'transaksi', 'anak', 'pelanggan.id_paket=paket.id_paket', 'pelanggan.no_trans=transaksi.no_transaksi', 'pelanggan.id_anak=anak.id_anak', $where);
			echo view('header');
			echo view('menu', $data);
			echo view('detail', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}


	public function t_pelanggan()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg;
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$data['dua'] = $model->tampil('paket');
			$data['empat'] = $model->tampil('anak');
			$data['tiga'] = $model->join('pelanggan', 'user', 'pelanggan.create_by=user.id_user', $where);
			echo view('header');
			// echo view('menu', $data);
			echo view('t_pelanggan', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function t_pelangganbaru()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg;
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$data['dua'] = $model->tampil('paket');
			$data['empat'] = $model->tampil('anak');
			$data['tiga'] = $model->join('pelanggan', 'user', 'pelanggan.create_by=user.id_user', $where);
			echo view('header');
			// echo view('menu', $data);
			echo view('t_pelangganl', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function pilih()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg;
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$data1['dua'] = $model->tampil('paket');
			$data1['empat'] = $model->tampil('anak');
			$data['tiga'] = $model->join('pelanggan', 'user', 'pelanggan.create_by=user.id_user', $where);
			echo view('header');
			echo view('menu', $data);
			echo view('pilih', $data1);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}
	public function aksi_t_pelanggan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$model = new M_pg;

		// Mengambil semua data pelanggan
		$data_pelanggan = $model->tampil('pelanggan');

		$a = $this->request->getPost('anak');
		$c = $this->request->getPost('paket');

		// $d = $this->request->getPost('tgl'); // Mengambil tanggal lahir dari input

		list($id_paket, $durasi, $harga, $nama_paket) = explode('|', $c);
		list($id_anak, $nama_anak, $orang_tua, $umur) = explode('|', $a);

		$jam_dalam_detik = intval($durasi) * 3600; // 3600 detik dalam satu jam
		// Menghitung jam keluar dengan menambahkan durasi jam dalam detik
		$jam_keluar = date('Y-m-d H:i:s', time() + $jam_dalam_detik);

		// Fungsi untuk membuat karakter acak
		function generateRandomString($length = 7)
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}

		// Memeriksa keunikan no_transaksi
		do {
			$no_transaksi = 'PLG' . generateRandomString();
			$is_unique = true;
			foreach ($data_pelanggan as $pelanggan) {
				if ($pelanggan->no_trans == $no_transaksi) {
					$is_unique = false;
					break;
				}
			}
		} while (!$is_unique);

		$pelanggan = array(
			'no_trans' => $no_transaksi, // Menambahkan no_transaksi
			'id_anak' => $id_anak,
			'id_paket' => $id_paket,
			'create_by' => session()->get('id'),
			'create_at' => date('Y-m-d H:i:s'), // Menggunakan format tanggal yang benar
			'status_transaksi' => 'belum',
			'delete' => '0'
		);

		$trans = array(
			'no_transaksi' => $no_transaksi, // Menambahkan no_transaksi
			'id_anak' => $id_anak,
			'id_paket' => $id_paket,
			'mulai' => date('Y-m-d H:i:s'), // Menggunakan format 24-jam
			'selesai' => $jam_keluar,
			'create_by' => session()->get('id'),
			'create_at' => date('Y-m-d H:i:s'), // Menggunakan format tanggal yang benar
			'status_transaksi' => 'belum',
			'delete' => '0',
			'tanggal_transaksi' => date('Y-m-d')
		);
		$model->tambah('pelanggan', $pelanggan);
		$model->tambah('transaksi', $trans);
		// print_r($pelanggan);
		// print_r($trans);
		return redirect()->to('home/pelanggan/');
	}

	public function aksi_t_pelangganl()
	{
		date_default_timezone_set('Asia/Jakarta');
		$model = new M_pg;

		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('orangtua');
		$d = $this->request->getPost('umur');
		$c = $this->request->getPost('paket');

		// $d = $this->request->getPost('tgl'); // Mengambil tanggal lahir dari input

		list($id_paket, $durasi, $harga, $nama_paket) = explode('|', $c);

		// Simpan data anak terlebih dahulu untuk mendapatkan ID anak yang baru saja dimasukkan
		$anak = array(
			'nama_anak' => $a, // Menggunakan format tanggal yang benar
			'orang_tua' => $b,
			'umur' => $d
		);
		$id_anak = $model->tambahkembaliid('anak', $anak);

		$jam_dalam_detik = intval($durasi) * 3600; // 3600 detik dalam satu jam
		// Menghitung jam keluar dengan menambahkan durasi jam dalam detik
		$jam_keluar = date('Y-m-d H:i:s', time() + $jam_dalam_detik);

		// Fungsi untuk membuat karakter acak
		function generateRandomString($length = 7)
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			return $randomString;
		}

		// Memeriksa keunikan no_transaksi
		do {
			$no_transaksi = 'PLG' . generateRandomString();
			$is_unique = true;
			$data_pelanggan = $model->tampil('pelanggan');
			foreach ($data_pelanggan as $pelanggan) {
				if ($pelanggan->no_trans == $no_transaksi) {
					$is_unique = false;
					break;
				}
			}
		} while (!$is_unique);

		$pelanggan = array(
			'no_trans' => $no_transaksi, // Menambahkan no_transaksi
			'id_anak' => $id_anak,
			'id_paket' => $id_paket,
			'create_by' => session()->get('id'),
			'create_at' => date('Y-m-d H:i:s'), // Menggunakan format tanggal yang benar
			'status_transaksi' => 'belum',
			'delete' => '0'
		);

		$trans = array(
			'no_transaksi' => $no_transaksi, // Menambahkan no_transaksi
			'id_anak' => $id_anak,
			'id_paket' => $id_paket,
			'mulai' => date('Y-m-d H:i:s'), // Menggunakan format 24-jam
			'selesai' => $jam_keluar,
			'create_by' => session()->get('id'),
			'create_at' => date('Y-m-d H:i:s'), // Menggunakan format tanggal yang benar
			'status_transaksi' => 'belum',
			'delete' => '0',
			'tanggal_transaksi' => date('Y-m-d')
		);

		$model->tambah('pelanggan', $pelanggan);
		$model->tambah('transaksi', $trans);
		// print_r($pelanggan);
		// print_r($trans);
		return redirect()->to('home/pelanggan/');
	}


	public function ubah_status_transaksi($noTrans)
	{
		$model = new M_pg;
		// Ubah status transaksi menjadi "habis" di kedua tabel
		$model->ubah_status_transaksi($noTrans);

		// Kirim respons (jika diperlukan)
		return "Status transaksi berhasil diubah menjadi habis";
	}

	public function softdelete($noTrans)
	{
		$model = new M_pg;
		// Ubah status transaksi menjadi "habis" di kedua tabel
		$model->softdelete($noTrans);

		// Kirim respons (jika diperlukan)
		return redirect()->to('home/daftar_durasi');
	}

	public function restoredata($noTrans)
	{
		$model = new M_pg;
		// Pass the where condition directly to the softdelete() function
		$model->restore($noTrans);

		// Redirect to 'home/recyclebin'
		return redirect()->to('home/recyclebin');
	}

	

	public function recyclebin()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where1 = array('transaksi.delete' => '1');
			$data['tiga'] = $model->join3where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'pelanggan.id_anak=anak.id_anak', $where1);
			// $data['dua'] = $model->joinnowhere('pelanggan','transaksi','pelanggan.no_trans=transaksi.no_transaksi');
			// $data['lima'] = $model->join('pelanggan','user','pelanggan.create_by=user.id_user',$where);
			echo view('header');
			echo view('menu', $data);
			echo view('recyclebin', $data);
			echo view('footer');
			// print_r($data);
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function pemasukan()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);

			echo view('header');
			echo view('menu', $data);
			echo view('pemasukan', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function getdata()
	{
		// Pastikan request berasal dari AJAX
		if ($this->request->isAJAX()) {
			$model = new M_pg();

			$tanggalmulai = $this->request->getPost('mulai');
			$tanggalakhir = $this->request->getPost('akhir');
			$data = $model->betweenjoin($tanggalmulai, $tanggalakhir);
			return $this->response->setJSON($data);
		} else {
			throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
		}
	}

	public function printpemasukan()
	{

		if (session()->get('level') > 0) {
			$model = new M_pg();
			$tanggalmulai = $this->request->getGet('mulai');
			$tanggalakhir = $this->request->getGet('akhir');
			// $data['satu'] = $model->betweenjoin2($tanggalmulai, $tanggalakhir);
			// $data['satu']= $model->betweenjoin3($tanggalmulai, $tanggalakhir);
			$data['satu'] = $model->betweenjoin1('pelanggan', 'anak', 'paket', 'transaksi', 'pelanggan.id_anak=anak.id_anak', 'pelanggan.id_paket=paket.id_paket', 'pelanggan.no_trans=transaksi.no_transaksi', $tanggalmulai,$tanggalakhir);

			
			// print_r($data);
			// print_r($tanggalmulai);
			// print_r($tanggalakhir);
			return view('laporanpemasukan', $data);

		} else {
			return redirect()->to('Home/login');
		}
	}
	public function printpdf()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			// $data['dua'] = $model->join('pelanggan','user','pelanggan.create_by=user.id_user',$where);

			echo view('printpdf');

		} else {
			return view('home/login');
		}
	}

	// Fungsi untuk menghitung umur dari tanggal lahir
	private function hitungUmur($tgl_lahir)
	{
		$tgl_lahir = new \DateTime($tgl_lahir); // Using global namespace for DateTime class
		$sekarang = new \DateTime(); // Using global namespace for DateTime class
		$umur = $sekarang->diff($tgl_lahir);
		return $umur->y; // Mengembalikan umur dalam tahun
	}

	public function epelanggan($id)
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where = array('id_pelanggan' => $id);
			$data['tiga'] = $model->join4where('pelanggan', 'transaksi', 'paket', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'pelanggan.id_paket=paket.id_paket', 'pelanggan.id_anak=anak.id_anak', $where);
			$data['empat'] = $model->tampil('paket');
			echo view('header');
			echo view('menu', $data);
			echo view('epelanggan', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}



	public function aksi_e_pelanggan()
	{
		date_default_timezone_set('Asia/Jakarta');
		$model = new M_pg();

		$a = $this->request->getPost('nama');
		$b = $this->request->getPost('umur');
		$c = $this->request->getPost('status');
		$e = $this->request->getPost('paket');
		list($id_paket, $jam) = explode('|', $e);
		$id = $this->request->getPost('id');
		$idt = $this->request->getPost('idt');

		list($id_paket, $durasi) = explode('|', $e);
		$jam_dalam_detik = intval($durasi) * 3600; // 3600 detik dalam satu jam
		// Menghitung jam keluar dengan menambahkan durasi jam dalam detik
		$jam_keluar = date('Y-m-d H:i:s', time() + $jam_dalam_detik);
		$model = new M_pg();
		$where = array('id_pelanggan' => $id);

		$pelanggan = array(
			'nama' => $a,
			'umur' => $b,
			'id_paket' => $id_paket,
			'status_transaksi' => $c,
			'update_by' => session()->get('id'),
			'update_at' => date('y,m,d,h,m,s'),



		);

		$wheret = array('id_transaksi' => $idt);
		$transaksi = array(

			'status_transaksi' => $c,
			'mulai' => date('Y-m-d H:i:s'), // Menggunakan format 24-jam
			'selesai' => $jam_keluar,


		);



		$model->edit('pelanggan', $pelanggan, $where);
		$model->edit('transaksi', $transaksi, $wheret);

		return redirect()->to('Home/pelanggan/');

	}

	public function tambahwaktu()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$no_transaksi = $this->request->getPost('no_transaksi');
			$where = array($no_transaksi);
			$data['tiga'] = $model->join4where('pelanggan', 'transaksi', 'paket', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'pelanggan.id_paket=paket.id_paket', 'pelanggan.id_anak=anak.id_anak', $where);
			$data['empat'] = $model->tampil('paket');
			echo view('header');
			echo view('menu', $data);
			echo view('t_waktu', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_t_waktu()
	{
		$model = new M_pg;

		// Get the input values
		$noTrans = $this->request->getPost('no_transaksi');
		$waktu = $this->request->getPost('selesai');
		$twaktu = $this->request->getPost('twaktu');

		// Convert time strings to DateTime objects
		$waktuDateTime = \DateTime::createFromFormat('H:i:s', $waktu);

		// Check if conversion was successful
		if ($waktuDateTime) {
			// Convert $twaktu to hours, minutes, and seconds
			list($hours, $minutes, $seconds) = sscanf($twaktu, "%d:%d:%d");

			// Add hours, minutes, and seconds to $waktuDateTime
			$waktuDateTime->add(new \DateInterval("PT{$hours}H{$minutes}M{$seconds}S"));
			$tambahwaktu = $waktuDateTime->format('H:i:s');

			// Call the model function with the updated time
			$model->tambahwaktu($noTrans, $tambahwaktu);

			// Kirim respons (jika diperlukan)
			return redirect()->to('home/tambahwaktu');
		} else {
			// Handle conversion failure
			return "Error: One or both values are not in the correct time format.";
		}
	}
	public function get_data_by_no_transaksi()
	{
		$model = new M_pg();
		$no_transaksi = $this->request->getPost('no_transaksi');

		// Panggil model untuk mengambil data berdasarkan nomor transaksi
		$data = $model->getDataByNoTransaksi($no_transaksi);

		// Kembalikan data dalam format JSON
		return $this->response->setJSON($data);
	}
	public function daftar_durasi()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('transaksi.status_transaksi' => 'udah');
			$data['tiga'] = $model->join3table2where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where, $where);
			$where2 = array('transaksi.status_transaksi' => 'habis');
			$where3 = array('transaksi.delete' => '0');
			$data['empat'] = $model->join3where3('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where2, $where2, $where3);



			echo view('header');
			echo view('daftar', $data);
			// print_r($data);

		} else {
			return redirect()->to('Home/login');
		}
	}

	public function daftar_duras()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('transaksi.status_transaksi' => 'udah');
			$data['tiga'] = $model->join3table2where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where, $where);
			$where2 = array('transaksi.status_transaksi' => 'habis');
			$where3 = array('transaksi.delete' => '0');
			$data['empat'] = $model->join3where3('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where2, $where2, $where3);



			// echo view('header');
			echo view('daftari', $data);
			// print_r($data);

		} else {
			return redirect()->to('Home/login');
		}
	}

	public function updateTable()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('transaksi.status_transaksi' => 'udah');
			$data['tiga'] = $model->join3table2where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where, $where);
			$where2 = array('transaksi.status_transaksi' => 'habis');
			$data['tiga'] = $model->join3table2where('transaksi', 'pelanggan', 'anak', 'pelanggan.no_trans=transaksi.no_transaksi', 'transaksi.id_anak=anak.id_anak', $where2, $where2);

			return view('daftar', $data);
		} else {
			return redirect()->to('Home/login');
		}
	}


	public function ambil_data_terbaru()
	{
		// Ambil data terbaru dari database
		$model = new M_pg();
		$data['tiga'] = $model->tampil2('pelanggan');

		// Set timezone to Jakarta
		date_default_timezone_set('Asia/Jakarta');

		// Lakukan pemrosesan data seperti yang Anda lakukan sebelumnya

		// Kembalikan data dalam format JSON
		return $this->response->setJSON($data['tiga']);
	}

	public function hapus_pelanggan($id)
	{
		$model = new M_pg();
		$where = array('id_pelanggan' => $id);
		$model->hapus('pelanggan', $where);

		return redirect()->to('Home/pelanggan');
	}

	public function hapus_pelang1($id)
	{
		$model = new M_pg;
		$where = array('no_trans' => $id);
		$model->hapus1('pelanggan', $where);
		return redirect()->to('home/daftar_durasi');
	}

	public function hapus_transaksi($id)
	{
		$model = new M_pg;
		$where = array('no_transaksi' => $id);
		$model->hapus1('transaksi', $where);
		return redirect()->to('home/daftar_durasi');
	}

	public function hapus_pelang2($id)
	{
		$model = new M_pg;
		$where = array('no_trans' => $id);
		$model->hapus1('pelanggan', $where);
		$where1 = array('no_transaksi' => $id);
		$model->hapus1('transaksi', $where1);

		return redirect()->to('home/daftar_durasi');
	}


	public function t_user()
	{

		$model = new M_pg;
		$data['lima'] = $model->tampil('user');
		echo view('header');
		echo view('t_user', $data);

	}

	public function Aksi_tuser()
	{
		$leo = $this->request->getpost('nama');
		$gtw = $this->request->getpost('password');
		$gtww = $this->request->getpost('email');
		$foto = $this->request->getpost('foto');

		$enam = array(
			'username' => $leo,
			'password' => md5($gtw),
			'email' => $gtww,
			'level' => 3,
			'foto' => $foto,

		);
		$model = new M_pg;
		$model->tambah('user', $enam);
		return redirect()->to('home/login');
	}

	public function account($id)
	{

		$model = new M_pg;
		$where = array('id_user' => $id);
		$data['dua'] = $model->tampil('user');
		$where = array('id_user' => session()->get('id'));
		$data['satu'] = $model->getwhere('user', $where);
		echo view('header');
		echo view('menu', $data);
		echo view('account', $data);
		echo view('footer');

	}

	public function aksi_ganti()
	{
		$oldPassword = $this->request->getPost('old');
		$newPassword = $this->request->getPost('new');
		$confirmPassword = $this->request->getPost('newconfirm');
		$id = session()->get('id');

		// Periksa apakah password baru dan confirm password sesuai
		if ($newPassword !== $confirmPassword) {
			// Set flash data untuk kesalahan password tidak sesuai
			session()->setFlashdata('error', 'Password Baru dan Konfirmasi Password tidak sesuai.');

			// Redirect kembali ke formulir dengan data input
			return redirect()->to('home/gantipass/' . $id)->withInput();
		}

		// Hash password lama untuk membandingkan dengan password di database
		$hashedOldPassword = md5($oldPassword);

		// Menggunakan model M_surat
		$model = new M_pg;

		// Menyiapkan kondisi WHERE berdasarkan id_user
		$where = array(
			'id_user' => $id,
			'password' => $hashedOldPassword
		);

		// Memeriksa apakah password lama sesuai dengan yang ada di database
		$cek = $model->getWhere('user', $where);

		if ($cek > 0) {
			// Jika password lama sesuai, update password baru dengan hash MD5
			$updateData = array(
				'password' => md5($newPassword)
			);

			// Menentukan kondisi WHERE yang spesifik untuk mengidentifikasi pengguna berdasarkan id_user
			$model->edit('user', $updateData, array('id_user' => $id));

			return redirect()->to('home/');
		} else {
			// Jika password lama tidak sesuai, set flash data untuk pesan kesalahan
			session()->setFlashdata('error', 'Password Lama salah.');

			// Redirect kembali ke halaman yang sama
			return redirect()->to('home/account/' . $id)->withInput();
		}
	}

	public function profile($id)
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$data['agama'] = $model->tampil('agama');
			echo view('header');
			echo view('menu', $data);
			echo view('profile', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_profile()
	{
		$model = new M_pg();
		$uploadedFile = $this->request->getfile('gambar');
		$ab = $this->request->getPost('nama');
		$bc = $this->request->getPost('alamat');
		$cd = $this->request->getPost('jk');
		$ef = $this->request->getPost('nohp');
		$fg = $this->request->getPost('agama');
		$gh = $this->request->getPost('tgl');
		$hi = $this->request->getPost('nik');
		$ij = $this->request->getPost('email');
		$id = $this->request->getPost('id');

		$model = new M_pg;


		if ($uploadedFile->getName()) {
			$foto = $uploadedFile->getName();
			$model->upload($uploadedFile);
			$where = array('id_user' => $id);

			$isi = array(
				'foto' => $foto,
				'username' => $ab,
				'alamat' => $bc,
				'jk' => $cd,
				'nohp' => $ef,
				'id_agama' => $fg,
				'email' => $ij,
				'delete' => '0',
				'update_by' => session()->get('id'),
				'update_at' => date('y,m,d,h,m,s'),

			);
		} else {
			$where = array('id_user' => $id);

			$isi = array(

				'username' => $ab,
				'alamat' => $bc,
				'jk' => $cd,
				'nohp' => $ef,
				'id_agama' => $fg,
				'email' => $ij,
				'delete'=>'0',
				'update_by' => session()->get('id'),
				'update_at' => date('y,m,d,h,m,s'),
			);
		}


		$model->edit('user', $isi, $where);

		return redirect()->to('Home');
		// print_r($isi);


	}

	public function karyawanprofile($id)
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => $id);
			$data['satu'] = $model->getwhere('user', $where);
			$data['agama'] = $model->tampil('agama');
			echo view('header');
			echo view('menu', $data);
			echo view('profile', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function karyawan()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$where1 = array('delete' => '0');
			$data['dua'] = $model->tampilWhere('user',$where1);
			echo view('header');
			echo view('menu', $data);
			echo view('karyawan', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function rkaryawan()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$where1 = array('delete' => '1');
			$data['satu'] = $model->getwhere('user', $where);
			$data['dua'] = $model->tampilWhere('user',$where1);
			echo view('header');
			echo view('menu', $data);
			echo view('rkaryawan', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function restorekaryawan($noTrans)
	{
		$model = new M_pg;
		// Pass the where condition directly to the softdelete() function
		$model->restore1('user','id_user',$noTrans);
		// print_r($id);
		// Redirect to 'home/recyclebin'
		return redirect()->to('home/rkaryawan');
	}

	public function softdeletekaryawan($noTrans)
	{
		$model = new M_pg;
		// Ubah status transaksi menjadi "habis" di kedua tabel
		$model->softdelete1('user','id_user',$noTrans);

		// Kirim respons (jika diperlukan)
		return redirect()->to('home/karyawan');
	}

	public function t_karyawan()
	{
		if (session()->get('level') > 0) {
			$model = new M_pg();
			$where = array('id_user' => session()->get('id'));
			$data['satu'] = $model->getwhere('user', $where);
			$data['agama'] = $model->tampil('agama');
			echo view('header');
			echo view('menu', $data);
			echo view('t_karyawan', $data);
			echo view('footer');
		} else {
			return redirect()->to('Home/login');
		}
	}

	public function aksi_t_karyawan()
	{
		$model = new M_pg();
		$uploadedFile = $this->request->getfile('gambar');
		$ab = $this->request->getPost('nama');
		$bc = $this->request->getPost('alamat');
		$cd = $this->request->getPost('jk');
		$ef = $this->request->getPost('nohp');
		$fg = $this->request->getPost('agama');
		$gh = $this->request->getPost('tgl');
		$hi = $this->request->getPost('nik');
		$ij = $this->request->getPost('email');
		$id = $this->request->getPost('id');

		$model = new M_pg;


		if ($uploadedFile->getName()) {
			$foto = $uploadedFile->getName();
			$model->upload($uploadedFile);
			

			$isi = array(
				'foto' => $foto,
				'username' => $ab,
				'alamat' => $bc,
				'jk' => $cd,
				'nohp' => $ef,
				'id_agama' => $fg,
				'email' => $ij,
				'delete' => '0',
				'update_by' => session()->get('id'),
				'update_at' => date('y,m,d,h,m,s'),

			);
		} else {
			

			$isi = array(

				'username' => $ab,
				'alamat' => $bc,
				'jk' => $cd,
				'nohp' => $ef,
				'id_agama' => $fg,
				'email' => $ij,
				'delete'=>'0',
				'update_by' => session()->get('id'),
				'update_at' => date('y,m,d,h,m,s'),
			);
		}


		$model->tambah('user', $isi);

		return redirect()->to('Home/karyawan');
		// print_r($isi);


	}


	public function hapus_profile($id)
	{
		$model = new M_pg();
		$where = array('id_user' => $id);
		$model->hapus('user', $where);

		return redirect()->to('Home');
	}

}