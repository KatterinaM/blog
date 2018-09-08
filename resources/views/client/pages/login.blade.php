<div class="inner">
    <div class="main">
        <section id="content">
            <div class="indent">
                <div class="wrapper">
                    <article class="col-1">
                        <div class="indent-left">
                            <h3>Войти</h3>
                            <div class="p3">
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
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <div class="block"></div>
    </div>
</div>


