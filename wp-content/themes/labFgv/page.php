<?php

include("header.php");

if ( have_posts() ) : while ( have_posts() ) : the_post();       
    the_content(); // displays whatever you wrote in the wordpress editor
endwhile; endif; //ends the loop
 
include("footer.php");


?>
