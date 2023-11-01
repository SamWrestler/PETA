<section id="first" class="container @if(app()->currentLocale() ==='en') ltr__direction @else rtl__direction @endif">
        <article class="info container">
            <h2 class="info__title">{{Trans::translate('brand__name')}}</h2>
            <p class="info__description">{{Trans::translate('brand__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/oil.svg" alt="">
            <h2>{{Trans::translate('export')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{Trans::translate('export__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/export.svg" alt="">
            <h2>{{Trans::translate('products')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{Trans::translate('products__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/consult.svg" alt="">
            <h2>{{Trans::translate('consultant')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{Trans::translate('consultant__info')}}</p>
        </article>
        <article class="promo">
            <img src="/images/svgs/nature.svg" alt="">
            <h2>{{Trans::translate('environment')}}</h2>
            <p class="@if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">{{Trans::translate('environment__info')}}</p>
        </article>
    </section>
