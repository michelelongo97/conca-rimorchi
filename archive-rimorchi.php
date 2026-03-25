<?php get_header(); ?>

<main id="archive-rimorchi">

  <!-- HERO -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <div class="section-tag">Il nostro parco</div>
      <h1 class="page-hero-title">Tutti i<br><span style="color: var(--verde);">rimorchi</span></h1>
      <p class="page-hero-desc">Semirimorchi <strong>nuovi e usati</strong> per ogni esigenza del trasporto professionale.</p>
    </div>
  </section>

  <!-- FILTRI -->
  <div class="rimorchi-filtri">
    <div class="section-inner">
      <div class="filtri-inner">
        <a href="<?php echo get_post_type_archive_link('rimorchi'); ?>" class="filtro-btn <?php echo !isset($_GET['condizione']) ? 'active' : ''; ?>">
          Tutti
        </a>
        <a href="<?php echo get_post_type_archive_link('rimorchi'); ?>?condizione=nuovo" class="filtro-btn <?php echo isset($_GET['condizione']) && $_GET['condizione'] === 'nuovo' ? 'active' : ''; ?>">
          Nuovi
        </a>
        <a href="<?php echo get_post_type_archive_link('rimorchi'); ?>?condizione=usato" class="filtro-btn <?php echo isset($_GET['condizione']) && $_GET['condizione'] === 'usato' ? 'active' : ''; ?>">
          Usati
        </a>
      </div>
    </div>
  </div>

  <!-- GRIGLIA -->
  <section class="page-section" style="background: var(--nero); border-top: 1px solid var(--bordo);">
    <div class="section-inner">
      <?php
      $condizione = isset($_GET['condizione']) ? sanitize_text_field($_GET['condizione']) : '';

      $args = [
        'post_type'      => 'rimorchi',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'meta_query'     => [
          [
            'key'     => 'stato',
            'value'   => 'venduto',
            'compare' => '!=',
          ],
        ],
      ];

      if ($condizione) {
        $args['meta_query'][] = [
          'key'   => 'condizione',
          'value' => $condizione,
        ];
      }

      $rimorchi = new WP_Query($args);
      ?>

      <?php if ($rimorchi->have_posts()) : ?>
        <div class="rimorchi-grid">
          <?php while ($rimorchi->have_posts()) : $rimorchi->the_post();
            $foto        = get_field('foto');
            $categoria   = get_field('categoria');
            $condizione  = get_field('condizione');
            $stato       = get_field('stato');
            $marca       = get_field('marca');
            $prezzo      = get_field('prezzo');
            $codice      = get_field('codice');
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
              <?php if ($stato === 'riservato') : ?>
                <div class="rimorchio-badge rimorchio-badge--riservato">Riservato</div>
              <?php endif; ?>
              <?php if ($condizione) : ?>
                <div class="rimorchio-badge rimorchio-badge--condizione <?php echo $condizione === 'nuovo' ? 'nuovo' : 'usato'; ?>">
                  <?php echo ucfirst($condizione); ?>
                </div>
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
          <p>Nessun rimorchio disponibile al momento.</p>
          <a href="<?php echo home_url('/contattaci'); ?>" class="btn-primary" style="margin-top: 24px;">
            Contattaci per disponibilità
          </a>
        </div>
      <?php endif; ?>

    </div>
  </section>

</main>

<?php get_footer(); ?>