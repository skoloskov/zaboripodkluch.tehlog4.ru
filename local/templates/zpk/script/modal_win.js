window.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".header__btn").addEventListener("click", function () {
    document.querySelector(".callback").classList.add("active");
  });
  document.querySelector(".close").addEventListener("click", function () {
    document.querySelector(".callback").classList.remove("active");
  });

});
