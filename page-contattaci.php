<?php
/*
 * Template Name: Contattaci
 */
?>

<?php get_header(); ?>

<main id="page-contattaci">

  <!-- HERO PAGINA -->
  <section class="page-hero">
    <div class="page-hero-inner">
      <div class="section-tag">Siamo a tua disposizione</div>
      <h1 class="page-hero-title">Contattaci</h1>
      <p class="page-hero-desc">Hai bisogno di informazioni, vuoi un preventivo o desideri una <strong>consulenza personalizzata</strong>? Compila il form o contattaci direttamente.</p>
    </div>
  </section>

  <!-- CONTATTI -->
  <section class="page-section">
    <div class="section-inner">
      <div class="contatti-grid">

        <!-- FORM -->
        <div>
          <h2 class="contatti-form-title">Inviaci un messaggio</h2>
          <form id="contact-form" onsubmit="handleSubmit(event)">
            <div class="form-row">
              <div class="form-group">
                <label class="form-label" for="nome">Nome</label>
                <input class="form-input" type="text" id="nome" placeholder="Il tuo nome" required>
              </div>
              <div class="form-group">
                <label class="form-label" for="cognome">Cognome</label>
                <input class="form-input" type="text" id="cognome" placeholder="Il tuo cognome" required>
              </div>
            </div>
            <div class="form-group">
              <label class="form-label" for="email">Email</label>
              <input class="form-input" type="email" id="email" placeholder="email@esempio.com" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="telefono">Telefono</label>
              <input class="form-input" type="tel" id="telefono" placeholder="+39 ···">
            </div>
            <div class="form-group">
              <label class="form-label" for="interesse">Interesse</label>
              <select class="form-select" id="interesse">
                <option value="">— Seleziona —</option>
                <option>Acquisto rimorchio nuovo</option>
                <option>Acquisto rimorchio usato</option>
                <option>Assistenza / Riparazione</option>
                <option>Ricambi</option>
                <option>Preventivo personalizzato</option>
                <option>Altro</option>
              </select>
            </div>
            <div class="form-group">
              <label class="form-label" for="messaggio">Messaggio</label>
              <textarea class="form-textarea" id="messaggio" placeholder="Descrivi la tua esigenza..."></textarea>
            </div>
            <button class="form-submit" type="submit" id="submit-btn">Invia richiesta →</button>
            <div class="form-oppure">
              <span>oppure</span>
            </div>

             <a href="https://wa.me/393931911704" target="_blank" rel="noopener" class="whatsapp-btn whatsapp-btn--form">
            <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Scrivici su WhatsApp
          </a>
            <div id="form-msg" style="margin-top:14px;font-size:0.88rem;display:none;"></div>
          </form>
        </div>

        <!-- INFO -->
        <div class="contatti-info">

          <div class="info-block">
            <div class="info-label">Telefono fisso</div>
            <div class="info-value"><a href="tel:+390883501963">+39 0883 501963</a></div>
          </div>

          <div class="info-block">
            <div class="info-label">Cellulare</div>
            <div class="info-value"><a href="tel:+393356956131">+39 335 6956131</a></div>
            <div class="info-value"><a href="tel:+393931911704">+39 393 1911704</a></div>
          </div>

          <div class="info-block">
            <div class="info-label">Email</div>
            <div class="info-value"><a href="mailto:concarimorchi@gmail.com">concarimorchi@gmail.com</a></div>
          </div>

          <div class="info-block">
            <div class="info-label">PEC</div>
            <div class="info-value"><a href="mailto:concaleonardo@pec.it">concaleonardo@pec.it</a></div>
          </div>

          <div class="info-block">
            <div class="info-label">Sede</div>
            <div class="info-value" style="font-size: 1.1rem; color: var(--blu);">Andria – Trani (BT)</div>
            <p class="info-note">S.P. 231 (ex SS. 98) Km 42100<br>C.da Capitolo · Trani (BA) 75125</p>
            <a href="https://maps.app.goo.gl/tk7LzWXqG5YHveWn7" target="_blank" rel="noopener" class="maps-btn" style="margin-top: 16px;">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0,0,256,256" width="18" height="18">
                <g fill="#ffffff" fill-rule="nonzero"><g transform="scale(5.12,5.12)"><path d="M28.292,1.326c-1.066,-0.21 -2.165,-0.326 -3.292,-0.326c-4.71,0 -8.98,1.93 -12.06,5.04l6.92,5.592zM18.595,13.178l-6.975,-5.628c-2.27,2.88 -3.62,6.52 -3.62,10.45c0,2.281 0.452,4.487 1.304,6.534zM22.608,11.432c0.745,-0.273 1.546,-0.432 2.392,-0.432c3.87,0 7,3.13 7,7c0,0.338 -0.032,0.667 -0.078,0.992l7.772,-9.499c-2.058,-3.539 -5.348,-6.268 -9.285,-7.595zM27.341,24.591c-0.733,0.26 -1.519,0.409 -2.341,0.409c-3.87,0 -7,-3.13 -7,-7c0,-0.354 0.034,-0.7 0.084,-1.039l-7.803,9.537c0.386,0.666 0.809,1.315 1.289,1.932c0.37,0.5 0.87,1.14 1.45,1.89c1.267,1.633 2.959,3.816 4.59,6.164zM18.778,38.215c2.082,3.184 3.852,6.497 4.172,9.055c0.14,0.99 0.99,1.73 1.99,1.73c1.02,0 1.87,-0.75 1.99,-1.75c0.61,-4.83 6.57,-12.48 9.78,-16.6c0.56,-0.72 1.05,-1.35 1.5,-1.94c2.44,-3.02 3.79,-6.82 3.79,-10.71c0,-2.322 -0.471,-4.536 -1.319,-6.555z"/></g></g>
              </svg>
              Dove siamo
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>