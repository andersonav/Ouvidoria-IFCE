<h1 class="textoTopoOuvidoria"><i class="reply icon"></i>&nbsp;&nbsp;Responder Manifestações</h1>
<div class="ui divider"></div>
<div class="">
    <form class="ui form" action="javascript:void(0);">
        <h4 class="ui header">De acordo com seu número gerado, por favor coloque no campo abaixo</h4>
        <h2 class="ui dividing header">Manifestações</h2>
        <table class="ui padded green celled table compact" id = "tabela">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Tipo de Manifestação</th>
                    <th>Mensagem</th>
                    <th style="width: 15%">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($manifestacoes as $manifestacao)
                <tr>
                    <td>{{date('d/m/Y', strtotime($manifestacao->created_at))}}</td>
                    <td>{{$manifestacao->descricaoTipoManifestacao}}</td>
                    <td>{{$manifestacao->mensagemManifestacao}}</td>
                    <td>
                        <a class="ui tiny red icon button actionResponder" data-tooltip="Responder" id="{{$manifestacao->idManifestacao}}"><i class="reply icon"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </form>
</div>


<div class="ui small modal" id="modalRespostaManifestacao">
    <div class="header">Manifestação</div>
    <div class="content">
        <div class="ui comments" id="divResponderManifestacoes">
            <div class="comment">
                <a class="avatar">
                    <img src="{{asset("img/matt.jpg")}}">
                </a>
                <div class="content" id="pergunta">
                    <a class="author"></a>
                    <div class="metadata">
                        <div class="date"></div>
                    </div>
                    <div class="text">

                    </div>
                    <!--                    <div class="actions">
                                            <a class="reply active">Responder</a>
                                        </div>-->
                    <form class="ui reply form">
                        <div class="field">
                            <textarea></textarea>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui primary button">
            Responder
        </div>
        <div class="ui cancel button">Cancelar</div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/responderManifestacoes.js')}}"></script>