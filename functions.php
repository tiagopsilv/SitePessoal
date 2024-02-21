<?php

add_theme_support( 'post-thumbnails' );

function registrar_experiencia() {
	$descricao = 'Usado para listar as experiências de Trabalho';
	$singular = 'Experiência';
	$plural = 'Experiências';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Novo ' . $singular,
		'add_new_item' => 'Adicionar novo ' . $singular
	);

	$supports = array(
		'title',
		'editor',
		'thumbnail'
	);

	$args = array(
		'labels' => $labels,
		'description' => $descricao,
		'public' => true,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => $supports
	);


	register_post_type( 'experiencia', $args);	
}

add_action('init', 'registrar_experiencia');

function criando_taxonomia_experiencia() {
	$singular = 'Tipo';
	$plural = 'Tipos';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Novo ' . $singular,
		'add_new_item' => 'Adicionar novo ' . $singular
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true
		);

	register_taxonomy('tipo', 'experiencia', $args);
}

add_action( 'init' , 'criando_taxonomia_experiencia' );

function registrar_depoimento() {
	$descricao = 'Usado para listar as Depoimento de Colegas';
	$singular = 'Depoimento';
	$plural = 'Depoimentos';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Novo ' . $singular,
		'add_new_item' => 'Adicionar novo ' . $singular
	);

	$supports = array(
		'title',
		'editor',
		'thumbnail'
	);

	$args = array(
		'labels' => $labels,
		'description' => $descricao,
		'public' => true,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => $supports
	);


	register_post_type( 'depoimento', $args);	
}

add_action('init', 'registrar_depoimento');

function criando_taxonomia_depoimento() {
	$singular = 'Cargo';
	$plural = 'Cargos';

	$labels = array(
		'name' => $plural,
		'singular_name' => $singular,
		'view_item' => 'Ver ' . $singular,
		'edit_item' => 'Editar ' . $singular,
		'new_item' => 'Novo ' . $singular,
		'add_new_item' => 'Adicionar novo ' . $singular
		);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'hierarchical' => true
		);

	register_taxonomy('cargo', 'depoimento', $args);
}

add_action( 'init' , 'criando_taxonomia_depoimento' );

function enviar_e_checar_email($nome, $email, $mensagem) {
        return wp_mail( 'tiagosilv@gmail.com', 'Email Contato TiagopSilva - ' . $nome . " - " . $email, 'Nome: ' . $nome . "\n" . 'Email: ' . $email . "\n" . $mensagem  );
}

function my_analytics() {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-141765938-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141765938-1');
</script>

<?php
}

add_action('wp_head','my_analytics', 20);