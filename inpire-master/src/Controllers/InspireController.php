<?php
namespace Matrixm\Inspire\Controllers;

use Illuminate\Http\Request;
use Matrix\Inspire\Inspire;

class InspireController
{
    public function invoke(Inspire $inspire) { 
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}