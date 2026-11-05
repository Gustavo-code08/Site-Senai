const botaoMenu = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");

botaoMenu.addEventListener("click", function () {
    const menuAberto = menu.classList.toggle("aberto");

    botaoMenu.setAttribute("aria-expanded", menuAberto);

    if (menuAberto) {
        botaoMenu.innerHTML = '<i class="fa-solid fa-xmark"></i>';
    } else {
        botaoMenu.innerHTML = '<i class="fa-solid fa-bars"></i>';
    }
});

// Fecha o menu depois que uma opção é selecionada.
const linksMenu = menu.querySelectorAll("a");

linksMenu.forEach(function (link) {
    link.addEventListener("click", function () {
        menu.classList.remove("aberto");
        botaoMenu.setAttribute("aria-expanded", "false");
        botaoMenu.innerHTML = '<i class="fa-solid fa-bars"></i>';
    });
});