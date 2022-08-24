<a href="/">Inicio </a>

@auth
    <a href="/dashboard">Dashboard</a>

    <form action="/logout" method="POST" style="display: inline;">

        @csrf

        <a  href="#"
            onclick="this.closest('form').submit()"
        >Logout</a>

    </form>
@else
    <a href="/login">Login</a>
@endauth
