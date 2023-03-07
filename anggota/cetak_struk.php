<?php
 
//cetak ke pdf library
require '../library/fpdf.php';
include '../koneksi.php';

//instansiasi objek dan memberikan pengaturan halaman pdf
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

//buat judulnya disini
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Struk Pemesanan',0,0,'C');

//buat pengaturan tabel head
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(35,7,'Resi',1,0,'C');
$pdf->Cell(50,7,'Barang',1,0,'C');
$pdf->Cell(35,7,'Status',1,0,'C');

//buat pengaturan isi tabel
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
//$data = mysqli_query($koneksi,"select * from orders");
$resi = $_GET['id'];
$data = mysqli_query($koneksi, "select * from orders where id='$resi'");
while($meledak = mysqli_fetch_array($data)){
    $pdf->Cell(10,7,$no++,1,0,'C');
    $pdf->Cell(35,7,$meledak['id'],1,0,'C');
    $pdf->Cell(50,7,$meledak['name'],1,0,'C');
    $pdf->Cell(35,7,$meledak['status'],1,1,'C');
}
$pdf->Output();

?>