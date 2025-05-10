document.addEventListener("DOMContentLoaded", () => {
  const profileButton = document.getElementById("profile-btn");
  profileButton.addEventListener("click", () => {
    alert("Fitur profil sedang dikembangkan.");
  });

  const lanjutButton = document.getElementById("lanjut-btn");
  lanjutButton.addEventListener("click", () => {
    alert("Baca artikel selengkapnya akan tersedia segera!");
  });

  const sections = document.querySelectorAll("section");
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show-section");
      }
    });
  }, {
    threshold: 0.1
  });

  sections.forEach(section => {
    section.classList.add("hidden-section");
    observer.observe(section);
  });

  const productImages = document.querySelectorAll('.product-card img');
  productImages.forEach(img => {
    img.addEventListener('mouseover', () => img.style.transform = 'scale(1.1)');
    img.addEventListener('mouseout', () => img.style.transform = 'scale(1)');
  });

  window.onscroll = function () {
    const scrollButton = document.getElementById("scroll-to-top");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      scrollButton.style.display = "block";
    } else {
      scrollButton.style.display = "none";
    }
  };

  function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  }

  const productCards = document.querySelectorAll('.product-card');
  const modal = document.getElementById('product-modal');
  const modalClose = document.getElementById('modal-close');
  const modalTitle = document.getElementById('modal-title');
  const modalDescription = document.getElementById('modal-description');

  productCards.forEach(card => {
    card.addEventListener('click', () => {
      const productId = card.dataset.productId;
      modalTitle.textContent = `Detail Produk ${productId}`;
      modalDescription.textContent = `Ini adalah produk dengan ID ${productId}, yang dapat digunakan untuk berbagai keperluan ramah lingkungan.`;
      modal.style.display = "block";
    });
  });

  modalClose.addEventListener('click', () => {
    modal.style.display = "none";
  });

  window.onclick = function (event) {
    if (event.target === modal) {
      modal.style.display = "none";
    }
  };
});
