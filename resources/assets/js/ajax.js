(function(){

    $('form[date-remote]').on('submit', function(e){
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');

        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(){
                alert('record updated');
            }
        });
        e.preventDefault();

    });

    $("#delete").click(function(event) {
        if( !confirm("Are you SURE you want to delete this record?") )
            event.preventDefault();
    });

})();