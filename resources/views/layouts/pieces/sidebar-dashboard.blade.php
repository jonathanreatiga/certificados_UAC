<div class="sidebar" data-color="green" style="position: fixed"> {{-- data-image="{{ asset('img/sidebar-1.jpg') }}" --}}
    <!-- data-color="purple | blue | green | orange | red" -->

    <div class="logo">
        <a class="simple-text"> {{-- href=" " --}}
            {{ auth()->user()->name }}
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="">  {{--  <li class="active"> --}}
                  <a href="{{ route('cursos.index') }}">   {{--  <a href="{{ route('articles.index') }}">  --}}
                    <i class="material-icons">assignment</i>
                    <p>Cursos</p>
                </a>
            </li>
            <li>
                <a href="{{ route('plantillas.index') }}">
                    <i class="material-icons">person</i>
                    <p>Plantillas</p>
                </a>
            </li>
            <li>
                <a href="{{ route('roles.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>Roles de Matriculas</p>
                </a>
            </li>
            <li>
                <a href="{{ route('estados.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Estados de Matriculas</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">bubble_chart</i>
                    <p>---------</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">location_on</i>
                    <p>---------</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons text-gray">notifications</i>
                    <p>---------</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="{{ route('users.index') }}">
                    <i class="material-icons">unarchive</i>
                    <p>Usuarios</p>
                </a>
            </li>
        </ul>
    </div>
</div>