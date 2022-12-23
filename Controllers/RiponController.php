<?php

namespace MyNamespace\Controllers;
use MyNamespace\Services\MasiurService;

class RiponController
{
    private $riponService;
    public function __construct()
    {
        $this->riponService = new \MyNamespace\Services\RiponService();
    }

    public function index()
    {
        return [
            'hello' => 'world from Ripon Controller index',
            'details' => 'I am about the details of Ripon Controller. I hope you will like it.'

        ];
    }

    public function serviceFunctionOfRipon()
    {
        return $this->riponService->index();
    }
    public function serviceFunctionOfMasiur()
    {
        $masiur = new MasiurService();
        return $masiur->index();
    }

    public function demoView()
    {
        $myData = $this->riponService->index();
        return "
                <h1>Hello World</h1>
                <p>This is a demo view</p>
                <p>It is a demo view from Ripon Controller</p>
                <p style='color:red'>It is a demo view from Ripon Controller</p>
                ".date('Y-m-d H:i:s')."<br>".$myData['name']."<br>".$myData['email']."<br>".$myData['phone']
            ;
    }

}
