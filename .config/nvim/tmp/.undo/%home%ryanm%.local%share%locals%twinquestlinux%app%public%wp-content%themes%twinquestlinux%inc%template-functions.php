Vim�UnDo� \'(��X��Tsм_ҧ�lx:��IF��p�'   *   /**                              g2��    _�                             ����                                                                                                                                                                                                                                                                                                                                                             g2��    �   "   $   %      	}�   !   #   %      Y		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );�       "   %      '	if ( is_singular() && pings_open() ) {�         %      	return $classes;�         %      	}�         %      		$classes[] = 'no-sidebar';�         %      ,	if ( ! is_active_sidebar( 'sidebar-1' ) ) {�         %      @	// Adds a class of no-sidebar when there is no sidebar present.�         %      	}�         %      		$classes[] = 'hfeed';�         %      	if ( ! is_singular() ) {�         %      0	// Adds a class of hfeed to non-singular pages.5��               0       3   '      0       3       �                         [                    �                         x                    �                         �                    �               @       C   �      @       C       �               ,       /   �      ,       /       �                      "                "       �                         4                    �                         ;                    �                '       *         '       *       �    !           Y       _   B      Y       _       �    "                     �                    5�_�                             ����                                                                                                                                                                                                                                                                                                                                                             g2��    �         )      /**�         (      2function twinquestlinux_body_classes( $classes ) {�         (          if ( ! is_singular() ) {�         (      /    if ( ! is_active_sidebar( 'sidebar-1' ) ) {�         '      :add_filter( 'body_class', 'twinquestlinux_body_classes' );�      $   &      +function twinquestlinux_pingback_header() {   *    if ( is_singular() && pings_open() ) {   _        printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );�   $              :add_action( 'wp_head', 'twinquestlinux_pingback_header' );5��    $           8      6   �      8       7       �       )      ]      W         �       �       �               8      6   R      8       7       �              $          �      $              �                        c                    �       %                              
       �                                                5��