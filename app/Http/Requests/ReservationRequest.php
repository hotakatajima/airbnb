<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

class ReservationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $now = new Carbon('today', 'Asia/Tokyo');

        return [
            'checkin' => ['required','date','after:'.$now],
            'checkout' => ['required','date','after:'.$now,'after_or_equal:checkin'],
        ];
    }

    public function messages()
    {
        return [
            'checkin.after'  => '現在より未来の日付を入力ください',
            'checkout.after'  => '現在より未来の日付を入力ください',
            'checkout.after_or_equal'  => 'Check OutはCheck Inよりも後の日付をご記入ください',
            'checkin.date'  => '日付をご記入ください',
            'checkout.date'  => '日付をご記入ください',
        ];
    }
}
