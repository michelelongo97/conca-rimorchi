<?php
function conca_rimorchi_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'conca_rimorchi_setup');

function conca_rimorchi_scripts() {
  wp_enqueue_style(
    'conca-rimorchi-style',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    '1.0'
  );
  wp_enqueue_script(
    'conca-rimorchi-script',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    '1.0',
    true
  );
}
add_action('wp_enqueue_scripts', 'conca_rimorchi_scripts');

function conca_get_category_svg($categoria) {
  $svgs = [

    'centinato' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="15" width="90" height="30" rx="2" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5"/>
      <rect x="5" y="15" width="90" height="5" rx="1" fill="currentColor" opacity="0.4"/>
      <line x1="5" y1="45" x2="95" y2="45" stroke="currentColor" stroke-width="1.5"/>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="30" x2="115" y2="35" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'centinato_francese' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="15" width="90" height="30" rx="2" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5"/>
      <rect x="5" y="15" width="90" height="5" rx="1" fill="currentColor" opacity="0.4"/>
      <line x1="20" y1="15" x2="20" y2="45" stroke="currentColor" stroke-width="1" opacity="0.5" stroke-dasharray="3,3"/>
      <line x1="50" y1="15" x2="50" y2="45" stroke="currentColor" stroke-width="1" opacity="0.5" stroke-dasharray="3,3"/>
      <line x1="80" y1="15" x2="80" y2="45" stroke="currentColor" stroke-width="1" opacity="0.5" stroke-dasharray="3,3"/>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="30" x2="115" y2="35" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'pianale' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="38" width="90" height="6" rx="1" fill="currentColor" opacity="0.5"/>
      <line x1="5" y1="38" x2="5" y2="30" stroke="currentColor" stroke-width="1.5"/>
      <line x1="95" y1="38" x2="95" y2="30" stroke="currentColor" stroke-width="1.5"/>
      <line x1="5" y1="30" x2="95" y2="30" stroke="currentColor" stroke-width="1" stroke-dasharray="4,4" opacity="0.4"/>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="38" x2="115" y2="38" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'portacontainer' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="38" width="90" height="4" rx="1" fill="currentColor" opacity="0.4"/>
      <rect x="8" y="18" width="38" height="20" rx="1" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5"/>
      <rect x="52" y="18" width="38" height="20" rx="1" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5"/>
      <line x1="8" y1="28" x2="46" y2="28" stroke="currentColor" stroke-width="0.8" opacity="0.4"/>
      <line x1="52" y1="28" x2="90" y2="28" stroke="currentColor" stroke-width="0.8" opacity="0.4"/>
      <rect x="3" y="41" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="48" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="48" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="48" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="48" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="38" x2="115" y2="38" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'frigorifero' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="12" width="90" height="33" rx="2" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5"/>
      <rect x="5" y="12" width="90" height="6" rx="1" fill="currentColor" opacity="0.5"/>
      <rect x="10" y="22" width="12" height="12" rx="1" fill="currentColor" opacity="0.3"/>
      <line x1="16" y1="22" x2="16" y2="34" stroke="currentColor" stroke-width="0.8"/>
      <line x1="10" y1="28" x2="22" y2="28" stroke="currentColor" stroke-width="0.8"/>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="30" x2="115" y2="35" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'furgonato' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="12" width="90" height="33" rx="2" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="2"/>
      <rect x="5" y="12" width="90" height="6" rx="1" fill="currentColor" opacity="0.4"/>
      <rect x="80" y="18" width="10" height="20" rx="1" fill="currentColor" opacity="0.3" stroke="currentColor" stroke-width="1"/>
      <line x1="85" y1="18" x2="85" y2="38" stroke="currentColor" stroke-width="0.8" opacity="0.5"/>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="30" x2="115" y2="35" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'cassonato' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="22" width="90" height="23" rx="1" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5"/>
      <line x1="5" y1="22" x2="5" y2="15" stroke="currentColor" stroke-width="2"/>
      <line x1="95" y1="22" x2="95" y2="15" stroke="currentColor" stroke-width="2"/>
      <line x1="5" y1="15" x2="95" y2="15" stroke="currentColor" stroke-width="1.5" opacity="0.5"/>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="38" x2="115" y2="38" stroke="currentColor" stroke-width="2"/>
    </svg>',

    'altro' => '<svg viewBox="0 0 120 60" xmlns="http://www.w3.org/2000/svg">
      <rect x="5" y="20" width="90" height="25" rx="2" fill="currentColor" opacity="0.15" stroke="currentColor" stroke-width="1.5" stroke-dasharray="4,3"/>
      <text x="50" y="36" text-anchor="middle" font-size="12" fill="currentColor" opacity="0.5" font-family="sans-serif">...</text>
      <rect x="3" y="43" width="92" height="4" rx="1" fill="currentColor" opacity="0.3"/>
      <circle cx="22" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="22" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <circle cx="78" cy="50" r="5" fill="none" stroke="currentColor" stroke-width="2"/>
      <circle cx="78" cy="50" r="2" fill="currentColor" opacity="0.4"/>
      <line x1="95" y1="38" x2="115" y2="38" stroke="currentColor" stroke-width="2"/>
    </svg>',
  ];

  return isset($svgs[$categoria]) ? $svgs[$categoria] : $svgs['altro'];
}