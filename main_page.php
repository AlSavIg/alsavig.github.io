<!DOCTYPE html>
<html lang="ru en">
	<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Labs</title>
        <link rel="stylesheet" href="sass_css/main_page.css" />
        <link rel="stylesheet" href="sass_css/adaptive.css" />

        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="js/phone_menu.js"></script>
        <script src="js/buttons.js"></script>
    </head>
    <body>
        <div class="main-flex-block">
            <?php require_once "templates/header.php"; ?>

            <main>
                <div class="main-board">
                    <div class="text-container">
                        <h1>Страховая программа <br>
                            <span>ЗАЩИТА +</span></h1>
                        <p>Одна из самых удобных и выгодных страховых программ <br>
                            предоставляемых грожанам России и иностранным <br>
                            гражданам.</p>
                        <button class="button-buy" type="button">Купить</button>
                    </div>
                    <div class="svg-container">
                        <object type="image/svg+xml" data="img/main-board-picture.svg"></object>
                    </div>
                </div>
                <div class="about-insurance">
                    <div class="header"><span>О страховании</span></div>
                    <ul class="elems-list">
                        <li class="item_1">
                            <object type="image/svg+xml" data="img/icons/hours.svg"></object>
                            <span>обращения к доктору 24/7</span>
                        </li>
                        <li class="item_2">
                            <object type="image/svg+xml" data="img/icons/calendar.svg"></object>
                            <span>обращения к врачам-специалистам</span>
                        </li>
                        <li class="item_3">
                            <object type="image/svg+xml" data="img/icons/ensurer.svg"></object>
                            <span>защита от несчастного случая + медицинский онлайн-сервис</span>
                        </li>
                        <li class="item_4">
                            <object type="image/svg+xml" data="img/icons/microscope.svg"></object>
                            <span>лабораторные исследования</span>
                        </li>
                        <li class="item_5">
                            <object type="image/svg+xml" data="img/icons/butterfly.svg"></object>
                            <span>упрощенная система страхования</span>
                        </li>
                    </ul>
                </div>
                <div class="conditions-wall">
                    <div class="header"><span>Условия которые мы предоставим Вам</span></div>
                    <ul class="elems-list">
                        <li class="item_1">
                                <div class="svg-container">
                                    <object type="image/svg+xml" data="img/wall/doctors.svg"></object>
                                </div>
                                <div class="text-container">
                                    <span>20+</span>
                                    <p>
                                        Высококвалифицированных <br>
                                        врачей к которым вы можете <br>
                                        обращаться 24/7
                                    </p>
                                </div>
                        </li>
                        <li class="item_2">
                                <div class="svg-container">
                                    <object type="image/svg+xml" data="img/wall/smartphone.svg"></object>
                                </div>
                                <div class="text-container">
                                    <div class="best-doctor">
                                        <object type="image/svg+xml" data="img/best-doctor.svg"></object>
                                        <span>BestDoctor</span>
                                    </div>
                                    <p>
                                        Доступ в один из лучших <br>
                                        медицинских сервисов в России
                                    </p>
                                </div>
                        </li>
                        <li class="item_3">
                                <div class="svg-container">
                                    <object type="image/svg+xml" data="img/wall/runner.svg"></object>
                                </div>
                                <div class="text-container">
                                    <span>600 000₽</span>
                                    <p>
                                        Сумма страховой защиты от <br>
                                        несчастного случая
                                    </p>
                                </div>
                        </li>
                    </ul>
                </div>
                <div class="roadmap">
                    <div class="header">
                        Что делать, если произошел <br>
                        страховой случай?
                    </div>
                    <div class="flex-wrap-container">
                        <ul class="elems-list">
                            <li class="item-1">
                                <div class="obj-wrapper">
                                    <object data="img/roadmap/phonecall.svg" type="image/svg+xml"></object>
                                </div>
                                <p>Позвоните нам</p>
                            </li>
                            <li class="item-2">
                                <div class="obj-wrapper">
                                    <object data="img/roadmap/docs.svg" type="image/svg+xml"></object>
                                </div>
                                <p>Заполните <br> заявление</p>
                            </li>
                            <li class="item-3">
                                <div class="obj-wrapper">
                                    <object data="img/roadmap/status.svg" type="image/svg+xml"></object>
                                </div>
                                <p>Узнайте статус <br> решения вопроса</p>
                            </li>
                            <li class="item-4">
                                <div class="obj-wrapper">
                                    <object data="img/roadmap/archive.svg" type="image/svg+xml"></object>
                                </div>
                                <p>Полный архив <br>
                                    всех условий</p>
                            </li>
                        </ul>
                    </div>
                    <div class="tips">
                        <div class="tips-container-1">
                            <p class="plain-text">Заполните заявление и
                                подготовьте необходимые документы.</p>
                            <p class="plain-text">Направьте документы в Страховую компанию
                                удобным для Вас способом:</p>
                            <ul>
                                <li>через <a href="#">Личный кабинет</a></li>
                                <li>письмом по адресу: 125252, г. Москва, а/я 28</li>
                            </ul>
                        </div>
                        <div class="tips-container-2">
                            <p class="plain-text">Список необходимых документов
                                для заключения договора:</p>
                            <ul>
                                <li>паспорт</li>
                                <li>заявление на страхование</li>
                                <li>иные документы – по запросу компании</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="comments-container">
                    <div class="header">
                        Посмотреть данные из таблицы
                    </div>
                    <button
                            class="button-table button-table-click"
                            type="button">
                        К ЛР №3
                    </button>
                </div>

                <div class="comments-container">
                    <div class="header">
                        Посмотреть, что думают про нас <br>
                        наши клиенты
                    </div>
                    <button
                            class="button-comments button-comments-click"
                            type="button">
                        К ЛР №4
                    </button>
                </div>
            </main>

            <?php require_once "templates/footer.php"; ?>
        </div>
    </body>
</html>
