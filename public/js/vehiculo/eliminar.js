function eventDelete()
{
    $(".form-delete").on('submit', function(e){
        e.preventDefault();

        var confirmation = confirm("¿Esta suguro de eliminr el vehiculo ?");
        if(confirmation){
            $(this).submit();
        }


    });
}