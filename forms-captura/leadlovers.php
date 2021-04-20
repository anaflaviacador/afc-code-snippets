<?php 
// ========================================//
// LEADLOVERS 
// echo afc_form_leadlovers();
// ========================================//
function afc_form_leadlovers($idmaquina = '', $idform = '', $botao = '') {
	$output = '<form role="form" action="https://leadlovers.com/Pages/Index/'.esc_attr($idmaquina).'" method="post" class="area-form">';
		$output .= '<input id="provider" name="provider" type="hidden" value="leadlovers">';
		$output .= '<input id="list_id" name="list_id" type="hidden" value="'.esc_attr($idmaquina).'"">';
		$output .= '<input type="hidden" id="id" name="id" value="'.esc_attr($idmaquina).'"">';
		$output .= '<input type="hidden" id="pid" name="pid" value="'.esc_attr($idform).'"">';

			$output .= '<label class="field"><input id="name" name="name" type="text" placeholder="Nome" tabindex="1"></label>';
			$output .= '<label class="field"><input id="email" name="email" type="text" placeholder="Email" tabindex="2"></label>';
			$output .= '<label class="botao"><button class="button'.(is_page_template('pg-espera.php') ? ' alt' : '').'" type="submit" tabindex="3">'.esc_attr($botao).'</button></label>';

		$output .= '<input type="hidden" id="source" name="source" value="">';
		$output .= '<input type="hidden" id="sck" name="sck" value="">';
		$output .= '<img src="https://click.leadlovers.com/redirect/redirect.aspx?A=V&amp;p='.esc_attr($idform).'&amp;m='.esc_attr($idmaquina).'" style="display: none;">';
	$output .= '</form>';	

	return $output;
}