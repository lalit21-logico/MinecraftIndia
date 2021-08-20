<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php if (!empty($isSEO)) {
    echo '<meta name="robots" content="index, follow" />';
  } else {
    echo '<meta name="robots" content="noindex, nofollow" />';
  } ?>

  <meta name="author" content="co-authored by Saurabh Tanwar">
  <meta name="description" content="<?php if (!empty($pageDesc)) {
                                      echo $pageDesc;
                                    } else {
                                      echo 'Minecraft India is an unoffcial Minecraft Gaming Community';
                                    } ?>">
  <meta name="google-site-verification" content="#####" />

  <?php if (!empty($canonical)) echo '<link rel="canonical" href="' . site_url($canonical) . '">'; ?>

  <title><?php if (!empty($pageTitle)) {
            echo $pageTitle;
          } else {
            echo 'Minecraft India | The Gaming Community';
          } ?></title>

  <!-- generics -->
  <!--NEEDED- <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-32.png'); ?>" sizes="16x16"> -->
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-32.png'); ?>" sizes="32x32">
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-57.png'); ?>" sizes="57x57">
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-76.png'); ?>" sizes="76x76">
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-96.png'); ?>" sizes="96x96">
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-128.png'); ?>" sizes="128x128">
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-192.png'); ?>" sizes="192x192">
  <link rel="icon" href="<?php echo base_url('framework/favicons/favicon-228.png'); ?>" sizes="228x228">

  <!-- Android 196 -->
  <link rel="shortcut icon" sizes="192x192" href="<?php echo base_url('framework/favicons/favicon-192.png'); ?>">

  <!-- iOS -->
  <link rel="apple-touch-icon" href="<?php echo base_url('framework/favicons/favicon-128.png'); ?>" sizes="120x120">
  <link rel="apple-touch-icon" href="<?php echo base_url('framework/favicons/favicon-152.png'); ?>" sizes="152x152">
  <link rel="apple-touch-icon" href="<?php echo base_url('framework/favicons/favicon-180.png'); ?>" sizes="180x180">

  <!-- Windows 8 IE 10-->
  <meta name="msapplication-TileColor" content="#000089">
  <meta name="msapplication-TileImage" content="<?php echo base_url('framework/favicons/favicon-144.png'); ?>">

  <!-- Windows 8.1 + IE11 and above -->
  <meta name="msapplication-config" content="<?php echo base_url('framework/browserconfig.xml'); ?>" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo base_url('framework/CSS/mi-core.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('framework/CSS/ITEstyles.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('framework/CSS/theme.css'); ?>" />
  <script defer src="https://kit.fontawesome.com/b322fd2497.js" crossorigin="anonymous"></script>
  <!-- AOS -->
  <?php if (!empty($pageTitle) && $pageTitle = 'Home') {
    echo '<script src="' . base_url('framework/AOS/aos.js') . '"></script>
    <link rel="stylesheet" href="' . base_url('framework/AOS/aos.css') . '" />';
  }  ?>