<?php
date_default_timezone_set('Asia/Jakarta');
// Check if GD extension is enabled
if (extension_loaded('gd')) {
    echo "GD extension is enabled.";
} else {
    echo "GD extension is not enabled.";
}
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data

    $paket = urldecode($_GET['paket']);
    $anak = urldecode($_GET['anak']);
    $harga = urldecode($_GET['Harga']);
    $nominal = urldecode($_GET['nominal']);
    $kembalian = urldecode($_GET['Kembalian']);
    $metode = urldecode($_GET['metode']);
    $id = $_GET['id'];
    
    // Parse the selected package
    list($id_paket, $durasi, $harga, $nama_paket) = explode('|', $paket);
    list($id_anak, $nama_anak, $orang_tua, $umur) = explode('|', $anak);
    // Now you have the form data, you can use TCPDF to generate a PDF
    require_once ROOTPATH . 'vendor/autoload.php'; // Change this line

    // Create a new TCPDF instance
    $pdf = new TCPDF('P', 'mm', array(216, 330), true, 'UTF-8', false); // Set page size to match the note size

    // Set document information
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Form Data to PDF');
    $pdf->SetSubject('Form Data to PDF');
    $imagePath = FCPATH . 'img\logosvg.svg';
    $imageWidth = 35; // Ganti dengan lebar gambar yang sesuai
    $pageWidth = $pdf->getPageWidth();
    $x = ($pageWidth - $imageWidth) / 2;
    // Add the first page
    // Tetapkan panjang halaman yang berbeda
$newPageHeight = 180; // Ganti dengan panjang yang diinginkan dalam satuan mm

// Tambahkan halaman dengan lebar tetap A6 dan panjang yang telah ditentukan
$pdf->AddPage('P', array(100, $newPageHeight));


    // Set margins (left, top, right)
    $pdf->SetMargins(5, 5, 5);

    // Set auto page breaks
    $pdf->SetAutoPageBreak(true, 5);

    // Set font
    $pdf->SetFont('helvetica', '', 10);

    // Calculate harga based on durasi
    

    
    
    // Add content to the first page

    
    $html = '<p style="text-align:center;"><img src="' . $imagePath . '" style="width: ' . $imageWidth . 'px;"></p>';
    $html = '<h1 align="center">Playground</h1>';
    $html .= '<p><strong>Kasir:</strong> ' . $id . '</p>';
    $html .= '<p><strong>Nama Pelanggan:</strong> ' . $nama_anak . '</p>';
    $html .= '<p><strong>Umur:</strong> ' . $umur . '</p>';
    $html .= '<p><strong>Paket:</strong> '.$nama_paket .  '</p>';
    $html .= '<p><strong>Durasi:</strong> '. $durasi . '</p>';
    $html .= '<p><strong>Harga:</strong> '. 'Rp ' . number_format($harga, 0, ',', '.') .'</p>';
    $html .= '<p><strong>Nominal:</strong> '.$nominal .  '</p>';
    $html .= '<p><strong>Kembalian:</strong> '.$kembalian .  '</p>';
    $html .= '<p><strong>Pembayaran pada :</strong> ' . date('Y-m-d H:i:s') . '</p>';
    $html .= '<p><strong>----------------------------------------------------------------------------</strong></p>';
    $html .= '<p><strong>Total Harga:</strong> '. 'Rp ' . number_format($harga, 0, ',', '.') .'</p>';
    // Output the HTML content to the first page
    $pdf->writeHTML($html, true, false, true, false, '');

    // Save the PDF file
    $pdfContent = $pdf->Output('output.pdf', 'S'); // 'S' returns the PDF as a string

    // Output PDF content directly to the browser
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="output.pdf"');
    header('Cache-Control: private, max-age=0, must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . strlen($pdfContent));
    ob_clean();
    flush();
    echo $pdfContent;

    // Exit the script
    exit;
}

?>
