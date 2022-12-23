<?php

namespace MyNamespace\Services;
class MasiurService
{

    public function index()
    {
        return [
            'hello' => 'This is from MasiurService',
            'name' => 'Masiur Rahman Siddiki',
            'age' => 25,
            'address' => 'Dhaka',
            'country' => 'Bangladesh',
            'email' => 'masiur@mail.com',
            'phone' => '01700000000',
            'website' => 'masiur.com',
            'facebook' => 'facebook.com/masiur',
            'twitter' => 'twitter.com/masiur',
            'github' => 'github.com/masiur',
            'linkedin' => 'linkedin.com/masiur'
        ];
    }
}