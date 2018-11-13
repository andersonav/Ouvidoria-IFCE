<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
/* 
    Created on : 25/09/2018, 16:47:41
    Author     : andersonalves
*/
-->

<html>
    <head>
        <title>Login IFCE</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.css') }}"/>
        <link href="{{ asset('img/favicon.ico') }}" rel="shortcut icon" type="image/vnd.microsoft.icon" />   
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/semantic.min.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/login.js') }}" ></script> 
    </head>
    <body>
        <div class="ui centered grid">
            <div class="ui vertical stripe quote segment" id="logos">
                <div class="ui equal width stackable internally grid">
                    <div class="center aligned row">
                        <div class="column">
                            <img src="{{ asset('img/logo-ifce.png') }}" class="imageIfce">
                            <br>
                        </div>
                    </div>
                    <div class="center aligned row">
                        <div class="column">
                            <img src="{{ asset('img/logo_ouvidoria_vermelha.png') }}" class="image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="sixteen wide tablet sixteen wide computer sixteen wide mobile column" id="formCenter">
                <div class="login-triangle"></div>
                <div class="divForm">
                    <form class="ui large form" method="POST">
                        {{ csrf_field() }}
                        <div class="divForm">
                            <div class="field" id="email">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="text" name="identificacao" placeholder="Identificação">
                                </div>
                            </div>
                            <div class="field" id="password">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Senha">
                                </div>
                            </div>
                            <div class="ui fluid large teal submit button" id="btnLogin"><span class="spanLogin">Login</span><span class="spanIcon"><i class="icon sign in"></i></span></div>
                        </div>
                        <div class="ui message">
                            <!--<a class="item" style="color: white;" href="{{ route('password.request') }}">Esqueceu sua senha?</a>-->
                             <a class="item" style="color: white;" href="#">Esqueceu sua senha?</a>
                            <br><br>
                            <a class="item" href="#" style="color: white;">Manual do Usuário</a>
                        </div>
                    </form>
                </div>
                <div class="informacoes">
                    <span class="">CTI - Coordenadoria de Tecnologia da Informação</span><br>
                    <span class="">NDS - Núcleo de Desenvolvimento de Software 2018</span>
                </div>
            </div>
        </div>
    </body>
</html>

