<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ResponderManifestacoes extends Controller {

    public function responderManifestacoes() {
        $manifestacoes = DB::table('manifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->orderBy('manifestacao.created_at', 'DESC')
                ->where('manifestacao.idTipoRespostaManifestacaoFk', '=', 2)
                ->get();

        return view('responderManifestacoes', compact('manifestacoes'));
    }

    public function getDataManifestacaoToResponderManifestacao(Request $request) {
        $select = DB::table('manifestacao')
                        ->select('tipo_resposta_manifestacao.*', 'tipo_manifestacao.*', 'manifestacao.*')
                        ->join('tipo_resposta_manifestacao', 'manifestacao.idTipoRespostaManifestacaoFk', '=', 'tipo_resposta_manifestacao.idTipoRespostaManifestacao')
                        ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                        ->where('idManifestacao', '=', $request->idManifestacao)->get();
        return response()->json($select);
    }

}
