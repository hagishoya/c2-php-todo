<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <title>{{ $todo->title }} | TODO App</title>
</head>
<body>

@section('content')
    <div class="container">
        <div class="col-md-10">
            <h2 class="text-muted py-3">{{ $todo->title }} の編集</h2>
            <form action="/todo" method="POST">
                @include('parts.todo.input')
                <button class="btn btn-primary" type="submit">更新</button>
            </form>
            <hr>
            @include('parts.button.back')
        </div>
    </div>
@endsection 