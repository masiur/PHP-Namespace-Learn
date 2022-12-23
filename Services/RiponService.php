<?php

namespace MyNamespace\Services;

class RiponService
{
        public function index()
        {
            return [
                'hello' => 'This is from RiponService',
                'name' => 'Ripon Sarkar',
                'age' => 25,
                'address' => 'Dhaka',
                'country' => 'Bangladesh',
                'email' => 'ripon@mail.com',
                'phone' => '01700000000'
            ];
        }

}