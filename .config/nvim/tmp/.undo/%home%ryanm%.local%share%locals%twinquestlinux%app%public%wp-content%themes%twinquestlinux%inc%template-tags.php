Vim�UnDo� ��j�`?W5w�%;�S�ތ`�7�K|�J�2�0�m   �                                   g2��    _�                             ����                                                                                                                                                                                                                                                                                                                                                             g2��     �         �      /**�         �       �   	      �   	   8if ( ! function_exists( 'twinquestlinux_posted_on' ) ) :   	/**   E	 * Prints HTML with meta information for the current post-date/time.   	 */   &	function twinquestlinux_posted_on() {   Z		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';   ?		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {   �			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';   		}�         �      		$time_string = sprintf(   			$time_string,   (			esc_attr( get_the_date( DATE_W3C ) ),   			esc_html( get_the_date() ),   1			esc_attr( get_the_modified_date( DATE_W3C ) ),   &			esc_html( get_the_modified_date() )   		);�         �   	   		$posted_on = sprintf(   $			/* translators: %s: post date. */   ?			esc_html_x( 'Posted on %s', 'post date', 'twinquestlinux' ),   Y			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'   		);       |		echo '<span class="posted-on">' . $posted_on . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped       	}�   &   2   �   
   8if ( ! function_exists( 'twinquestlinux_posted_by' ) ) :   	/**   =	 * Prints HTML with meta information for the current author.   	 */   &	function twinquestlinux_posted_by() {   		$byline = sprintf(   &			/* translators: %s: post author. */   :			esc_html_x( 'by %s', 'post author', 'twinquestlinux' ),   �			'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'   		);�   1   4   �      w		echo '<span class="byline"> ' . $byline . '</span>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped       	}�   6   E   �      ;if ( ! function_exists( 'twinquestlinux_entry_footer' ) ) :   	/**   L	 * Prints HTML with meta information for the categories, tags and comments.   	 */   )	function twinquestlinux_entry_footer() {   *		// Hide category and tag text for pages.   %		if ( 'post' === get_post_type() ) {   O			/* translators: used between list items, there is a space after the comma */   T			$categories_list = get_the_category_list( esc_html__( ', ', 'twinquestlinux' ) );   			if ( $categories_list ) {   -				/* translators: 1: list of categories. */   �				printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'twinquestlinux' ) . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped   			}�   D   L   �      O			/* translators: used between list items, there is a space after the comma */   d			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'twinquestlinux' ) );   			if ( $tags_list ) {   '				/* translators: 1: list of tags. */   �				printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'twinquestlinux' ) . '</span>', $tags_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped   			}   		}�   L   _   �      f		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {   '			echo '<span class="comments-link">';   			comments_popup_link(   				sprintf(   					wp_kses(   '						/* translators: %s: post title */   ^						__( 'Leave a Comment<span class="screen-reader-text"> on %s</span>', 'twinquestlinux' ),   						array(   							'span' => array(   								'class' => array(),   								),   						)   					),   $					wp_kses_post( get_the_title() )   				)   			);   			echo '</span>';   		}�   _   q   �      		edit_post_link(   			sprintf(   				wp_kses(   P					/* translators: %s: Name of current post. Only visible to screen readers */   O					__( 'Edit <span class="screen-reader-text">%s</span>', 'twinquestlinux' ),   					array(   						'span' => array(   							'class' => array(),   						),   					)   				),   #				wp_kses_post( get_the_title() )   			),   			'<span class="edit-link">',   			'</span>'   		);   	}�   r      �      =if ( ! function_exists( 'twinquestlinux_post_thumbnail' ) ) :   	/**   (	 * Displays an optional post thumbnail.   	 *   J	 * Wraps the post thumbnail in an anchor element on index views, or a div   !	 * element when on single views.   	 */   +	function twinquestlinux_post_thumbnail() {   P		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {   
			return;   		}�   ~   �   �      		if ( is_singular() ) :   			?>�   �   �   �      		<?php else : ?>�   �   �   �      					the_post_thumbnail(   						'post-thumbnail',   						array(   $							'alt' => the_title_attribute(   								array(   									'echo' => false,   									)   								),   						)   					);   				?>�   �   �   �      		endif; // End is_singular().   	}�   �   �   �   	   ,if ( ! function_exists( 'wp_body_open' ) ) :   	/**   "	 * Shim for sites older than 5.2.   	 *   6	 * @link https://core.trac.wordpress.org/ticket/12563   	 */   	function wp_body_open() {   		do_action( 'wp_body_open' );   	}5��    �            	      `      �       �       �    �                   2              *       �    �       
      
      i      �       a      �    �                     �                     �    ~                   f             (       �    r      
            �      h      �      �    _                   p      }      E      �    L                   �      �      �      �    D                   �	      �      �      �    6                        �             �    1                   �      z       �       �    &      	      
      �      �      �      �                       P      \      �       �                       ~      �       �       �    	                
   �       �      �       �                   
       �               �      �                                                5�_�                     �        ����                                                                                                                                                                                                                                                                                                                                                             g2��    �   �   �   �      			<?php�   �   �   �      			</a>�   �   �   �      					<?php�   �   �   �      _			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">�   �   �   �      		<?php else: ?>�   �   �   �      !			</div><!-- .post-thumbnail -->�   �   �   �      "				<?php the_post_thumbnail(); ?>�   �   �   �      			<div class="post-thumbnail">5��    �                  (   �             (       �    �           "       .   �      "       .       �    �           !       *   �      !       *       �    �                                          �    �           _       h   8      _       h       �    �           	          �      	              �    �                                         �    �                     -                    5��