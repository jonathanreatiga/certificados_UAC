<div class="sidebar" data-color="green" data-image="{{ asset('img/sidebar-1.jpg') }}" style="position: fixed">
    <!-- data-color="purple | blue | green | orange | red" -->

    <div class="logo">
        <a href="#" class="simple-text">
            {{ auth()->user()->name }}
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="{{ route('homecurso') }}">
                    <i class="material-icons">assignment</i>
                    <p>Cursos</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">person</i>
                    <p>---------</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">content_paste</i>
                    <p>---------</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">library_books</i>
                    <p>---------</p>
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
                <a href="#">
                    <i class="material-icons">unarchive</i>
                    <p>---------</p>
                </a>
            </li>
        </ul>
    </div>
</div>