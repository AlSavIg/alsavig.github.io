<!DOCTYPE html>
<html lang="ru en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comments</title>
    <link rel="stylesheet" href="sass_css/table.css" />
    <link rel="stylesheet" href="sass_css/adaptive.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/phone_menu.js"></script>
    <script src="js/events_handlers.js"></script>
</head>
    <body>
        <div class="main-flex-block">
            <?php require_once "templates/header.php"; ?>

            <main>
                <div class="header"><span>Таблица</span></div>

<!--                Place for the table-->

                <div class="buttons-wrapper">
                    <button class="my-button-style create" type="submit">Создать&nbsp;таблицу</button>
                    <button class="my-button-style add" type="submit">Добавить&nbsp;строку</button>
                    <form id="delete">
                        <button class="my-button-style" type="reset">Удалить&nbsp;строку</button>
                        <div class="mb-5">
                            <label for="row_number" class="form-label">Введите номер удаляемой строки</label>
                            <input type="text" class="form-control" id="row_number">
                        </div>
                    </form>
                </div>
            </main>

            <?php require_once "templates/footer.php"; ?>
        </div>
    </body>
</html>
