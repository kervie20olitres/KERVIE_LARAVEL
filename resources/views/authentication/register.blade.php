@include('components.header')

<form action="{{route('register')}}"method="POST">
    <label>Name</label>
    <input type="text" name="name" placeholder="Full name">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email">
    <label>Password</label>
    <input type="password" name="password" placeholder="Password">
    <label>Retype Password</label>
    <input type="password" name="password_confirmation" placeholder="Retype password">
    <input type="submit">
</form>

@include('components.footer')
