<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    
    <h1>タスク一覧</h1>
    <ul style="list-style: none;">
        @foreach ($tasks as $task)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></li>
        @endforeach
    </ul>
    <hr>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>新規論文投稿</h1>
    <form action="/tasks" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">内容</label>
            <textarea name="body" >{{ old('body') }}</textarea>
        </p>

        <input type="submit" value="create task" onclick="location.href='/tasks'">
        

        
</body>

</html>
