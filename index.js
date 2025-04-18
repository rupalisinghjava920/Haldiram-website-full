
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const sidebar = document.getElementById('sidebar');
        const backdrop = document.getElementById('backdrop');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.add('active');
            backdrop.style.display = 'block';
        });

        closeBtn.addEventListener('click', () => {
            sidebar.classList.remove('active');
            backdrop.style.display = 'none';
        });

        backdrop.addEventListener('click', () => {
            sidebar.classList.remove('active');
            backdrop.style.display = 'none';
        });
    

 // Send Message chat
        function toggleChat() {
            var chatBox = document.getElementById("chatBox");
            chatBox.style.display = chatBox.style.display === "block" ? "none" : "block";
        }
        
       
        function sendMessage() {
            var input = document.getElementById("messageInput");
            var message = input.value.trim();
            if (message !== "") {
                var messageContainer = document.getElementById("messages");
                var newMessage = document.createElement("p");
                newMessage.textContent = message;
                messageContainer.appendChild(newMessage);
                input.value = "";
            }
        }
        
        // Emoji Picker
        document.querySelector('.emoji-btn').addEventListener('click', function () {
            var picker = document.getElementById("emojiPicker");
            picker.style.display = picker.style.display === "block" ? "none" : "block";
        });
        
        // Add Emoji
        document.getElementById("emojiPicker").addEventListener("click", function (event) {
            if (event.target.tagName === "SPAN") {
                document.getElementById("messageInput").value += event.target.textContent;
            }
        });
        
        // Populate Emoji Picker
        var emojis = ["😊", "😂", "❤️", "👍", "😍", "😭", "🔥", "😎", "💯"];
        var emojiPicker = document.getElementById("emojiPicker");
        emojiPicker.innerHTML = emojis.map(e => `<span>${e}</span>`).join('');
        
        