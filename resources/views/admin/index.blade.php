<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/iransans.css">
    <link rel="stylesheet" href="/css/rubik.css">
    <link rel="stylesheet" href="/Fonts/FontAwesome/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js" defer></script>
    <script src="/js/app.js" defer></script>
    <title>پنل مدیریت</title>
</head>
<body>
<header class="container" id="admin__header">
    <div class="header__top">
        <h2>پنل مدیریت</h2>
    </div>
    <nav class="header__topNavigation">
        <div class="nav__item" id="reserve__tab">
            <i class="fa-regular fa-list-dropdown"></i>
            <h2>رزرو ها</h2>
        </div>
        <div class="nav__item" id="mainpage__tab">
            <i class="fa-solid fa-pen-to-square"></i>
            <h2>صفحه اصلی</h2>
        </div>
    </nav>
</header>
<div class="sections__container">
    <section id="main" class="container hidden">
        @include('admin.mainpage.title')
        <div class="main__section__container">
            @include('admin.mainpage.header')
            @include('admin.mainpage.promo')
            @include('admin.mainpage.reserve')
            @include('admin.mainpage.footer')
        </div>
    </section>
    <section id="reserve" class="container">
        @include('admin.reserve.title')
        @include('admin.reserve.cards')
    </section>
</div>
</body>
</html>
