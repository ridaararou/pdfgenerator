<?php

  if(isset($_GET['path']))
  {
    //Read the filename
    $filename =  $_GET['path'];

    echo 'Path:: ' . basename($filename) . '<br>.';
    //Check the file exists or not
    if(file_exists($filename)) {

      //Define header information
      // header('Content-Description: File Transfer');
      // header("Cache-Control: no-cache, must-revalidate");
      // header("Expires: 0");
      // header('Pragma: public');
      header("Content-type: application/pdf");
      header("Accept-Ranges: none");
      header("Content-disposition: attachment; filename=$filename");

      //Read the size of the file
      readfile($filename);

      // Terminate from the script
      die();
    }
    else {
      echo "File does not exist..";
    }
  }
  else
  echo "Filename is not defined."
?>