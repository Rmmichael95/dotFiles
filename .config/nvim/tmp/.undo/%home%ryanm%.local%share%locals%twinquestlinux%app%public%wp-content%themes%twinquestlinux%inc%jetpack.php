Vim�UnDo� "J J�ı�"Y�K�ż��f$�[�PĶ�!?�   G   /**                              g2��    _�                             ����                                                                                                                                                                                                                                                                                                                                                             g2��     �   A   C   C      	}�   @   B   C      		}�   ?   A   C      				endif;�   >   @   C      C				get_template_part( 'template-parts/content', get_post_type() );�   =   ?   C      				else :�   <   >   C      <				get_template_part( 'template-parts/content', 'search' );�   ;   =   C      			if ( is_search() ) :�   :   <   C      			the_post();�   9   ;   C      		while ( have_posts() ) {�   8   :   C      3	function twinquestlinux_infinite_scroll_render() {�   7   9   C      	 */�   6   8   C      /	 * Custom render function for Infinite Scroll.�   5   7   C      	/**�   0   2   C      	);�   /   1   C      		)�   .   0   C      			),�   -   /   C      				'page'    => true,�   ,   .   C      				'post'    => true,�   +   -   C      				'archive' => true,�   *   ,   C      			'featured-images' => array(�   )   +   C      			),�   (   *   C      %				'comment'    => '.comments-link',�   '   )   C      				'author'     => '.byline',�   &   (   C      "				'tags'       => '.tags-links',�   %   '   C      !				'categories' => '.cat-links',�   $   &   C      !				'date'       => '.posted-on',�   #   %   C      +				'stylesheet' => 'twinquestlinux-style',�   "   $   C      			'post-details' => array(�   !   #   C      		array(�       "   C      		'jetpack-content-options',�      !   C      	add_theme_support(�          C      *	// Add theme support for Content Options.�         C      2	add_theme_support( 'jetpack-responsive-videos' );�         C      ,	// Add theme support for Responsive Videos.�         C      	);�         C      		)�         C      			'footer'    => 'page',�         C      :			'render'    => 'twinquestlinux_infinite_scroll_render',�         C      			'container' => 'main',�         C      		array(�         C      		'infinite-scroll',�         C      	add_theme_support(�         C      *	// Add theme support for Infinite Scroll.5��               *       -   ]      *       -       �                         �                    �                         �                    �                         �                    �                      "   �             "       �               :       C   �      :       C       �                      "   3             "       �                      	   V             	       �                         `                    �               ,       /   h      ,       /       �               2       5   �      2       5       �               *       -   �      *       -       �                         �                    �                       "                "       �    !                     7                    �    "                  $   F             $       �    #           +       7   k      +       7       �    $           !       -   �      !       -       �    %           !       -   �      !       -       �    &           "       .   �      "       .       �    '                  *   .             *       �    (           %       1   Y      %       1       �    )                     �                    �    *                  '   �             '       �    +                  "   �             "       �    ,                  "   �             "       �    -                  "                "       �    .                     +                    �    /                  	   :             	       �    0                     D                    �    5                     �                    �    6           /       2   �      /       2       �    7                                         �    8           3       6         3       6       �    9                      Q                     �    :                     r                    �    ;                      �                     �    <           <       H   �      <       H       �    =           	          �      	              �    >           C       O         C       O       �    ?           	          W      	              �    @                  	   j             	       �    A                     t                    5�_�                             ����                                                                                                                                                                                                                                                                                                                                                             g2��    �         F      /**�         E      )function twinquestlinux_jetpack_setup() {�         E      C            'render'    => 'twinquestlinux_infinite_scroll_render',   "            'footer'    => 'page',�         E      5    add_theme_support( 'jetpack-responsive-videos' );�   $   &   E      -                'date'       => '.posted-on',�   &   *   E      .                'tags'       => '.tags-links',   *                'author'     => '.byline',   1                'comment'    => '.comments-link',�   ,   /   E      "                'post'    => true,   "                'page'    => true,�   2   4   F      Badd_action( 'after_setup_theme', 'twinquestlinux_jetpack_setup' );    �   4   8   D      Eif ( ! function_exists( 'twinquestlinux_infinite_scroll_render' ) ) :�   8   <   C      6    function twinquestlinux_infinite_scroll_render() {            while ( have_posts() ) {�   ;   @   C                   if ( is_search() ) :   H                get_template_part( 'template-parts/content', 'search' );               else :   O                get_template_part( 'template-parts/content', get_post_type() );5��    ;         M      K   �      �       �       �    8   4               N              "       �    4           D      >   �      D       �       �    2                      M      C               �    ,                  �      %              �    &                        _       R       �    $                     �                     �                        �                    �                            F       @       �       '                 Z                    �                                                5��