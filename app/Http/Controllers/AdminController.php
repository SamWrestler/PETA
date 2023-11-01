<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use App\Models\Translate;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $data = Translate::all();
        $reserves = Reserve::all();
        return view('admin.index', [
            'data' => $data,
            'reserves' => $reserves
            ]);
    }

    public function changeHeader(Request $request)
    {
        $validated_data = $this->validate($request, [
            'brand__name' => ['string' , 'required'],
            'brand__slogan' => ['string' , 'required']
        ]);

        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'brand__name')->where('lang' , 'fa')->first()->update(['text' => $validated_data['brand__name']]);
            Translate::where('content' , 'brand__slogan')->where('lang' , 'fa')->first()->update(['text' => $validated_data['brand__slogan']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'brand__name')->where('lang' , 'en')->first()->update(['text' => $validated_data['brand__name']]);
            Translate::where('content' , 'brand__slogan')->where('lang' , 'en')->first()->update(['text' => $validated_data['brand__slogan']]);
            return redirect()->back();
        }
    }

    public function changeAbout(Request $request)
    {

        $validated_data = $this->validate($request, [
            'brand__name' => ['string' , 'required'],
            'brand__info' => ['string' , 'required']
        ]);


        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'brand__name')->where('lang' , 'fa')->first()->update(['text' => $validated_data['brand__name']]);
            Translate::where('content' , 'brand__info')->where('lang' , 'fa')->first()->update(['text' => $validated_data['brand__info']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'brand__name')->where('lang' , 'en')->first()->update(['text' => $validated_data['brand__name']]);
            Translate::where('content' , 'brand__info')->where('lang' , 'en')->first()->update(['text' => $validated_data['brand__info']]);
            return redirect()->back();
        }
    }

    public function changeRed(Request $request)
    {
        $validated_data = $this->validate($request, [
            'red__title' => ['string' , 'required'],
            'red__text' => ['string' , 'required']
        ]);

        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'export')->where('lang' , 'fa')->first()->update(['text' => $validated_data['red__title']]);
            Translate::where('content' , 'export__info')->where('lang' , 'fa')->first()->update(['text' => $validated_data['red__text']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'export')->where('lang' , 'en')->first()->update(['text' => $validated_data['red__title']]);
            Translate::where('content' , 'export__info')->where('lang' , 'en')->first()->update(['text' => $validated_data['red__text']]);
            return redirect()->back();
        }

    }
    public function changeOrange(Request $request)
    {
        $validated_data = $this->validate($request, [
            'orange__title' => ['string' , 'required'],
            'orange__text' => ['string' , 'required']
        ]);

        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'products')->where('lang' , 'fa')->first()->update(['text' => $validated_data['orange__title']]);
            Translate::where('content' , 'products__info')->where('lang' , 'fa')->first()->update(['text' => $validated_data['orange__text']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'products')->where('lang' , 'en')->first()->update(['text' => $validated_data['orange__title']]);
            Translate::where('content' , 'products__info')->where('lang' , 'en')->first()->update(['text' => $validated_data['orange__text']]);
            return redirect()->back();
        }

    }
    public function changeYellow(Request $request)
    {
        $validated_data = $this->validate($request, [
            'yellow__title' => ['string' , 'required'],
            'yellow__text' => ['string' , 'required']
        ]);

        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'consultant')->where('lang' , 'fa')->first()->update(['text' => $validated_data['yellow__title']]);
            Translate::where('content' , 'consultant__info')->where('lang' , 'fa')->first()->update(['text' => $validated_data['yellow__text']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'consultant')->where('lang' , 'en')->first()->update(['text' => $validated_data['yellow__title']]);
            Translate::where('content' , 'consultant__info')->where('lang' , 'en')->first()->update(['text' => $validated_data['yellow__text']]);
            return redirect()->back();
        }

    }
    public function changeGreen(Request $request)
    {
        $validated_data = $this->validate($request, [
            'green__title' => ['string' , 'required'],
            'green__text' => ['string' , 'required']
        ]);

        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'environment')->where('lang' , 'fa')->first()->update(['text' => $validated_data['green__title']]);
            Translate::where('content' , 'environment__info')->where('lang' , 'fa')->first()->update(['text' => $validated_data['green__text']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'environment')->where('lang' , 'en')->first()->update(['text' => $validated_data['green__title']]);
            Translate::where('content' , 'environment__info')->where('lang' , 'en')->first()->update(['text' => $validated_data['green__text']]);
            return redirect()->back();
        }

    }

    public function changeFooter(Request $request)
    {
        $validated_data = $this->validate($request, [
            'number1' => ['string', 'required'],
            'number2' => ['string', 'required'],
            'email' => ['string' , 'required'],
            'address' => ['string' , 'required'],
            'coordinates' => ['string' , 'required']
        ]);
        if(app()->currentLocale() === 'fa'){
            Translate::where('content' , 'company_number_1')->where('lang' , 'fa')->first()->update(['text' => $validated_data['number1']]);
            Translate::where('content' , 'company_number_2')->where('lang' , 'fa')->first()->update(['text' => $validated_data['number2']]);
            Translate::where('content' , 'company_email')->where('lang' , 'fa')->first()->update(['text' => $validated_data['email']]);
            Translate::where('content' , 'address__info')->where('lang' , 'fa')->first()->update(['text' => $validated_data['address']]);
            Translate::where('content' , 'address__coordinates')->where('lang' , 'fa')->first()->update(['text' => $validated_data['coordinates']]);
            return redirect()->back();
        }else{
            Translate::where('content' , 'company_number_1')->where('lang' , 'en')->first()->update(['text' => $validated_data['number1']]);
            Translate::where('content' , 'company_number_2')->where('lang' , 'en')->first()->update(['text' => $validated_data['number2']]);
            Translate::where('content' , 'company_email')->where('lang' , 'en')->first()->update(['text' => $validated_data['email']]);
            Translate::where('content' , 'address__info')->where('lang' , 'en')->first()->update(['text' => $validated_data['address']]);
            Translate::where('content' , 'address__coordinates')->where('lang' , 'en')->first()->update(['text' => $validated_data['coordinates']]);
            return redirect()->back();
        }
    }


}
