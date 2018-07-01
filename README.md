# pomodoro-php-api
Pomodoro designed for an Alexa Skill

Tested with PHP 7.0 and NGINX

# Response

```{"status":true,"current":"pomodoro","nextPomodoroType":"short","minutesLeftForBreak":13}```

# Enable authentication

Open api.php and uncomment: ```//$token="dbfsdbsfdh";```

then you'll need to pass: 

```url.com/api.php?token=<Token>```
