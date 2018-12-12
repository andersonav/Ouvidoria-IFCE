<?php

namespace App\Http\Controllers;

use DB;
use App\RespostaManifestacao;
use App\Manifestacao;
use Illuminate\Http\Request;

class ResponderManifestacoes extends Controller {

    public function responderManifestacoes() {
        return view('responderManifestacoes');
    }

    public function dadosManifestacoesPendentes() {
        $manifestacoes = DB::table('manifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->where('manifestacao.idTipoRespostaManifestacaoFk', '=', 2)
                ->where('manifestacao.status', '=', 1)
                ->orderBy('manifestacao.created_at', 'DESC')
                ->get();

        return response()->json($manifestacoes);
    }

    public function getDataManifestacaoToResponderManifestacao(Request $request) {
        $select = DB::table('manifestacao')
                ->select('tipo_resposta_manifestacao.*', 'tipo_manifestacao.*', 'manifestacao.*')
                ->join('tipo_resposta_manifestacao', 'manifestacao.idTipoRespostaManifestacaoFk', '=', 'tipo_resposta_manifestacao.idTipoRespostaManifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->where('idManifestacao', '=', $request->idManifestacao)
                ->where('manifestacao.status', '=', 1)
                ->get();
        return response()->json($select);
    }

    public function actionResponderManifestacao(Request $request) {
        $createResposta = RespostaManifestacao::create([
                    'idManifestacaoFk' => $request->idManifestacao,
                    'descricaoRespostaManifestacao' => $request->respostaManifestacao,
                    'status' => 1
        ]);

        $updateToRespondida = Manifestacao::where('idManifestacao', '=', $request->idManifestacao)->update(['idTipoRespostaManifestacaoFk' => '1']);


        return response()->json($request);
    }

}
