<html>
  <head>
    <title>Guestbook</title>
    <META
      http-equiv="Content-Type"
      content="text/html; charset=windows-1251">
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
  <?php
    $xslDoc = new DOMDocument();
   $xslDoc->load("items.xsl");

   $xmlDoc = new DOMDocument();
   $xmlDoc->load("2task.xml");
	phpinfo();
   $proc = new XSLTProcessor();
   $proc->importStylesheet($xslDoc);
   echo $proc->transformToXML($xmlDoc);
    ?>
  </body>
</html>