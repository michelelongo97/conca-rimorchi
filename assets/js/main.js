const hamburger = document.getElementById("hamburger");
const mobileMenu = document.getElementById("mobile-menu");
hamburger.addEventListener("click", () => mobileMenu.classList.toggle("open"));
document
  .querySelectorAll(".close-menu")
  .forEach((l) =>
    l.addEventListener("click", () => mobileMenu.classList.remove("open")),
  );

window.addEventListener("scroll", () => {
  document.getElementById("navbar").style.background =
    window.scrollY > 60 ? "rgba(11,36,105,0.99)" : "rgba(11,36,105,0.94)";
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) e.target.classList.add("visible");
    });
  },
  { threshold: 0.1, rootMargin: "0px 0px -40px 0px" },
);
document.querySelectorAll(".fade-in").forEach((el) => observer.observe(el));

// ── HERO SLIDESHOW ──
const slides = document.querySelectorAll(".hero-slide");
if (slides.length) {
  let current = 0;
  setInterval(() => {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  }, 5000);
}

// ── SCROLL INDICATOR ──
document
  .querySelectorAll(".scroll-indicator, .scroll-indicator *")
  .forEach((el) => {
    el.style.cursor = "pointer";
    el.addEventListener("click", () => {
      document.querySelector("#servizi").scrollIntoView({ behavior: "smooth" });
    });
  });

// ── BACK TO TOP ──
const backToTop = document.getElementById("backToTop");
window.addEventListener("scroll", () => {
  if (window.scrollY > 400) {
    backToTop.classList.add("visible");
  } else {
    backToTop.classList.remove("visible");
  }
});
backToTop.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// ── FORM CONTATTI ──
async function handleSubmit(e) {
  e.preventDefault();

  const btn = document.getElementById("submit-btn");
  const msg = document.getElementById("form-msg");

  const nome = document.getElementById("nome").value;
  const cognome = document.getElementById("cognome").value;
  const email = document.getElementById("email").value;
  const telefono = document.getElementById("telefono").value;
  const interesse = document.getElementById("interesse").value;
  const messaggio = document.getElementById("messaggio").value;

  btn.textContent = "Invio in corso...";
  btn.disabled = true;
  msg.style.display = "none";

  const body = new FormData();
  body.append("action", "conca_contact");
  body.append("nonce", concaAjax.nonce);
  body.append("nome", nome);
  body.append("cognome", cognome);
  body.append("email", email);
  body.append("telefono", telefono);
  body.append("interesse", interesse);
  body.append("messaggio", messaggio);

  try {
    const res = await fetch(concaAjax.url, { method: "POST", body });
    const data = await res.json();

    msg.style.display = "block";

    if (data.success) {
      msg.style.color = "#00662b";
      msg.textContent = data.data.message;
      document.getElementById("contact-form").reset();
    } else {
      msg.style.color = "#ff0000";
      msg.textContent = data.data.message;
    }
  } catch (err) {
    msg.style.display = "block";
    msg.style.color = "#ff0000";
    msg.textContent = "Errore di rete. Riprova o contattaci direttamente.";
  } finally {
    btn.textContent = "Invia richiesta →";
    btn.disabled = false;
  }
}
