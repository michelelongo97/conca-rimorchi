<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
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
    <li><a href="<?php echo home_url('/servizi'); ?>">Servizi</a></li>
    <li class="nav-dropdown">
      <a href="<?php echo get_post_type_archive_link('rimorchi'); ?>">
        Rimorchi
        <svg viewBox="0 0 24 24" width="12" height="12" fill="currentColor"><path d="M7 10l5 5 5-5z"/></svg>
      </a>
      <ul class="nav-dropdown-menu">
        <li><a href="<?php echo home_url('/rimorchi-nuovi'); ?>">Rimorchi Nuovi</a></li>
        <li><a href="<?php echo home_url('/rimorchi-usati'); ?>">Rimorchi Usati</a></li>
        <li><a href="<?php echo get_post_type_archive_link('rimorchi'); ?>">Tutti i rimorchi</a></li>
      </ul>
    </li>
    <li><a href="<?php echo home_url('/assistenza'); ?>">Assistenza</a></li>
    <li><a href="<?php echo home_url('/azienda'); ?>">Azienda</a></li>
    <li><a href="<?php echo home_url('/contattaci'); ?>" class="nav-cta">Contattaci</a></li>
  </ul>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>

<div class="mobile-menu" id="mobile-menu">
  <ul>
    <li><a href="<?php echo home_url('/servizi'); ?>" class="close-menu">Servizi</a></li>
    <li><a href="<?php echo home_url('/rimorchi-nuovi'); ?>" class="close-menu">Rimorchi Nuovi</a></li>
    <li><a href="<?php echo home_url('/rimorchi-usati'); ?>" class="close-menu">Rimorchi Usati</a></li>
    <li><a href="<?php echo get_post_type_archive_link('rimorchi'); ?>">Tutti i rimorchi</a></li>
    <li><a href="<?php echo home_url('/assistenza'); ?>" class="close-menu">Assistenza</a></li>
    <li><a href="<?php echo home_url('/azienda'); ?>" class="close-menu">Azienda</a></li>
    <li><a href="<?php echo home_url('/contattaci'); ?>" class="close-menu">Contattaci</a></li>
  </ul>
</div>