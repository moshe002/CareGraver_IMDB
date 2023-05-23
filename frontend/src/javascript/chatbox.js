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

var chatIDRendered = [];//listahan sa tanan messages chatID
//receive incoming chats
function receiveMessage() {
  var xhr = new XMLHttpRequest();
  console.log(xhr.responseText);
  xhr.onreadystatechange = function() {    
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
      var allMessages = JSON.parse(xhr.responseText);   
      var messageContainer = document.getElementById("text-area");
      allMessages.forEach(element => {
        if (chatIDRendered.indexOf(element['chatID']) == -1){
          switch (element['SentOrReceived']) {
            case "received":
              var receivedMessage = document.createElement("div");
              receivedContainer.className = "flex justify-end"
              receivedMessage.id = "receive-msg";
              receivedMessage.className = "items-end bg-gray-300 text-start p-2"
              receivedMessage.style.border = "1px solid gray";
              receivedMessage.style.display = "inline-block"; // Set the display to inline-block
              receivedMessage.textContent = element['chatMessage'];
              
              // Temporarily append the div to the body to calculate the text width
              document.body.appendChild(receivedMessage);
              var textWidth = receivedMessage.offsetWidth;
              document.body.removeChild(receivedMessage);
              
              receivedMessage.style.width = textWidth + "px"; // Set the width based on the text width
              
              receivedContainer.appendChild(receivedMessage);
              receivedContainer.appendChild(document.createElement("br"));
              break;            
            case "sent":
              var sentMessage = document.createElement("div");
              sentMessage.id = "sent-msg";
              sentMessage.className = "flex justify-end bg-blue-300 p-2"
              sentMessage.style.border = "1px solid #32A9DD";
              sentMessage.style.display = "inline-block";
              sentMessage.style.textAlign = "right"; // Set the display to inline-block
              sentMessage.textContent = element['chatMessage'];
              
              // Temporarily append the div to the body to calculate the text width
              document.body.appendChild(sentMessage);
              var textWidth = sentMessage.offsetWidth;
              document.body.removeChild(sentMessage);
              
              sentMessage.style.width = textWidth + "px"; // Set the width based on the text width
              
              sentContainer.appendChild(sentMessage);
              sentContainer.appendChild(document.createElement("br"));
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
setInterval(receiveMessage, 3000);
