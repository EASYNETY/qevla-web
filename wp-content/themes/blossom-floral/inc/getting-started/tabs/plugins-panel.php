<?php
/**
 * Help Panel.
 *
 * @package Blossom_Floral
 */
?>
<!-- Updates panel -->
<div id="plugins-panel" class="panel-left visible">
	<h4><?php esc_html_e( 'Recommended Plugins', 'blossom-floral' ); ?></h4>

	<p><?php printf( esc_html__( 'Below is a list of recommended plugins to install that will help you get the most out of %1$s. Although each plugin is optional, it is recommended that you at least install the BlossomThemes Toolkit, BlossomThemes Email Newsletter & Smash Balloon Social Photo Feed to create a website similar to the %1$s demo.', 'blossom-floral' ), BLOSSOM_FLORAL_THEME_NAME ); ?></p>

	<hr/>

	<?php 
	$free_plugins = array(
		'blossomthemes-toolkit' => array(
			'slug'     	=> 'blossomthemes-toolkit',
			'filename' 	=> 'blossomthemes-toolkit.php',
		),                
		'blossomthemes-email-newsletter' => array(
			'slug' 	 	=> 'blossomthemes-email-newsletter',
			'filename'  => 'blossomthemes-email-newsletter.php',
		),                
		'instagram-feed' => array(
			'slug' 		=> 'instagram-feed',
			'filename' 	=> 'instagram-feed.php',
		), 
		'affiliatex' => array(
			'slug'      => 'affiliatex',
			'filename' 	=> 'affiliatex.php',
		),                
		'regenerate-thumbnails' => array(
			'slug' 		=> 'regenerate-thumbnails',
			'filename' 	=> 'regenerate-thumbnails.php',
		),   
		'woocommerce' => array(
			'slug' 		=> 'woocommerce',
			'filename' 	=> 'woocommerce.php',
		)            
	);

	if( $free_plugins ){ ?>
		<h4 class="recomplug-title"><?php esc_html_e( 'Free Plugins', 'blossom-floral' ); ?></h4>
		<p><?php esc_html_e( 'These Free Plugins might be handy for you.', 'blossom-floral' ); ?></p>
		<div class="recomended-plugin-wrap">
    		<?php
    		foreach( $free_plugins as $plugin ) {
    			$info     = blossom_floral_call_plugin_api( $plugin['slug'] );
    			$icon_url = blossom_floral_check_for_icon( $info->icons ); ?>    
    			<div class="recom-plugin-wrap">
    				<div class="plugin-img-wrap">
    					<img src="<?php echo esc_url( $icon_url ); ?>" />
    					<div class="version-author-info">
    						<span class="version"><?php printf( esc_html__( 'Version %s', 'blossom-floral' ), $info->version ); ?></span>
    						<span class="seperator">|</span>
    						<span class="author"><?php echo esc_html( strip_tags( $info->author ) ); ?></span>
    					</div>
    				</div>
    				<div class="plugin-title-install clearfix">
    					<span class="title" title="<?php echo esc_attr( $info->name ); ?>">
    						<?php echo esc_html( $info->name ); ?>	
    					</span>
                        <div class="button-wrap">
    					   <?php echo Blossom_Floral_Getting_Started_Page_Plugin_Helper::instance()->get_button_html( $plugin['slug'], $plugin['filename'] ); ?>
                        </div>
    				</div>
    			</div>
    			<?php
    		} 
            ?>
		</div>
	<?php
	} 
?>
</div><!-- .panel-left -->