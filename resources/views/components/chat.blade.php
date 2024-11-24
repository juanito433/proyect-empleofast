<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventana de Chat</title>
    <style>
        /* Contenedor del chat */
        .chat-container {
            width: auto;
            height: 400px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            position: sticky;
            top: 13%;
        }

        

        /* Cabecera del chat */
        .chat-header {
            background-color: #bee0b2;
            color: white;
            padding: 15px;
            text-align: center;
            font-weight: bold;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        /* Área de mensajes */
        .chat-body {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        /* Estilos para los mensajes */
        .message {
            margin: 8px 0;
            padding: 10px;
            border-radius: 5px;
            max-width: 70%;
            font-size: 14px;
        }

        .user-message {
            align-self: flex-end;
            background-color: #dcf8c6;
        }

        .bot-message {
            align-self: flex-start;
            background-color: #f1f0f0;
        }

        /* Barra de entrada */
        .chat-footer {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .input-message {
            flex: 1;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 20px;
            outline: none;
        }

        .send-button {
            background-color: #bee0b2;
            color: white;
            border: none;
            padding: 8px 12px;
            margin-left: 5px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 16px;
        }

        .send-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="chat-container">
        <!-- Cabecera del chat -->
        <div class="chat-header">
            Chat de ayuda
        </div>

        <!-- Cuerpo del chat -->
        <div class="chat-body" id="chatBody">
            <!-- Aquí se mostrarán los mensajes -->
        </div>

        <!-- Pie del chat -->
        <div class="chat-footer">
            <input type="text" id="inputMessage" class="input-message" placeholder="Escribe un mensaje...">
            <button class="send-button" onclick="sendMessage()">➤</button>
        </div>
    </div>

    <script>
        // Función para enviar mensaje
        function sendMessage() {
            const input = document.getElementById("inputMessage");
            const messageText = input.value.trim();
            if (messageText === "") return;

            // Crear el mensaje del usuario
            const userMessage = document.createElement("div");
            userMessage.classList.add("message", "user-message");
            userMessage.textContent = messageText;
            document.getElementById("chatBody").appendChild(userMessage);

            // Limpiar la entrada de texto
            input.value = "";

            // Respuesta automática del chatbot
            setTimeout(() => {
                const botMessage = document.createElement("div");
                botMessage.classList.add("message", "bot-message");
                botMessage.textContent = "Soy un chatbot, ¿cómo puedo ayudarte?";
                document.getElementById("chatBody").appendChild(botMessage);

                // Desplazarse al final del chat
                document.getElementById("chatBody").scrollTop = document.getElementById("chatBody").scrollHeight;
            }, 1000);
        }

        // Enviar mensaje al presionar Enter
        document.getElementById("inputMessage").addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });
    </script>

    
</body>

</html>
