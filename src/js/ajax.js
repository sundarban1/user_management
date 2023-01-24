$(document).ready(function(){

    $('#get-user').click(function (){


        $.ajax({
            url: "http://localhost:3002/src/test.php",
            type: "get",
            success: function (response) {


                $('#user').html(response)
                // You will get response from your PHP page (what you echo or print)
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });




    })

});
