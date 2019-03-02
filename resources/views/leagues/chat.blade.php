@extends('layouts.app')

@section('content')
<h1 class="title">Chat</h1>
<hr>
<div class="columns">
    <div id="chat" class="column is-6 is-offset-3">
        <div class="level" id="messages">
            <div class="level">
                <div class="level-right">
                    <div class="level-item text-message-to">to</div>
                </div>
            </div>
            <div class="level">
                <div class="level-left">
                    <div class="">from</div>
                </div>
            </div>
        </div>

        <form id="chat-form" class="form" action="">
            <div class="field">
                <input id="m" class="input" type="text" placeholder="Type your message here.">
            </div>
            <div class="field">
                <button class="button is-primary" id="chat-btn" type="submit">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection
