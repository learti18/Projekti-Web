document.addEventListener("DOMContentLoaded", function () {
    const navbarToggle = document.getElementById('navbarToggle');
    const sidebar = document.getElementById('sidebar');

    // Add click event listener to the navbar toggle button
    navbarToggle.addEventListener('click', function () {
        // Toggle the display style of the sidebar between 'block' and 'non
        sidebar.style.display = (sidebar.style.display === 'none' || sidebar.style.display === '') ? 'block' : 'none';
    });
});
// when the file finishes loading to update the image preview.
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
