<?php
/*
 * Template Name: Servizi
 */
?>

<?php get_header(); ?>

<main id="page-servizi">

  <!-- HERO -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <div class="section-tag">Cosa facciamo</div>
      <h1 class="page-hero-title">I nostri<br><span style="color: var(--verde);">servizi</span></h1>
      <p class="page-hero-desc">Tutto ciò di cui hai bisogno per il tuo trasporto, in un <strong>unico punto di riferimento</strong>. Dalla vendita all'assistenza, siamo con te in ogni fase.</p>
    </div>
  </section>

  <!-- SERVIZIO 1 -->
  <section class="page-section section-light" style="border-top: 1px solid #d0d8ee;">
    <div class="section-inner">
      <div class="servizio-grid">
        <div class="servizio-img">
          <div class="azienda-main-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/servizi/assistenza.png" alt="Assistenza e Manutenzione">
            <div class="founder-label">
              <div class="founder-name">Assistenza e Manutenzione</div>
              <div class="founder-role">Interventi rapidi e qualificati</div>
            </div>
          </div>
        </div>
        <div class="servizio-text">
          <div class="service-icon">
            <svg viewBox="0 0 24 24"><path d="M19 7h-3V6a4 4 0 0 0-8 0v1H5a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zm-9-1a2 2 0 0 1 4 0v1h-4V6zm10 14H4V9h3v1a1 1 0 0 0 2 0V9h6v1a1 1 0 0 0 2 0V9h3v11z"/></svg>
          </div>
          <div class="section-tag">Servizio 01</div>
          <h2 class="section-title" style="color: var(--blu);">Assistenza e<br>Manutenzione</h2>
          <div class="accent-divider"></div>
          <p style="color: var(--grigio); line-height: 1.75; margin-bottom: 18px;">Forniamo un servizio di <strong style="color: var(--blu);">assistenza tecnica specializzata</strong> pensato per garantire nel tempo l'efficienza, la sicurezza e l'affidabilità dei mezzi.</p>
          <p style="color: var(--grigio); line-height: 1.75; margin-bottom: 18px;">Ogni intervento viene eseguito da <strong style="color: var(--blu);">personale qualificato</strong>, con attenzione ai dettagli e nel pieno rispetto delle normative vigenti. Ci occupiamo di manutenzione ordinaria e straordinaria, controlli tecnici periodici e riparazioni mirate.</p>
          <p style="color: var(--grigio); line-height: 1.75; margin-bottom: 36px;">Il nostro obiettivo è assicurare mezzi sempre <strong style="color: var(--blu);">pronti all'uso, sicuri su strada e performanti</strong> nel lavoro quotidiano.</p>
          <a href="<?php echo home_url('/assistenza'); ?>" class="btn-primary">
            Scopri l'assistenza
            <svg viewBox="0 0 16 16" fill="white" width="14" height="14"><path d="M8 0l8 8-8 8-1.4-1.4L12.2 9H0V7h12.2L6.6 1.4z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVIZIO 2 -->
  <section class="page-section" style="background: var(--nero); border-top: 1px solid var(--bordo);">
    <div class="section-inner">
      <div class="servizio-grid servizio-grid--reverse">
        <div class="servizio-text">
          <div class="service-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
          </div>
          <div class="section-tag">Servizio 02</div>
          <h2 class="section-title">Consulenza Tecnica<br>Personalizzata</h2>
          <div class="accent-divider"></div>
          <p style="color: var(--testo-sec); line-height: 1.75; margin-bottom: 18px;">Ogni cliente ha esigenze diverse, per questo offriamo un servizio di <strong style="color: var(--bianco);">consulenza tecnica su misura</strong>. Analizziamo attentamente le necessità operative, il tipo di utilizzo e il contesto lavorativo.</p>
          <p style="color: var(--testo-sec); line-height: 1.75; margin-bottom: 18px;">Grazie alla nostra esperienza, aiutiamo a <strong style="color: var(--bianco);">ottimizzare prestazioni, costi e funzionalità</strong> del mezzo, guidando il cliente verso una scelta consapevole e realmente efficace.</p>
          <p style="color: var(--testo-sec); line-height: 1.75; margin-bottom: 36px;">Un supporto concreto che fa la differenza, <strong style="color: var(--bianco);">prima e dopo l'acquisto</strong>.</p>
          <a href="<?php echo home_url('/contattaci'); ?>" class="btn-primary">
            Richiedi una consulenza
            <svg viewBox="0 0 16 16" fill="white" width="14" height="14"><path d="M8 0l8 8-8 8-1.4-1.4L12.2 9H0V7h12.2L6.6 1.4z"/></svg>
          </a>
        </div>
        <div class="servizio-img">
          <div class="azienda-main-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/servizi/consulenza.png" alt="Consulenza Tecnica">
            <div class="founder-label">
              <div class="founder-name">Consulenza Tecnica</div>
              <div class="founder-role">Su misura per ogni esigenza</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVIZIO 3 -->
  <section class="page-section section-light" style="border-top: 1px solid #d0d8ee;">
    <div class="section-inner">
      <div class="servizio-grid">
        <div class="servizio-img">
          <div class="azienda-main-img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/servizi/supporto.png" alt="Supporto Post-Vendita">
            <div class="founder-label">
              <div class="founder-name">Supporto Post-Vendita</div>
              <div class="founder-role">Sempre al tuo fianco</div>
            </div>
          </div>
        </div>
        <div class="servizio-text">
          <div class="service-icon">
            <svg viewBox="0 0 24 24"><path d="M13.78 15.3L19.78 21.3L21.89 19.14L15.89 13.14L13.78 15.3M17.5 11.5C17.5 12.6 17.06 13.58 16.35 14.28L17.75 15.67C18.82 14.62 19.5 13.14 19.5 11.5C19.5 8.47 17.29 5.96 14.39 5.5C12.57 5.23 10.74 5.88 9.59 7.18L11.01 8.59C11.72 7.79 12.78 7.38 13.88 7.5C15.87 7.73 17.5 9.46 17.5 11.5M13.5 16.5C13.5 15.4 13.94 14.42 14.65 13.72L13.25 12.33C12.18 13.38 11.5 14.86 11.5 16.5H13.5M9.16 15.88C8.12 14.87 7.5 13.47 7.5 12C7.5 10.5 8.09 9.13 9.06 8.12L7.65 6.72C6.32 8.09 5.5 9.95 5.5 12C5.5 14.06 6.33 15.93 7.67 17.3L9.16 15.88M11.5 20H13.5C13.5 19.45 13.29 18.92 12.91 18.53L11.5 20Z"/></svg>
          </div>
          <div class="section-tag">Servizio 03</div>
          <h2 class="section-title" style="color: var(--blu);">Supporto<br>Post-Vendita</h2>
          <div class="accent-divider"></div>
          <p style="color: var(--grigio); line-height: 1.75; margin-bottom: 18px;">Per Conca Rimorchi il rapporto con il cliente <strong style="color: var(--blu);">non si conclude con la consegna del mezzo</strong>. Garantiamo un supporto post-vendita costante, offrendo assistenza, informazioni tecniche e aggiornamenti nel tempo.</p>
          <p style="color: var(--grigio); line-height: 1.75; margin-bottom: 18px;">Siamo a disposizione per rispondere a ogni esigenza, fornire chiarimenti e <strong style="color: var(--blu);">accompagnare il cliente nella gestione del mezzo</strong>, assicurando continuità, affidabilità e tranquillità operativa.</p>
          <p style="color: var(--grigio); line-height: 1.75; margin-bottom: 36px;">Perché il nostro lavoro è <strong style="color: var(--blu);">costruire relazioni durature</strong> basate sulla fiducia.</p>
          <a href="<?php echo home_url('/contattaci'); ?>" class="btn-primary">
            Contattaci
            <svg viewBox="0 0 16 16" fill="white" width="14" height="14"><path d="M8 0l8 8-8 8-1.4-1.4L12.2 9H0V7h12.2L6.6 1.4z"/></svg>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- PERCHÉ SCEGLIERCI -->
  <section class="page-section" style="background: var(--blu-scuro); border-top: 1px solid var(--bordo);">
    <div class="section-inner">
      <div class="section-tag">I nostri punti di forza</div>
      <h2 class="section-title" style="margin-bottom: 16px;">Perché scegliere<br>Conca Rimorchi</h2>
      <p class="section-subtitle">Affidabilità, esperienza e attenzione al cliente fanno la differenza, ogni giorno.</p>
      <div class="perche-grid">
        <div class="perche-item">
          <div class="perche-icon">✓</div>
          <div class="perche-text">
            <div class="perche-name">Esperienza dal 1998</div>
            <p class="perche-desc">Oltre 25 anni nel settore dei veicoli industriali</p>
          </div>
        </div>
        <div class="perche-item">
          <div class="perche-icon">✓</div>
          <div class="perche-text">
            <div class="perche-name">Personale qualificato</div>
            <p class="perche-desc">Tecnici specializzati per ogni tipo di intervento</p>
          </div>
        </div>
        <div class="perche-item">
          <div class="perche-icon">✓</div>
          <div class="perche-text">
            <div class="perche-name">Carrozzeria interna</div>
            <p class="perche-desc">Interventi strutturali ed estetici senza subappalti</p>
          </div>
        </div>
        <div class="perche-item">
          <div class="perche-icon">✓</div>
          <div class="perche-text">
            <div class="perche-name">Conformità normativa</div>
            <p class="perche-desc">Tutti gli interventi nel rispetto delle normative vigenti</p>
          </div>
        </div>
        <div class="perche-item">
          <div class="perche-icon">✓</div>
          <div class="perche-text">
            <div class="perche-name">Ricambi originali</div>
            <p class="perche-desc">Gamma completa di ricambi originali e compatibili</p>
          </div>
        </div>
        <div class="perche-item">
          <div class="perche-icon">✓</div>
          <div class="perche-text">
            <div class="perche-name">Supporto continuo</div>
            <p class="perche-desc">Assistenza prima, durante e dopo ogni intervento</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="page-section section-light" style="border-top: 1px solid #d0d8ee; text-align: center;">
    <div class="section-inner">
      <div class="section-tag" style="justify-content: center;">Inizia ora</div>
      <h2 class="section-title" style="color: var(--blu); text-align: center; margin-bottom: 20px;">Hai bisogno<br>di un servizio?</h2>
      <p style="color: var(--grigio); max-width: 480px; margin: 0 auto 40px; line-height: 1.7;">Contattaci per una consulenza personalizzata — il nostro team è pronto ad ascoltarti.</p>
      <a href="<?php echo home_url('/contattaci'); ?>" class="btn-primary">
        Contattaci ora
        <svg viewBox="0 0 16 16" fill="white" width="14" height="14"><path d="M8 0l8 8-8 8-1.4-1.4L12.2 9H0V7h12.2L6.6 1.4z"/></svg>
      </a>
    </div>
  </section>

</main>

<?php get_footer(); ?>