<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Список постов</h1>
<ul>
    <li>
        <a href="{{route('post.show', ['slug' => 1])}}">Post 1</a>
        <a href="{{route('post.edit', ['slug' => 1])}}">Edit</a>
        <form action="{{ route('post.destroy', ['slug' => 1]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    <li>
        <a href="{{route('post.show', ['slug' => 2])}}">Post 2</a>
        <a href="{{route('post.edit', ['slug' => 2])}}">Edit</a>
        <form action="{{ route('post.destroy', ['slug' => 2]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    <li>
        <a href="{{route('post.show', ['slug' => 3])}}">Post 3</a>
        <a href="{{route('post.edit', ['slug' => 3])}}">Edit</a>
        <form action="{{ route('post.destroy', ['slug' => 3]) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
</ul>

</body>
</html>
