<?php
namespace MyNamespace\Controllers;
class MasiurController
{
    public function myfunction()
    {
        $ourArr = [];
        $str = "Masiur is a good boy";
        $str2 = "Ripon is also good boy";

        for ($counter = 0; $counter <= 5; $counter++) {
           $ourArr[] = [
               'of_masiur' => $str,
               'of_ripon' => $str2
           ];
        }
        return $ourArr;
    }
}