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
    <div class="nav-logo-mark">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 17l3-8h14l3 8H2zm3-2h14l-2-4H7L5 15zm0 0H3v2h18v-2h-2M7 7h10v2H7z"/>
      </svg>
    </div>
    <span class="nav-brand">Conca <span>Rimorchi</span></span>
  </a>
  <ul class="nav-links">
    <li><a href="#servizi">Servizi</a></li>
    <li><a href="<?php echo get_post_type_archive_link('rimorchi'); ?>">Rimorchi</a></li>
    <li><a href="#assistenza">Assistenza</a></li>
    <li><a href="#azienda">Azienda</a></li>
    <li><a href="#contatti" class="nav-cta">Contattaci</a></li>
  </ul>
  <button class="hamburger" id="hamburger" aria-label="Menu">
    <span></span><span></span><span></span>
  </button>
</nav>