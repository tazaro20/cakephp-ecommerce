document.addEventListener('DOMContentLoaded', (event) => {
    // Sélectionne les éléments nécessaires
    const toggleSidebarBtn = document.querySelector('.toggle-sidebar');
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    const themeToggleBtn = document.querySelector('.theme-toggle');
    const body = document.body;

    // Fonction pour basculer la barre latérale
    toggleSidebarBtn.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-collapsed');
        mainContent.classList.toggle('expanded');
    });

    // Fonction pour basculer le mode sombre
    themeToggleBtn.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
    });
});
