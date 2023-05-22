//chatbox click open
var chatCircleClick = document.getElementById('chat-circle');
var chatModal = document.getElementById('chat-box');
function openChatBox(){
  chatModal.style.display = 'block';
}
chatCircleClick.addEventListener('click', openChatBox);

//chatbox close
var chatClose = document.getElementById('chat-box-toggle');
function closeChatBox(){
  chatModal.style.display = 'none';
}
chatClose.addEventListener('click', closeChatBox);


//send message
var sendButton = document.getElementById('chat-submit');
function sendMessage() {
  var messageHTML = document.getElementById('chat-input');
  var message = messageHTML.value;
  if (message.trim() !== ""){
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '../../../backend/server-side-processing/chat-process.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
      }
    };
    xhr.send('message=' + encodeURIComponent(message));
    var swooshSound = document.getElementById("swooshSound");
    swooshSound.play();
    messageHTML.value = "";
  }
}
sendButton.addEventListener('click', sendMessage);
inputField = document.getElementById('chat-input');
inputField.addEventListener("keyup", function(event) {
  if (event.key === "Enter") {
      event.preventDefault();
      sendButton.click();
  }
});

var chatIDRendered = [];

//receive incoming chats
function receiveMessage() {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {    
    if (xhr.readyState === 4 && xhr.status === 200) {
      var allMessages = JSON.parse(xhr.responseText);   
      var receivedContainer = document.getElementById("received-area");
      var sentContainer = document.getElementById("sent-area");
      allMessages.forEach(element => {
        if (chatIDRendered.indexOf(element['chatID']) == -1){
          switch (element['SentOrReceived']) {
            case "received":
              var receivedMessage = document.createElement("div");
              receivedMessage.id = "receive-msg";
              receivedMessage.textContent  = element['chatMessage'];
              receivedContainer.appendChild(receivedMessage);
              break;            
              case "sent":
                var sentMessage = document.createElement("div");
                sentMessage.id = "sent-msg";
                sentMessage.textContent  = element['chatMessage'];
                sentContainer.appendChild(sentMessage);
              break;          
            default:
              break;
          }          
          chatIDRendered.push(element['chatID']);
        }
        
      });
      
      
    }
  };  
  xhr.open('GET', '../../../backend/server-side-processing/chat-process.php', true);
  xhr.send();
}
setInterval(receiveMessage, 1000);
