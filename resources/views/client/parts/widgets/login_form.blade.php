<form id="contact-form" method="POST" action="{{ route('auth.login') }}">
    <fieldset>
        @csrf
        <label><span class="text-form">Логин</span><input type="text" name="email" placeholder="ivanivanov@gmail.com" value="{{ old('email', '') }}"></label>
        <label><span class="text-form">Пароль</span><input type="password" name="password" value=""></label>
        <div class="clear"> </div>
        <span class="text-form">{{$errorMessage or ''}}</span>
        <div class="buttons">
            <a class="button-2" href="{{ route('auth.registration') }}">Зарегистрироваться</a>
            <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Отправить</a>
        </div>
    </fieldset>
</form>