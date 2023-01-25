<?php
/**
 * Template Name: Sitemap
 */

$categories = get_categories();
//var_dump($categories);



$catLen = count(get_categories());
$parentCategory;
$slaveCategory = null;

function category_has_children( $term_id = 0, $taxonomy = 'category' ) {
    $children = get_categories( array( 
        'child_of'      => $term_id,
        'taxonomy'      => $taxonomy,
        'hide_empty'    => true,
        'fields'        => 'ids',
    ) );
    return ( $children );
}

//var_dump(wp_list_categories(array('hierarchical' => true,'title_li'=> '', 'child_of' => $parent->term_id)));

//var_dump($parents = get_categories(array('hierarchical' => false)));

//var_dump(category_has_children($parent) );

//var_dump(get_categories());

$categories = get_categories();
//var_dump($categories);
$parents = array();
foreach($categories as $category){

	$category_parent = $category->category_parent;
	
	if($category_parent > 0){
		//è un child
		$parent =  get_category($category->category_parent);
		$children = get_categories( array('child_of' => $parent->term_id) );
		$parent->children = $children;
		if(array_search($parent,$parents) === false ) {
			array_push($parents,$parent);
		}
	}

}

$sorted_cats = array();
foreach($parents as $cat){
	$ordr = get_field('rank', 'category_'.$cat->term_id);
	$sorted_cats[$ordr] = $cat;
}
ksort($sorted_cats);
$parents = $sorted_cats;
/*
 wp_list_categories(array(
	//'taxonomy' => 'category',
	'hierarchical' => true,
	'hide_empty'=>false,
	'title_li'=> '',
	'child_of' => $category->term_id,
	'exclude' => $catToExclude
	
));
*/
get_header();
?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main sitemap" role="main">
            <div class="container" style="margin:30px auto;">
				<div class="row">
					<div class="col-xs-12">
						<h1><?= get_the_title() ?></h1>
						<?php 	
								$categories = get_categories(array('hierarchical' => true,'hide_empty'=>true));
								$cat_children = array();

							foreach($parents as $category){
								if($category->category_parent > 0){
									array_push($cat_children,$category);
								}else{ ?>
									<h3><a href="<?= get_category_link($category) ?>"><?= ucfirst($category->cat_name)?></a></h3>
									<ul>
									<?php 
										foreach($category->children as $child){
											
											if($child->category_parent == $category->term_id ){ ?>
												<li><a href="<?= get_category_link($child) ?>"> <?= $child->cat_name ?> </a></li>
											<?php }	?>
									<?php } ?>
									</ul>
								<?php } ?>
							<?php 
							}
							?>
						<?php 

						?>
						
					</div>
				</div>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
