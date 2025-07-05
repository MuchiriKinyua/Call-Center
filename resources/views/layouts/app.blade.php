<x-laravel-ui-adminlte::adminlte-layout>
<head>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Google Fonts (optional, only if you're using Material Symbols) -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Main Header -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                @include('layouts.navbar')  
               
            </nav>

            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>

<div class="fab-container">
    <div class="fab-main">
        <div class="fab-button"><i class="fas fa-plus"></i></div>
<ul class="fab-options">
    <li class="bg-chatbot">
        <button class="chatbot-toggler">
            <i class="fas fa-robot"></i>
            <i class="fas fa-times close-icon"></i>
        </button>
    </li>
    <li class="bg-whatsapp">
        <a href="https://wa.me/254713030677" target="_blank"><i class="fab fa-whatsapp"></i></a>
    </li>
</ul>

    </div>
</div>


<div class="chatbot">
<header>
    <h2>Othaya Hospital ChatBot</h2>
    <button class="chatbot-close-btn">
        <i class="fas fa-angle-down"></i>
    </button>
</header>

    <ul class="chatbox">
        <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hi there 👋🏾 <br> How can I help you today?</p>
        </li>
    </ul>
    <div class="chat-input">
        <textarea placeholder="Enter a message..." required></textarea>
        <span id="send-btn" class="material-symbols-outlined">Send</span>
    </div>

</div>


<footer class="main-footer fixed-bottom bg-white py-3 shadow-sm border-top">
    <div class="d-flex flex-wrap h-100 w-100">
        <div class="bg-light px-2 d-flex align-items-center h-100">
            <a href="#" class="btn btn-link text-dark btn-sm rounded-0 border-0 text-decoration-none">
                <i class="fas fa-cog fa-lg"></i> Settings
            </a>
        </div>
        <div class="bg-light px-2 d-flex align-items-center h-100">
            <a href="#" class="btn btn-link text-dark btn-sm rounded-0 border-0 text-decoration-none">
                <i class="fas fa-server fa-lg"></i> System Administration
            </a>
        </div>
        <div class="bg-light px-2 d-flex align-items-center h-100">
            <a href="#" class="btn btn-link text-dark btn-sm rounded-0 border-0 text-decoration-none">
                <i class="fas fa-heartbeat fa-lg"></i> System Status
            </a>
        </div>
        <div class="bg-light px-2 d-flex align-items-center h-100">
            <a href="#" class="btn btn-link text-dark btn-sm rounded-0 border-0 text-decoration-none">
                <i class="fas fa-question-circle fa-lg"></i> FAQs
            </a>
        </div>
        <div class="bg-light px-2 d-flex align-items-center h-100">
            <a href="#" class="btn btn-link text-dark btn-sm rounded-0 border-0 text-decoration-none">
                <i class="fas fa-book fa-lg"></i> User Guide
            </a>
        </div>
        <div class="bg-light px-2 d-flex align-items-center h-100">
            <a href="#" class="btn btn-link text-dark btn-sm rounded-0 border-0 text-decoration-none">
                <i class="fas fa-bug fa-lg"></i> Report an Issue
            </a>
        </div>
    </div>
</footer>




    </body>

    <style>
.fab-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 9999;
}

.fab-main {
    position: relative;
}

.fab-button {
    width: 56px;
    height: 56px;
    background-color: #343a40;
    border-radius: 50%;
    color: white;
    text-align: center;
    line-height: 56px;
    cursor: pointer;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s;
    font-size: 20px;
}

.fab-options {
    list-style: none;
    padding: 0;
    margin: 0;
    position: absolute;
    bottom: 70px;
    right: 0;
    display: none;
    flex-direction: column;
    gap: 10px;
}

.fab-options li {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    text-align: center;
    line-height: 46px;
    color: white;
    font-size: 18px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.3);
}

.fab-main:hover .fab-options {
    display: flex;
}

.fab-options li a {
    color: white;
    display: block;
}

.fab-options {
    display: none;
}
.fab-options.show {
    display: flex;
}

.bg-chatbot {
    background-color: #007bff; /* Bootstrap Blue */
}

.bg-edms {
    background-color: #dc3545; /* Bootstrap Red */
}

.bg-whatsapp {
    background-color: #25D366; /* WhatsApp Green */
}

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    background: linear-gradient(135deg, #153677, #4e085f);
}
.chatbot-toggler {
    all: unset;
    width: 46px;
    height: 46px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 18px;
    cursor: pointer;
    position: relative;
}

.show-chatbot .chatbot-toggler{
    transform: rotate(90deg);
}
.chatbot-toggler span{
    position: absolute;
}
.show-chatbot .chatbot-toggler span:first-child,
.chatbot-toggler span:last-child{
    opacity: 0;
}
.show-chatbot .chatbot-toggler span:last-child{
    opacity: 1;
}
.chatbot {
    position: fixed;
    right: 40px;
    bottom: 100px;
    width: 420px;
    transform: scale(0.5);
    opacity: 0;
    pointer-events: none;
    overflow: hidden;
    background: #fff;
    border-radius: 15px;
    transform-origin: bottom right;
    box-shadow: 0 0 128px 0 rgb(0, 0, 0, 0.1),
                0 32px 64px -48px rgba(0, 0, 0, 0.5);
    transition: all 0.1s ease;
}
.show-chatbot .chatbot{
    transform: scale(1);
    opacity: 1;
    pointer-events: auto;
}
.chatbot header{
    background: #724ae8;
    padding: 16px 0;
    text-align: center;
    position: relative;
}
.chatbot header h2{
    color: #fff;
    font-size: 1.4rem;
}
.chatbot header span{
    position: absolute;
    right: 20px;
    top: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    transform: translateY(-50%);
}
.chatbot .chatbox{
    height: 510px;
    overflow-y: auto;
    padding: 30px 20px 100px;
}
.chatbot .chat{
    display: flex;
}
.chatbot .incoming span{
    height: 32px;
    width: 32px;
    color: #fff;
    align-self: flex-end;
    background: #724ae8;
    text-align: center;
    line-height: 32px;
    border-radius: 4px;
    margin: 0 10px 7px 0;
}
.chatbot .outgoing{
    margin: 20px 0;
    justify-content: flex-end;
}
.chatbot .chat p{
    color: #fff;
    max-width: 75%;
    white-space: pre-wrap;
    font-size: 0.95rem;
    padding: 12px 16px;
    border-radius: 10px 10px 0 10px;
    background: #724ae8;
}
.chatbot .chat p.error {
    color: #721c24;
    background: #f8d7da;
}
.chatbot .incoming p{
    color: #000;
    background: #f2f2f2;
    border-radius: 10px 10px 10px 0;
}
.chatbot .chat-input{
    position: absolute;
    bottom: 0;
    width: 100%;
    display: flex;
    gap: 5px;
    background: #fff;
    padding: 5px 20px;
    border-top: 1px solid #ccc;
}
.chat-input textarea {
    height: 55px;
    width: 100%;
    border: none;
    outline: none;
    max-height: 180px;
    font-size: 0.95rem;
    resize: none;
    padding: 16px 15px 16px 0;
}
.chat-input span{
    align-self: flex-end;
    height: 55px;
    line-height: 55px;
    color: #724ae8;
    font-size: 1.35rem;
    cursor: pointer;
    visibility: hidden;
}
.chat-input textarea:valid ~ span {
    visibility: visible;
}
@media(max-width: 490px){
    .chatbot{
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
    .chatbot .chatbot{
        height: 90%;
    }
    .chatbot header span{
        display: block;
    }
}

.chatbot-toggler .fa-times {
    display: none;
}
.show-chatbot .chatbot-toggler .fa-robot {
    display: none;
}
.show-chatbot .chatbot-toggler .fa-times {
    display: inline;
}

.chatbot, .chatbot-toggler, .fab-container {
    z-index: 1050; /* Bootstrap modal z-index is 1050, so match it */
}

.chatbot-toggler .fa-times {
    display: none;
}
.show-chatbot .chatbot-toggler .fa-robot {
    display: none;
}
.show-chatbot .chatbot-toggler .fa-times {
    display: inline;
}

.chatbot-close-btn {
    position: absolute;
    top: 50%;
    right: 15px;
    transform: translateY(-50%);
    background: none;
    border: none;
    font-size: 1.5rem;
    color: #fff;
    cursor: pointer;
    padding: 0;
}



</style>


    <script>
    function toggleFontSize() {
        document.body.classList.toggle('large-font');
    }

    function toggleContrast() {
        document.body.classList.toggle('high-contrast');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const fabMain = document.querySelector('.fab-main');
        const fabOptions = document.querySelector('.fab-options');

        let hideTimeout;

        fabMain.addEventListener('mouseenter', () => {
            clearTimeout(hideTimeout);
            fabOptions.classList.add('show');
        });

        fabMain.addEventListener('mouseleave', () => {
            hideTimeout = setTimeout(() => {
                fabOptions.classList.remove('show');
            }, 400); // Delay before hiding in ms
        });

        fabOptions.addEventListener('mouseenter', () => {
            clearTimeout(hideTimeout);
        });

        fabOptions.addEventListener('mouseleave', () => {
            hideTimeout = setTimeout(() => {
                fabOptions.classList.remove('show');
            }, 400);
        });
    });

    const chatInput = document.querySelector(".chat-input textarea");
const sendChatBtn = document.querySelector(".chat-input span");
const chatbox = document.querySelector(".chatbox");
const chatbotToggler = document.querySelector(".chatbot-toggler");
const chatbotCloseBtn = document.querySelector(".close-btn");

let userMessage;
const API_KEY = "{{ env('OPENAI_API_KEY') }}";
const inputInitHeight = chatInput.scrollHeight;

const createChatLi = (message, className) => {
    const chatLi = document.createElement("li");
    chatLi.classList.add("chat", className);
    let chatContent = className === "outgoing" ? `<p></p>` : `<span class="material-symbols-outlined">smart_toy</span><p></p>`;
    chatLi.innerHTML = chatContent;
    chatLi.querySelector("p").textContent = message;
    return chatLi;
}

const generateResponse = (incomingChatLi) => {
    const API_URL = "";
    const messageElement = incomingChatLi.querySelector("p");

    const requestOptions = {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Authorization": `Bearer ${API_KEY}`
        },
        body: JSON.stringify({
            model: "gpt-3.5-turbo",
            messages: [{role: "user", content: userMessage}]
        })
    }

    fetch(API_URL, requestOptions).then(res => res.json()).then(data => {
        messageElement.textContent = data.choices[0].message.content;
    }).catch((error) => {
        messageElement.classList.add("error");
        messageElement.textContent = "Oops! Something went wrong. Please try again!";
    }).finally(() => chatbox.scrollTo(0, chatbox.scrollHeight));

}

const handleChat = () => {
    userMessage = chatInput.value.trim();
    if(!userMessage) return;
    chatInput.value = "";
   chatInput.style.height = `${inputInitHeight}px`;

    chatbox.appendChild(createChatLi(userMessage, "outgoing"));
    chatbox.scrollTo(0, chatbox.scrollHeight);

    setTimeout(() => {
        const incomingChatLi = createChatLi("Generating...", "incoming")
        chatbox.appendChild(incomingChatLi);
        chatbox.scrollTo(0, chatbox.scrollHeight);
        generateResponse(incomingChatLi);
    }, 600);

}
chatInput.addEventListener("input", () => {
   chatInput.style.height = `${inputInitHeight}px`;
   chatInput.style.height = `${chatInput.scrollHeight}px`;
});
chatInput.addEventListener("keydown", (e) => {
    if(e.key === "Enter" && !e.shiftKey && window.innerHeight > 800) {
        e.preventDefault();
        handleChat();
    }
 });

sendChatBtn.addEventListener("click", handleChat);
chatbotToggler.addEventListener("click", () => document.body.classList.toggle("show-chatbot"));

const chatbotCloseArrowBtn = document.querySelector(".chatbot-close-btn");

chatbotCloseArrowBtn.addEventListener("click", () => {
    document.body.classList.remove("show-chatbot");
});



</script>

    

</x-laravel-ui-adminlte::adminlte-layout>