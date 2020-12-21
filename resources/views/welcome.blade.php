<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
        <title>Laravel</title>
    </head>
    <body>
        <div id="app">
            <v-app>
                <router-view></router-view>
            </v-app>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
