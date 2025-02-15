document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', (event) => {
        const fileInput = form.querySelector('input[type="file"]');
        if (!fileInput.files.length) {
            event.preventDefault();
            alert('Please select a file to upload');
        }
    });
});