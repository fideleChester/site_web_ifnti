
const modal = document.querySelector(".modal");
// const trigger = document.querySelector(".example");
const locate = document.querySelector(".show-locate");

const closeButton = document.querySelector(".close-button");

function toggleModal() {
  modal.classList.toggle("show-modal");
}

function windowOnClick(event) {
  if (event.target === modal) {
    toggleModal();
  }
}

// trigger.addEventListener("click", toggleModal);
locate.addEventListener("click", toggleModal);
closeButton.addEventListener("click", toggleModal);
// window.addEventListener("click", windowOnClick);


function exemple() {
    el = document.getElementById("locate");
    el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }