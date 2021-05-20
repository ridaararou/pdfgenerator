<?php
require "pdfcrowd.php";

// test pdf examples here as well
// https://pdfcrowd.com/playground/html-to-pdf/78e16d0ad3a047188829/

try
{
    echo '<div style="font-family: system-ui, helvetica , arial, sans-serif;"> <h3>Kreatinc PDF Generator</h3>';
    
    if(!isset($_GET["url"]))
    {
      echo '<p> Please add url on the url paramater for example (?url=http://kreatinc.dev) ';
      return;
    }
    $width = htmlspecialchars($_GET["width"] ?? '8.26in');
    $height = htmlspecialchars($_GET["height"] ?? '11.69in');
    $url = htmlspecialchars($_GET["url"] ?? 'https://l2l-prints.boringserver.com/postcard-listings-regular-front.html') ;
    $mt = htmlspecialchars($_GET["mt"] ?? 0) ;
    $mb = htmlspecialchars($_GET["mb"] ?? 0);
    $mr = htmlspecialchars($_GET["mr"] ?? 0);
    $ml = htmlspecialchars($_GET["ml"] ?? 0);
    $noMargin = (int)htmlspecialchars($_GET["noMargin"] ?? 0);

    // $margin = htmlspecialchars($_GET["margin"]) ?? 0;
    
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToPdfClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");
    // $client = new \Pdfcrowd\HtmlToPdfClient("kreatinc", "c463ee940aa72a445209e4a96d18d707");
    // $client = new \Pdfcrowd\HtmlToPdfClient("listingstoleads", "b16c5ad3f0596dd6d25915cdea4fc0ab++");

    // configure the conversion
    $client->setPageWidth($width);
    $client->setPageHeight($height);

    $client->setNoMargins($noMargin);

    $client->setMarginTop($mt);
    $client->setMarginRight($mr);
    $client->setMarginBottom($mb);
    $client->setMarginLeft($ml);

    // https://l2l-prints.boringserver.com/postcard-listings-regular-front.html
    // "http://bd620e03d2be.ngrok.io/postcard-listings-regular-back.html";

    // URL: run the conversion and write the result to a file
    $pdf = $client->convertUrlToFile($url, "generatedPdf.pdf");

    echo '<p><a href="download.php?path=generatedPdf.pdf">Download The PDF</a></p>';

    // from local file
    // $client->convertFileToFile("door-hanger-listings.html", "generatedPdf.pdf");

    // html code
    // $pdf = $client->convertStringToFile("<html> <body> Hello World! </body> </html>", "generatedPdf.pdf");

    echo 'DONE! <br>
    You can use this one as well: <a href="https://pdfcrowd.com/playground/html-to-pdf/78e16d0ad3a047188829/" target="_blank">PDF Generator</a>  
    <br><br> <iframe style="min-height: 87vh;" frameborder="0" width="100%" height="800" src="generatedPdf.pdf" ></iframe>';


    // to download it
    // header("Content-type: application/pdf");
    // header("Cache-Control: no-cache");
    // header("Accept-Ranges: none");
    // header("Content-disposition: attachment; filename=generatedPdf.pdf");
    // readfile("generatedPdf.pdf");

    // echo $pdf;

    
}
catch(\Pdfcrowd\Error $why)
{
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    echo 'You can use this one as well: <a href="https://pdfcrowd.com/playground/html-to-pdf/78e16d0ad3a047188829/" target="_blank">PDF Generator</a>  ';
    throw $why;
}

?>



<!--  -->

<?php
  // 
  // require "pdfcrowd.php";
  
  // $client = new Pdfcrowd("RidaDev", "34498a914900386d80f11182f862c8a7");
  // $client->setPageHeight("297mm");
  // $client->setPageWidth("210mm");
  // // $client->setPageMargins("0mm","0mm","0mm","0mm"); (generate a pdf in full page)
  // $Html = '<html>
  // <body>
  // <h1>Hello World RIDA here</h1>
  // <p>ListingsToleads.</p>
  // </body>
  // </html> ';
  // $filename1 = "DemoPdf.pdf";

  // $client->convertHtml($Html, fopen($filename1, 'wb'));
  // // if we have URL of the page then we can use below method
  // // $urlToMakePdf = 'test.html';
  // //$client->convertURI($urlToMakePdf, fopen($filename1, 'wb'));
?>