<?php

require_once ROOTPATH . 'vendor/autoload.php';

ob_start(); // Mulai penangkapan output

// Load the Excel file or use your existing data source
// ...

// Ambil tanggal awal dan tanggal akhir
$tanggalmulai = $satu[0]->tanggal_transaksi;
$tanggalakhir = $satu[0]->tanggal_transaksi;
foreach ($satu as $key) {
    if ($key->tanggal_transaksi < $tanggalmulai) {
        $tanggalmulai = $key->tanggal_transaksi;
    }
    if ($key->tanggal_transaksi > $tanggalakhir) {
        $tanggalakhir = $key->tanggal_transaksi;
    }
}

// Create a new PDF instance
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Set document information
$pdf->SetCreator('Your Name');
$pdf->SetAuthor('Your Name');
$pdf->SetTitle('Table to PDF');
$pdf->SetSubject('Table to PDF');

// Set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);

// Add a page
$pdf->AddPage();

// Set font
$pdf->SetFont('helvetica', '', 12);
$imagePath = FCPATH . 'img\logopg.png';

// Output HTML table content to PDF
?>

<img src="<?php echo $imagePath; ?>" alt="Image Description" width="100" height="30">
<h3><?= 'Tanggal Awal: ' . $tanggalmulai . ' - Tanggal Akhir: ' . $tanggalakhir ?></h3>
<table border="1" align="center" width="100%">
    <thead>
        <tr>
            <th scope="col" width="7%">No</th>
            <th scope="col" width="40%">No Transaksi</th>
            <th scope="col" width="13%">Paket</th>
            <th scope="col" width="13%">Pelanggan</th>
            <th scope="col" width="27%">Harga</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $totalHarga = 0; // Inisialisasi total harga
        foreach ($satu as $key) {
            ?>
            <tr>
                <td width="7%" align="center"><?= $no++ ?></td>
                <td width="40%"><?= $key->no_trans ?></td>
                <td width="13%"><?= $key->nama_Paket ?></td>
                <td width="13%"><?= $key->nama_anak ?></td>
                <td width="27%" align="center">Rp<?= number_format($key->harga, 0, ',', '.') ?></td>
            </tr>
            <?php
            // Tambahkan harga ke total harga
            $totalHarga += $key->harga;
        }
        ?>
    </tbody>
</table>

<!-- Tampilkan total harga di bawah tabel -->
<p>Total Harga: Rp<?= number_format($totalHarga, 0, ',', '.') ?></p>

<?php
$html = ob_get_contents(); // Simpan output yang ditangkap ke variabel
ob_end_clean(); // Bersihkan output yang ditangkap

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->lastPage();

// Save the PDF file
$pdf->Output('output.pdf', 'I'); // 'D' for download, 'F' for save to file

exit;
?>
