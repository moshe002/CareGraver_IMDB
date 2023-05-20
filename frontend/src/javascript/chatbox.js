// //chatbox click open
// var chatCircleClick = document.getElementById('chat-circle');
// var chatModal = document.getElementById('chat-box');
// function openChatBox(){
//   chatModal.style.display = 'block';
// }
// chatCircleClick.addEventListener('click', openChatBox);

// //chatbox close
// var chatClose = document.getElementById('chat-box-toggle');
// function closeChatBox(){
//   chatModal.style.display = 'none';
// }
// chatClose.addEventListener('click', closeChatBox);


//send message
var sendButton = document.getElementById('chat-submit');
console.log(sendButton);
function sendMessage() {
  var messageHTML = document.getElementById('chat-input');
  var message = messageHTML.value;
  if (message.trim() !== ""){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../pages/chat-process.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        console.log(xhr.responseText);
      }
    };
    xhr.send('  message=' + encodeURIComponent(message));
  }
}

sendButton.addEventListener('click', sendMessage);