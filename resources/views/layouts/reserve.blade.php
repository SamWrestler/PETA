<section id="second" class="container">
    <form action="#" method="#" class="form container" >
        <h2 class="form__title">{{__('index.counseling__session')}}</h2>
        <div class="form__input">
            <label for="email">
                {{__('index.email')}}
            </label>
            <input type="email" id="email" class="form__email @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif" placeholder="test@gmail.com">
            <i class="fa-solid fa-at"></i>
        </div>
        <div class="form__input">
            <label for="number">
                {{__('index.number')}}
            </label>
            <input type="text" id="number" class="form__number @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif" placeholder="0912999999">
            <i class="fa-solid fa-phone"></i>
        </div>
        <button class="btn form__btn">{{__('index.register')}}</button>
        <h2 class="form__notice">{{__('index.contact__you')}}</h2>
    </form>
</section>
