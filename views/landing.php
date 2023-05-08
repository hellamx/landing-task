<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>MAYBESMART &mdash; Система оптимизации</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<link rel="stylesheet" href="public/css/style.css">
	</head>
    <body>
        <div class="wrapper">
            <header class="header">
                <div class="header__logo">
                    <a class="header__logo--link" href="#">MAYBE<span>SMART</span><small>Система автоматизации</small></a>
                </div>
                <nav class="header__nav">
                    <button class="header__nav--button modal-link" data-modal="request">Оставить заявку</button>
                    <p class="header__nav--phone">+7 812 493 85 95</p>
                    <button class="header__nav--bar modal-link" data-modal="request"></button>
                </nav>
            </header>
            <main>
                <section class="history">
                    <div class="history__wrapper">
                        <h1 class="history__title">Наша история</h1>
                        <p class="history__text">Компания Умный Дом реализовала множество проектов в области автоматизации зданий, 
                            как на частных территориях (в квартирах, домах, офисах), так и в государственных учреждениях. 
                            Наши системы установлены на множестве объектов в Санкт-Петербурге, Москве, Новосибирске, где расположены наши филиалы, 
                            и в других регионах и даже странах. За свою 20-летнюю историю работ с системами безопасности и 14-летнюю историю установки Умных Домов, 
                            наши инженеры и проектировщики приобрели колоссальный опыт, помогающий в работе с объектами любой сложности и объемов.</p>
                        
                        <div class="history__socials">
                            <ul>
                                <li><a href="#"><img width="24" height="13" src="public/icons/vk-header.svg" alt="Вконтакте"></a></li>
                                <li><a href="#"><img width="21" height="15" src="public/icons/youtube-header.svg" alt="YouTube"></a></li>
                                <li><a href="#"><img width="22" height="18" src="public/icons/telegram-header.svg" alt="Telegram"></a></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="information">
                    <div class="information__item"></div>
                    <div class="information__item">
                        <div class="information__wrapper">
                            <h2 class="information__title">Умный дом</h2>
                            <ul class="information__list">
                                <li>это комфорт</li>
                                <li>безопасность</li>
                                <li>безграничные возможности</li>
                            </ul>
                            <ul class="information__statistics">
                                <li>
                                    <i class="calendar"></i>
                                    <span>2000
                                        <small>год основания компании</small>
                                    </span>
                                </li>
                                <li>
                                    <i class="houses"></i>
                                    <span>1000
                                        <small>семей пользуются нашей системой</small>
                                    </span>
                                </li>
                                <li>
                                    <i class="article"></i>
                                    <span>20
                                        <small>проектов в работе прямо сейчас</small>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="information__item"></div>
                    <div class="information__item">
                        <div class="information__wrapper">
                            <p class="information__text">
                                Мы стремимся создать максимально 
                                комфортные условия для вашего дома
                            </p>
                        </div>
                    </div>
                </section>
                <section class="contact">
                    <div class="contact__wrapper">
                        <div class="contact__note">
                            <p>Оставьте свои контакты 
                            и персональный менеджер свяжется с Вами</p>
                        </div>
                        <div class="contact__form">  
                            <form action="/request" method="post" data-form="request">
                                <div class="form_body">
                                    <div class="form_group">
                                        <input type="text" placeholder="Ваше имя" name="name">
                                        <input type="text" placeholder="Телефон" name="phone">
                                        <input type="email" placeholder="E-mail" name="email">
                                    </div>
                                    <div class="form_group">
                                        <textarea name="comment" cols="30" placeholder="Комментарий" rows="10"></textarea>
                                    </div>
                                </div>
                                <span class="success"></span>
                                <span class="error"></span>
                                <div class="form_footer">
                                    <div class="form_group form_group--checkbox">
                                        <input type="checkbox" name="checkbox" class="checkbox" id="checkbox">
                                        <label for="checkbox">Я согласен с условиями обработки персональных данных</label>
                                    </div>
                                    <div class="form_group">
                                        <input type="submit" value="Отправить">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>       
            </main>
            <footer class="footer">
                <div class="footer__logo">
                    <a href="#" class="footer__logo--link">MAYBE<span>SMART</span></a>
                </div>
                <div class="footer__wrapper">
                    <div class="footer__contacts">
                        <p class="footer__contacts--phone">+7 812 493 85 95</p>
                        <p class="footer__contacts--email">info@maybesmart.ru</p>
                        <p class="footer__contacts--address">Санкт-Петербург, Ждановская набережная, 7</p>
                        <p class="footer__contacts--personality">ИП Нагайцев Олег Александрович <small>ИНН: 470379634080</small></p>
                    </div>
                    <aside class="footer__aside">
                        <ul>
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Управление</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Порфтолио</a></li>
                            <li><a href="#">Дизайнерам</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </aside>
                    <div class="footer__social">
                        <button class="footer__social--button modal-link" data-modal="subscription">Подписаться на рассылку</button>
                        <ul class="footer__social--socials">
                            <li><a href="#"><img width="33" height="20" src="public/icons/vk.svg" alt="Вконтакте"></a></li>
                            <li><a href="#"><img width="29" height="21" src="public/icons/youtube.svg" alt="YouTube"></a></li>
                            <li><a href="#"><img width="30" height="25" src="public/icons/telegram.svg" alt="Telegram"></a></li>
                        </ul>
                        <small>мы в социальных сетях</small>
                    </div>
                </div>
            </footer>
        </div>

        <div class="modal-overlay" data-modal="subscription">
            <div class="modal-table">
                <div class="modal-table-cell">
                    <div class="modal">
                        <div class="modal__header">Подписка на рассылку</div>
                        <div class="modal__content">
                            <span class="success"></span>
                            <span class="error"></span>
                            <form action="/subscribe" method="post" data-form="subscribe">
                                <label for="email_modal">Ваш Email</label>
                                <input type="email" name="email" id="email_modal" placeholder="Ваш Email">
                                <input type="submit" value="Подписаться">
                            </form>
                        </div>
                        <button class="modal__close">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-overlay" data-modal="request">
            <div class="modal-table">
                <div class="modal-table-cell">
                    <div class="modal">
                        <div class="modal__header">Заполнение заявки</div>
                        <div class="modal__content">
                            <form action="/request" method="post" data-form="request">
                                <span class="success"></span>
                                <span class="error"></span>
                                <div class="form_group">
                                    <label for="name_modal">Ваше имя</label>
                                    <input type="text" id="name_modal" name="name" placeholder="Ваше имя">
                                </div>
                                <div class="form_group">
                                    <label for="phone_modal">Ваш телефон</label>
                                    <input type="text" id="phone_modal" name="phone" placeholder="Ваш телефон">
                                </div>
                                <div class="form_group">
                                    <label for="email_modal">Ваш Email</label>
                                    <input type="email" id="email_modal" name="email" placeholder="Ваш Email">
                                </div>
                                <div class="form_group">
                                    <label for="comment_modal">Комментарий</label>
                                    <textarea name="comment" cols="30" placeholder="Комментарий" rows="10"></textarea>
                                </div>
                                <div class="form_group">
                                    <input type="checkbox" name="checkbox" class="checkbox" id="checkbox_modal">
                                    <label class="modal_checkbox" for="checkbox_modal">Я согласен с условиями обработки персональных данных</label>
                                </div>
                                <input type="submit" value="Отправить">
                            </form>
                        </div>
                        <button class="modal__close">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="public/js/jquery-3.6.3.min.js"></script>
        <script src="public/js/main.js"></script>
    </body>
</html>