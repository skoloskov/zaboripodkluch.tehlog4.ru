window.addEventListener("DOMContentLoaded", function () {
  document.querySelector(".header__btn").addEventListener("click", function () {
    document.querySelector(".order_fence").classList.add("active");
  });
  document.querySelector(".close").addEventListener("click", function () {
    document.querySelector(".order_fence").classList.remove("active");
  });
  document.querySelector('#order_fence .black').addEventListener('click', function () {
    document.querySelector(".order_fence").classList.remove("active");
  });

});
