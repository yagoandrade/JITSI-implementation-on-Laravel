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
                                Tentativa de criação de Conta
                            </h1>
                            <h3 style="margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; padding-bottom:0px; text-align:center;font-weight: 600;font-size: 18px;line-height: 39px;">
                                Olá {{$user->name}},
                            </h3>
                            <p style="margin-bottom:0; margin-left:0; margin-right:0; margin-top:0; padding-bottom:0; text-align:center">Houve uma tentativa de criação de conta com o seu email cadastrado: {{$user->email}}</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

@stop
