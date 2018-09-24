<h1 class="textoTopoOuvidoria"><i class="bullhorn icon"></i>&nbsp;&nbsp;Abrir manifestação</h1>
<div class="ui divider"></div>
<div class="">
    <form class="ui form" id="formAbrirManifestacao" method="POST">
        <div class="errors" style="display: none;">
            <div class="ui negative message" id="mensagemRetorno"> 
                <i class="close icon"></i>
                <div class="header">Preencha os campos obrigatórios</div>
                <p class=""></p>
            </div>
        </div>
        <h4 class="ui header">Envie sua manifestação pelo formulário abaixo, os campos com asteriscos são obrigatórios</h4>
        <h2 class="ui dividing header">Sua identidade</h2>
        <div class="ui segment">
            <div class="ui grid">
                <div class="sixteen wide column">
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="checkIdentificacao" tabindex="0" class="hidden">
                        <label>Desejo me identificar</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="dadosPessoais">
            <h2 class="ui dividing header">Dados Pessoais</h2>
            <div class="two fields">
                <div class="required field identificacao">
                    <label>Identificação</label>
                    <input type="text" name="identificacao" placeholder="Digite sua identificação" maxlength="14">
                </div>
                <div class="required field nome">
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="Nome" tabindex="-1" id="camposCatracas">
                </div>
            </div>
            <div class="two fields">
                <div class="required field setor">
                    <label>Setor/Curso</label>
                    <input type="text" name="setor" placeholder="Setor/Curso" tabindex="-1" id="camposCatracas">
                </div>
                <div class="required field email">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email" tabindex="-1" id="camposCatracas">
                </div>
            </div>
        </div>
        <div class="othersInformations">
            <h2 class="ui dividing header">Tipo de Manifestação</h2>
            <div class="two fields">
                <div class="required field tipoManifestacao">
                    <label>Tipo</label>
                    <select class="ui fluid dropdown" name="tipoManifestacao">
                        <option value="">Selecione uma opção</option>
                        @foreach($tiposManifestacao as $tipoManifestacao)
                        <option value="{{$tipoManifestacao->idTipoManifestacao}}">{{$tipoManifestacao->descricaoTipoManifestacao}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="required field assunto">
                    <label>Assunto</label>
                    <input type="text" name="assunto" placeholder="Assunto">
                </div>
            </div>

            <h2 class="ui dividing header">Mensagem</h2>
            <div class="field descricaoMensagem">
                <label>Descrição</label>
                <textarea name="descricaoMensagem"></textarea>
            </div>
            <div class="field" id="botoes">
                <button type="button" class="positive ui button" id="btnEnviar">
                    Enviar
                </button>
                <button type="button" class="ui red button" id="btnLimparDescricao">
                    Limpar Descrição
                </button>
            </div>
        </div>
    </form>
</div> 

<div class="ui modal" id="modalRetornoManifestacao">
    <i class="close icon"></i>
    <div class="header">
        Aviso
    </div>
    <div class="content">

    </div>
    <div class="actions">
        <div class="ui black deny button">
            Nope
        </div>
        <div class="ui positive right labeled icon button">
            Yep, that's me
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/abrirManifestacao.js') }}" ></script>
