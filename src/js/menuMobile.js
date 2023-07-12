(function () {
  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach((dropdown) => {
    const select = dropdown.querySelector(".select");
    const menu_dropdown = dropdown.querySelector(".menu_dropdown");
    const options = dropdown.querySelector(".menu_dropdown li");
    const selected = dropdown.querySelector(".selected");

    select.addEventListener("click", () => {
      select.classList.toggle("select-clicked");
      menu_dropdown.classList.toggle("menu_dropdown-open");
    });

    options.forEach((option) => {
      option.addEventListener("click", () => {
        // selected.innerText = option.innerText;
        select.classList.remove("select-clicked");
        menu_dropdown.classList.remove("menu_dropdown-open");
        options.forEach((option) => {
          option.classList.remove("active");
        });

        option.classList.add("active");
      });
    });
  });
})();
