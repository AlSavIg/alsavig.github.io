<!DOCTYPE html>
<html lang="ru en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Create</title>

    <link rel="stylesheet" href="sass_css/create.css"/>
    <link rel="stylesheet" href="sass_css/adaptive.css"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/phone_menu.js"></script>
</head>
<body>
<div class="main-flex-block">
    <?php require_once "templates/header.php"; ?>

    <main>
        <div class="header"><span>Создание нового комментария</span></div>

        <form id="create-new-comment" action="php/create_action.php" method="POST">

            <div class="mb-5 form-group w-100">
                <label for="comment-header" class="form-label">
                    Введите заголовок
                    вашего комментария - он будет отображаться
                    на гравной странице
                </label>
                <input type="text" class="form-control" id="comment-header" name="title" required>
                <small id="comment-header-help"
                       class="form-text text-muted">Заголовок должен содержать не более 40 символов</small>
            </div>

            <div class="mb-5 form-group w-100">
                <label for="comment-plain-text" class="form-label">Введите ваш комментарий</label>
                <textarea class="form-control" id="comment-plain-text" rows="4" name="text" required></textarea>
            </div>

            <button
                    type="submit"
                    class="w-50 btn btn-lg btn-outline-primary mb-5 mt-3">
                Создать
            </button>

        </form>

    </main>

    <?php require_once "templates/footer.php"; ?>
</div>
</body>
</html>
