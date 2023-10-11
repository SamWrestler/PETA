<footer class="container @if(app()->currentLocale()==='en') ltr__direction @else rtl__direction @endif">
    <div class="footer__row">
        <h2 class="footer__row__title">
            {{__('index.address')}}:
        </h2>
        <p class="footer__row__description">{{__('index.address__info')}}
        </p>
        <a href="https://www.google.com/maps?q=35.800550497322085,51.404982452020015" target="_blank" class="location"><img class="img" src="/images/location.png" alt="Location"></a>
    </div>
    <div class="area">
        <div class="footer__row">
            <h2 class="footer__row__title">
                {{__('index.phone__number')}}:
            </h2>
            <div class="numbers">
                <p class="footer__row__description">
                    <a href="tel:02122181013">۰۲۱ - ۲۲۱۸۱۰۱۳
                    </a>
                </p>
                <p class="footer__row__description">
                    <a href="tel:02122181014">۰۲۱ - ۲۲۱۸۱۰۱۴
                    </a>
                </p>
            </div>
        </div>
        <div class="footer__row">
            <h2 class="footer__row__title">
                {{__('index.co__email')}}:
            </h2>
            <a href="mailto:Peta@clickmarines.com" class="footer__row__description" id="email__link">
                <i class="fa-solid fa-up-right-from-square"></i>
                <p>Peta@clickmarines.com</p>
            </a>
        </div>
    </div>
</footer>
