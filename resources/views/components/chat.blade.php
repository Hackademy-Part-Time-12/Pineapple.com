<!-- <div class="fixed-bottom z-3 m-5">
    <button type="button" class="ia_logo btn btn-primary position-absolute bottom-0 end-0">

        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
    </button>
</div> -->



<button class="chatbot-toggler">
    <span class="material-symbols-rounded"></span>
    <span class="material-symbols-outlined"></span>
</button>
<div class="chatbot">
    <header>
        <h2>{{__('ui.chatWithUs')}}</h2>
        <span class="close-btn material-symbols-outlined">close</span>
    </header>
    <ul class="chatbox">
        <li class="chat incoming">
            <span class="material-symbols-outlined"></span>
            <p>Hi there 👋<br>How can I help you today?</p>
        </li>
    </ul>
    <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
    </div>
</div>