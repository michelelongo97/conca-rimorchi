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
  $icons = [
    'centinati'      => 'centinati.png',
    'pianale'        => 'pianale.png',
    'portacontainer' => 'portacontainer.png',
    'furgonati'      => 'furgonati.png',
    'allestimento'   => 'allestimento.png',
    'ribaltabili'    => 'ribaltabili.png',
    'piani_mobili'   => 'piani-mobili.png',
  ];

  $file = isset($icons[$categoria]) ? $icons[$categoria] : 'altro.png';
  $url  = get_template_directory_uri() . '/assets/img/categorie/' . $file;

  return '<img src="' . esc_url($url) . '" alt="' . esc_attr($categoria) . '">';
}

// ── FORM CONTATTI ──
add_action('wp_ajax_conca_contact', 'conca_handle_contact');
add_action('wp_ajax_nopriv_conca_contact', 'conca_handle_contact');

function conca_handle_contact() {
  check_ajax_referer('conca_contact_nonce', 'nonce');

  $nome      = sanitize_text_field($_POST['nome'] ?? '');
  $cognome   = sanitize_text_field($_POST['cognome'] ?? '');
  $email     = sanitize_email($_POST['email'] ?? '');
  $telefono  = sanitize_text_field($_POST['telefono'] ?? '');
  $interesse = sanitize_text_field($_POST['interesse'] ?? '');
  $messaggio = sanitize_textarea_field($_POST['messaggio'] ?? '');

  if (!$nome || !$email || !is_email($email)) {
    wp_send_json_error(['message' => 'Compila tutti i campi obbligatori.']);
  }

  $to      = 'concarimorchi@gmail.com';
  $subject = 'Nuova richiesta da ' . $nome . ' ' . $cognome;
  $body    = "
    <html><body>
    <h2>Nuova richiesta dal sito Conca Rimorchi</h2>
    <table cellpadding='8' style='border-collapse:collapse;width:100%'>
      <tr><td><strong>Nome</strong></td><td>{$nome} {$cognome}</td></tr>
      <tr><td><strong>Email</strong></td><td>{$email}</td></tr>
      <tr><td><strong>Telefono</strong></td><td>{$telefono}</td></tr>
      <tr><td><strong>Interesse</strong></td><td>{$interesse}</td></tr>
      <tr><td><strong>Messaggio</strong></td><td>{$messaggio}</td></tr>
    </table>
    </body></html>
  ";

  $headers = [
    'Content-Type: text/html; charset=UTF-8',
    'From: Conca Rimorchi <noreply@concarimorchi.com>',
    'Reply-To: ' . $email,
  ];

  $sent = wp_mail($to, $subject, $body, $headers);

  if ($sent) {
    wp_send_json_success(['message' => 'Messaggio inviato! Ti risponderemo al più presto.']);
  } else {
    wp_send_json_error(['message' => 'Errore nell\'invio. Contattaci direttamente per telefono.']);
  }
}

// Passa il nonce al JS
add_action('wp_enqueue_scripts', function() {
  wp_localize_script('conca-rimorchi-script', 'concaAjax', [
    'url'   => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('conca_contact_nonce'),
  ]);
});


// ── FUNZIONE ETICHETTA CATEGORIA ──

function conca_get_categoria_label($slug) {
  $labels = [
    'centinati'      => 'Centinati',
    'pianale'        => 'Pianalati',
    'portacontainer' => 'Portacontainer',
    'furgonati'      => 'Furgonati / VAN',
    'allestimento'   => 'Telai per Allestimento',
    'ribaltabili'    => 'Ribaltabili',
    'piani_mobili'   => 'Piani Mobili',
  ];
  return isset($labels[$slug]) ? $labels[$slug] : ucfirst(str_replace('_', ' ', $slug));
}
