<?php ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head></head>
    <body>
        <!-- chatbox -->
        <div id="body"> 
            <div id="chat-circle" class="btn btn-raised" >
                <div id="chat-overlay"></div>
                <i id = "icon" class="far fa-comments" style="font-size:25px"></i>
            </div>
        
            <div class="chat-box" >
                <div class="chat-box-header">
                    <span class="chat-box-toggle"><i class="material-icons">&times;</i></span>
                </div>
                <div class="chat-box-body">
                    <div class="chat-box-overlay"></div>
                    <div class="chat-logs"></div><!--chat-log -->
                </div>
                <div class="chat-input">      
                    <form>
                        <input type="text" id="chat-input" placeholder="Send a message..."/>
                        <button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
                    </form>      
                </div>
            </div>	  
        </div>	
        <!-- end of chatbox -->';
    </body>
</html>
