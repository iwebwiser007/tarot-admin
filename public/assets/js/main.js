//  hamburger button work
document.getElementById("hamburger-btn").addEventListener("click", function () {
  // sidebar
  document.getElementById("sidebar").classList.toggle("active");

  document.getElementById("main-content").classList.toggle("sidebar-active");
});

// header toggle for small size devices
document
  .getElementById("hamburger-btn1")
  .addEventListener("click", function () {
    // sidebar
    document.getElementById("sidebar").classList.toggle("active");

    document.getElementById("main-content").classList.toggle("sidebar-active");
  });
// main-content toggle active
document.getElementById("hamburger-btn").addEventListener("click", function () {
  document.getElementById("main-right-container").classList.toggle("active");

  document
    .getElementById("main-right-container")
    .classList.toggle("main-right-container-active");
});
