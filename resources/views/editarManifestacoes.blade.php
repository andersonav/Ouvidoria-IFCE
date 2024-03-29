<h1 class="textoTopoOuvidoria"><i class="reply icon"></i>&nbsp;&nbsp;Editar Manifestações</h1>
<div class="ui divider"></div>
<div class="">
    <form class="ui form" action="javascript:void(0);">
        <h4 class="ui header">De acordo com seu número gerado, por favor coloque no campo abaixo</h4>
        <h2 class="ui dividing header">Manifestações</h2>
        <table class="ui padded green celled table compact" id = "tableEditManifestacoes">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Tipo de Manifestação</th>
                    <th>Mensagem</th>
                    <th>Resposta</th>
                    <th style="width: 15%">Ação</th>
                </tr>
            </thead>
            <tbody id="corpoManifestacaoRespondida">
                <!--                @foreach($manifestacoes as $manifestacao)
                                <tr>
                                    <td>{{date('d/m/Y', strtotime($manifestacao->created_at))}}</td>
                                    <td>{{$manifestacao->descricaoTipoManifestacao}}</td>
                                    <td>{{$manifestacao->mensagemManifestacao}}</td>
                                    <td>
                                        <a class="ui tiny yellow icon button actionEdit" data-tooltip="Editar" id="{{$manifestacao->idManifestacao}}"><i class="pencil icon"></i></a>
                                        <a class="ui tiny red icon button actionDelete" data-tooltip="Deletar" id="{{$manifestacao->idManifestacao}}"><i class="trash icon"></i></a>
                                    </td>
                                </tr>
                                @endforeach-->
            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </form>
</div>


<script type="text/javascript" src="{{asset('js/editarManifestacoes.js')}}"></script>