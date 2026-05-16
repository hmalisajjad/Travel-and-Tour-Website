const vehicles = [
  {
    name: "Honda Civic",
    category: "sedan",
    image: "images/Honda%20Civic.jpg",
    year: "2024-2026",
    seats: "4 seats",
    local: "Premium quote",
    outstation: "Route quote"
  },
  {
    name: "Toyota Yaris ATIV X",
    category: "sedan",
    image: "images/Toyota%20Yaris.jpg",
    year: "2024-2026",
    seats: "4 seats",
    local: "Economy quote",
    outstation: "Route quote"
  },
  {
    name: "Toyota Corolla X Grande",
    category: "sedan",
    image: "images/Corolla-X.jpg",
    year: "2024-2026",
    seats: "4 seats",
    local: "Premium quote",
    outstation: "Route quote"
  },
  {
    name: "Honda City",
    category: "sedan",
    image: "images/honda-cityview-631486.webp",
    year: "2025-2026",
    seats: "4 seats",
    local: "Economy quote",
    outstation: "Route quote"
  },
  {
    name: "Toyota Revo Rocco",
    category: "suv",
    image: "images/revos.jpg",
    year: "2025-2026",
    seats: "4 seats",
    local: "4x4 quote",
    outstation: "Tour quote"
  },
  {
    name: "Honda BR-V",
    category: "suv",
    image: "images/brvs.jpg",
    year: "2024-2026",
    seats: "6-7 seats",
    local: "Family quote",
    outstation: "Route quote"
  },
  {
    name: "Toyota Fortuner Legender",
    category: "suv",
    image: "images/fortuner-legender-jpg.jpg",
    year: "2025-2026",
    seats: "6-7 seats",
    local: "SUV quote",
    outstation: "Tour quote"
  },
  {
    name: "Toyota Land Cruiser 300",
    category: "suv",
    image: "images/LC-300.jpg",
    year: "2024-2026",
    seats: "6 seats",
    local: "Executive quote",
    outstation: "Protocol quote"
  },
  {
    name: "Toyota Land Cruiser Prado",
    category: "luxury",
    image: "images/Toyota%20Prado%202019%20model.jpg",
    year: "2024-2026",
    seats: "6-7 seats",
    local: "Executive quote",
    outstation: "Tour quote"
  },
  {
    name: "Mercedes S-Class",
    category: "luxury",
    image: "images/Mercedes%20s%20classwebp.webp",
    year: "2024-2026",
    seats: "4 seats",
    local: "VIP quote",
    outstation: "Protocol quote"
  },
  {
    name: "BMW 7 Series",
    category: "luxury",
    image: "images/bmw%207series.jpg",
    year: "2024-2026",
    seats: "4 seats",
    local: "VIP quote",
    outstation: "Protocol quote"
  },
  {
    name: "Audi A6",
    category: "luxury",
    image: "images/audi%20a6%20a.jpg",
    year: "2024-2026",
    seats: "4 seats",
    local: "Executive quote",
    outstation: "Protocol quote"
  },
  {
    name: "Mercedes G-Wagon",
    category: "luxury",
    image: "images/G-Wagon.jpg",
    year: "2024-2026",
    seats: "4 seats",
    local: "VIP quote",
    outstation: "Protocol quote"
  },
  {
    name: "Toyota Hiace Deluxe",
    category: "van",
    image: "images/grandcabin.jpg",
    year: "2024-2026",
    seats: "10-14 seats",
    local: "Group quote",
    outstation: "Tour quote"
  },
  {
    name: "Toyota Coaster / Grand Cabin",
    category: "van",
    image: "images/Toyota%20Coaster.jpg",
    year: "2024-2026",
    seats: "20+ seats",
    local: "Group quote",
    outstation: "Tour quote"
  }
];

const header = document.querySelector("[data-header]");
const nav = document.querySelector("[data-nav]");
const navToggle = document.querySelector("[data-nav-toggle]");
const grid = document.querySelector("[data-fleet-grid]");
const filterBar = document.querySelector("[data-filter-bar]");
const vehicleSelect = document.querySelector("[data-vehicle-select]");
const bookingForm = document.querySelector("[data-booking-form]");
const formStatus = document.querySelector("[data-form-status]");
const dialog = document.querySelector("[data-dialog]");
const dialogContent = document.querySelector("[data-dialog-content]");
const mailLink = document.querySelector("[data-mail-link]");
const whatsappLink = document.querySelector("[data-whatsapp-link]");
const closeDialog = document.querySelector("[data-dialog-close]");
const slides = [...document.querySelectorAll(".hero-slide")];
const whatsappNumber = "923329271420";

function formatCategory(category) {
  return category.charAt(0).toUpperCase() + category.slice(1);
}

function renderVehicles(category = "all") {
  const filtered = category === "all" ? vehicles : vehicles.filter((vehicle) => vehicle.category === category);

  grid.innerHTML = filtered.map((vehicle) => `
    <article class="vehicle-card">
      <img src="${vehicle.image}" alt="${vehicle.name}" loading="lazy">
      <div class="vehicle-body">
        <div class="vehicle-top">
          <h3>${vehicle.name}</h3>
          <span class="vehicle-tag">${formatCategory(vehicle.category)}</span>
        </div>
        <ul class="vehicle-meta">
          <li><span>Model year</span><strong>${vehicle.year}</strong></li>
          <li><span>Capacity</span><strong>${vehicle.seats}</strong></li>
          <li><span>Local use</span><strong>${vehicle.local}</strong></li>
          <li><span>Tour / route</span><strong>${vehicle.outstation}</strong></li>
        </ul>
      </div>
      <div class="vehicle-actions">
        <a class="btn btn-primary" href="#booking" data-book="${vehicle.name}">Book this vehicle</a>
      </div>
    </article>
  `).join("");
}

function fillVehicleOptions() {
  vehicleSelect.innerHTML += vehicles.map((vehicle) => `<option>${vehicle.name}</option>`).join("");
}

function buildMailto(summary) {
  const subject = encodeURIComponent("Usman Tour and Travels booking request");
  const body = encodeURIComponent(summary.replaceAll(". ", ".\n"));
  return `mailto:alisajjad251992@gmail.com?subject=${subject}&body=${body}`;
}

function buildWhatsApp(summary) {
  const message = [
    "Booking request - Usman Tour and Travels",
    "",
    summary.replaceAll(". ", ".\n")
  ].join("\n");

  return `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
}

navToggle.addEventListener("click", () => {
  const isOpen = nav.classList.toggle("is-open");
  navToggle.setAttribute("aria-expanded", String(isOpen));
});

nav.addEventListener("click", (event) => {
  if (event.target.matches("a")) {
    nav.classList.remove("is-open");
    navToggle.setAttribute("aria-expanded", "false");
  }
});

window.addEventListener("scroll", () => {
  header.classList.toggle("is-scrolled", window.scrollY > 18);
}, { passive: true });

filterBar.addEventListener("click", (event) => {
  const button = event.target.closest("[data-filter]");
  if (!button) return;

  filterBar.querySelectorAll(".filter-btn").forEach((item) => item.classList.remove("is-active"));
  button.classList.add("is-active");
  renderVehicles(button.dataset.filter);
});

grid.addEventListener("click", (event) => {
  const link = event.target.closest("[data-book]");
  if (!link) return;

  vehicleSelect.value = link.dataset.book;
  formStatus.textContent = `${link.dataset.book} selected. Add dates and city to complete the request.`;
});

bookingForm.addEventListener("submit", (event) => {
  event.preventDefault();
  const formData = new FormData(bookingForm);
  const data = Object.fromEntries(formData.entries());
  const tripNotes = data.notes ? ` Notes: ${data.notes}.` : "";
  const summary = `Booking request from ${data.name}. Phone: ${data.phone}. Email: ${data.email}. Vehicle: ${data.vehicle}. City: ${data.city}. Pick-up date: ${data.start}. Return date: ${data.end}. Purpose: ${data.purpose}.${tripNotes} Please confirm availability and final pricing.`;
  const whatsappUrl = buildWhatsApp(summary);

  dialogContent.textContent = "Your booking request has been prepared for WhatsApp. Please tap Send in WhatsApp so Usman Tour and Travels receives the full form details.";
  mailLink.href = buildMailto(summary);
  whatsappLink.href = whatsappUrl;
  formStatus.textContent = "WhatsApp booking message is ready. Tap Send in WhatsApp to complete it.";
  window.open(whatsappUrl, "_blank", "noopener");
  bookingForm.reset();

  if (typeof dialog.showModal === "function") {
    dialog.showModal();
  } else {
    window.location.href = whatsappUrl;
  }
});

closeDialog.addEventListener("click", () => dialog.close());

document.querySelector("[data-year]").textContent = new Date().getFullYear();

let slideIndex = 0;
setInterval(() => {
  slides[slideIndex].classList.remove("is-active");
  slideIndex = (slideIndex + 1) % slides.length;
  slides[slideIndex].classList.add("is-active");
}, 5200);

fillVehicleOptions();
renderVehicles();
