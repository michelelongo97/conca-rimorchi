<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('–', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav id="navbar">
  <a href="<?php echo home_url(); ?>" class="nav-logo">
  <img 
    src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" 
    alt="Conca Rimorchi" 
    class="nav-logo-img"
  >
</a>
  <ul class="nav-links">
    <li><a href="#servizi">Servizi</a></li>
    <li><a href="#prodotti">Rimorchi</a></li>
    <li><a href="#assistenza">Assistenza</a></li>
    <li><a href="#azienda">Azienda</a></li>
    <li><a href="#contatti" class="nav-cta">Contattaci</a></li>
  </ul>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>
<div class="mobile-menu" id="mobile-menu">
  <ul>
    <li><a href="#servizi"    class="close-menu">Servizi</a></li>
    <li><a href="#prodotti"   class="close-menu">Rimorchi</a></li>
    <li><a href="#assistenza" class="close-menu">Assistenza</a></li>
    <li><a href="#azienda"    class="close-menu">Azienda</a></li>
    <li><a href="#contatti"   class="close-menu">Contattaci</a></li>
  </ul>
</div>