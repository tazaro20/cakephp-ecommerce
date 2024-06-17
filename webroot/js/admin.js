new DataTable('#example');
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
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form'); // Remplacez par le sélecteur de votre formulaire
    const checkboxes = document.querySelectorAll('input[name="service_id[]"]');
    const minSelections = 2; // Remplacez par le nombre minimum de sélections requis

    form.addEventListener('submit', function(event) {
        let checkedCount = 0;
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                checkedCount++;
            }
        });

        if (checkedCount < minSelections) {
            event.preventDefault();
            alert('Veuillez sélectionner au moins ' + minSelections + ' services.');
        }
    });
});
