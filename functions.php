<<?php function drweb_print_styles(){
    wp_enqueue_style(
        'drweb-print-style',
        get_stylesheet_directory_uri() . '/css/print.css',
        array(),
        '20130821',
        'print' // print styles only
    );
}
add_action( 'wp_enqueue_scripts', 'drweb_print_styles' );
/* The code's modified version only adds the print.css to the footer of single articles */
function drweb_print_styles(){
    if( is_single() ) {
    wp_enqueue_style(
        'drweb-print-style',
        get_stylesheet_directory_uri() . '/css/print.css',
        array(),
        '20130821',
        'print' // print styles only
        );
    }
}
add_action( 'wp_footer', 'drweb_print_styles' );
?>

<?php
function ah_print_button() { 
<div class="printversion">
<header><span>Print Version</span></header>
 <a class="printit" href="javascript:window.print()"> <img src="//pathtoyourgraphic" width="146" height="20" alt="Print Page"> </a>
</div>
<?php }
