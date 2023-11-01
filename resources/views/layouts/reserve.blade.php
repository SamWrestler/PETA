<section id="second" class="container">

    <form action="{{route('reserve')}}" method="POST" class="form container" >
        @if($errors->any())
            <div class="notice__container error  @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
                <ul  class="">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @csrf
        <h2 class="form__title">{{Trans::translate('counseling__session')}}</h2>
            <div class="form__input">
                <label for="co_name">
                    {{__('admin.co_name')}}
                </label>
                <input type="text" id="co_name" name="co_name" class="form__number @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif" placeholder="Your Company Name">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="form__input">
            <label for="email">
                {{ __('admin.email') }}
            </label>
            <input type="email" id="email" name="email" class="form__email @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif" placeholder="test@gmail.com">
            <i class="fa-solid fa-at"></i>
        </div>
        <div class="form__input">
            <label for="number">
                {{__('admin.number')}}
            </label>
            <input type="text" id="number" name="number" class="form__number @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif" placeholder="0912999999">
            <i class="fa-solid fa-phone"></i>
        </div>
        <button class="btn form__btn">{{Trans::translate('register')}}</button>
        <h2 class="form__notice">{{Trans::translate('contact__you')}}</h2>
    </form>
</section>
