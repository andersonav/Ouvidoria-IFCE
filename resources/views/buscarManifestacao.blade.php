<h1 class="textoTopoOuvidoria"><i class="search icon"></i>&nbsp;&nbsp;Buscar Manifestação</h1>
<div class="ui divider"></div>
<div class="">
    <form class="ui form" action="javascript:void(0);">
        <h4 class="ui header">De acordo com seu número gerado, por favor coloque no campo abaixo</h4>
        <h2 class="ui dividing header">Número da Manifestação</h2>
        <div class="field" id="fieldInputPesquisarManifestacao">
            <div class="ui icon input">
                <input type="text" placeholder="Procurar..." id="inputSearchId">
                <i class="inverted circular search link icon" name="searchById" style="background-color: #34483F !important;" id="searchById"></i>
            </div>
        </div>
        <h2 class="ui dividing header">Manifestações recentes</h2>
        <div class="field">
            <div class="ui comments" id="comentariosInBuscarManifestacao">
                @empty($manifestacoesRespondidasRecentes)
                <h4 class="ui header">Ainda não existem manifestações respondidas.</h4>
                @endempty
                @foreach($manifestacoesRespondidasRecentes as $manifestacaRespondidaRecente)
                <div class="comment">
                    <a class="avatar">
                        <img src="{{asset('img/matt.jpg')}}">
                    </a>
                    <div class="content">
                        @php
                        $nomeUsuario
                        @endphp
                        @if($manifestacaRespondidaRecente->nomeUsuario)
                        @php
                        $nomeUsuario = $manifestacaRespondidaRecente->nomeUsuario
                        @endphp
                        @else
                        @php
                        $nomeUsuario = "Anônimo"
                        @endphp
                        @endif
                        <a class="author">{{$nomeUsuario}}</a>
                        <div class="metadata">
                            <span class="date">{{ date( 'd/m/Y' , strtotime($manifestacaRespondidaRecente->created_at))}}</span>
                        </div>
                        <div class="text">
                            {{$manifestacaRespondidaRecente->mensagemManifestacao}}
                        </div>
                        <!--                    <div class="actions">
                                                <a class="reply">Reply</a>
                                            </div>-->
                    </div>
                    <div class="comments">
                        <div class="comment">
                            <a class="avatar">
                                <img src="{{asset('img/ifce.png')}}">
                            </a>
                            <div class="content">
                                <a class="author">IFCE</a>
                                <div class="metadata">
                                    <span class="date"> {{date( 'd/m/Y' , strtotime($manifestacaRespondidaRecente->respostaDataCreated))}}</span>
                                </div>
                                <div class="text">
                                    {{$manifestacaRespondidaRecente->descricaoRespostaManifestacao}}
                                </div>
                                <!--                            <div class="actions">
                                                                <a class="reply">Reply</a>
                                                            </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--                <div class="comment">
                                    <a class="avatar">
                                        <img src="{{asset('img/user-no.png')}}">
                                    </a>
                                    <div class="content">
                                        <a class="author">Thiago Valente</a>
                                        <div class="metadata">
                                            <span class="date">Ontem às 17:42PM</span>
                                        </div>
                                        <div class="text">
                                            Como está o sistema das catracas?
                                        </div>
                                                            <div class="actions">
                                                                <a class="reply">Reply</a>
                                                            </div>
                                    </div>
                                    <div class="comments">
                                        <div class="comment">
                                            <a class="avatar">
                                                <img src="{{asset('img/ifce.png')}}">
                                            </a>
                                            <div class="content">
                                                <a class="author">IFCE</a>
                                                <div class="metadata">
                                                    <span class="date">Hoje às 14:30PM</span>
                                                </div>
                                                <div class="text">
                                                    A sua resposta está sendo analizada de acordo com o pensamento do próprio.
                                                </div>
                                                                            <div class="actions">
                                                                                <a class="reply">Reply</a>
                                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="{{asset('img/matt.jpg')}}">
                                    </a>
                                    <div class="content">
                                        <a class="author">Matheus Moreira</a>
                                        <div class="metadata">
                                            <span class="date">Ontem às 17:42PM</span>
                                        </div>
                                        <div class="text">
                                            Como está o sistema das catracas?
                                        </div>
                                                            <div class="actions">
                                                                <a class="reply">Reply</a>
                                                            </div>
                                    </div>
                                    <div class="comments">
                                        <div class="comment">
                                            <a class="avatar">
                                                <img src="{{asset('img/ifce.png')}}">
                                            </a>
                                            <div class="content">
                                                <a class="author">IFCE</a>
                                                <div class="metadata">
                                                    <span class="date">Hoje às 14:30PM</span>
                                                </div>
                                                <div class="text">
                                                    A sua resposta está sendo analizada de acordo com o pensamento do próprio.
                                                </div>
                                                                            <div class="actions">
                                                                                <a class="reply">Reply</a>
                                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="{{asset('img/user-no.png')}}">
                                    </a>
                                    <div class="content">
                                        <a class="author">Maurício Abreu</a>
                                        <div class="metadata">
                                            <span class="date">Ontem às 17:42PM</span>
                                        </div>
                                        <div class="text">
                                            Como está o sistema das catracas?
                                        </div>
                                                            <div class="actions">
                                                                <a class="reply">Reply</a>
                                                            </div>
                                    </div>
                                    <div class="comments">
                                        <div class="comment">
                                            <a class="avatar">
                                                <img src="{{asset('img/ifce.png')}}">
                                            </a>
                                            <div class="content">
                                                <a class="author">IFCE</a>
                                                <div class="metadata">
                                                    <span class="date">Hoje às 14:30PM</span>
                                                </div>
                                                <div class="text">
                                                    A sua resposta está sendo analizada de acordo com o pensamento do próprio.
                                                </div>
                                                                            <div class="actions">
                                                                                <a class="reply">Reply</a>
                                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="{{asset('img/matt.jpg')}}">
                                    </a>
                                    <div class="content">
                                        <a class="author">Honassis Filho</a>
                                        <div class="metadata">
                                            <span class="date">Ontem às 17:42PM</span>
                                        </div>
                                        <div class="text">
                                            Como está o sistema das catracas?
                                        </div>
                                                            <div class="actions">
                                                                <a class="reply">Reply</a>
                                                            </div>
                                    </div>
                                    <div class="comments">
                                        <div class="comment">
                                            <a class="avatar">
                                                <img src="{{asset('img/ifce.png')}}">
                                            </a>
                                            <div class="content">
                                                <a class="author">IFCE</a>
                                                <div class="metadata">
                                                    <span class="date">Hoje às 14:30PM</span>
                                                </div>
                                                <div class="text">
                                                    A sua resposta está sendo analizada de acordo com o pensamento do próprio.
                                                </div>
                                                                            <div class="actions">
                                                                                <a class="reply">Reply</a>
                                                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <a class="avatar">
                                        <img src="{{asset('img/user-no.png')}}">
                                    </a>
                                    <div class="content">
                                        <a class="author">David Silva</a>
                                        <div class="metadata">
                                            <span class="date">Ontem às 17:42PM</span>
                                        </div>
                                        <div class="text">
                                            Como está o sistema das catracas?
                                        </div>
                                                            <div class="actions">
                                                                <a class="reply">Reply</a>
                                                            </div>
                                    </div>
                                    <div class="comments">
                                        <div class="comment">
                                            <a class="avatar">
                                                <img src="{{asset('img/ifce.png')}}">
                                            </a>
                                            <div class="content">
                                                <a class="author">IFCE</a>
                                                <div class="metadata">
                                                    <span class="date">Hoje às 14:30PM</span>
                                                </div>
                                                <div class="text">
                                                    A sua resposta está sendo analizada de acordo com o pensamento do próprio.
                                                </div>
                                                                            <div class="actions">
                                                                                <a class="reply">Reply</a>
                                                                            </div>
                                            </div>
                                        </div>
                                    </div>-->
            </div>
        </div>
</div>
</form>
</div>

<div class="ui small modal" id="modalBuscarManifestacao">
    <div class="header">Manifestação</div>
    <div class="content">
        <div class="ui comments" id="comentariosInBuscarManifestacao">
            <div class="comment">
                <a class="avatar">
                    <img src="{{asset('img/user-no.png')}}">
                </a>
                <div class="content" id="pergunta">
                    <a class="author">David Silva</a>
                    <div class="metadata">
                        <span class="date">Ontem às 17:42PM</span>
                    </div>
                    <div class="text">
                        Como está o sistema das catracas?
                    </div>
                    <!--                    <div class="actions">
                                            <a class="reply">Reply</a>
                                        </div>-->
                </div>
                <div class="comments">
                    <div class="comment">
                        <a class="avatar">
                            <img src="{{asset('img/ifce.png')}}">
                        </a>
                        <div class="content" id="respostaCampus">
                            <a class="author">IFCE</a>
                            <div class="metadata">
                                <span class="date">Hoje às 14:30PM</span>
                            </div>
                            <div class="text">
                                A sua resposta está sendo analizada de acordo com o pensamento do próprio.
                            </div>
                            <!--                            <div class="actions">
                                                            <a class="reply">Reply</a>
                                                        </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="actions">
        <div class="ui cancel button">Cancelar</div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/buscarManifestacao.js') }}" ></script>

