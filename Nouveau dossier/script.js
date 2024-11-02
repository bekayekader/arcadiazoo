// Navigation Mobile
const navToggle = document.querySelector(".nav-toggle");
const navMenu = document.querySelector(".nav-menu");

navToggle.addEventListener("click", () => {
  navMenu.classList.toggle("active");
});

// Témoignages Slider
class TestimonialSlider {
  constructor() {
    this.testimonials = [
      {
        name: "Marie L.",
        text: "Un zoo magnifique où les animaux sont vraiment respectés. L'engagement écologique est remarquable !",
      },
      {
        name: "Thomas D.",
        text: "Superbe visite guidée, très instructive. Les enfants ont adoré le petit train !",
      },
      {
        name: "Sophie M.",
        text: "La restauration bio est excellente et les installations sont très bien entretenues.",
      },
    ];

    this.currentSlide = 0;
    this.track = document.querySelector(".testimonial-track");
    this.dotsContainer = document.querySelector(".testimonial-dots");

    this.init();
  }

  init() {
    // Création des témoignages
    this.testimonials.forEach((testimonial, index) => {
      // Créer le slide
      const slide = document.createElement("div");
      slide.className = "testimonial-slide";
      slide.innerHTML = `
                <p class="testimonial-text">${testimonial.text}</p>
                <p class="testimonial-name">- ${testimonial.name}</p>
            `;
      this.track.appendChild(slide);

      // Créer le point de navigation
      const dot = document.createElement("button");
      dot.className = "testimonial-dot";
      dot.addEventListener("click", () => this.goToSlide(index));
      this.dotsContainer.appendChild(dot);
    });

    // Initialiser le premier slide
    this.updateSlider();
    // Démarrer le défilement automatique
    this.startAutoPlay();
  }

  goToSlide(index) {
    this.currentSlide = index;
    this.updateSlider();
  }

  updateSlider() {
    // Mettre à jour la position du track
    const slideWidth = this.track.offsetWidth;
    this.track.style.transform = `translateX(-${
      this.currentSlide * slideWidth
    }px)`;

    // Mettre à jour les points de navigation
    const dots = this.dotsContainer.querySelectorAll(".testimonial-dot");
    dots.forEach((dot, index) => {
      dot.classList.toggle("active", index === this.currentSlide);
    });
  }

  nextSlide() {
    this.currentSlide = (this.currentSlide + 1) % this.testimonials.length;
    this.updateSlider();
  }

  startAutoPlay() {
    setInterval(() => this.nextSlide(), 5000); // Change de slide toutes les 5 secondes
  }
}

// Initialiser le slider des témoignages
document.addEventListener("DOMContentLoaded", () => {
  new TestimonialSlider();
});

// Animation au scroll
const observerOptions = {
  threshold: 0.3,
};

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    }
  });
}, observerOptions);

// Observer les sections pour les animations
document.querySelectorAll("section").forEach((section) => {
  observer.observe(section);
});

// Smooth scroll pour les liens d'ancrage
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const targetId = this.getAttribute("href");
    if (targetId === "#") return;

    const target = document.querySelector(targetId);
    if (target) {
      target.scrollIntoView({
        behavior: "smooth",
        block: "start",
      });

      // Fermer le menu mobile si ouvert
      if (navMenu.classList.contains("active")) {
        navMenu.classList.remove("active");
      }
    }
  });
});

// Gestion du header sticky
const navbar = document.querySelector(".navbar");
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll > lastScroll && currentScroll > 100) {
    // Scroll vers le bas
    navbar.style.transform = "translateY(-100%)";
  } else {
    // Scroll vers le haut
    navbar.style.transform = "translateY(0)";
  }

  lastScroll = currentScroll;
});

// Préchargement des images
const preloadImages = () => {
  const images = document.querySelectorAll("img[data-src]");
  images.forEach((img) => {
    img.src = img.getAttribute("data-src");
    img.onload = () => {
      img.removeAttribute("data-src");
    };
  });
};

window.addEventListener("load", preloadImages);
