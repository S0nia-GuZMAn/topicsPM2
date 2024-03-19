<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<h1>Register</h1>
<form action="/register" method="post">
@csrf
<div>
    <label for="">Name</label>
    <input type="text" name="name">
</div>
<div>
    <label for="">Password</label>
    <input type="text" name="password">
</div>
<div>
    <label for="">Email</label>
    <input type="text" name="email">
</div>
<div>
    <label for="">Birthday</label>
    <input type="date" name="birthday">
</div>
<button type="submit">Send</button>
</form>

</div>
