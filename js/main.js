const text = document.querySelector("#text");
const msg = document.querySelector("#msg");
const alertClass = document.querySelectorAll(".alert");
const submit = document.querySelector("#submit");

const formValidation = (event) => {
  event.preventDefault();
  if (text.value === "" && msg.value === "") {
    alertClass.forEach((alertC) => {
      alertC.classList.add("show");
    });
  }
};

submit.addEventListener("click", formValidation);
setTimeout(() => {
  formValidation;
}, 3000);
