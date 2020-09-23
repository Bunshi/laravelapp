<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999; }
    h1 { font-size:50pt; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
    </style>
</head>
<body>
    @extends('layouts.helloapp')

    @section('title', 'Inddex')

    @section('menubar')
        @parent
        インテックスページ
    @endsection

    @section('content')
        <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
            </tr>
        @endforeach
        </table>
    @endsection
</body>
</html>
