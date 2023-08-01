jQuery(document).on("click", ".darkbtn", function () {
  toggleDark();
});
function toggleDark() {
  let html = document.querySelector("html");
  html.classList.toggle("dark");
}
