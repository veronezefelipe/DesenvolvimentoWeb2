<?php
$x = 640;
$y = 480;

$wsdl = "http://localhost:3000/mdc/MDCCalculator.wsdl";

try {

    $client = new SoapClient($wsdl, array('trace' => true));


    $response = $client->CalculateMDC(array('x' => $x, 'y' => $y));


    $mdc = $response->MDC;
    $aspectRatioX = $x / $mdc;
    $aspectRatioY = $y / $mdc;


    echo "Aspect Ratio da imagem: $aspectRatioX : $aspectRatioY\n";
} catch (SoapFault $e) {

    echo "Erro: " . $e->getMessage() . "\n";
}
?>
