<?php
function start_page ($title)
{
    echo '<!DOCTYPE html> ' . PHP_EOL .
        '<html lang=fr style="height: 100%;"> ' . PHP_EOL .
        '<head>
                    <title>' . $title . '</title>
                  </head>
                  <body style="height: 100%; margin: 0;">' . PHP_EOL;
};
function end_page (){
    echo '</body>
                  </html>';
}