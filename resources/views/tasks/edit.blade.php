<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auction edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
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

    <h1>投稿タスク編集</h1>
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        <!-- formタグはPUTやDELETEをサポートしていないため、@ methodで指定する必要がある -->
        @method('PATCH')
        <!-- idはそのまま -->
        <input type="hidden" name="id" value="{{ $task->id }}">
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title', $task->title) }}">
        </p>
        <p>
            <label for="body">内容</label>
            <input type="text" name="body" value="{{ old('body', $task->body) }}">
        </p>
        <input type="submit" value="更新">
        <input type="submit" value="詳細に戻る">

    </form>
</body>

</html>
