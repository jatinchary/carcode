<?php
namespace CarCode\Intface;
interface Payments {
    public function fullPayment();
    public function downPaymentWithFinance();
    public function fullFinance();
}
?> 