<?php
 
//cetak ke pdf library
require '../library/fpdf.php';
include '../koneksi.php';



//instansiasi objek dan memberikan pengaturan halaman pdf
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();



//buat judulnya disini bang
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'Data Buku',0,0,'C');

//buat pengaturan tabel head
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(50,7,'Judul',1,0,'C');
$pdf->Cell(75,7,'Pengarang',1,0,'C');
$pdf->Cell(55,7,'Tahun Terbit',1,0,'C');

//buat pengaturan isi tabell
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"select * from buku");
while($meledak = mysqli_fetch_array($data)){
    $pdf->Cell(10,7,$no++,1,0,'C');
    $pdf->Cell(50,7,$meledak['judul_buku'],1,0,'C');
    $pdf->Cell(75,7,$meledak['pengarang'],1,0,'C');
    $pdf->Cell(55,7,$meledak['thn_terbit'],1,1,'C');
}
    
$pdf->Output();


?>