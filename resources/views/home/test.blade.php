<!DOCTYPE html>
<html>
<head>
    <title>Test Page Title</title>
</head>
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

<form action="/save" method="post">
    @csrf
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <input type="submit" value="Save">
</form>
</body>
</html>
