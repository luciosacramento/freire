<?php
add_action( 'after_setup_theme', 'theme_setup' );

function theme_setup() {
    add_action( 'init', 'add_support_to_pages' );
}

function add_support_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

add_theme_support( 'post-thumbnails' );

/****************Post customizado PROJETOS****************** */

function registrar_projetos() {
    $labels = array(
        'name'               => 'Projetos',
        'singular_name'      => 'Projeto',
        'menu_name'          => 'Projetos',
        'name_admin_bar'     => 'Projetos',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Projeto',
        'new_item'           => 'Novo Projeto',
        'edit_item'          => 'Editar Projeto',
        'view_item'          => 'Visualizar  Projeto',
        'all_items'          => 'Todos os Projeto',
        'search_items'       => 'Pesquisar Projeto',
        'parent_item_colon'  => 'Meus Projeto Pai:',
        'not_found'          => 'Nenhum Projeto encontrado.',
        'not_found_in_trash' => 'Nenhum Projeto encontrado na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projetos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'projetos', $args );
}
add_action( 'init', 'registrar_projetos' );

function adicionar_campos_personalizados() {
    add_meta_box(
        'meus_campos',
        'Meus Campos Personalizados',
        'exibir_campos_personalizados',
        'projetos',
        'normal',
        'default'
    );
}
add_action( 'add_meta_boxes', 'adicionar_campos_personalizados' );
add_action( 'save_post', 'myplugin_save_postdata' );

function exibir_campos_personalizados( $post ) {
    // Recupere os valores salvos dos campos personalizados
    $objeto = get_post_meta( $post->ID, 'objeto', true );
    $resultados = get_post_meta( $post->ID, 'resultados', true );
    $contrato = get_post_meta( $post->ID, 'contrato', true );
    $data = get_post_meta( $post->ID, 'data', true );
    $valor = get_post_meta( $post->ID, 'valor', true );

    $assinante1 = get_post_meta( $post->ID, 'assinante1', true );
    $cnpjassinante1 = get_post_meta( $post->ID, 'cnpjassinante1', true );

    $assinante2 = get_post_meta( $post->ID, 'assinante2', true );
    $cnpjassinante2 = get_post_meta( $post->ID, 'cnpjassinante2', true );
    // Exiba os campos personalizados no painel de edição
    ?>
    <label for="objeto">Objeto da Parceria:</label><br>
     
    <?php
       wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

       $field_value = get_post_meta( $post->ID, 'objeto', false );
       $val = count($field_value)?$field_value[0] : "";
       wp_editor( $val, 'objeto' );
   
    ?><br><br>

    <label for="resultados">Resultados:</label><br>
    <?php
       wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

       $field_value = get_post_meta( $post->ID, 'resultados', false );
       $val = count($field_value)?$field_value[0] : "";
       wp_editor( $val, 'resultados' );
   
    ?><br><br>


    <label for="contrato">CONTRATO DE CONCESSÃO DE COLABORAÇÃO FINANCEIRA Nº:</label><br>
    <input type="text" id="contrato" name="contrato" value="<?php echo esc_attr( $contrato ); ?>" /><br><br>

    <label for="data">Data da assinatura:</label><br>
    <input type="text" id="data" name="data" value="<?php echo esc_attr( $data ); ?>" /><br><br>

    <label for="valor">Valor Total do Contrato:</label><br>
    <input type="text" id="valor" name="valor" value="<?php echo esc_attr( $valor ); ?>" /><br><br>

    <label for="assinante1">Assinante 1:</label><br>
    <input type="text" id="assinante1" name="assinante1" value="<?php echo esc_attr( $assinante1 ); ?>" /><br><br>

    <label for="cnpjassinante1">CNPJ Assinante 1:</label><br>
    <input type="text" id="cnpjassinante1" name="cnpjassinante1" value="<?php echo esc_attr( $cnpjassinante1 ); ?>" /><br><br>

    <label for="assinante2">Assinante 2:</label><br>
    <input type="text" id="assinante2" name="assinante2" value="<?php echo esc_attr( $assinante2 ); ?>" /><br><br>

    <label for="cnpjassinante2">CNPJ Assinante 2:</label><br>
    <input type="text" id="cnpjassinante2" name="cnpjassinante2" value="<?php echo esc_attr( $cnpjassinante2 ); ?>" /><br><br>

    <?php
}

/* When the post is saved, saves our custom data */
function myplugin_save_postdata( $post_id ) {

    // verify if this is an auto save routine. 
    // If it is our form has not been submitted, so we dont want to do anything
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        return;
  
    // verify this came from the our screen and with proper authorization,
    // because save_post can be triggered at other times
    if ( ( isset ( $_POST['myplugin_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) ) )
        return;
  
    // Check permissions
    if ( ( isset ( $_POST['post_type'] ) ) && ( 'projetos' == $_POST['post_type'] )  ) {
      if ( ! current_user_can( 'edit_page', $post_id ) ) {
        return;
      }    
    }
    else {
      if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
      }
    }

    $fields = array('objeto', 'resultados', 'contrato','data', 'valor', 'assinante1','cnpjassinante1', 'assinante2','cnpjassinante2');
    foreach ($fields as $key => $value) {
        updateCustomField($value,$post_id);
    }  
  
  }

  function updateCustomField($slug,$post_id){
    if ( isset ( $_POST[$slug] ) ) {
        update_post_meta( $post_id, $slug, $_POST[$slug] );
    }
  }

  /****************FIM - Post customizado PROJETOS****************** */

  /****************Post customizado Balanços****************** */

  function registrar_balanco() {
    $labels = array(
        'name'               => 'Balanços',
        'singular_name'      => 'Balanço',
        'menu_name'          => 'Balanços',
        'name_admin_bar'     => 'Balanços',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Balanço',
        'new_item'           => 'Novo Balanço',
        'edit_item'          => 'Editar Balanço',
        'view_item'          => 'Visualizar  Balanço',
        'all_items'          => 'Todos os Balanço',
        'search_items'       => 'Pesquisar Balanço',
        'parent_item_colon'  => 'Meus Balanço Pai:',
        'not_found'          => 'Nenhum Balanço encontrado.',
        'not_found_in_trash' => 'Nenhum Balanço encontrado na lixeira.'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'balanco' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail' ),
    );

    register_post_type( 'balanco', $args );
}
add_action( 'init', 'registrar_balanco' );

function add_custom_meta_boxes() {
	add_meta_box( 
		'balanco',
		'Arquivo',
		'wp_custom_attachment',
		'balanco',
		'normal',
        'default'
	) ;
}

add_action( 'add_meta_boxes', 'add_custom_meta_boxes' );
add_action('save_post', 'save_custom_meta_data');

/**
 * Custom attachment metabox markup.
 */
function wp_custom_attachment() {
	wp_nonce_field( plugin_basename(__FILE__), 'wp_custom_attachment_nonce' );
	$html = '<label>Arquivo:</label><br>';
	$html .= '<input id="wp_custom_attachment" name="wp_custom_attachment" size="25" type="file" value="" />';

	$filearray = get_post_meta( get_the_ID(), 'wp_custom_attachment', true );
    $this_file = $filearray ?$filearray['url'] : "";
	//$this_file = $filearray['url'];
	
	if ( $this_file != '' ) { 
	     $html .= '<div><p><b>Arquivo Atual:</b> ' . $this_file . '</p></div>'; 
	}
	echo $html; 
}

function save_custom_meta_data( $id ) {
	if ( ! empty( $_FILES['wp_custom_attachment']['name'] ) ) {
		//$supported_types = array( 'application/pdf' );
		$arr_file_type = wp_check_filetype( basename( $_FILES['wp_custom_attachment']['name'] ) );
		$uploaded_type = $arr_file_type['type'];

		//if ( in_array( $uploaded_type, $supported_types ) ) {
			$upload = wp_upload_bits($_FILES['wp_custom_attachment']['name'], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name']));
			if ( isset( $upload['error'] ) && $upload['error'] != 0 ) {
				wp_die( 'There was an error uploading your file. The error is: ' . $upload['error'] );
			} else {
				add_post_meta( $id, 'wp_custom_attachment', $upload );
				update_post_meta( $id, 'wp_custom_attachment', $upload );
			}
		//}
		//else {
			//wp_die( "The file type that you've uploaded is not a PDF." );
		//}
	}
}
add_action( 'save_post', 'save_custom_meta_data' );

/**
 * Add functionality for file upload.
 */
function update_edit_form() {
	echo ' enctype="multipart/form-data"';
}
add_action( 'post_edit_form_tag', 'update_edit_form' );

/****************FIM - Post customizado Balanços****************** */