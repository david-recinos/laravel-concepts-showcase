<!DOCTYPE html>
<html>
<body>
<form method="POST" action="/demo-form">
    @csrf
    <input type="text" name="name" placeholder="Your name" />
    <button type="submit">Submit</button>
</form>
</body>
</html>
