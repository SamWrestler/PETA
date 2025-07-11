<footer class="container @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">
    <div class="footer__row container">
        <h2 class="footer__row__title">
            {{Trans::translate('address')}}:
        </h2>
        <p class="footer__row__description">{{Trans::translate('address__info')}}
        </p>
        <a href="{{Trans::translate('address__coordinates')}}" target="_blank" class="location"><img class="img" src="/images/location.png" alt="Location"></a>
    </div>
    <div class="area container">
        <div class="footer__row">
            <h2 class="footer__row__title">
                {{Trans::translate('phone__number')}}:
            </h2>
            <div class="numbers">
                <p class="footer__row__description">
                    <a href="tel:02122181013">@if(app()->currentLocale()==='en') 021 @else ۰۲۱ @endif - {{Trans::translate('company_number_1')}}
                    </a>
                </p>
                <p class="footer__row__description">
                    <a href="tel:02122181014">@if(app()->currentLocale()==='en') 021 @else ۰۲۱ @endif - {{Trans::translate('company_number_2')}}
                    </a>
                </p>
            </div>
        </div>
        <div class="footer__row">
            <h2 class="footer__row__title">
                {{Trans::translate('co__email')}}:
            </h2>
            <a href="mailto:{{Trans::translate('company_number_2')}}" class="footer__row__description" id="email__link">
                <i class="fa-solid fa-up-right-from-square"></i>
                <p>{{Trans::translate('company_email')}}</p>
            </a>
        </div>
    </div>
</footer>
