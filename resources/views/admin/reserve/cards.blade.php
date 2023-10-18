<article class="reserve__card @if(app()->currentLocale() === 'fa') rtl__direction @else ltr__direction @endif">
    <div class="reserve__card__row">
        <h2 class="reserve__subject">{{__('admin.reserve__company__name')}}: </h2>
        <h2 class="reserve__info">پترو انرژی تجارت آسمان</h2>
    </div>
    <div class="reserve__card__row">
        <h2 class="reserve__subject">{{__('admin.reserve__company__email')}}: </h2>
        <h2 class="reserve__info">test@gmail.com</h2>
    </div>
    <div class="reserve__card__row">
        <h2 class="reserve__subject">{{__('admin.reserve__company__number')}}: </h2>
        <h2 class="reserve__info">09352214805</h2>
    </div>
    <div class="reserve__card__row__buttons">
        <button class="reserve__call green">
            <i class="fa-solid fa-phone"></i>
        </button>
        <button class="reserve__email yellow">
            <i class="fa-solid fa-envelope"></i>
        </button>
        <button class="reserve__delete red">
            <i class="fa-solid fa-trash"></i>
        </button>
    </div>
</article>
<div class="nothing">
    <i class="fa-thin fa-empty-set"></i>
    <h2>{{__('admin.no__reserve')}}</h2>
</div>
