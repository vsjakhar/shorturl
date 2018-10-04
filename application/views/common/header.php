<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css" crossorigin="anonymous"> -->

    <title>Shortrn Url</title>
  </head>
  <body>
    <header class="navbar-light bg-light">
      <div class="container">
        <nav class="navbar navbar-expand-lg ">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">Short Url</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Features</a>
              <a class="nav-item nav-link" href="#">Pricing</a>
              <?php if($this->session->user){ ?>
                <a class="nav-item nav-link" href="<?php echo base_url(); ?>dashboard">Dashboard</a>
                <a class="nav-item nav-link" href="<?php echo base_url(); ?>home/logout">Logout</a>
              <?php }else{ ?>
                <a class="nav-item nav-link" href="<?php echo base_url(); ?>login">Login</a>
              <?php } ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    