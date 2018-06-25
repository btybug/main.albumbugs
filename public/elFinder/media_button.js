var elm = "";
$("body").on("click", ".media-modal-open", function() {
  $("#mysettingsModal").addClass("in");
  elm = $(this).attr("data-id");
  console.log(elm);
});
$("body").on("click", ".media-modal-close", function() {
  console.log($(this));
  $(this)
    .closest(".modal")
    .removeClass("in");
});

$("body").on("click", ".media-select", function() {
  console.log($(this));
  console.log(elm);
  let location = document.querySelector("#path-location").value;
  document.querySelector(`#${elm}`).value = "public/" + location;
  $(this)
    .closest(".modal")
    .removeClass("in");
    savesettingevent();
});
