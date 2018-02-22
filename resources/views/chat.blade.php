<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Chat App</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style media="screen">
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" id="app">
            <div class="col-12 text-right">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            <div class="offset-4 col-4 offset-sm-1 col-sm-10">
                <li class="list-group-item active">
                    Chat Room
                    <span class="badge badge-pill badge-danger">@{{numberOfUsers}}</span>
                </li>
                <div class="badge badge-pill">
                    @{{typing}}
                </div>
                <ul class="list-group" v-chat-scroll>
                    <message v-for="value,index in chat.message"
                        :key="value.index" :color="chat.color[index]" :user="chat.user[index]" :time="chat.time[index]">
                        @{{value}}
                    </message>
                </ul>
                <input type="text" class="form-control" name="" placeholder="type your message here"
                v-model='message' @keyup.enter="send"
                ><br>
                <a href="" class="btn btn-secondary btn-sm" @click.prevent="deleteSession">Delete Chats</a>
            </div>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
</body>
</html>
