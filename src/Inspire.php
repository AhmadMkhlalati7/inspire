<?php

namespace AhmadMkhlalati7\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire {
    public function justDoIt() {
        $response = Http::get('https://dummyjson.com/products/'.rand(1,100));

        return $response['title'] . ' —' . $response['price'];
    }
}
