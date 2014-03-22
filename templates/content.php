<div class="masonry col-sm-6 col-lg-4">
	<div class="panel panel-default">
		<article <?php post_class(); ?> >
  			<header class="header-padding">
    			<h4 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  			</header>
    		<figure class="overlay">
    			<img src="<?php
$grade = get_post_meta( get_the_ID(), 'website_grade', true );
if( $grade == "A") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-a.png";
} elseif( $grade == "A+") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-a-plus.png";
} elseif( $grade == "A-") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-a-minus.png";
} elseif( $grade == "B+") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-b-plus.png";
} elseif( $grade == "B") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-b.png";
} elseif( $grade == "B-") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-b-minus.png";
} elseif( $grade == "C+") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-c-plus.png";
} elseif( $grade == "C") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-c.png";
} elseif( $grade == "C-") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-c-minus.png";
} elseif( $grade == "D+") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-d-plus.png";
} elseif( $grade == "D") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-d.png";
} elseif( $grade == "D-") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-d-minus.png";
} elseif( $grade == "F") {
echo "http://thebestsites.com/wp-content/uploads/sites/2/2014/03/grade-f.png";
}
?>" class="grade">
    			<div class="read-more"><a href="<?php the_permalink(); ?>"><em class="fa fa-info-circle"></em> Read More About <?php echo get_post_meta( get_the_ID(), 'website_name', true ); ?></a></div>
				<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('large'); } ?></a>
			</figure>
			<div class="post-details">
				<?php the_excerpt(); ?>
				<a type="button" class="btn btn-sm btn-success" href="<?php echo get_post_meta( get_the_ID(), 'website_url', true ); ?>" target="_blank"><em class="fa fa-external-link"></em> Visit <?php echo get_post_meta( get_the_ID(), 'website_name', true ); ?></a>
				<a type="button" class="btn btn-sm btn-primary" href="<?php the_permalink(); ?>"><em class="fa fa-info-circle"></em> Read More</a>
<a type="button" id="chrome-app-button" class="btn btn-sm btn-primary" href="<?php echo get_post_meta( get_the_ID(), 'chrome_app_link', true ); ?>" style="display: none;"> Chrome App</a>
</div>
		</article>
	</div>
</div>
