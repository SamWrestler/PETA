<header id="header" class="container">
        <article class="brand">
            <div class="language lang-mobile">
                @if(app()->currentLocale() === 'fa')
                    <a href="{{route('changeLang' , 'en')}}">
                        <i class="fa-solid fa-language" id="lang"></i>
                        <h2>English</h2>
                    </a>
                @else
                    <a href="{{route('changeLang' , 'fa')}}">
                        <i class="fa-solid fa-language" id="lang"></i>
                        <h2>فارسی</h2>
                    </a>
                @endif
            </div>
            <img src="/images/Peta Logo Enhanced.png" alt="PETA - logo" class="brand__logo">
            <h1 class="brand__title">{{Trans::translate('brand__name')}}</h1>
            <p class="brand__description">{{Trans::translate('brand__slogan')}}</p>
            <button class="btn">{{Trans::translate('counseling__session')}}</button>
        </article>
    <div class="language lang-desktop">
        @if(app()->currentLocale() === 'fa')
            <a href="{{route('changeLang' , 'en')}}">
                <i class="fa-solid fa-language" id="lang"></i>
                <h2>English</h2>
            </a>
        @else
        <a href="{{route('changeLang' , 'fa')}}">
            <i class="fa-solid fa-language" id="lang"></i>
            <h2>فارسی</h2>
        </a>
        @endif
    </div>
    <article class="info @if(app()->currentLocale() ==='en') ltr__direction @else rtl__direction @endif">
            <h2 class="info__title">{{Trans::translate("brand__name")}}</h2>
            <p class="info__description">{{Trans::translate("brand__info")}}</p>
            <button class="btn">{{Trans::translate("counseling__session")}}</button>


    </article>
    </header>
