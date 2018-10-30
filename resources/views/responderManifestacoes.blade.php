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

        <table class="ui padded green celled table compact" id = "responderManisfestacoes">
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
            <tfoot>
            </tfoot>
        </table>

    </form>
</div>



<script type="text/javascript" src="{{asset('js/responderManifestacoes.js')}}"></script>