<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

use DB;

class CommonDataComposer
{
    public $general = [];

    public function __construct()
    {
        $this->general = DB::table('general')->first();
    }

    public function compose(View $view)
    {
        $view->with('general',$this->general);
    }
}
