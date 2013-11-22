<?php
if(is_front_page())
{
	if( is_active_sidebar( 'homepage-sidebar1' ) )
		dynamic_sidebar( 'homepage-sidebar1' );

	if( is_active_sidebar( 'homepage-sidebar2' ) )
		dynamic_sidebar( 'homepage-sidebar2' );
}
else
{
	if( is_active_sidebar( 'inner-page-sidebar1' ) )
		dynamic_sidebar( 'inner-page-sidebar1' );

	if( is_active_sidebar( 'inner-page-sidebar2' ) )
		dynamic_sidebar( 'inner-page-sidebar2' );

	if( is_active_sidebar( 'clear-sidebar' ) )
		dynamic_sidebar( 'clear-sidebar' );
}

?>
