<?php
// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: some=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('index.htm', false, $context);

echo var_dump($_SERVER);

exit($file);

?>