@extends('emails.layouts.default')

@section('content')

    <table border="0" cellpadding="0" cellspacing="0" class="kmTextBlock" style="border-collapse:collapse; mso-table-lspace:0; mso-table-rspace:0" width="100%">
        <tbody class="kmTextBlockOuter">
        <tr>
            <td class="kmTextBlockInner" style="border-collapse:collapse; mso-table-lspace:0; mso-table-rspace:0; background-color:#FCFCFC" valign="top">
                <table align="left" border="0" cellpadding="0" cellspacing="0" class="kmTextContentContainer" style="border-collapse:collapse; mso-table-lspace:0; mso-table-rspace:0" width="100%">
                    <tbody>
                    <tr>
                        <td class="kmTextContent" style='border-collapse:collapse; mso-table-lspace:0; mso-table-rspace:0; color:#212529; font-family:"Nunito", sans-serif; font-size:16px; line-height:24px; text-align:left; padding-bottom:25px; padding-right:60px;font-weight: 500; padding-left:60px; padding-top:55px' valign="top">
                            <h1 style="margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; padding-bottom:15px; text-align:center;font-weight: 600;font-size: 24px;line-height: 39px;">
                                Confirme o seu endereço de e-mail para fazer parte do Escutaaqui
                            </h1>
                            <h3 style="margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; padding-bottom:0px; text-align:center;font-weight: 600;font-size: 18px;line-height: 39px;">
                                Olá {{$user->name}},
                            </h3>
                            <p style="margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; padding-bottom:0; text-align:center">Após sua confirmação de que <strong>{{$user->email}}</strong> é seu endereço de e-mail, vamos ajudar você a construir o seu consultório online.</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" class="kmButtonBlockInner" style="border-collapse:collapse; mso-table-lspace:0; mso-table-rspace:0; min-width:60px; padding:9px 18px; padding-top:10px; padding-bottom:55px;" valign="top">
                            <table border="0" cellpadding="0" cellspacing="0" class="kmButtonContentContainer" style="border-collapse:separate; mso-table-lspace:0; mso-table-rspace:0; background-color:#6290B3; border-radius:30px; border-width:1px" width="">
                                <tbody>
                                <tr>
                                    <td align="center" class="kmButtonContent" style='border-collapse:collapse; mso-table-lspace:0; mso-table-rspace:0; color:#FFF; font-family:"Nunito", sans-serif; font-size:11px; font-weight:bold;' valign="middle">
                                        <a class="kmButton" href="{{$actionUrl}}" style='color:#FFF; font-family:"Nunito", sans-serif; font-size:14px; font-weight:bold; text-align:center; text-decoration:none; word-wrap:break-word; display:inline-block; padding-top:12px; padding-bottom:12px; padding-left:43px; padding-right:43px;' target="_self" title="">Confirmar meu e-mail</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

@stop
