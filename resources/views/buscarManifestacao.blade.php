<h1 class="textoTopoOuvidoria"><i class="search icon"></i>&nbsp;&nbsp;Buscar Manifestação</h1>
<div class="ui divider"></div>
<div class="">
    <form class="ui form">
        <h4 class="ui header">De acordo com seu número gerado, por favor coloque no campo abaixo</h4>
        <h2 class="ui dividing header">ID Manifestação</h2>
        <div class="field">
            <div class="ui icon input">
                <input type="text" placeholder="Procurar..." name="searchById" id="searchById">
                <i class="inverted circular search link icon" style="background-color: #34483F !important;"></i>
            </div>
        </div>
        <h2 class="ui dividing header">Manifestações recentes</h2>
        <div class="field">
            <div class="ui comments" id="comentariosInBuscarManifestacao">
                @foreach($manifestacoesRespondidasRecentes as $manifestacaRespondidaRecente)
                <div class="comment">
                    <a class="avatar">
                        <img src="{{asset('img/matt.jpg')}}">
                    </a>
                    <div class="content">
                        <a class="author">Anderson Alves</a>
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
                            <div class="content">
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
                @endforeach
                <div class="comment">
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
    </form>
</div>

<div class="ui small modal">
    <div class="header">Manifestação</div>
    <div class="content">
        <div class="ui comments" id="comentariosInBuscarManifestacao">
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

