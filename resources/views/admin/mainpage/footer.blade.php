<article class="main__section">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden"></i>
        <h2>{{__('admin.footer')}}</h2>
    </div>
    <div class="main__section__content hidden @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
        @if($errors->any())
            <div class="notice__container error">
                <ul  class="">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('changeFooter')}}" method="POST" class="main__form">
            @csrf
            @method('PATCH')
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.company__numbers')}}
                </label>
                <div class="phone">
                    <input type="text" name="number1" id="phone" class="@error('number1') error_box @enderror" value="{{Trans::translate('company_number_1')}}">
                </div>
                <div class="phone">
                    <input type="text" name="number2" id="phone" class="@error('number2') error_box @enderror" value="{{Trans::translate('company_number_2')}}">
                </div>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__email')}}
                </label>
                <input type="email" id="name" class="@error('email') error_box @enderror" name="email" value="{{Trans::translate('company_email')}}">
            </div>

            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__address__title')}}
                </label>
                <textarea id="info" cols="30" class="@error('address') error_box @enderror" name="address" rows="6">{{Trans::translate('address__info')}}</textarea>
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.company__coordinates')}}
                </label>
                <input type="text" id="name" name="coordinates" class="@error('coordinates') error_box @enderror" value="{{Trans::translate('address__coordinates')}}">
            </div>
            <button class="btn">ثبت تغییرات</button>
        </form>
    </div>
</article>
