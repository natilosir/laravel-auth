<!DOCTYPE html>
<html>
<head>
    <title>داشبورد</title>
</head>
<body>
<h1>خوش آمدید, {{ Auth::user()->name }}!</h1>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">خروج</button>
</form>
</body>
</html>
