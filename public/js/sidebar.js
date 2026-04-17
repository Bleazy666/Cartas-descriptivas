document.addEventListener("DOMContentLoaded", function () {

    const btn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");

    // Validar que existan (evita errores en otras vistas)
    if (!btn || !sidebar) return;

    // Cargar estado guardado
    if (localStorage.getItem("sidebar") === "collapsed") {
        sidebar.classList.add("collapsed");
    }

    // Evento click
    btn.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");

        localStorage.setItem(
            "sidebar",
            sidebar.classList.contains("collapsed") ? "collapsed" : "open"
        );
    });

});

document.querySelector('[name="tipo_incidencia_id"]').addEventListener('change', function() {
    if (this.value === 'otro') {
        document.getElementById('otroCampo').style.display = 'block';
    } else {
        document.getElementById('otroCampo').style.display = 'none';
    }
});