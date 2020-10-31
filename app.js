const btnSend1 = document.getElementById("btn1");
const chat1 = document.getElementById("chat1");

const getMessage = (msg) => {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      const response = xhr.responseText;
      const chatBody1 = document.querySelector(".scroller1");
      const divCpu = document.createElement("div");
      divCpu.className = "alicia visible";
      divCpu.innerHTML = response;
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;
      chatBody1.append(divUser);
      setTimeout(() => {
        chatBody1.append(divCpu);
      }, 600);
      //   console.log(divCpu);
    }
  };
  xhr.open("GET", "bot/chat.php?msg=" + msg, true);
  xhr.send();
};

btnSend1.addEventListener("click", (e) => {
  e.preventDefault();
  if (chat1.value == "") {
  } else {
    getMessage(chat1.value);
    chat1.value = "";
  }
});
