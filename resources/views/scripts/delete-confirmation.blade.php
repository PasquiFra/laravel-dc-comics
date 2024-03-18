<script>

    const deleteForm = document.getElementById('form-delete');
    deleteForm.addEventListener('submit', e => {
        e.preventDefault();

        const confirmation = confirm('Sei sicuro di voler procedere?');
        if(confirmation) deleteForm.submit();
    });

</script>