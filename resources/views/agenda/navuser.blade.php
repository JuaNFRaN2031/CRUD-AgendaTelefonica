<nav class="navbar navbar-light">
    <a href="{{ route('agenda.index') }}" class="navbar-brand"><img id="icono" class="img-responsive"
            src="https://cdn.icon-icons.com/icons2/403/PNG/512/phonebook_40497.png" style="width: 70px;"></a>

    <ul class="nav flex-column text-center">
        <li class="nav-item">
            <span class="nav-link active">Bienvenido {{ Auth::user()->name }}</span>
        </li>
        <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Cerrar sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>

</nav>
