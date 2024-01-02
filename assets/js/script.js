document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form')
    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const formData = new FormData(form);
        fetch(form.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            Swal.fire({
                icon: 'success',
                title: 'Usuario Registrado.',
                confirmButtonText: 'LISTO'
                // text: data
            }).then(() => {
                form.reset();
            });
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});