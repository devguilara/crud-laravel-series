<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} - Controle de Séries</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div>   
                <nav class="navbar navbar-light bg-dark">
                    <div class="navbar-nav px-4">
                        <a class="nav-item nav-link" style="color: #ffffff" href="{{route('series.index')}}">Home</a>
                    </div>        
                               
                </nav> 
                <hr style="color:#ffffff; margin: 0rem 0 !important"/>
                <div class="text-center bg-dark p-2">
                    <h1  class="px-4 " style="color: #ffffff">{{$title}}</h1></span>
               </div>
    </div>
   
    
    @isset($mensagemSucesso)
    <div class="alert alert-success" role="alert">
        {{$mensagemSucesso}}
    </div>
    @endisset

<div class="container  m-5">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    {{ $slot }}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>