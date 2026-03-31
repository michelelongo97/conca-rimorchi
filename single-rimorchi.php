<?php get_header(); ?>

<?php while (have_posts()) : the_post();

  $foto           = get_field('galleria_foto');
  $categoria      = get_field('categoria');
  $condizione     = get_field('condizione');
  $stato          = get_field('stato');
  $codice         = get_field('codice');
  $localizzazione = get_field('localizzazione');
  $marca          = get_field('marca');
  $modello        = get_field('modello');
  $immatricolazione = get_field('immatricolazione');
  $assali         = get_field('assali');
  $pianale        = get_field('pianale');
  $allestimento   = get_field('allestimento');
  $accessori      = get_field('accessori');
  $prezzo         = get_field('prezzo');
  $misure         = get_field('misure');
  $gomme          = get_field('gomme');
  $note           = get_field('note');
  $specifiche     = get_field('specifiche_tecniche');
  $link_esterno = get_field('link_esterno');

?>

<main id="single-rimorchio">

  <!-- BREADCRUMB -->
  <div class="rimorchio-breadcrumb">
    <div class="section-inner">
      <a href="<?php echo home_url(); ?>">Home</a>
      <span>›</span>
      <a href="<?php echo get_post_type_archive_link('rimorchi'); ?>">Rimorchi</a>
      <?php if ($condizione) : ?>
        <span>›</span>
          <a href="<?php echo home_url('/rimorchi-' . ($condizione === 'nuovo' ? 'nuovi' : 'usati')); ?>">
            <?php echo $condizione === 'nuovo' ? 'Nuovi' : 'Usati'; ?>
          </a>
      <?php endif; ?>
      <span>›</span>
      <span><?php the_title(); ?></span>
    </div>
  </div>

  <section class="page-section">
    <div class="section-inner">
      <div class="rimorchio-layout">

        <!-- COLONNA SINISTRA: foto + scheda -->
        <div class="rimorchio-main">

          <!-- TITOLO MOBILE -->
          <div class="rimorchio-title-block">
            <div class="rimorchio-badges">
              <?php if ($categoria) : ?>
                <span class="product-badge"><?php echo esc_html(conca_get_categoria_label($categoria)); ?></span>
              <?php endif; ?>
              <?php if ($condizione) : ?>
                <span class="rimorchio-badge-inline <?php echo $condizione === 'nuovo' ? 'nuovo' : 'usato'; ?>">
                  <?php echo ucfirst($condizione); ?>
                </span>
              <?php endif; ?>
              <?php if ($stato === 'riservato') : ?>
                <span class="rimorchio-badge-inline riservato">Riservato</span>
              <?php endif; ?>
            </div>
            <h1 class="rimorchio-title"><?php the_title(); ?></h1>
            <?php if ($codice) : ?>
              <div class="rimorchio-codice">Codice: <?php echo esc_html($codice); ?></div>
            <?php endif; ?>
          </div>

          <!-- FOTO PRINCIPALE -->
          <div class="rimorchio-foto-principale">
            <?php if ($foto) : ?>
              <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt'] ?: get_the_title()); ?>">
            <?php else : ?>
              <div class="rimorchio-no-foto">
                <svg viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4z"/></svg>
                <p>Foto non disponibile</p>
              </div>
            <?php endif; ?>
          </div>

          <!-- GALLERIA -->
          <?php if (get_the_content()) : ?>
          <div class="rimorchio-galleria">
          <?php the_content(); ?>
          </div>
          <?php endif; ?>

          <!-- SCHEDA TECNICA -->
          <div class="rimorchio-scheda">
            <h2 class="rimorchio-scheda-title">Scheda tecnica</h2>
            <table class="rimorchio-table">
              <?php if ($marca) : ?>
                <tr>
                  <td class="rimorchio-table-label">Marca</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($marca); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($modello) : ?>
                <tr>
                  <td class="rimorchio-table-label">Modello</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($modello); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($immatricolazione) : ?>
                <tr>
                  <td class="rimorchio-table-label">Immatricolazione</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($immatricolazione); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($localizzazione) : ?>
                <tr>
                  <td class="rimorchio-table-label">Localizzazione</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($localizzazione); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($assali) : ?>
                <tr>
                  <td class="rimorchio-table-label">Assali</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($assali); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($pianale) : ?>
                <tr>
                  <td class="rimorchio-table-label">Pianale</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($pianale); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($gomme) : ?>
                <tr>
                  <td class="rimorchio-table-label">Gomme</td>
                  <td class="rimorchio-table-value"><?php echo esc_html($gomme); ?></td>
                </tr>
              <?php endif; ?>
              <?php if ($misure) : ?>
                <tr>
                  <td class="rimorchio-table-label">Misure</td>
                  <td class="rimorchio-table-value"><?php echo nl2br(esc_html($misure)); ?></td>
                </tr>
              <?php endif; ?>
            </table>

            <?php if ($allestimento) : ?>
              <div class="rimorchio-detail-block">
                <div class="rimorchio-detail-label">Allestimento</div>
                <p class="rimorchio-detail-text"><?php echo nl2br(esc_html($allestimento)); ?></p>
              </div>
            <?php endif; ?>

            <?php if ($accessori) : ?>
              <div class="rimorchio-detail-block">
                <div class="rimorchio-detail-label">Accessori</div>
                <p class="rimorchio-detail-text"><?php echo nl2br(esc_html($accessori)); ?></p>
              </div>
            <?php endif; ?>

            <?php if ($specifiche) : ?>
              <div class="rimorchio-detail-block">
                <div class="rimorchio-detail-label">Specifiche tecniche</div>
                <?php
                $lines = explode("\n", $specifiche);
                echo '<table class="rimorchio-table">';
                foreach ($lines as $line) {
                  $line = trim($line);
                  if (!$line) continue;
                  $parts = explode(':', $line, 2);
                  if (count($parts) === 2) {
                    echo '<tr>';
                    echo '<td class="rimorchio-table-label">' . esc_html(trim($parts[0])) . '</td>';
                    echo '<td class="rimorchio-table-value">' . esc_html(trim($parts[1])) . '</td>';
                    echo '</tr>';
                  }
                }
                echo '</table>';
                ?>
              </div>
            <?php endif; ?>

            <?php if ($note) : ?>
              <div class="rimorchio-detail-block rimorchio-note">
                <div class="rimorchio-detail-label">Note</div>
                <p class="rimorchio-detail-text"><?php echo nl2br(esc_html($note)); ?></p>
              </div>
            <?php endif; ?>

          </div>
        </div>

        <!-- COLONNA DESTRA: prezzo + CTA -->
        <div class="rimorchio-sidebar">
          <div class="rimorchio-sidebar-inner">

            <!-- PREZZO -->
            <div class="rimorchio-prezzo-box">
              <?php if ($stato === 'venduto') : ?>
                <div class="rimorchio-venduto">Venduto</div>
              <?php elseif ($stato === 'riservato') : ?>
                <div class="rimorchio-riservato">Riservato</div>
              <?php elseif ($prezzo) : ?>
                <div class="rimorchio-prezzo-label">Prezzo</div>
                <div class="rimorchio-prezzo">€ <?php echo esc_html(number_format((float)$prezzo, 0, ',', '.')); ?></div>
              <?php else : ?>
                <div class="rimorchio-prezzo-label">Prezzo</div>
                <div class="rimorchio-prezzo-su-richiesta">Su richiesta</div>
              <?php endif; ?>
            </div>

            <!-- CTA -->
            <?php if ($stato !== 'venduto') : ?>
              <a href="<?php echo home_url('/contattaci'); ?>?oggetto=<?php echo urlencode(get_the_title()); ?>" class="btn-primary" style="width: 100%; justify-content: center; margin-bottom: 12px;">
                Richiedi informazioni
                <svg viewBox="0 0 16 16" fill="white" width="14" height="14"><path d="M8 0l8 8-8 8-1.4-1.4L12.2 9H0V7h12.2L6.6 1.4z"/></svg>
              </a>
              <a href="https://wa.me/393931911704?text=<?php echo urlencode('Ciao, sono interessato al rimorchio: ' . get_the_title() . ' (Codice: ' . $codice . ')'); ?>" target="_blank" rel="noopener" class="footer-whatsapp" style="width: 100%; justify-content: center;">
                <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                Scrivici su WhatsApp
              </a>
            <?php endif; ?>

            <!-- LINK ESTERNO -->
            <?php if ($link_esterno) : ?>
              <a href="<?php echo esc_url($link_esterno); ?>" target="_blank" rel="noopener" class="btn-primary" style="width: 100%; justify-content: center;">
              <svg viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
              Vedi annuncio esterno
              </a>
            <?php endif; ?>

            <!-- INFO RAPIDE -->
            <div class="rimorchio-info-rapide">
              <?php if ($codice) : ?>
                <div class="rimorchio-info-row">
                  <span class="rimorchio-info-label">Codice</span>
                  <span class="rimorchio-info-value"><?php echo esc_html($codice); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($localizzazione) : ?>
                <div class="rimorchio-info-row">
                  <span class="rimorchio-info-label">Localizzazione</span>
                  <span class="rimorchio-info-value"><?php echo esc_html($localizzazione); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($condizione) : ?>
                <div class="rimorchio-info-row">
                  <span class="rimorchio-info-label">Condizione</span>
                  <span class="rimorchio-info-value"><?php echo ucfirst($condizione); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($immatricolazione) : ?>
                <div class="rimorchio-info-row">
                  <span class="rimorchio-info-label">Immatricolazione</span>
                  <span class="rimorchio-info-value"><?php echo esc_html($immatricolazione); ?></span>
                </div>
              <?php endif; ?>
            </div>

            <!-- TORNA AL CATALOGO -->
            <a href="javascript:history.back()" class="rimorchio-back">
              ← Torna al catalogo
            </a>

          </div>
        </div>

      </div>
    </div>
  </section>

</main>

<?php endwhile; ?>

<!-- LIGHTBOX -->
<div class="lightbox-overlay" id="lightbox">
  <span class="lightbox-close" id="lightbox-close">×</span>
  <img src="" alt="" id="lightbox-img">
</div>

<script>
document.querySelectorAll('.rimorchio-galleria .wp-block-image img').forEach(img => {
  img.addEventListener('click', () => {
    document.getElementById('lightbox-img').src = img.src;
    document.getElementById('lightbox').classList.add('open');
  });
});

document.getElementById('lightbox').addEventListener('click', () => {
  document.getElementById('lightbox').classList.remove('open');
});

document.getElementById('lightbox-close').addEventListener('click', () => {
  document.getElementById('lightbox').classList.remove('open');
});
</script>

<?php get_footer(); ?>