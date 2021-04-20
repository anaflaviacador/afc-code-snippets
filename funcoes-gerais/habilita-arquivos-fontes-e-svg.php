<?php
// habilita arquivos woff, woff2 e imagens svg
function afc_add_fonts_to_allowed_mimes( $mimes = array() ) {
	$mimes['woff']  = 'application/x-font-woff';
	$mimes['woff2'] = 'application/x-font-woff2';
	$mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
	
    // era para ser esses abaixo, mas o WP nao atualizou o core
    // $mimes['woff']  = 'font/woff'; 
	// $mimes['woff2'] = 'font/woff2';
	return $mimes;
} add_filter( 'upload_mimes', 'afc_add_fonts_to_allowed_mimes');

// evita erros de alerta de seguranca na leitura do svg
function afc_add_fonts_fix_mime_type_svg( $data = null, $file = null, $filename = null, $mimes = null ) {
    $ext = isset( $data['ext'] ) ? $data['ext'] : '';
    if ( strlen( $ext ) < 1 ) {
        $exploded = explode( '.', $filename );
        $ext      = strtolower( end( $exploded ) );
    }
    if ( $ext === 'svg' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svg';
    } elseif ( $ext === 'svgz' ) {
        $data['type'] = 'image/svg+xml';
        $data['ext']  = 'svgz';
    }
    return $data;
} add_filter( 'wp_check_filetype_and_ext', 'afc_add_fonts_fix_mime_type_svg' , 75, 4 );
