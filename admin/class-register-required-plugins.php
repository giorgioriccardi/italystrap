<?php
/**
 * Handle required plugins with TGM Class
 *
 * @since 4.0.0
 *
 * @package ItalyStrap
 */

namespace ItalyStrap\Admin;

if ( ! defined( 'ABSPATH' ) or ! ABSPATH ) {
	die();
}

/**
 * Register_Required_Plugins
 */
class Register_Required_Plugins {

	/**
	 * The plugin options
	 *
	 * @var array
	 */
	private $options = array();

	/**
	 * Init the constructor
	 *
	 * @param array $options The options plugin.
	 */
	function __construct( array $options = array() ) {
		$this->options = $options;
	}

	/**
	 * Init the required plugins
	 */
	public function init() {

		/**
		 * Array of plugin arrays. Required keys are name and slug.
		 * If the source is NOT from the .org repo, then source is also required.
		 */
		$plugins = array(

			/**
			 * Require GitHub Updater
			 */
			array(

				/**
				 * The plugin name.
				 */
				'name'                     => 'GitHub Updater',

				/**
				 * The plugin slug (typically the folder name).
				 */
				'slug'                     => 'github-updater',

				/**
				 * The plugin source.
				 */
				'source'                   => 'http://www.overclokk.net/TGM/github-updater.zip',

				/**
				 * If false, the plugin is only 'recommended' instead of required.
				 */
				'required'                 => false,

				/**
				 * E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				 */
				'version'                 => '',

				/**
				 * If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				 */
				'force_activation'         => false,

				/**
				 * If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				 */
				'force_deactivation'     => false,

				/**
				 * If set, overrides default API URL and points to an external URL
				 */
				'external_url'             => 'https://github.com/afragen/github-updater',
			),

			/**
			 * Require ItalyStrap Plugin
			 */
			array(

				/**
				 * The plugin name
				 */
				'name'                     => 'ItalyStrap',

				/**
				 * The plugin slug (typically the folder name)
				 */
				// 'slug'                     => 'italystrap',

				/**
				 * If false, the plugin is only 'recommended' instead of required
				 */
				'required'                 => true,

				/**
				 * E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
				 */
				'version'                 => '',

				/**
				 * If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
				 */
				'force_activation'         => true,

				/**
				 * If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
				 */
				'force_deactivation'     => false,
			),

		);

		/**
		 * Strings to display for required plugins
		 *
		 * @var array
		 */
		$strings = array(

			'page_title'						=> __( 'Install Required Plugins', 'italystrap' ),

			'menu_title'						=> __( 'Install Plugins', 'italystrap' ),

			/**
			 * %1$s = plugin name
			 */
			'installing'						=> __( 'Installing Plugin: %s', 'italystrap' ),

			'oops'								=> __( 'Something went wrong with the plugin API.', 'italystrap' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_can_install_required'		=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_can_install_recommended'	=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_cannot_install'				=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_can_activate_required'		=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_can_activate_recommended'	=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_cannot_activate'			=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_ask_to_update'				=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ),

			/**
			 * %1$s = plugin name(s)
			 */
			'notice_cannot_update'				=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ),

			'install_link'						=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),

			'activate_link'						=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),

			'return'							=> __( 'Return to Required Plugins Installer', 'italystrap' ),

			'plugin_activated'					=> __( 'Plugin activated successfully.', 'italystrap' ),

			/**
			 * %1$s = dashboard link.
			 */
			'complete'							=> __( 'All plugins installed and activated successfully. %s', 'italystrap' ),

			/**
			 * Determines admin notice type - can only be 'updated' or 'error'.
			 */
			'nag_type'							=> 'updated',
		);

		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain, leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 *
		 * @var array
		 */
		$config = array(

			/**
			 * Text domain - likely want to be the same as your theme.
			 */
			'domain'			=> 'italystrap',

			/**
			 * Default absolute path to pre-packaged plugins
			 */
			'default_path'		=> '',

			/**
			 * Default parent menu slug.
			 */
			'parent_slug'	=> 'themes.php',

			/**
			 * Default parent URL slug.
			 */
			'parent_slug'	=> 'themes.php',

			/**
			 * Menu slug.
			 */
			'menu'				=> 'install-required-plugins',

			/**
			 * Show admin notices or not.
			 */
			'has_notices'		=> true,

			/**
			 * Automatically activate plugins after installation or not.
			 */
			'is_automatic'		=> false,

			/**
			 * Message to output right before the plugins table.
			 */
			'message'			=> '',
			'strings'			=> $strings,
		);

		/**
		 * Filters the required plugins in case child theme needs another one.
		 *
		 * @var array
		 */
		$plugins = apply_filters( 'italystrap_required_plugins', $plugins );

		/**
		 * Filters the required plugins config in case child theme needs another one.
		 *
		 * @var array
		 */
		$config = apply_filters( 'italystrap_required_plugins_config', $config );

		tgmpa( $plugins, $config );
	}
}
