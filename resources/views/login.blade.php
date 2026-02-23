<form method="POST" action="/login">
    @csrf
    <input type="hidden" name="redirect_url" value="{{ request('redirect_url') }}">
    
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    
    <button type="submit">Login</button>
</form>