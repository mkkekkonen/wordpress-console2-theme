<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet" />
  </head>

  <body <?php body_class(); ?>>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <h1 class="main-title">
            <a href="<?php echo home_url(); ?>">
              <?php bloginfo('name'); ?>
            </a>
          </h1>

          <!-- <p>~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*</p> -->
          <!-- <p>~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*~*</p> -->
          <hr />
        </div>
      </div>
