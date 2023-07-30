<!DOCTYPE html>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<form method="POST" action="/main">
    @csrf
    <div class="card pb-4" style="width:auto; height:auto;">
        <div class="card p-5" style="width: 500px">
            <div><h1>блюда</h1>
                @foreach($dishes as $dish)
                {{ $dish->блюдо}}
                @endforeach
            </div>
            <div>часто заказывают</div>
            <div>напитки</div>
            <div>комбо</div>
            <div>реквезиты</div>
        </div>
    </div>
</form>

</body>
</html>