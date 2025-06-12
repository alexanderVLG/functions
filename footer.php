<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Куки</title>
</head>
<body>
    <footer>

    </footer>


    <!-- cookies -->
    <div class="window_kuki">
    <div class="inner_kuki">
        <p>Продолжая использовать наш сайт, вы даете согласие на обработку файлов cookie и соглашаетесь с <a href="/privacy-policy/" target="_blank">политикой конфиденциальности</a> и <a href="/soglasie-na-obrabotku-personalnyh-dannyh/" target="_blank">обработкой персональных данных</a></p>
        <button class="btn_kuki button">Хорошо</button>
    </div>
    </div>

    <script>
    // Функция установки cookie
    function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days*24*60*60*1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Функция получения cookie
    function getCookie(name) {
    const cname = name + "=";
    const decodedCookie = decodeURIComponent(document.cookie);
    const ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i].trim();
        if (c.indexOf(cname) === 0) {
        return c.substring(cname.length, c.length);
        }
    }
    return "";
    }

    // Основная логика
    document.addEventListener("DOMContentLoaded", function () {
    const cookieName = "cookieConsent";
    const cookieWindow = document.querySelector(".window_kuki");
    const cookieButton = document.querySelector(".btn_kuki");

    if (!getCookie(cookieName)) {
        cookieWindow.style.display = "block";
    } else {
        cookieWindow.style.display = "none";
    }

    cookieButton.addEventListener("click", function () {
        setCookie(cookieName, "accepted", 30);
        cookieWindow.style.display = "none";
    });
    });
    </script>
</body>
</html>