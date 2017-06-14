$(function(){
	var $message, $newMessage;
  $message = $('#comment');
  $newMessage = $('#newMessage');

  $newMessage.on('submit', function(event){
    event.preventDefault();
    var text = $("#yourself").val();
    $message
      .append('<div class="forumImage"><img src="../image/tortue_profil.jpg"/><p>GWADA</p></div><li class="forumText"><p>' + text + '</p></li>')
      .appendTo("#comment");
    $("#yourself").val('');
  });
  $message.on('click', 'div', function() {
    var $this = $(this);
    $this.remove();
  });
}) 