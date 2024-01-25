document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById('sidebar');
    const navbarToggle = document.getElementById('navbarToggle');

    navbarToggle.addEventListener('click', function () {
        sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
    });
});
