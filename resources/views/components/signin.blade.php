<form action="{{ $action }}" method="POST">
    @csrf
    <input type="text" name="username" placeholder="username" />
    <input type="password" name="password"placeholder="password"/>
    <input type="submit" value="Sign In" />
</form>