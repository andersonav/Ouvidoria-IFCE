<h1 class="textoTopoOuvidoria"><i class="reply icon"></i>&nbsp;&nbsp;Responder Manifestações</h1>
<div class="ui divider"></div>
<div class="">
    <form class="ui form" action="javascript:void(0);">
        <h4 class="ui header">Manifestações pendentes listadas abaixo.</h4>
        <div class="divMensagemRetorno" style="display: none;">
            <div class="ui positive message" id="mensagemRetorno"> 
                <i class="close icon"></i>
                <div class="header">Manifestação respondida com sucesso.</div>
                <p class=""></p>
            </div>
        </div>
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
            <tbody id="corpoManifestacoesPendentes">

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
                        <div class="field" id="divRespostaManifestacao">
                            <textarea id="respostaManifestacao"></textarea>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui primary button btnResponder">
            Responder
        </div>
        <div class="ui cancel button">Cancelar</div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/responderManifestacoes.js')}}"></script>