$(function () {
    let comments_button = $(".button-comments-click")
    let table_button = $(".button-table-click")

    table_button.on("click",
        function (event) {
            event.preventDefault();
            window.location.href = "table.php";
        }
    );

    comments_button.on("click",
        function (event) {
            event.preventDefault();
            window.location.href = "list.php";
        }
    );
});