$(document).ready(function() {
  $("button" ).click(function() {
    alert( "dit werkt nog niet, sorry" );
  });

  $('ul li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
  });

  $("input.checkbox").change(function(){
    $.ajax({ type: "POST", url: "ajax.php", data: { item_id: $(this).data("id"), done: $(this).prop('checked') } }).done(function(data){
      console.log(data);
    });
  });
});
