let user = document.querySelector('input[name="username"]'),
  mail = document.querySelector('input[name="email"]'),
  message = document.querySelector("textarea"),
  form = document.querySelector("form"),
  btn = document.querySelector('form input[type="submit"]'),
  star1 = document.querySelector("form span.x"),
  star2 = document.querySelector("form span.y"),
  star3 = document.querySelector("form span.z"),
  p1 = document.querySelector("form .a"),
  p2 = document.querySelector("form .b"),
  p3 = document.querySelector("form .c"),
  userError = (mailError = messageError = true);
window.onload = () => {
  user.focus();
};
user.addEventListener("blur", () => {
  if (user.value.length < 4 || user.value.length > 10) {
    user.style.borderColor = "red";
    p1.style.display = "block";
    star1.style.display = "flex";
    userError;
  } else {
    user.style.borderColor = "#1da1f2";
    p1.style.display = "none";
    star1.style.display = "none";
    userError = false;
  }
});
mail.addEventListener("blur", () => {
  if (mail.value == "") {
    mail.style.borderColor = "red";
    p2.style.display = "block";
    star2.style.display = "flex";
    mailError;
  } else {
    mail.style.borderColor = "#1da1f2";
    p2.style.display = "none";
    star2.style.display = "none";
    mailError = false;
  }
});
message.addEventListener("blur", () => {
  if (message.value.length <= 10) {
    message.style.borderColor = "red";
    p3.style.display = "block";
    star3.style.display = "flex";
    messageError;
  } else {
    message.style.borderColor = "#1da1f2";
    p3.style.display = "none";
    star3.style.display = "none";
    messageError = false;
  }
});
form.addEventListener("submit", (e) => {
  if ((userError == true, mailError == true, messageError == true)) {
    e.preventDefault();
  }
});
