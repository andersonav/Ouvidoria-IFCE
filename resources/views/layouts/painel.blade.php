<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ouvidoria IFCE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}"/>
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />   
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styleOuvidoria.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.semanticui.min.css') }}" />


    </head>
    <body>
        <div class="ui container fluid">

            <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow-x:  auto !important;" id="sibebarMaior">
                <!--                <div class="gb_ac">
                                    <i class="openbtn icon content" id="btnDevices"></i>
                                    <div class="gb_bc gb_Be">
                                        <img class="gb_Wa" src="{{ asset('img/Logo ouvidoria - branca.png') }}" style="width:86% !important; margin-top: 3% !important;">
                                    </div>
                                </div>-->
                <div class="item logo">
                    <i class="openbtn icon content" id="btnDevices"></i>
                    <img src="{{ asset('img/Logo ouvidoria - branca.png') }}" />
                </div>
                <div class="ui accordion" id="accordionSidebar">
                    <div class="title" id="paginaInicial">
                        <p class="pContent"><i class="home layout icon"></i><span>Página Inicial</span></p>
                    </div>
                    <div class="title" id="voltar">
                        <p class="pContent"><i class="arrow alternate circle left outline icon"></i><span>Voltar</span></p>
                    </div>
                    <div class="title activeAccordion" id="abrirManifestacao">
                        <p class="pContent"><i class="bullhorn icon active"></i><span>Abrir Manifestação</span></p>
                    </div>
                    <div class="title" id="buscarManifestacao">
                        <p class="pContent"><i class="search icon"></i><span>Buscar Manifestação</span></p>
                    </div>
                    <div class="title" id="estatisticas">
                        <p class="pContent"><i class="chart area icon"></i><span>Estatísticas</span></p>
                    </div>
                    <div class="title" id="perguntasFrequentes">
                        <p class="pContent"><i class="question icon"></i><span>Perguntas Frequentes</span></p>
                    </div>
                    <div class="title" id="manifestacoes">
                        <p class="pContent"><i class="reply icon"></i><span>Manifestações<span><i class="dropdown icon" id="manifestacoes"></i></span></span></p>
                    </div>
                    <div class="content" id="manifestacoes">
                        <a class="item active" href="javascript:void(0);" id="responderManifestacoes">Pendentes</a>
                        <a class="item active" href="javascript:void(0);" id="editarManifestacoes">Respondidas</a>
                    </div>
                </div>
                <div class="iconsSidebarFix">
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="home layout icon" id="paginaInicial"></i>
                    </div>
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="arrow alternate circle left outline icon" id="voltar"></i>
                    </div>
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="bullhorn icon active" id="abrirManifestacao"></i>
                    </div>
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="search icon" id="buscarManifestacao"></i>
                    </div>
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="chart area icon" id="estatisticas"></i>
                    </div>
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="question icon" id="perguntasFrequentes"></i>
                    </div>
                    <div class="ui dropdown item displaynone iconShort">
                        <i class="reply icon" id="manifestacoes"></i>
                    </div>
                </div>
            </div>

            <div class="pusher">
                <div class="ui menu asd borderless">
                    <div class="left menu" id="leftMenuToMobile">
                        <div class="iconSibebar">
                            <i class="icon content" id="iconSidebarMobile"></i>
                        </div>
                    </div>
                    <div class="right menu" id="iconsAndInformationsUser">
                        <div class="iconsAccount">
                            <!--<img src="{{asset('img/th.png')}}">-->
                            <i class="th icon big openDivNone" id="system"></i>
                            <div class="arrow displaynone" id="system"></div>
                            <div class="divMae" id="system">
                                <ul class="ulGeral" id="system">
                                    <li class="liGeral" id="system">
                                        <a class="aGeral" id="system">
                                            <img src="{{asset('img/logo_sysreserva.png')}}" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral">
                                        <a class="aGeral" id="system">
                                            <img src="{{asset('img/logo_sysreserva.png')}}" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral">
                                        <a class="aGeral" id="system">
                                            <img src="{{asset('img/logo_sysreserva.png')}}" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral">
                                        <a class="aGeral" id="system">
                                            <img src="{{asset('img/logo_sysreserva.png')}}" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral">
                                        <a class="aGeral" id="system">
                                            <img src="{{asset('img/logo_sysreserva.png')}}" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                    <li class="liGeral">
                                        <a class="aGeral" id="system">
                                            <img src="{{asset('img/logo_sysreserva.png')}}" class="imgSys">
                                            <span>SysReserva</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <i class="bell icon big openDivNone" id="notifications"></i>
                            <div class="arrow displaynone" id="notifications"></div>
                            <div class="divMae" id="notifications">
                                <div class="ui comments">
                                    <h3 class="ui dividing header">Notificações</h3>
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="{{asset('img/matt.jpg')}}">
                                        </a>
                                        <div class="content">
                                            <a class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="{{asset('img/matt.jpg')}}">
                                        </a>
                                        <div class="content">
                                            <a class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                    <div class="comment">
                                        <a class="avatar">
                                            <img src="{{asset('img/matt.jpg')}}">
                                        </a>
                                        <div class="content">
                                            <a class="author">Emerson Henrique</a>
                                            <div class="metadata">
                                                <span class="date">Hoje as 09:40AM</span>
                                            </div>
                                            <div class="text">
                                                Termo de compromisso de estágio disponível para download
                                            </div>
                                            <!--                                            <div class="actions">
                                                                                            <a class="reply">Reply</a>
                                                                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img class="ui avatar image openDivNone" id="informationsUser" src="{{asset('img/teste.jpg')}}" style="cursor: pointer;">
                            <div class="arrow displaynone" id="informationsUser"></div>
                            <div class="divMae" id="informationsUser">
                                <!--<div class="gb_tb"></div>-->
                                <!--<div class="gb_sb"></div>-->
                                <div class="ui cards">
                                    <div class="card" id="cardUser">
                                        <div class="content">
                                            <div class="header">
                                                Seja Bem Vindo, Anderson
                                            </div>
                                            <div class="meta">
                                                Administrador
                                            </div>
                                            <div class="description">
                                                Último acesso: 15/03/2018 10:50:23 <br/>Sessão: 05:31
                                            </div>
                                        </div>
                                        <div class="extra content">
                                            <div class="ui two buttons">
                                                <div class="ui button">Conta</div>
                                                <div class="ui red button">Sair</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="teste">
                    <div class="ui container containerPrincipal segment" id="containerToInformations" style="">
                        @yield('content')
                    </div>
                    <div class="ui active dimmer carregando inverted" style = "height: 110%;">
                        <div class="ui massive text loader">Carregando...</div>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/moment.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/dataTables.semanticui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/painel.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/sweetalert2.all.min.js') }}" ></script>

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


        <div class="ui small modal" id="modalEditManifestacao">
            <div class="header">Manifestação</div>
            <div class="content">
                <div class="ui comments" id="divEditManifestacoes">
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
                        </div>
                        <div class="comments">
                            <div class="comment">
                                <a class="avatar">
                                    <img src="{{asset("img/ifce.png")}}">
                                </a>
                                <div class="content" id="resposta">
                                    <a class="author">IFCE</a>
                                    <div class="metadata">
                                        <div class="date"></div>
                                    </div>
                                    <div class="text">
                                        <form class="ui reply form">
                                            <div class="field" id="divEditManifestacao">
                                                <textarea id="respostaEditManifestacao"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <!--                            <div class="actions">
                                                                    <a class="reply active">Editar</a>
                                                                </div>-->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="actions">
                <div class="ui yellow button btnEditar">
                    Editar
                </div>
                <div class="ui cancel button">Cancelar</div>
            </div>
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
    </body>
</html>
