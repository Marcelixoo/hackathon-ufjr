// Foda-se
$(".stickers").on("click", function () {
  $(this).toggleClass("click");
});

$(".enviar").on("click", function () {
  console.log ($(".click").text());

});

$("button").click(function(){
  $.post("demo_test_post.asp",
  {
      name: "Donald Duck",
      city: "Duckburg"
  },
  function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
  });
});
