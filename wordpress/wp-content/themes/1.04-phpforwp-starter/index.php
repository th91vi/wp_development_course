<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php

      // Create an array of post objects using the display_post function
      // $titles = array(
      //   0 => 'Lorem ipsum dolor sit amet.',
      //   1 => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
      //   2 => 'Lorem ipsum dolor, sit amet consectetur adipisicing.',
      //   3 => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias!',
      //   4 => 'Lorem, ipsum dolor sit amet consectetur.'
      // );

      $titles = [
        'Lorem ipsum dolor sit amet.',
        'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
        'Lorem ipsum dolor, sit amet consectetur adipisicing.',
        'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias!',
        'Lorem, ipsum dolor sit amet consectetur.'
      ];

      // print_r($titles);
      $titles_count = count($titles);

      // Loop through array of posts and display each one on the page
      for ($i=0; $i < $titles_count ; $i++) { 
        // Call the display_title function and pass it the $post
        display_title( $titles[$i] );
      }


      /**
       * Custom function for displaying the title and content for a post
       *
       * @param string $title The title to be displayed
       */
      function display_title( $title ) {

        // Echo an <h3> tag with the $title inside
        echo '<h3>' . $title . '</h3>';
      }

    ?>

  </div>

</body>
</html>
