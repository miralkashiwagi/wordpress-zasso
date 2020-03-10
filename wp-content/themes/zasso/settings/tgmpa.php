<?php
require_once get_template_directory() . '/settings/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'zasso_register_required_plugins' );


function zasso_register_required_plugins() {
	$plugins = array(
		array(
			'name'      => 'Breadcrumb NavXT(パンくず)',
			'slug'      => 'breadcrumb-navxt',
			'required'  => false,
		),
        array(
            'name'      => 'MW WP Form(フォーム)',
            'slug'      => 'mw-wp-form',
            'required'  => false,
        ),
        array(
            'name'      => 'Advanced Custom Fields(カスタムフィールド)',
            'slug'      => 'advanced-custom-fields',
            'required'  => false,
        ),
        array(
            'name'      => 'Custom Post Type UI(カスタム投稿)',
            'slug'      => 'custom-post-type-ui',
            'required'  => false,
        ),
	);

	$config = array(
		'id'           => 'zasso',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => true,                   // Automatically activate plugins after installation or not.
		'message'      => '【使いたいプラグインだけインストール】',                      // Message to output right before the plugins table.

	);
	tgmpa( $plugins, $config );
}
