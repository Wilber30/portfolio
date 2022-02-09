$(document).ready(function(){

  $('#form').submit(function() {

    $.post("./inc/processor.php",
    {name: $('#name').val(), email: $('#email').val()},
    function(data){
      $('#response').html(data);
  }

  );

});

});
