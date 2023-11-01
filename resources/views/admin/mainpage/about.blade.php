<article class="main__section">
    <div class="main__section__title">
        <i class="fa-light fa-plus"></i>
        <i class="fa-light fa-minus hidden hidden"></i>
        <h2>{{__('admin.company__info')}}</h2>
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
        <form action="{{route('changeAbout')}}" class="main__form " method="POST">
            @csrf
            @method('PATCH')
            <div class="main__form__input">
                <label for="peta">
                    {{__('admin.title')}}
                </label>
                <input type="text" id="name" name="brand__name" class="@error('brand__name') error_box @enderror" value="{{Trans::translate('brand__name')}}">
            </div>
            <div class="main__form__input">
                <label for="peta__banner">
                    {{__('admin.text')}}
                </label>
                <textarea  id="info" name="brand__info" class="@error('brand__info') error_box @enderror" cols="30" rows="10">{{Trans::translate('brand__info')}}</textarea>
            </div>
            <button class="btn">{{__('admin.save__changes')}}</button>
        </form>
    </div>
</article>
