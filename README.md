# realtime-chat-app
this is real time chat app using laravel, vuejs, and pusher.
This app is used chat with all logged in user not for private user to user.
# Installation
1. clone repo <code> $ git clone https://github.com/knuks/realtime-chat-app.git </code>
2. copy .env from .env.example and configure with your database
  ```
    BROADCAST_DRIVER=pusher  
    PUSHER_APP_ID=
    PUSHER_APP_KEY=
    PUSHER_APP_SECRET=
    PUSHER_APP_CLUSTER=
  ```
3. paste pusher credentials in env and put pusher key to resource/assets/js/bootstrap.js
4. <code> $ run composer install </code>
5. <code> $ run php artisan migrate </code>
6. <code> $ run php artisan serve </code>
7. Regiser user and login

To chat with users register multiple users and try with different browser with different user login

