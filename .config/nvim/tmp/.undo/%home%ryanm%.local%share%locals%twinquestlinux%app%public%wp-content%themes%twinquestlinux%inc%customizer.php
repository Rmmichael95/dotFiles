Vim�UnDo� ܫ�G}��7�L��!�;��� K��a���;�3   D   /**                              g2�<    _�                             ����                                                                                                                                                                                                                                                                                                                                                             g2�:     �   :   <   =      �	wp_enqueue_script( 'twinquestlinux-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );�   3   5   =      	bloginfo( 'description' );�   *   ,   =      	bloginfo( 'name' );�       "   =      	}�      !   =      		);�          =      			)�         =      L				'render_callback' => 'twinquestlinux_customize_partial_blogdescription',�         =      -				'selector'        => '.site-description',�         =      				array(�         =      			'blogdescription',�         =      0		$wp_customize->selective_refresh->add_partial(�         =      		);�         =      			)�         =      E				'render_callback' => 'twinquestlinux_customize_partial_blogname',�         =      )				'selector'        => '.site-title a',�         =      				array(�         =      			'blogname',�         =      0		$wp_customize->selective_refresh->add_partial(�         =      3	if ( isset( $wp_customize->selective_refresh ) ) {�         =      M	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';�         =      M	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';�         =      M	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';5��               M       P   3      M       P       �               M       P   �      M       P       �               M       P   �      M       P       �               3       6   '      3       6       �               0       6   ^      0       6       �                         �                    �               	          �      	              �               )       5   �      )       5       �               E       Q   �      E       Q       �                         H                    �                      
   V             
       �               0       6   a      0       6       �                         �                    �               	          �      	              �               -       9   �      -       9       �               L       X         L       X       �                         ]                    �                      
   k             
       �                          v                    �    *                     V                    �    3                                         �    :           �       �   �      �       �       5�_�                             ����                                                                                                                                                                                                                                                                                                                                                             g2�;    �         C      /**�         B      =function twinquestlinux_customize_register( $wp_customize ) {   P    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';   P    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';   P    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';�         B      6    if ( isset( $wp_customize->selective_refresh ) ) {�         B      5                'selector'        => '.site-title a',�         B      9                'selector'        => '.site-description',�   "   %   A      Hadd_action( 'customize_register', 'twinquestlinux_customize_register' );�   )   -   @      6function twinquestlinux_customize_partial_blogname() {       bloginfo( 'name' );�   2   6   ?      =function twinquestlinux_customize_partial_blogdescription() {       bloginfo( 'description' );�   9   =   >      0function twinquestlinux_customize_preview_js() {   �    wp_enqueue_script( 'twinquestlinux-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );�   <              Nadd_action( 'customize_preview_init', 'twinquestlinux_customize_preview_js' );5��    <           L      J   T      L       K       �    9   .      �      �   �      �       �       �    2   ;                                   �    )   4               S                    �    "           F      D   ~      F       E       �                         �                     �                         �                     �              +       '   /      +       '       �       +      3      1          �       �       �                                                5��