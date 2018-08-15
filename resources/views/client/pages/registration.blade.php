<div class="inner">
    <div class="main">
        <section id="content">
            <div class="indent">
                <div class="wrapper">
                <article class="col-1">
                    <div class="indent-left">
                        <h3>Регистрация</h3>
                        <div class="p3">
                            <form id="contact-form" method="POST" action="{{ route('auth.registration') }}">
                                <fieldset>
                                    @csrf
                                    <label><span class="text-form">Имя</span><input type="text" name="name" placeholder="Иван Иванов" value="{{ old('name', '') }}"></label>
                                    <label><span class="text-form">Никнейм</span><input type="text" name="nickname" placeholder="IvanIvan" value="{{ old('nickname', '') }}"></label>
                                    <label><span class="text-form">Логин</span><input type="text" name="login" placeholder="ivanivanov@gmail.com" value="{{ old('login', '') }}"></label>
                                    <label><span class="text-form">E-mail</span><input type="text" name="email" placeholder="ivanivanov@gmail.com" value="{{ old('email', '') }}"></label>
                                    <label><span class="text-form">Пароль</span><input type="password" name="password" value=""></label>
                                    <label><span class="text-form">Повторите Пароль</span><input type="password" name="password2" value=""></label>
                                    <div class="wrapper">
                                        <div class="text-form">О себе:</div>
                                        <div class="extra-wrap">
                                            <textarea type="text" name="about" placeholder="Расскажите о себе" value="{{ old('about', '') }}"></textarea>
                                            <div class="clear"></div>
                                    <span class="text-form">
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                                        @endif
                                    </span>
                                            <div class="buttons">
                                                <a class="button-2" href="#" onClick="document.getElementById('contact-form').submit()">Отправить</a>
                                            </div>
                                    </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </article>
                </div>
            </div>
        </section>
        <div class="block"></div>
    </div>
</div>
