var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");

function openSidebar() {
    if (!sidebarOpen) {
        sidebar.classList.add("sidebar-responsive");
        sidebarOpen = true;
    }
}

function closeSidebar() {
    if (sidebarOpen) {
        sidebar.classList.remove("sidebar-responsive");
        sidebarOpen = false;
    }
}



document.getElementById("sidebran").addEventListener("click", function() {
    redirectTo('Home.php');
});

document.getElementById("list-parcelas").addEventListener("click", function() {
    redirectTo('ListaParcelas.php');
});

document.getElementById("list-productores").addEventListener("click", function() {
    redirectTo('ListaProductores.php');
});

document.getElementById("list-bitacoras").addEventListener("click", function() {
    redirectTo('Bitacoras.php');
});

document.getElementById("list-archivos").addEventListener("click", function() {
    redirectTo('Archivos.php');
});

document.getElementById("header-perfil").addEventListener("click", function() {
    redirectTo('Perfil.php');
});

document.getElementById("header-cerrar-sesion").addEventListener("click", function() {
    redirectTo('../index.php');
});

function redirectTo(page) {
    window.location.href = page;
}