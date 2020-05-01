<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    <title>Document</title>
    <style>
        .list-group {
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" id="app">
            <div class="offset-4 col-4 mt-5">
                <li class="list-group-item active">Chat Room</li>
                <ul class="list-group   text-center " v-chat-scroll>
                    <message v-for="value in chat.message" :key=value.index color='warning'>@{{value}} </message>
                </ul>
                <input type="text" class="form-control" name="text" id="" @keyup.enter="send" v-model='message' placeholder="text data">
            </div>
        </div>
    </div>
</body>
<script src="{{asset('public/js/app.js')}}"></script>

</html>