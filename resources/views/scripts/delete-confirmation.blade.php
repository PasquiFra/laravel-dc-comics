@if (Route::is('comics.show'))

<script>

    const deleteForm = document.getElementById('form-delete');

    deleteForm.addEventListener('submit', e => {
        e.preventDefault();

        const confirmation = confirm('Sei sicuro di voler eliminare {{$comic['title']}}?');
        if(confirmation) deleteForm.submit();
    });

</script>

@elseif (Route::is('comics.index'))

<script>

    const deleteForm = document.querySelectorAll('.form-delete');

    deleteForm.forEach(form => {
        form.addEventListener('submit', e => {
        e.preventDefault();

        const confirmation = confirm('Sei sicuro di voler eliminare {{$comic['title']}}?');
        if(confirmation) deleteForm.submit();
        });
    })
    
    

</script>

@endif
