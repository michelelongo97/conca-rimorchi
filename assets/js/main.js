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
    window.scrollY > 60 ? "rgba(1,13,46,0.99)" : "rgba(1,13,46,0.94)";
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

function handleSubmit(e) {
  e.preventDefault();
  const btn = document.getElementById("submit-btn");
  const msg = document.getElementById("form-msg");
  btn.textContent = "Invio in corso...";
  btn.disabled = true;
  setTimeout(() => {
    btn.textContent = "Invia richiesta →";
    btn.disabled = false;
    msg.style.display = "block";
    msg.style.color = "#00662b";
    msg.textContent = "✓ Messaggio inviato! Ti risponderemo entro 24 ore.";
    document.getElementById("contact-form").reset();
    setTimeout(() => {
      msg.style.display = "none";
    }, 5000);
  }, 1200);
}
