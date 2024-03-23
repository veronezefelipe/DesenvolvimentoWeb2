<?php

$wsdl = "http://www.dneonline.com/calculator.asmx?WSDL";

try {
    $client = new SoapClient($wsdl, array('trace' => 1));

    $params = array(
        'intA' => 10,
        'intB' => 5
    );

    $result = $client->Add($params);

    $addResult = $result->AddResult;

    echo "Resultado da adição: $addResult\n";

} catch (SoapFault $e) {

    echo "Erro: " . $e->getMessage() . "\n";
    
}
?>
