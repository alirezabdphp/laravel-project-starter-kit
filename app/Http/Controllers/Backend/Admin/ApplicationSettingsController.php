<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\App;
use Toastr;

class ApplicationSettingsController extends Controller
{
    /**
     * Redirect to application blade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function appSetting()
    {
        return view('backend.admin.settings.app-settings');
    }


    /**
     * Save Applications Settings
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateApplicationSetting(Request $request)
    {
        Artisan::call('config:cache');

        $inputs = Arr::except($request->all(), ['_token']);
        $keys = [];

        foreach ($inputs as $k => $v) {
            $keys[$k] = $k;
        }

        foreach ($inputs as $key => $value) {
            $option = AppSettings::firstOrCreate(['option_key' => $key]);
            if($request->hasFile('app_logo') && $key == 'app_logo'){
                $option->option_value = $request->app_logo->move('uploads/app-settings/', Str::random(20) . '.' . $request->app_logo->extension());
                $option->save();
            }elseif($request->hasFile('app_fav_icon') && $key == 'app_fav_icon'){
                $option->option_value = $request->app_fav_icon->move('uploads/app-settings/', Str::random(20) . '.' . $request->app_fav_icon->extension());
                $option->save();
            }else {
                $option->option_value = $value;
                $option->save();
            }
        }

        /**  ====== update .end file ====== */
        $key = "APP_TIMEZONE";
        $newValue = $request->app_timezone;
        $oldValue = env($key);
        if ($oldValue != $newValue) {
            $path = base_path('.env');
            if (file_exists($path)) {
                file_put_contents(
                    $path, str_replace(
                        $key.'='.$oldValue,
                        $key.'='.$newValue,
                        file_get_contents($path)
                    )
                );
            }
        }


        $key = "APP_NAME";
        $newValue = str_replace(' ', '-', $request->app_name);
        $oldValue = env($key);
        if ($oldValue != $newValue) {
            $path = base_path('.env');
            if (file_exists($path)) {
                file_put_contents(
                    $path, str_replace(
                        $key.'='.$oldValue,
                        $key.'='.$newValue,
                        file_get_contents($path)
                    )
                );
            }
        }


        Artisan::call('config:cache');
        return redirect()->back()->with('message', 'Successfully Saved', 200);
    }


    public function emailSetting(){
        return view('backend.admin.settings.email-settings');
    }

    public function updateEmailSetting(Request  $request){
        Artisan::call('config:cache');

        $inputs = Arr::except($request->all(), ['_token']);
        $keys = [];

        foreach ($inputs as $k => $v) {
            $keys[$k] = $k;
        }


        foreach ($inputs as $key => $value) {
            $option = AppSettings::firstOrCreate(['option_key' => $key]);
            $option->option_value = $value;
            $option->save();

            $oldValue = env($key);
            $newValue = str_replace(' ', '', $value);

            $path = base_path('.env');
            if (file_exists($path)) {
                file_put_contents(
                    $path, str_replace($key.'='.$oldValue, $key.'='.$newValue, file_get_contents($path))
                );
            }
        }

        Artisan::call('config:cache');

        Toastr::success('Email Settings successfully updated', '', ['progressBar' => true, 'closeButton' => true, 'positionClass' => 'toast-bottom-right']);
        return redirect()->back();
    }
}
