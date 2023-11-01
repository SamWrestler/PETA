<article class="main__section ">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden"></i>
        <h2>{{__('admin.commercial')}}</h2>
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
        <div class="notice__container">
            <ul>
                <li>{{__('admin.suggest3')}}</li>
            </ul>
        </div>
        <form action="{{route('changeRed')}}" method="POST" class="main__form">
            @csrf
            @method('PATCH')
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" class="red @error('red__title') error_box @enderror" name="red__title" value="{{Trans::translate('export')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea class="red @error('red__text') error_box @enderror" id="info" name="red__text" cols="30" rows="10">{{Trans::translate('export__info')}}</textarea>
            </div>
{{--            <div class="main__form__input">--}}
{{--                <label for="peta__banner">--}}
{{--                    {{__('admin.commer__image')}}--}}
{{--                </label>--}}
{{--                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">--}}

{{--            </div>--}}
{{--            <img src="" alt="" width="121px" height="90px">--}}
            <button class="btn">{{__('admin.save__changes')}}</button>
            <hr>
        </form>
        <form action="{{route('changeOrange')}}" method="POST" class="main__form">
            @csrf
            @method('PATCH')
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" name="orange__title" class="orange @error('orange__title') error_box @enderror" value="{{Trans::translate('products')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea class="orange @error('orange__text') error_box @enderror" id="info" cols="30" name="orange__text" rows="10">{{Trans::translate('products__info')}}</textarea>
            </div>
{{--            <div class="main__form__input">--}}
{{--                <label for="peta__banner">--}}
{{--                    {{__('admin.commer__image')}}--}}
{{--                </label>--}}
{{--                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">--}}

{{--            </div>--}}
{{--            <img src="" alt="" width="121px" height="90px">--}}
            <button class="btn">{{__('admin.save__changes')}}</button>
            <hr>
        </form>
        <form action="{{route('changeYellow')}}" method="POST" class="main__form">
            @csrf
            @method('PATCH')
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" name="yellow__title" class="yellow @error('yellow__title') error_box @enderror" value="{{Trans::translate('consultant')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea class="yellow @error('yellow__text') error_box @enderror" id="info" name="yellow__text" cols="30" rows="10">{{Trans::translate('consultant__info')}}</textarea>
            </div>
{{--            <div class="main__form__input">--}}
{{--                <label for="peta__banner">--}}
{{--                    {{__('admin.commer__image')}}--}}
{{--                </label>--}}
{{--                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">--}}

{{--            </div>--}}
{{--            <img src="" alt="" width="121px" height="90px">--}}
            <button class="btn">{{__('admin.save__changes')}}</button>
            <hr>
        </form>
        <form action="{{route('changeGreen')}}" method="POST" class="main__form">
            @csrf
            @method('PATCH')
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.commer__title')}}
                </label>
                <input type="text" id="name" name="green__title" class="green @error('green__title') error_box @enderror" value="{{Trans::translate('environment')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.commer__text')}}
                </label>
                <textarea class="green @error('green__text') error_box @enderror" id="info" name="green__text" cols="30" rows="10">{{Trans::translate('environment__info')}}</textarea>
            </div>
{{--            <div class="main__form__input">--}}
{{--                <label for="peta__banner">--}}
{{--                    {{__('admin.commer__image')}}--}}
{{--                </label>--}}
{{--                <input type="file" id="name" accept="image/JPEG" accpet="image/png" value="شعار شرکت">--}}

{{--            </div>--}}
{{--            <img src="" alt="" width="121px" height="90px">--}}
            <button class="btn">{{__('admin.save__changes')}}</button>

        </form>
    </div>
</article>
