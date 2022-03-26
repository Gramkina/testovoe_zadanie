<div class="header">
    <div class="page-name">
        ПРОДУКТЫ
    </div>
    <div class="user">
        @guest()
            <a href="{{ route('login', ['id' => 2]) }}">Войти как пользователь</a>
            <br>
            <a href="{{ route('login', ['id' => 1]) }}">Войти как администратор</a>
        @endguest
        @auth()
            {{ \Illuminate\Support\Facades\Auth::user()->name }}
            <br>
            <a href="{{ route('logout') }}">Нажмите здесь чтобы выйти</a>
        @endauth
    </div>
</div>
