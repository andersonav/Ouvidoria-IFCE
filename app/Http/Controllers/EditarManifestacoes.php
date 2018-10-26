<?php

namespace App\Http\Controllers;

use DB;
use App\RespostaManifestacao;
use App\Manifestacao;
use Illuminate\Http\Request;

class EditarManifestacoes extends Controller {

    public function editarManifestacoes() {
        $manifestacoes = DB::table('manifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->orderBy('manifestacao.created_at', 'DESC')
                ->where('manifestacao.idTipoRespostaManifestacaoFk', '=', 1)
                ->where('manifestacao.status', '=', 1)
                ->get();

        return view('editarManifestacoes', compact('manifestacoes'));
    }

    public function dadosManifestacoesRespondidas() {
        $manifestacao = DB::table('manifestacao')
                ->select('tipo_resposta_manifestacao.*', 'tipo_manifestacao.*', 'manifestacao.*', 'respostaManifestacao.created_at as respostaDataCreated', 'respostaManifestacao.updated_at as respostaDataUpdated', 'respostaManifestacao.descricaoRespostaManifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->join('tipo_resposta_manifestacao', 'manifestacao.idTipoRespostaManifestacaoFk', '=', 'tipo_resposta_manifestacao.idTipoRespostaManifestacao')
                ->join('respostaManifestacao', 'respostaManifestacao.idManifestacaoFk', '=', 'manifestacao.idManifestacao')
                ->where('manifestacao.status', '=', 1)
                ->where('respostaManifestacao.status', '=', 1)
                ->get();
        return response()->json($manifestacao);
    }

    public function actionEditManifestacao(Request $request) {
        $manifestacao = DB::table('manifestacao')
                ->select('tipo_resposta_manifestacao.*', 'tipo_manifestacao.*', 'manifestacao.*', 'respostaManifestacao.created_at as respostaDataCreated', 'respostaManifestacao.updated_at as respostaDataUpdated', 'respostaManifestacao.descricaoRespostaManifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->join('tipo_resposta_manifestacao', 'manifestacao.idTipoRespostaManifestacaoFk', '=', 'tipo_resposta_manifestacao.idTipoRespostaManifestacao')
                ->join('respostaManifestacao', 'respostaManifestacao.idManifestacaoFk', '=', 'manifestacao.idManifestacao')
                ->where('manifestacao.idManifestacao', '=', $request->idManifestacao)
                ->where('manifestacao.status', '=', 1)
                ->where('respostaManifestacao.status', '=', 1)
                ->orderBy('manifestacao.created_at', 'DESC')
                ->get();
        return response()->json($manifestacao);
    }

    public function actionEditWhenClick(Request $request) {
        $updateManifestacao = RespostaManifestacao::where("idManifestacaoFk", "=", $request->idManifestacao)->update([
            "descricaoRespostaManifestacao" => $request->respostaManifestacao
        ]);
        return response()->json($request);
    }

    public function actionDeleteManifestacao(Request $request) {
        $updateManifestacao = Manifestacao::where("idManifestacao", "=", $request->idManifestacao)->update([
            "status" => 0
        ]);

        $updateManifestacao = RespostaManifestacao::where("idManifestacaoFk", "=", $request->idManifestacao)->update([
            "status" => 0
        ]);
        return response()->json($request);
    }

}
