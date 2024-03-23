<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $x = $_POST["width"];
    $y = $_POST["height"];

    
    $wsdl = "http://localhost:3000/mdc/MDCCalculator.wsdl";

    try {
        $client = new SoapClient($wsdl, array('trace' => true));

        $response = $client->CalculateMDC(array('x' => $x, 'y' => $y));

        $mdc = $response->MDC;
        $aspectRatioX = $x / $mdc;
        $aspectRatioY = $y / $mdc;

        echo "<h2>Aspect Ratio da Imagem: $aspectRatioX : $aspectRatioY</h2>";
    } catch (SoapFault $e) {
        echo "<h2>Erro: " . $e->getMessage() . "</h2>";
    }
} else {
    header("Location: index.php");
    exit();
}
?>
