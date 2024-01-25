document.addEventListener("DOMContentLoaded", function () {
    const navbarToggle = document.getElementById('navbarToggle');
    const sidebar = document.getElementById('sidebar');
    
    navbarToggle.addEventListener('click', function () {
        sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
    });
});

function previewImage() {
    const preview = document.getElementById('imagePreview');
    const fileInput = document.getElementById('image');
    const file = fileInput.files[0];

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(file);
    }
}
