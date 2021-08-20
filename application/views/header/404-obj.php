<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
<link href="https://unpkg.com/nes.css@latest/css/nes.min.css" rel="stylesheet" />

<style>
  @import "<?php echo base_url('framework/Fonts/minecraft-reg.otf'); ?>";

  html,
  body {

    background: url('<?php echo base_url('framework/IMG/lava.gif'); ?>') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    height: 100%;
  }

  @media (min-height: 992px) {

    body {
      min-height: 100vh;
      /* will cover the 100% of viewport */
      display: block;
      position: relative;
      padding-bottom: 100px;
      /* height of your footer */

    }

  }


  h2,
  h3,
  h4,
  h5 {

    text-transform: inherit;
    font-weight: inherit;
    text-shadow: 2px 2px black;
  }

  h1 {
    font-size: 60px;
    text-shadow: 2px 2px black;
  }

  h2 {
    text-shadow: 2px 2px black;
  }

  .btn {
    cursor: inherit !important;
    text-transform: inherit;
  }

  .form-signin {
    width: 100%;
    padding: 15px;
    margin: auto;
  }
</style>
</head>