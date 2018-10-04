<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class EditarManifestacoes extends Controller {

    public function editarManifestacoes() {
        $manifestacoes = DB::table('manifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->orderBy('manifestacao.created_at', 'DESC')
                ->where('manifestacao.idTipoRespostaManifestacaoFk', '=', 1)
                ->get();

        return view('editarManifestacoes', compact('manifestacoes'));
    }

}
