<?php get_header(); ?>

<main id="archive-rimorchi">

  <!-- HERO -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <div class="section-tag">Disponibili ora</div>
      <h1 class="page-hero-title">Rimorchi<br><span style="color: var(--verde);">usati</span></h1>
      <p class="page-hero-desc">Semirimorchi usati selezionati per qualità e affidabilità. <strong>Controllati e pronti all'uso</strong>.</p>
    </div>
  </section>

  <!-- FILTRI -->
  <div class="rimorchi-filtri">
    <div class="section-inner">
      <div class="filtri-inner">
        <a href="<?php echo get_post_type_archive_link('rimorchi'); ?>" class="filtro-btn">Tutti i rimorchi</a>
        <span class="filtri-sep">|</span>
        <a href="<?php echo home_url('/rimorchi-nuovi'); ?>" class="filtro-btn">Nuovi</a>
        <a href="<?php echo home_url('/rimorchi-usati'); ?>" class="filtro-btn active">Usati</a>
      </div>
    </div>
  </div>

  <!-- GRIGLIA -->
  <section class="page-section" style="background: var(--nero); border-top: 1px solid var(--bordo);">
    <div class="section-inner">
      <?php
      $args = [
        'post_type'      => 'rimorchi',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_query'     => [
          'relation' => 'AND',
          [
            'key'   => 'condizione',
            'value' => 'usato',
          ],
          [
            'key'     => 'stato',
            'value'   => 'venduto',
            'compare' => '!=',
          ],
        ],
      ];

      $rimorchi = new WP_Query($args);
      ?>

      <?php if ($rimorchi->have_posts()) : ?>
        <div class="rimorchi-grid">
          <?php while ($rimorchi->have_posts()) : $rimorchi->the_post();
            $foto       = get_field('foto');
            $categoria  = get_field('categoria');
            $stato      = get_field('stato');
            $marca      = get_field('marca');
            $prezzo     = get_field('prezzo');
          ?>
          <a href="<?php the_permalink(); ?>" class="rimorchio-card">
            <div class="rimorchio-card-img">
              <?php if ($foto) : ?>
                <img src="<?php echo esc_url($foto['url']); ?>" alt="<?php echo esc_attr($foto['alt'] ?: get_the_title()); ?>">
              <?php else : ?>
                <div class="rimorchio-card-no-img">
                  <svg viewBox="0 0 24 24"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4z"/></svg>
                </div>
              <?php endif; ?>
              <div class="rimorchio-badge rimorchio-badge--condizione usato">Usato</div>
              <?php if ($stato === 'riservato') : ?>
                <div class="rimorchio-badge rimorchio-badge--riservato">Riservato</div>
              <?php endif; ?>
            </div>
            <div class="rimorchio-card-body">
              <?php if ($categoria) : ?>
                <div class="product-badge"><?php echo esc_html($categoria); ?></div>
              <?php endif; ?>
              <h2 class="rimorchio-card-title"><?php the_title(); ?></h2>
              <?php if ($marca) : ?>
                <div class="rimorchio-card-marca"><?php echo esc_html($marca); ?></div>
              <?php endif; ?>
              <div class="rimorchio-card-footer">
                <?php if ($prezzo) : ?>
                  <div class="rimorchio-card-prezzo">€ <?php echo esc_html($prezzo); ?></div>
                <?php else : ?>
                  <div class="rimorchio-card-prezzo">Contattaci</div>
                <?php endif; ?>
                <span class="rimorchio-card-link">
                  Vedi dettaglio
                  <svg viewBox="0 0 16 16" width="12" height="12"><path d="M8 0l8 8-8 8-1.4-1.4L12.2 9H0V7h12.2L6.6 1.4z"/></svg>
                </span>
              </div>
            </div>
          </a>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>

      <?php else : ?>
        <div class="rimorchi-empty">
          <p>Nessun rimorchio usato disponibile al momento.</p>
          <a href="<?php echo home_url('/contattaci'); ?>" class="btn-primary" style="margin-top: 24px;">
            Contattaci per disponibilità
          </a>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>