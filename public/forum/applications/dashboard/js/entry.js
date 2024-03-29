// This file contains javascript that is specific to the dashboard/entry controller.
jQuery(document).ready(function($) {
	
   // Check to see if the selected email is valid
   $('#Register input[name$=Email], body.register input[name$=Email]').blur(function() {
      var email = $(this).val();
      if (email != '') {
         var checkUrl = gdn.url('/dashboard/user/emailavailable/'+encodeURIComponent(email)+'/x');
         $.ajax({
            type: "GET",
            url: checkUrl,
            dataType: 'text',
            error: function(XMLHttpRequest, textStatus, errorThrown) {
               $.popup({}, XMLHttpRequest.responseText);
            },
            success: function(text) {
               if (text == 'FALSE')
                  $('#EmailUnavailable').show();
               else
                  $('#EmailUnavailable').hide();
            }
         });
      }
   });
	
   // Check to see if the selected username is valid
   $('#Register input[name$=Name], body.register input[name$=Name]').blur(function() {
      var name = $(this).val();
      if (name != '') {
         var checkUrl = gdn.url('/dashboard/user/usernameavailable/'+encodeURIComponent(name));
         $.ajax({
            type: "GET",
            url: checkUrl,
            dataType: 'text',
            error: function(XMLHttpRequest, textStatus, errorThrown) {
               $.popup({}, XMLHttpRequest.responseText);
            },
            success: function(text) {
               if (text == 'FALSE')
                  $('#NameUnavailable').show();
               else
                  $('#NameUnavailable').hide();
            }
         });
      }
   });

   var checkConnectName = function() {
      if (gdn.definition('NoConnectName', false)) {
         $('#ConectPassword').show();
         return;
      }

      var selectedName = $('input[name$=UserSelect]:checked').val();
      if (!selectedName || selectedName == 'other') {
         var name = $('#Form_ConnectName').val();
         if (typeof(name) == 'string' && name != '') {
            var checkUrl = gdn.url('/dashboard/user/usernameavailable/'+encodeURIComponent(name));
            $.ajax({
               type: "GET",
               url: checkUrl,
               dataType: 'text',
               error: function(XMLHttpRequest, textStatus, errorThrown) {
                  $.popup({}, XMLHttpRequest.responseText);
               },
               success: function(text) {
                  if (text == 'TRUE')
                     $('#ConnectPassword').hide();
                  else
                     $('#ConnectPassword').show();
               }
            });
         } else {
            $('#ConnectPassword').hide();
         }
      } else {
         $('#ConnectPassword').show();
      }
   }

   checkConnectName();
   $('#Form_ConnectName').blur(checkConnectName);
   $('input[name$=UserSelect]').click(checkConnectName);
   
   // Check to see if passwords match
   $('input[name$=PasswordMatch]').blur(function() {
      if ($('#Register input[name$=Password], body.register input[name$=Password]').val() == $(this).val())
         $('#PasswordsDontMatch').hide();
      else
         $('#PasswordsDontMatch').show();
   });

   $('#Form_ConnectName').focus(function() {
      $('input[value=other]').attr('checked', 'checked');
   });
});