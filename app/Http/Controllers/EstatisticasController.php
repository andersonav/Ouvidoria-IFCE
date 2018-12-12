<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoManifestacao;
use DB;

class EstatisticasController extends Controller {

    public function estatisticas() {

        return view('estatisticas');
    }

    public function getLegendsEstatistic() {
        $legends = DB::table('tipo_manifestacao')
                ->orderBy("tipo_manifestacao.idTipoManifestacao", "ASC")
                ->get();

        return response()->json($legends);
    }

    public function getEstatistics() {
        $estatistics = DB::select("SELECT distinct(year(created_at)) as ano,
        (SELECT COUNT(idManifestacao) FROM manifestacao WHERE idTipoManifestacaoFk = 1 AND manifestacao.status = 1 AND year(created_at) = ano) as denuncia,
        (SELECT COUNT(idManifestacao) FROM manifestacao WHERE idTipoManifestacaoFk = 2 AND manifestacao.status = 1 AND year(created_at) = ano) as reclamacao,
        (SELECT COUNT(idManifestacao) FROM manifestacao WHERE idTipoManifestacaoFk = 3 AND manifestacao.status = 1 AND year(created_at) = ano) as sugestao,
        (SELECT COUNT(idManifestacao) FROM manifestacao WHERE idTipoManifestacaoFk = 4 AND manifestacao.status = 1 AND year(created_at) = ano) as elogio,
        (SELECT COUNT(idManifestacao) FROM manifestacao WHERE idTipoManifestacaoFk = 5 AND manifestacao.status = 1 AND year(created_at) = ano) as informacao
        FROM manifestacao WHERE manifestacao.status = 1");

        return response()->json($estatistics);
    }

}
