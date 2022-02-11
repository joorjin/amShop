<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {

        $writer = new Writer;
        $writer->status = 'active';
        $writer->first_name = 'علی';
        $writer->last_name = 'مجد یزدی';
        $writer->email = 'mz.am.busines@gmail.com';
        $writer->email_confirm = NULL;
        $writer->password = md5(12345678);
        $writer->phone = Null;
        $writer->telegram_id = 'test';
        $writer->telegram_number_id = 125489365;
        $writer->telegram_confirm = Null;
        $writer->confirmation_manager_id = 5;
        $writer->starterd_at = now();
        $writer->latest_activists_at = now();
        $writer->deleted_at = Null;
        $writer->save();
    }
}

