Vim�UnDo� �>���R��Z�0��v�]n�� �Y)AD~`t�   4   /**                              g2��    _�                              ����                                                                                                                                                                                                                                                                                                                                                             g2��    �         3      /**�         4          get_header();�         5              if ( have_posts() ) :       3            if ( is_home() && ! is_front_page() ) :                   ?>�      /   $                  endif;�         9                       /* Start the Loop */   $            while ( have_posts() ) :                   the_post();                       /*   K                 * Include the Post-Type-specific template for the content.   U                 * If you want to override this in a child theme, then include a file   j                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.                    */   O                get_template_part( 'template-parts/content', get_post_type() );                   endwhile;       #            the_posts_navigation();               else :       B            get_template_part( 'template-parts/content', 'none' );               endif;   
        ?>5��                         %      �             �                                        �      �                       
      S       K       �                          �                     �                                                5��