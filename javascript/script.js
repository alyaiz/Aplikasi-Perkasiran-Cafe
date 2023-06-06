document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetElement = document.querySelector(this.getAttribute("href"));
    const offsetTop = targetElement.offsetTop - 185; // Sesuaikan offset top sesuai kebutuhan

    window.scrollTo({
      top: offsetTop,
      behavior: "smooth", // Animasi scroll halus
    });
  });
});
