<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<style>
    .head {
        left: 0;
        bottom: 0;
        width: auto;
        background-color:  white !important;
        text-align: center;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);

    }
    .foot {
        left: 0;
        bottom: 0;
        width: auto;
        background-color: #e5e8ea;
        text-align: center;
        padding:2%;
        box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2);
    }

    .fontStyling{
        box-sizing: border-box;
        font-family: -apple-system,
        BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
        position: relative;
    }
</style>
<body style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; -webkit-text-size-adjust: none; background-color: #ffffff; color: #718096; height: 100%; line-height: 1.4; margin: 0; padding: 0; width: 100% !important;">
<div style="box-sizing: border-box; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; position: relative; margin: 10px;">
<div style="margin: 10px">
    <li class="fontStyling">Name:  {{$user->name}}</li>
    <li class="fontStyling">Email: {{$user->email}}</li><br>
</div>
</div>
</body>
</html>
