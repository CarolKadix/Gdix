<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
          $.fn.textStroke = function(r, colour) {
          var rules = [];
            var steps = 24;
            for (var t=0;t<=(2*Math.PI);t+=(2*Math.PI)/steps){
                var x = r*Math.cos(t);
                var y = r*Math.sin(t);
                x = (Math.abs(x) < 1e-6) ? '0' : x.toString();
                y = (Math.abs(y) < 1e-6) ? '0' : y.toString();
                rules.push( x + "px " + y + "px 0px " + colour );
                }
            this.css('textShadow',rules.join());
            };
        $(function(){
            $('li.menu-item').textStroke(4,'#b4524f');
            $('h1.stroke').textStroke(4,'#461002');
            $('h2.stroke').textStroke(4,'#461002');
            $('h2.light').textStroke(4,'#8a523b');  
            $('h2.noshadow').textStroke(1); 
            $('h3.stroke').textStroke(4,'#461002');
            $('h3.light').textStroke(4,'#8a523b');
            $('h3.ebs-caption').textStroke(4,'#461002');
            $('h4.stroke').textStroke(4,'#8a523b');
            })
      </script>
      <?php function my_image_class_filter($classes) {
    return $classes . 'img-responsive';
}
add_filter('get_image_tag_class', 'my_image_class_filter');
?>

require_once get_template_directory() . 'extras.php';

	
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
