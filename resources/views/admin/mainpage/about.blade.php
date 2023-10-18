<article class="main__section">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden hidden"></i>
        <h2>{{__('admin.company__info')}}</h2>
    </div>
    <div class="main__section__content hidden @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">

        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.title')}}
                </label>
                <input type="text" id="name" value="{{Trans::translate('brand__name')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.text')}}
                </label>
                <textarea name="info" id="info" cols="30" rows="10">{{Trans::translate('brand__info')}}</textarea>
            </div>
            <button class="btn">{{__('admin.save__changes')}}</button>
        </form>
    </div>
</article>
