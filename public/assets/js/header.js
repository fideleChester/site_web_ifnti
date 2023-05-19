


const item = document.getElementById('plus');
const sub_menu = document.querySelector('.ifnti_header ul.sub-menu > li > a');
// const trigger = document.querySelector(".example");
// const locate = document.querySelector(".show-locate");

// const closeButton = document.querySelector(".close-button");

// function toggleModal() {
//   modal.classList.toggle("show-modal");
// }

// function windowOnClick(event) {
//   if (event.target === modal) {
//     toggleModal();
//   }
// }

// trigger.addEventListener("click", toggleModal);
item.addEventListener("click", (e)=>{
        e.preventDefault();
        console.log(sub_menu);
        sub_menu.classList.toggle('shows_submenu');
});
// closeButton.addEventListener("click", toggleModal);
// window.addEventListener("click", windowOnClick);


// function exemple() {
//     el = document.getElementById("locate");
//     el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
//     }