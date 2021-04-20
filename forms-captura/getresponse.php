<?php
// ========================================//
// GETRESPONSE
// echo afc_form_getresponse();
// ========================================//
function afc_form_getresponse($token = '', $obrigada = '', $botao = '') {
    $output = '<form action="https://app.getresponse.com/add_subscriber.html" accept-charset="utf-8" method="post">';

        $output .= '<input class="texto" type="text" placeholder="Nome" name="name"/>';
        $output .= '<input class="texto" type="text" placeholder="Email" name="email"/>';

        // Token de lista - https://app.getresponse.com/campaign_list.html
        $output .= '<input type="hidden" name="campaign_token" value="'.$token.'" />';

        // Pagina de obrigada
        if($obrigada) $output .= '<input type="hidden" name="thankyou_url" value="'.$obrigada.'" />';

        // Adicionar assinante na sequência de follow-up com dia especificado
        $output .= '<input type="hidden" name="start_day" value="0" />';
        
        $output .= '<input type="submit" class="enviar" value="'.($botao ? $botao : 'Assinar').'"/>';

    $output .= '</form>';

    return $output;
}