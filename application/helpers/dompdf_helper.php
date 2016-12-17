<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use Dompdf\Dompdf;

function pdf_create($html, $filename='', $stream=TRUE)
{
    require_once APPPATH.'third_party/dompdf/autoload.inc.php';
    
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->render();
    if ($stream)
        $dompdf->stream($filename);
    else
        return $dompdf->output();
}
?>