<?php

use Illuminate\Database\Seeder;
use App\Models\AppSettings;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AppSettings::create(['option_key' => 'app_name', 'option_value' => 'LaraOL']);
        AppSettings::create(['option_key' => 'app_language', 'option_value' => 'en']);
        AppSettings::create(['option_key' => 'app_date_format', 'option_value' => 'm/d/Y']);
        AppSettings::create(['option_key' => 'app_timezone', 'option_value' => 'Asia/Dhaka']);
        AppSettings::create(['option_key' => 'app_currency', 'option_value' => 'BDT']);
        AppSettings::create(['option_key' => 'invoice_prefix', 'option_value' => 'OL-']);
        AppSettings::create(['option_key' => 'invoice_length', 'option_value' => '6']);
        AppSettings::create(['option_key' => 'address', 'option_value' => 'Your Company Address']);
        AppSettings::create(['option_key' => 'vat_reg_no', 'option_value' => 'VAT-123 456 789']);
        AppSettings::create(['option_key' => 'phone', 'option_value' => '0123 456 789']);
        AppSettings::create(['option_key' => 'app_logo', 'option_value' => 'images/logo.png']);
    }
}
