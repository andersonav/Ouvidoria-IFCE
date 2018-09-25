<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstatisticasController extends Controller {

    public function estatisticas() {

        return view('estatisticas');
    }

}
