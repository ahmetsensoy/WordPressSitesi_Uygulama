<?php 

if( ! function_exists('RoohaniAdminNotice') ) {
    class RoohaniAdminNotice {
        final static public function init(){
            add_action( 'admin_notices', array( get_called_class(), 'admin_notices' ) );
        }
        final static public function admin_notices() {
            if( ! empty( $_GET['roohani_plugin_recom_hide']) && $_GET['roohani_plugin_recom_hide'] == 'yes' ) {
                set_theme_mod( 'roohani_plugin_recom_hide', true );
            }
            if( get_theme_mod( 'roohani_plugin_recom_hide' ) != true ) {
                $class = 'notice notice-success';
                $message = sprintf( __( '<a href="%1$s" target="_blank">AbuFramework</a> is Modern option framework and super recommended to add <a href="%1$s" target="_blank">this</a> plugin.', 'roohani' ), esc_url('https://github.com/yourabusufiyan/abuframework') );
                printf( '<div class="%1$s"><p>%2$s <a href="./?roohani_plugin_recom_hide=yes">Dismiss</a></p></div>', esc_attr( $class ), wp_kses( $message, wp_kses_allowed_html() ) ); 
            }
        }
    }
}
RoohaniAdminNotice::init();