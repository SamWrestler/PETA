<section id="first" class="container">
        <article class="info">
            <h2 class="info__title">{{__('index.brand__name')}}</h2>
            <p class="info__description">{{__('index.brand__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/oil.svg" alt="">
            <h2>{{__('index.export')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{__('index.export__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/export.svg" alt="">
            <h2>{{__('index.products')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{__('index.products__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/consult.svg" alt="">
            <h2>{{__('index.consultant')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{__('index.consultant__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/nature.svg" alt="">
            <h2>{{__('index.environment')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{__('index.environment__info')}}</p>
        </article>
    </section>
