<?php
class MDCCalculator {
    public function CalculateMDC($x, $y) {
        $mdc = $this->gcd($x, $y);
        return $mdc;
    }

    private function gcd($a, $b) {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a;
    }
}

$server = new SoapServer("MDCCalculator.wsdl");
$server->setClass("MDCCalculator");
$server->handle();
?>
