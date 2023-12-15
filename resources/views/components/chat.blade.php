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
        <span class="close-btn material-symbols-outlined">{{__('ui.IAcloseMessage')}}</span>
    </header>
    <ul class="chatbox">
        <li class="chat incoming">
            <span class="material-symbols-outlined"></span>
            <p>{{__('ui.IAchat1')}} 👋<br>{{__('ui.IAchat2')}}</p>
        </li>
    </ul>
    <div class="chat-input">
        <textarea placeholder="{{__('ui.IAenterMessage')}}" spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">{{__('ui.IAsendMessage')}}</span>
    </div>
</div>