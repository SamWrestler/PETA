@if(empty($reserves->first()))
<div class="nothing">
    <i class="fa-thin fa-empty-set"></i>
    <h2>{{__('admin.no__reserve')}}</h2>
</div>
@else
    <div class="cards__container">
        @foreach($reserves as $reserve)
            <article class="reserve__card @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
                <div class="reserve__card__row">
                    <h2 class="reserve__subject">{{__('admin.reserve__company__name')}}: </h2>
                    <h2 class="reserve__info">{{$reserve->co_name}}</h2>
                </div>
                <div class="reserve__card__row">
                    <h2 class="reserve__subject">{{__('admin.reserve__company__email')}}: </h2>
                    <h2 class="reserve__info">{{$reserve->email}}</h2>
                </div>
                <div class="reserve__card__row">
                    <h2 class="reserve__subject">{{__('admin.reserve__company__number')}}: </h2>
                    <h2 class="reserve__info">{{$reserve->number}}</h2>
                </div>
                <div class="reserve__card__row__buttons">
                    <a href="tel:{{$reserve->number}}" class="reserve__action reserve__call green">
                        <i class="fa-solid fa-phone"></i>
                    </a>
                    <a href="mailto:{{$reserve->email}}" class="reserve__action reserve__email yellow">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                    <form action="{{route('delete', $reserve->id)}}" id="deleteForm" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" reserve__delete red">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>

                </div>
            </article>
        @endforeach
    </div>

@endif
