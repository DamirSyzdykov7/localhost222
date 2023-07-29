<!DOCTYPE html>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>
    <h2>РЕГИСТРАЦИЯ</h2>
    <form method="POST" action="/login">
        @csrf
        <label for="login">Логин:</label>
        <input type="text" name="login" required><br>
        
        <label for="password">Пароль:</label>
        <input type="password" name="password" required><br>
        
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>
