<div class="main__title @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
    <div class="title__row">
        <h2>{{__('admin.reserve__title')}}</h2>
        <div class="language">
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
    </div>
    <hr>
</div>
