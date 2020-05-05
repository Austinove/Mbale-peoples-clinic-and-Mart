$(document).ready(function(){
            $('#appointment-request').click(function() {
                $(this).prop("disabled", true);
                $.ajax({
                    url: '{{url("appointment/create")}}',
                    type: 'post',
                    data: $('#ajax_class_form').serialize(),
                    success: function(response){
                        console.log(response);
                    }
                })
                // console.log('clicked');
            })
        });