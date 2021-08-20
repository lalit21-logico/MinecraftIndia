<style>
  body {
    background: url('<?php echo base_url('framework/IMG/minecraft_dirt.jpg'); ?>');
  }

  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  label {
    color: white;
  }

  .container {
    max-width: 960px;
  }


  .lh-condensed {
    line-height: 1.25;
  }
</style>

<script type="text/javascript">
  function checkForm(form) {
    if (form.userName.value == "") {
      alert("Error: Username cannot be blank!");

      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if (!re.test(form.userName.value)) {
      $('#specialCharModel').modal('show');
      return false;
    }

    if (form.password.value != "" && form.password.value == form.re_password.value) {
      if (form.password.value.length < 6) {
        //alert("Error: Password must contain at least six characters!");
        $('#shortPassModel').modal('show');
        //form.password.focus();
        return false;
      }

    } else {
      //alert("Error: Please check that you've entered and confirmed your password!");
      $('#PassModel').modal('show');
      //form.password.focus();
      return false;
    }
    return true;
  }
</script>

</head>