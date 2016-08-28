(function(){
    // This takes any form with the data-remote attribute  {{ Form::open(['data-remote']) }} and submits it as an AJAX request

    $('form[date-remote]').on('submit', function(e){
        var form = $(this);
        var method = form.find('input[name="_method"]').val() || 'POST';
        var url = form.prop('action');

        $.ajax({
            type: method,
            url: url,
            data: form.serialize(),
            success: function(){

            }
        });
        e.preventDefault();

    });

})();