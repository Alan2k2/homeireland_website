        function changeImage(imageUrl) {
      // Change the background image of the main image container
      document.getElementById('mainImage').style.backgroundImage = `url('${imageUrl}')`;
      }

      document.addEventListener("DOMContentLoaded", function () {
       
        var x = document.getElementById("main_image_display").value;
      // Set an initial image on page load
      changeImage("uploads/properties/"+ x +"");
      });
              $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
      $('.save_property').click(function()
        {
          $('.save_image').toggle();
          $('.saved_image').toggle();
          var property_id = $(this).closest('.parentme').find('.findme').val();
                       $.ajax({
                url: 'website/save-property',
                method: 'POST',
                data:{property_id:property_id}, 
                success: function(data) 
                {
                    $('#result').html('<pre>' + JSON.stringify(data, null, 2) + '</pre>');
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                }
            });         
        });

        $('.chat-icon').click(function()
        {
           $('.open-chat').show(); 
           $('.open-chat').addClass('opened-chat'); 
 
        });
        $('.remove-chat').click(function()
        {
           $('.open-chat').hide(); 
           $('.open-chat').removeClass('opened-chat'); 
 
        });
        $('.chat-button').click(function()
        {
         var property_id =$('#prop-id-main').val();
         var message = $('.chat-input').val();
         var from = 'web';
         
          $('.for-jq').append('<div class="chat-div chat-div-left"><p class="chat-text">'+ message +'</p></div>');
          $('.chat-input').val('');
              $.ajax({
                url: '/addchat',
                method: 'GET',
                data:{property_id:property_id,message:message,from:from}, 
                success: function(data) 
                {

                },
                error: function(xhr, status, error) 
                {

                }
            });
        });
