<?php
/**
 * ACF PRO
 *
 * @link https://github.com/elliotcondon/acf
 *
 * @package ljc
 */

namespace ljc\Plugins;

class Acf
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_filter( 'acf/settings/save_json', array( &$this, 'ljc_acf_json_save_point' ) );
        add_filter( 'acf/settings/load_json', array( &$this, 'ljc_acf_json_load_point' ) );

        /**
         * Enable ACF 5 early access
         * Requires at least version ACF 4.4.12 to work
         */
        define('ACF_EARLY_ACCESS', '5');
    }

    public function ljc_acf_json_save_point( $path )
    {
        // update path
        $path = get_stylesheet_directory() . '/acf-json';

        // return
        return $path;
    }

    public function ljc_acf_json_load_point( $paths )
    {
        // remove original path (optional)
        unset( $paths[0] );

        // append path
        $paths[] = get_stylesheet_directory() . '/acf-json';

        // return
        return $paths;
    }
}
