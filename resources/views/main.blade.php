<!DOCTYPE html>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<form method="POST" action="/main">
    @csrf
    <div class="card pb-4" style="width:auto; height:900px;">
        <p class="text-center">ЗАВЕДЕНИЯ</p>
        <div class="card mt-4" style="display: grid; grid-template-columns: repeat(3, 1fr); grid-auto-rows: 200px;">
            <div style="border-radius: 7px; border: 2px solid #f76707;">Burger King</div>
            <div style="border-radius: 7px; border: 2px solid #f76707;">Yakudza</div>
            <div style="border-radius: 7px; border: 2px solid #f76707;">Hudson</div>
            <div style="border-radius: 7px; border: 2px solid #f76707;">Izmir</div>
            <div style="border-radius: 7px; border: 2px solid #f76707;">Discovery Coffee</div>
            <div style="border-radius: 7px; border: 2px solid #f76707;">Dodo Pizza</div>
        </div>
    </div>
</form>

</body>
</html>
