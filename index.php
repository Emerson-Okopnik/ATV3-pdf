<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log_app.log', Level::Warning));

// add records to the log
$log->warning('Alerta aplicacao');
$log->error('Erro aplicacao');

// PDF



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1>');
$mpdf->WriteHTML('<br><p>Projeto de exemplo que utiliza Monolog para logs e mPDF para geração de PDFs.</p>');
$mpdf->WriteHTML('<br><p>Emerson Okopnik.</p>');
$mpdf->Output();

