<?php
// Custom Pagination function to replace paginate_links();
function pagination($pages = '', $range = 1)
{  
     // $showitems = ($range * 2)+1;  
     $showitems = ($range * 2); 

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."' class=\"first big-pgbtn\">&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."' class=\"prev small-pgbtn\">&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current small-pgbtn'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive small-pgbtn' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."' class=\"next small-pgbtn\">&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."' class=\"last big-pgbtn\">&raquo;</a>";
     }
}


function mywp_page_navi() {
    global $wp_query;
    $bignum = 999999999;
    if ( $wp_query->max_num_pages <= 1 )
    return;
    
    echo '<nav class="pagination">';
    
        echo paginate_links( array(
            'base'          => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
            'format'        => '',
            'current'       => max( 1, get_query_var('paged') ),
            'total'         => $wp_query->max_num_pages,
            'prev_text'     => '&larr;',
            'next_text'     => '&rarr;',
            'type'          => 'list',
            'end_size'      => 3,
            'mid_size'      => 3
        ) );
    
    echo '</nav>';
}

