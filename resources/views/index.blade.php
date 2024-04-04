<!DOCTYPE html>
<html>
  <head>
    <title>Laravel基礎</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
  </head>

  <body>
    <p>HELLO WORLD</p>
    <p>これはindex.blade.phpファイルです。</p>
    <p>こんにちは、{{$name}}さん</p>
    <ui>
      @foreach($languages as $language) 
        <li>{{$language}}</li>
      @endforeach
    </ui> 
  </body>
</html>