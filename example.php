<h1>hello world</h1>

<?php
require './pdfcrowd.php';

try
{
    $image = 'image';
    $html = '<html lang="en"><head>
          <meta charset="UTf-8">
          <title>Template 01 | Social Share Image</title>
          <meta name="description" content="Template 01 of social Share Image">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link rel="stylesheet" href="https://l2l-develop.boringserver.com/css/avenir-next.min.css">
          <link rel="stylesheet" href="https://l2l-develop.boringserver.com/css/main.css">
        </head>
        <section class="img-editor">
          <div class="img-editor-body">
            <img src="https://l2l-develop.boringserver.com/img/1.jpg" alt="share image" class="img-editor-bg">
            <div class="img-editor-content" data-ie="content">
              <section class="banner">
                <h3 data-ie="title" class="title">Coming Soon in Granite Bay!</h3>
                <p data-ie="subtitle" class="subtitle">Click or Text 10002 to 256748 for Photos &amp; Details!</p>
              </section>
            </div>
          </div>
        </section></html>';

    
    // create the API client instance
    $client = new \Pdfcrowd\HtmlToImageClient("demo", "ce544b6ea52a5621fb9d55f8b542d14d");
    // configure the conversion
    $client->setOutputFormat("png");
    // run the conversion and write the result to a file
    $image = $client->convertStringToFile($html, "social.png");


    echo '<br>done';
}
catch(\Pdfcrowd\Error $why)
{
  echo 'err';
    // report the error
    error_log("Pdfcrowd Error: {$why}\n");

    // rethrow or handle the exception
    throw $why;
}

?>



