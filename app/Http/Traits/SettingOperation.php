<?php

namespace App\Http\Traits;


use App\Setting;
use Illuminate\Http\Request;

trait SettingOperation
{

    /**
     * Update Existing Setting
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function RegisterSetting(Request $request)
    {
        $data = $request->all();
        foreach ($data as $key => $value) {
            if ($key == '_token' || !$value) continue;
            {
                Setting::where(['name' => $key])->update(['ar_value' => $value[0], 'en_value' => (isset($value[1])) ? $value[1] : $value[0]]);
            }

        }
    }

}