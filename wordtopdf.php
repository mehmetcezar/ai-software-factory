<?php
require 'vendor/autoload.php';

use PhpOffice\PhpWord\IOFactory;
use Dompdf\Dompdf;
use Dompdf\Options;

// Word dosyasının yolu
$wordDosyaYolu = 'aaaa.docx';

// PDF dosyasının kaydedileceği yol
$pdfDosyaYolu = 'test.pdf';

// Word belgesini yükleme ve HTML'ye dönüştürme
$phpWord = IOFactory::load($wordDosyaYolu, 'Word2007');
$htmlDosyaYolu = tempnam(sys_get_temp_dir(), 'html');
$htmlWriter = IOFactory::createWriter($phpWord, 'HTML');
$htmlWriter->save($htmlDosyaYolu);

// HTML içeriğini Dompdf ile PDF'ye dönüştürme
$htmlContent = file_get_contents($htmlDosyaYolu);
$htmlContent = trim($htmlContent); // Baş ve sondaki boşlukları temizle
$htmlContent = preg_replace('/\s+/', ' ', $htmlContent); // Fazla boşlukları temizle

// HTML başlığı ve meta karakter seti ekleme
$htmlContent = '<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>' . $htmlContent . '</body></html>';

// Dompdf oluşturma
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$options->set('defaultFont', 'DejaVu Sans');
$options->set('isFontSubsettingEnabled', true);
$dompdf = new Dompdf($options);

// HTML içeriğini PDF'ye dönüştürme
$dompdf->loadHtml($htmlContent);

// Sayfa boyutu ve yönlendirme ayarları
$dompdf->setPaper('A4', 'portrait');

// PDF'yi oluşturma
$dompdf->render();

// PDF dosyasını kaydetme
file_put_contents($pdfDosyaYolu, $dompdf->output());

// Geçici HTML dosyasını silme
unlink($htmlDosyaYolu);

echo "Dönüştürme başarılı! PDF dosyası: " . $pdfDosyaYolu;
?>