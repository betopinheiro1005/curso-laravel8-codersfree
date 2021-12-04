<header>
    <h1>Coders Free</h1>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            </li>
            <li>
                <a href="{{route('about')}}" class="{{request()->routeIs('about') ? 'active' : ''}}">Sobre</a>
            </li>
            <li>
                <a href="{{route('contact.index')}}" class="{{request()->routeIs('contact.index') ? 'active' : ''}}">Contato</a>
            </li>

        </ul>
    </nav>
</header>
