<?php 

$page_name = (isset($page_name)) ? $page_name : 'home';
require_once 'inc.php';
  
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}


?>

    <meta name="description" content="Ventes immobilières">
    <meta name="author" content="Idriss Wagoum Takuété">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Doulimmo</title>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">

  </head>

  <body>
    
	<header class="site-header sticky-top py-1">
	  
	  	<nav class="container d-flex flex-column flex-md-row justify-content-between">
		    <a class="py-2" href="#" aria-label="Bienvenue">
		      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
		    </a>
		    <a class="py-2 d-none d-md-inline-block" href="#">Bienvenue</a>
		    <a class="py-2 d-none d-md-inline-block" href="#products">Nos produits</a>
		    <a class="py-2 d-none d-md-inline-block" href="#about">À propos de nous</a>
		    <a class="py-2 d-none d-md-inline-block" href="#contact">Nous contacter</a>
	  	</nav>

	</header>

	<div class="App">

		<main class="app_main">