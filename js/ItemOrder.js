// Get the modal
var DangerModal = document.getElementById("DangerModal");
var SuccessModal = document.getElementById("SuccessModal");

// Get the <span> element that closes the modal
var spanSuccess = document.getElementsByClassName("close-success")[0];
var spanDanger = document.getElementsByClassName("close-danger")[0];

// When the user clicks on <span> (x), close the modal
spanSuccess.onclick = function (event) {
    SuccessModal.style.display = "none";
    location.replace("http://localhost/online_fashion_store_1/index_home.php");
}
spanDanger.onclick = function (event) {
    DangerModal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == DangerModal) {
        DangerModal.style.display = "none";
    }
    else if (event.target == SuccessModal) {
        SuccessModal.style.display = "none";
    }
}

function colorOnChange(selectObject) {
    var value = selectObject.value;  
    var img = document.getElementById("item-img").src.split(".")[0];
    var newImg = img.split("-")[0]+"-"+value+".jpg";
    document.getElementById("item-img").src = newImg;
  }