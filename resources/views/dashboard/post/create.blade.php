<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Post</title>
</head>
<body>
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <h1>create post </h1>
        <label for=""> Titulo </label> 
        <input type="text" name="title" > 

        <label for=""> Slug </label> 
        <input type="text" name="slug" >

        <label for=""> Contenido </label> 
        <textarea name="content" > </textarea >

        <label for="">Descripcion</label> 
        <textarea name="description" ></textarea >

        
<Button type="submit">Enviar</Button>
    </form>
</body>
</html>