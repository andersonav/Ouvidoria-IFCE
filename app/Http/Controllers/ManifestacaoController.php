<?php

namespace App\Http\Controllers;

use Sunra\PhpSimple\HtmlDomParser;
use Validator;
use Illuminate\Http\Request;
use App\Manifestacao;
use DB;

class ManifestacaoController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function abrirManifestacao() {
        $tiposManifestacao = DB::table('tipo_manifestacao')->get();

        return view('abrirManifestacao', compact('tiposManifestacao'));
    }

    public function getDataUsers(Request $request) {
        $post_data = array(
            "location" => "ouvidoria",
            "user" => "sysOuvidoria",
            "password" => "#S3st3m40uv1doria"
        );
        /* ================================== */

        $mainURL = "http://intranet.maracanau.ifce.edu.br/api/v1/" . $post_data['location'];

        /* ++++++++++++++++++++++++++++++++++ fim das configurações gerais +++++++++++++++++++++ */

// Exemplo de busca de usuário
        $pegarUsuario = $mainURL . "/usuario";
// Pegando os dados para enviar
        $dados = $post_data;
// Passando a matricula do usuário
        $dados["identificacao"] = $request->identificacao;

        /*         * ***************** Configuração do CURL ****************** */
// Carregando a página via CURL
        $curl = curl_init($pegarUsuario);
// Informando o tipo POST
        curl_setopt($curl, CURLOPT_POST, true);
// Passando os parametros
        curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_COOKIEFILE, "/tmp/cookie.txt");
        curl_setopt($curl, CURLOPT_COOKIEJAR, "/tmp/cookie.txt");
        /*         * ********************************************************* */

// Executando as configurações do CURL
        $json = curl_exec($curl);
// Retornando o dados em formato JSON
//        echo utf8_decode($json);
        return response()->json($json, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
// Fechando a conexão CURL
        curl_close($curl);
    }

    public function logicAbrirManifestacao(Request $request) {
        $validator = $this->validateForm($request);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $idTipoIdentificacaoFk = 1;
            if ($request->identificacao == "") {
                $idTipoIdentificacaoFk = 2;
            }
            $manifestacao = Manifestacao::create([
                        "assuntoManifestacao" => $request->assunto,
                        "mensagemManifestacao" => $request->descricaoMensagem,
                        "identificacaoUsuario" => $request->identificacao,
                        "nomeUsuario" => $request->nome,
                        "emailUsuario" => $request->email,
                        "setorUsuario" => $request->setor,
                        "idTipoIdentificacaoFk" => $idTipoIdentificacaoFk,
                        "idTipoManifestacaoFk" => $request->tipoManifestacao,
                        "idTipoRespostaManifestacaoFk" => 2,
                        "status" => 1
                    ])->id;
            return response()->json(array('success' => true, 'last_insert_id' => $manifestacao));
        }
    }

    public function validateForm(Request $request) {
        if ($request->checkIdentificacao == "on") {
            $validator = Validator::make($request->all(), [
                        'identificacao' => 'required',
                        'nome' => 'required',
                        'setor' => 'required',
                        'email' => 'required|email',
                        'tipoManifestacao' => 'required',
                        'assunto' => 'required',
                        'descricaoMensagem' => 'required',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                        'tipoManifestacao' => 'required',
                        'assunto' => 'required',
                        'descricaoMensagem' => 'required',
            ]);
        }
        return $validator;
    }

    public function buscarManifestacao() {
        $manifestacoesRespondidasRecentes = DB::table('manifestacao')
                ->select('tipo_resposta_manifestacao.*', 'tipo_manifestacao.*', 'manifestacao.*', 'respostaManifestacao.created_at as respostaDataCreated', 'respostaManifestacao.updated_at as respostaDataUpdated', 'respostaManifestacao.descricaoRespostaManifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->join('tipo_resposta_manifestacao', 'manifestacao.idTipoRespostaManifestacaoFk', '=', 'tipo_resposta_manifestacao.idTipoRespostaManifestacao')
                ->join('respostaManifestacao', 'respostaManifestacao.idManifestacaoFk', '=', 'manifestacao.idManifestacao')
                ->orderBy('manifestacao.created_at', 'DESC')
                ->where('manifestacao.status', '=', 1)
                ->limit(5)
                ->get();
        return view('buscarManifestacao', compact('manifestacoesRespondidasRecentes'));
    }

    public function getDataManifestacao(Request $request) {
        $select = DB::table('manifestacao')
                ->select('tipo_resposta_manifestacao.*', 'tipo_manifestacao.*', 'manifestacao.*', 'respostaManifestacao.created_at as respostaDataCreated', 'respostaManifestacao.updated_at as respostaDataUpdated', 'respostaManifestacao.descricaoRespostaManifestacao')
                ->join('tipo_resposta_manifestacao', 'manifestacao.idTipoRespostaManifestacaoFk', '=', 'tipo_resposta_manifestacao.idTipoRespostaManifestacao')
                ->join('tipo_manifestacao', 'manifestacao.idTipoManifestacaoFk', '=', 'tipo_manifestacao.idTipoManifestacao')
                ->leftJoin('respostaManifestacao', 'respostaManifestacao.idManifestacaoFk', '=', 'manifestacao.idManifestacao')
                ->where('idManifestacao', '=', $request->idManifestacao)
                ->where('manifestacao.status', '=', 1)
                ->get();
        return response()->json($select);
    }

}
