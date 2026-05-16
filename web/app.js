const vehicles = [
  {
    name: "Toyota Corolla",
    category: "sedan",
    image: "images/corolla.jpg",
    year: "2016-2019",
    seats: "4 seats",
    local: "Rs. 3,000",
    outstation: "Rs. 4,000"
  },
  {
    name: "Honda City",
    category: "sedan",
    image: "images/city.jpg",
    year: "2016-2019",
    seats: "4 seats",
    local: "Rs. 3,000",
    outstation: "Rs. 4,000"
  },
  {
    name: "Honda Civic",
    category: "sedan",
    image: "images/civic.jpg",
    year: "2016-2019",
    seats: "4 seats",
    local: "Rs. 6,000",
    outstation: "Rs. 7,000"
  },
  {
    name: "Honda BR-V",
    category: "suv",
    image: "images/brv.jpg",
    year: "2016-2019",
    seats: "6 seats",
    local: "Rs. 5,500",
    outstation: "Rs. 6,500"
  },
  {
    name: "Toyota Revo",
    category: "suv",
    image: "images/revo.jpg",
    year: "2016-2019",
    seats: "4 seats",
    local: "Rs. 8,000",
    outstation: "Rs. 10,000"
  },
  {
    name: "Toyota Prado",
    category: "suv",
    image: "images/prado.png",
    year: "2016-2019",
    seats: "6 seats",
    local: "Rs. 11,000",
    outstation: "Rs. 14,000"
  },
  {
    name: "Toyota Land Cruiser V8",
    category: "suv",
    image: "images/v8.jpg",
    year: "2016-2019",
    seats: "6 seats",
    local: "Rs. 22,000",
    outstation: "Rs. 25,000"
  },
  {
    name: "Mercedes C Class",
    category: "luxury",
    image: "images/c%20class.jpg",
    year: "2008-2013",
    seats: "4 seats",
    local: "Rs. 12,000",
    outstation: "Rs. 18,000"
  },
  {
    name: "Mercedes S Class",
    category: "luxury",
    image: "images/s%20class.jpg",
    year: "2010-2016",
    seats: "4 seats",
    local: "Rs. 45,000",
    outstation: "Rs. 55,000"
  },
  {
    name: "BMW 7 Series",
    category: "luxury",
    image: "images/7%20series.jpg",
    year: "2005-2016",
    seats: "4 seats",
    local: "Rs. 35,000+",
    outstation: "Rs. 40,000+"
  },
  {
    name: "Suzuki APV",
    category: "van",
    image: "images/apv.jpg",
    year: "2010-2016",
    seats: "7 seats",
    local: "Rs. 4,000",
    outstation: "Rs. 5,500"
  },
  {
    name: "Toyota Grand Cabin",
    category: "van",
    image: "images/grandcabin.jpg",
    year: "2016-2019",
    seats: "10 seats",
    local: "Rs. 6,000",
    outstation: "Rs. 7,000"
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
const closeDialog = document.querySelector("[data-dialog-close]");
const slides = [...document.querySelectorAll(".hero-slide")];

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
          <li><span>Local day</span><strong>${vehicle.local}</strong></li>
          <li><span>Outstation</span><strong>${vehicle.outstation}</strong></li>
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
  const subject = encodeURIComponent("U&A Travels booking request");
  const body = encodeURIComponent(summary.replaceAll(". ", ".\n"));
  return `mailto:greatvirgo251992@hotmail.com?subject=${subject}&body=${body}`;
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
  const data = Object.fromEntries(new FormData(bookingForm).entries());
  const summary = `Booking request for ${data.vehicle} in ${data.city}. Pick-up date: ${data.start}. Return date: ${data.end}. Purpose: ${data.purpose}. Please confirm availability and final pricing.`;

  dialogContent.textContent = summary;
  mailLink.href = buildMailto(summary);
  formStatus.textContent = "Request summary ready. You can email it or call the team.";

  if (typeof dialog.showModal === "function") {
    dialog.showModal();
  } else {
    window.location.href = mailLink.href;
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
