<div class="inner">
    <div class="main">
        <section id="content">
            <div class="indent">
                <div class="wrapper">
                    <article class="col-1">
                        <div class="indent-left">
                            <h3>Ваш рецепт</h3>
                            <div class="p3">
                                <form id="contact-form" method="POST" action="/feedback"">
                                <fieldset>
                                    @csrf
                                    <label><span class="text-form">Название блюда</span><input type="text" name="Title" value=" "></label>
                                        <div class="wrapper">
                                            <div class="text-form">Рецепт</div>
                                            <div class="extra-wrap">
                                                <textarea></textarea>
                                                <div class="clear"></div>
                                                <div class="buttons">
                                                    <a class="button-2" href="#" onClick="document.getElementById('contact-form').reset()">Стереть</a>
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