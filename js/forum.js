$(function(){
	var $message, $newMessage;
  $message = $('ul');
  $newMessage = $('#newMessage');

  $newMessage.on('submit', function(e) {
    e.preventDefault();
    var text = $("#yourself").val();
    $message.html("<ul class="forum_message"><div class="forum_image"><img src="../image/tortue_profil.jpg"><p>GWADA</p></div><li class="forum_text">");
    $message.append("<p>" + text + "</p>");
    $message.append("</li>");
    $("yourself").val('');
  });
}) 