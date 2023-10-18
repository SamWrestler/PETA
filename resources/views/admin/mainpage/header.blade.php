<article class="main__section">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden"></i>
        <h2>{{__('admin.logo__info')}}</h2>
    </div>
    <div class="main__section__content hidden @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
        <div class="notice__container">
            <ul  class="">
                <li>{{__('admin.suggest1')}}</li>
                <li>{{__('admin.suggest2')}}</li>
            </ul>
        </div>
        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.company__name')}}
                </label>
                <input type="text" id="name" class="" value="{{Trans::translate('brand__name')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__slogan')}}
                </label>
                <input type="text" id="name" class="" value="{{Trans::translate('brand__slogan')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__logo')}}
                </label>
                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">

            </div>
            <img src="" alt="" width="121px" height="90px">
            <button class="btn">{{__('admin.save__changes')}}</button>
        </form>
    </div>
</article>
