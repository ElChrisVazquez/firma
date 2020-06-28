<?php

// echo '<pre>' . var_dump($_POST) . '</pre>';
// echo  '<img src="'.$_POST["firma"].'">';

require_once "dompdf/autoload.inc.php";
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('
<h1 style="text-align:center;">nombre</h1>
<br>
<p>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore repellendus beatae quis impedit, error tempora, qui, eum commodi non molestiae placeat! Odio dignissimos consectetur distinctio blanditiis earum voluptate tenetur beatae!
</p>
<br>
<img src="' . $_POST["firma"] . '">

');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();





