<div class="app-sidebar">
    <div class="logo">
        <a href="{{ route('admin.index') }}" class="logo-icon"><span class="logo-text">Admin</span></a>
    </div>
    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Case Study
            </li>
            <li class="{{ Route::is('admin.index') ? 'open' : '' }}">
                <a href="{{ route('admin.index') }}">
                    <i class="material-icons-two-tone">dashboard</i>
                    Dashboard
                </a>
            </li>
            <li class="{{ Route::is('author.index') || Route::is('author.create') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="">
                    <i class="material-icons">
                        edit
                    </i> Authors
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{ route('author.create') }}" class="{{ Route::is('author.create') ? 'active' : '' }}">
                            Create Author
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('author.index') }}"
                            class="{{ Route::is('author.index') ? 'active' : '' }}">Author List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::is('publisher.index') || Route::is('publisher.create') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="">
                    <i class="material-icons">tune</i>
                    Publisher
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{ route('publisher.create') }}"
                            class="{{ Route::is('publisher.create') ? 'active' : '' }}">
                            Create publisher
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('publisher.index') }}"
                            class="{{ Route::is('publisher.index') ? 'active' : '' }}">Publisher
                            List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::is('book.index') || Route::is('book.create') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="">
                    <i class="material-icons">book</i>
                    Books
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{ route('book.create') }}" class="{{ Route::is('book.create') ? 'active' : '' }}">
                            Create Book
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('book.index') }}" class="{{ Route::is('book.index') ? 'active' : '' }}">Book
                            List
                        </a>
                    </li>
                </ul>
            </li>
            <li class="{{ Route::is('user.index') || Route::is('user.create') ? 'open' : '' }}">
                <a href="javascript:void(0)" class="">
                    <i class="material-icons">person</i>
                    Users
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>
                <ul class="sub-menu" style="">
                    <li>
                        <a href="{{ route('user.create') }}" class="{{ Route::is('user.create') ? 'active' : '' }}">
                            Create User
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.index') }}" class="{{ Route::is('user.index') ? 'active' : '' }}">User
                            List
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0)" class=""
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="material-icons">logout</i>
                    Logout
                </a>
                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
