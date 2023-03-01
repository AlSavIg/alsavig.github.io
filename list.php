<!DOCTYPE html>
<html lang="ru en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List</title>

    <link rel="stylesheet" href="sass_css/list.css" />
    <link rel="stylesheet" href="sass_css/adaptive.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="js/phone_menu.js"></script>
</head>
<body>
<div class="main-flex-block">
    <?php require_once "templates/header.php"; ?>

    <main>
        <div class="header"><span>Комментарии</span></div>
        <div class="d-flex flex-wrap">
            <?php $xml = simplexml_load_file("data/comments.xml");?>

            <?php foreach ($xml as $comment): ?>
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <a href="index.php?id=<?php echo $comment->attributes()["id"]?>">
                            <h4 class="my-0 fw-normal">
                                <?php echo $comment->attributes()["id"]?>
                            </h4>
                        </a>
                    </div>

                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">
                            <?php echo $comment -> title?>
                        </h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>
                                <div>
                                    <?php echo $comment -> text?>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="timestamp">
                        <?php echo $comment -> time?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
        <button
                type="button"
                class="w-50 btn btn-lg btn-outline-primary mb-5 mt-3"
                onclick="location.href='create.php';">
            Создать
        </button>
    </main>

    <?php require_once "templates/footer.php"; ?>
</div>
</body>
</html>
