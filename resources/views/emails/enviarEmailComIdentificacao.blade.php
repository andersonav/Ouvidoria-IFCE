<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href='images/favicon.ico' rel='shortcut icon' type='image/vnd.microsoft.icon' />
        <title>Email Ouvidoria</title>
    </head>
    <body>
        <table border="0" cellspacing="0" height="100%" width="100%" style="background-color:#f7f7f7;margin:0;padding:0;height:100%!important;width:100%!important"> 
            <tbody>
                <tr style="margin:0;padding:0;font-family:'Open sans',sans-serif">
                    <td align="center" valign="top" style="padding:8px">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin:0;padding:0;max-width:600px!important">
                            <tbody>
                                <tr style="margin:0; padding:0; font-family:'Open sans',sans-serif">

                                </tr>
                            </tbody>
                        </table>

                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin:0;padding:0;max-width:600px!important">
                            <tbody>
                                <tr style="margin:0;padding:0;font-family:'Open sans',sans-serif">
                                    <td valign="top" align="center" style="border-top-right-radius:5px;border-top-left-radius:5px;background-color:#ffffff;overflow:hidden" class="m_-1193409292257373198first">
                                        <h2 style="text-align: center; font-size: 13px; color: #006B43; padding: 10px;"> Sistema de Ouvidoria do Campus Maracanaú</h2>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="margin:0;padding:0;max-width:600px!important">
                            <tbody>
                                <tr style="margin:0;padding:0;font-family:'Open sans',sans-serif">
                                    <td valign="top" width="100%" align="left" style="padding:0;background-color:#ffffff">
                                        <img class="imgTopo" src="http://intranet.maracanau.ifce.edu.br/img/cabecalho_email.png" style="width: 100%;"/>
                                    </td>
                                </tr>
                                <tr style="font-family:'Open sans',sans-serif">
                                    <td colspan="2" valign="top" width="100%" align="left" style="padding:0;background-color:#ffffff">
                                        <p style="font-size:18px;color:#006B43;font-weight:bold;line-height:160%; text-align: center; width: 50%; margin: 0 auto; text-align: center; margin-bottom: 20px;">
                                            O usuário {{$nome}} com identificacao {{$identificacao}} veio até a nossa ouvidoria {{$tipoManifestacao}} sobre o(a) {{$assunto}}</p>
                                        <div class="" style="border: 1px solid black; border-radius: 10px; margin:0 auto;width: 50%; display: block; text-align: center; margin-bottom: -30px">
                                            <p style="font-size:18px;color:#006B43;font-weight:bold;line-height:160%; text-align: center; font-style: italic;">
                                                "{{$mensagem}}"</p><br>
                                        </div>
                                        <img src="http://intranet.maracanau.ifce.edu.br/img/{{$imagemEmail}}" style="width: 12%; display: block; margin: 0 auto"/>
                                    </td>
                                </tr>
                                <tr style="margin:0;padding:0;font-family:'Open sans',sans-serif; ">
                                    <td colspan="2" valign="top" width="100%" align="left" style="padding:0;background-color:#ffffff">
                                        <img class="imgTopo" src="http://intranet.maracanau.ifce.edu.br/img/rodape_email_completo.png" style="width: 100%;"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>