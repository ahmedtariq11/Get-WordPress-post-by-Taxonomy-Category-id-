$catid = get_term_by( 'slug', 'cat-slug', 'Taxnomyname' );
$args = array(
'posts_per_page'   => -1,
'offset'           => 0,
'tax_query'  => array(array(
'taxonomy' => 'Taxnomyname',
'field' => 'term_id',
'terms' => $catid->term_id
)),
'orderby'          => 'date',
'order'            => 'DESC',
'post_type'        => 'match',
'post_status'      => 'publish'
);
$events = get_posts( $args );
