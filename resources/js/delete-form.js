const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
    const name = form.getAttribute('data-name');
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const accept = confirm(`Sei sicuro di voler eliminare ${name}?`);
        if (accept) e.target.submit();
    });
})