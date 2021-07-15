<?php 
// Cria uma variável que terá os dados do erro
$erro = false;

// Verifica se o POST tem algum valor
if ( !isset( $_POST ) || empty( $_POST ) ) {
	$erro = 'Nada foi postado.';
}


foreach ( $_POST as $chave => $valor ) {
	// Remove todas as tags HTML e os espaços em branco do valor
	$$chave = trim( strip_tags( $valor ) );
	
	// Verifica se tem algum valor nulo
	if ( empty ( $valor ) ) {
		$erro = 'Existem campos em branco.';
	}
}


// Verifica se $telefone realmente existe e se é um número. 
if ( ( ! isset( $telefone ) || ! is_numeric( $telefone ) ) && !$erro ) {
	$erro = 'O telefone deve ser um valor numérico';
}

// Verifica se $email realmente existe e se é um email. 
if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL ) ) && !$erro ) {
	$erro = 'Envie um email válido.';
}

// Se existir algum erro, mostra o erro
if ( $erro ) {
	echo $erro;
} else {
	
	echo "<h1> Veja os dados enviados</h1>";
	
	foreach ( $_POST as $chave => $valor ) {
		echo '<b>' . $chave . '</b>: ' . $valor . '<br><br>';
	}
}