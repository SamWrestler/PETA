<article class="main__section">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden"></i>
        <h2>{{__('admin.footer')}}</h2>
    </div>
    <div class="main__section__content hidden @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">

        <form action="#" class="main__form">
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.company__numbers')}}
                </label>
                <div class="phone">
                    <input type="text" id="phone" value="{{Trans::translate('company_number_1')}}">
                    <i class="fa-light fa-plus" id="add__phone"></i>
                </div>
                <div class="phone">
                    <input type="text" id="phone" value="{{Trans::translate('company_number_2')}}">
                    <i class="fa-light fa-minus" id="remove__phone"></i>

                </div>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__email')}}
                </label>
                <input type="email" id="name" value="{{Trans::translate('company_email')}}">
            </div>

            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__address__title')}}
                </label>
                <textarea name="info" id="info" cols="30" rows="6">{{Trans::translate('address__info')}}</textarea>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__coordinates')}}
                </label>
                <input type="text" id="name" value="{{Trans::translate('address__coordinates')}}">
            </div>
            <button class="btn">ثبت تغییرات</button>
        </form>
    </div>
</article>
