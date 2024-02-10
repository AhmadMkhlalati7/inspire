<?php

namespace AhmadMkhlalati7\Inspire\Controllers;

use AhmadMkhlalati7\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
