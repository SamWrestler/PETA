<article class="main__section ">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden"></i>
        <h2>{{__('admin.commercial')}}</h2>
    </div>
    <div class="main__section__content hidden @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
        <div class="notice__container">
            <ul>
                <li>{{__('admin.suggest3')}}</li>
            </ul>
        </div>
        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" class="red" value="{{Trans::translate('export')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea name="info " class="red" id="info" cols="30" rows="10">{{Trans::translate('export__info')}}</textarea>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__image')}}
                </label>
                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">

            </div>
            <img src="" alt="" width="121px" height="90px">
            <button class="btn">{{__('admin.save__changes')}}</button>
            <hr>
        </form>
        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" class="orange" value="{{Trans::translate('products')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea name="info " class="orange" id="info" cols="30" rows="10">{{Trans::translate('products__info')}}</textarea>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__image')}}
                </label>
                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">

            </div>
            <img src="" alt="" width="121px" height="90px">
            <button class="btn">{{__('admin.save__changes')}}</button>
            <hr>
        </form>
        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" class="yellow" value="{{Trans::translate('consultant')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea name="info " class="yellow" id="info" cols="30" rows="10">{{Trans::translate('consultant__info')}}</textarea>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__image')}}
                </label>
                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">

            </div>
            <img src="" alt="" width="121px" height="90px">
            <button class="btn">{{__('admin.save__changes')}}</button>
            <hr>
        </form>
        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" class="green" value="{{Trans::translate('environment')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea name="info " class="green" id="info" cols="30" rows="10">{{Trans::translate('environment__info')}}</textarea>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__image')}}
                </label>
                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">

            </div>
            <img src="" alt="" width="121px" height="90px">
            <button class="btn">{{__('admin.save__changes')}}</button>

        </form>
    </div>
</article>
