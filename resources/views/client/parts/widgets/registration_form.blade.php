<form id="contact-form" method="POST" action="{{ route('auth.registration') }}">
    <fieldset>
        @csrf
        <label><span class="text-form">Имя/Ник</span><input type="text" name="name" placeholder="IvanIvan" value="{{ old('name', '') }}"></label>
        <div class="alert alert-danger">
            @foreach ($errors->get('name') as $error)
                {{ $error }}
            @endforeach
        </div>
        <label><span class="text-form">E-mail</span><input type="text" name="email" placeholder="ivanivanov@gmail.com" value="{{ old('email', '') }}"></label>
        <div class="alert alert-danger">
            @foreach ($errors->get('email') as $error)
                {{ $error }}
            @endforeach
        </div>
        <label><span class="text-form">Телефон</span><input type="text" name="phone" placeholder="+7(999)-999-99-99" value="{{ old('phone', '') }}"></label>
        <div class="alert alert-danger">
            @foreach ($errors->get('phone') as $error)
                {{ $error }}
            @endforeach
        </div>
        <label><span class="text-form">Логин</span><input type="text" name="login" placeholder="ivanivanov@gmail.com" value="{{ old('login', '') }}"></label>
        <div class="alert alert-danger">
            @foreach ($errors->get('login') as $error)
                {{ $error }}
            @endforeach
        </div>
        <label><span class="text-form">Пароль</span><input type="password" name="password" value=""></label>
        <div class="alert alert-danger">
            @foreach ($errors->get('password') as $error)
                {{ $error }}
            @endforeach
        </div>
        <label><span class="text-form">Повторите Пароль</span><input type="password" name="password2" value=""></label>
        <div class="alert alert-danger">
            @foreach ($errors->get('password2') as $error)
                {{ $error }}
            @endforeach
        </div>
        <div class="wrapper">
            <div class="text-form">О себе:</div>
            <div class="extra-wrap">
                <textarea type="text" name="about" placeholder="Расскажите о себе" value="{{ old('about', '') }}"></textarea>
                <div class="alert alert-danger">
                    @foreach ($errors->get('about') as $error)
                        {{ $error }}
                    @endforeach
                </div>
                <div class="clear"></div>
                <div class="buttons">
                    <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Отправить</a>
                </div>
            </div>
        </div>
    </fieldset>
</form>