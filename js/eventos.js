// Foda-se
$(".stickers").on("click", function () {
  $(this).toggleClass("click");
});

$(".enviar").on("click", function () {
  var colecao = ($(".click").text());
  $.post("posts.php",
  {
      name: colecao
  },
  function(data, status){
      document.write(data);
  });
});
