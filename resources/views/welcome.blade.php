<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hola, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @livewireStyles
    @vite(['resources/css/app.scss','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
   


    <div class="container-sm">
    <livewire:agregar-tarea/>   
    <h1><hr></h1>
    <livewire:frm/>
    <h1><hr></h1>
    <livewire:table-persona/>   
    </div>
    @livewireScripts
    
</body>
</html>


