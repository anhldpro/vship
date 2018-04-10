<?php
/**
 * Created by PhpStorm.
 * User: Mr Lee
 * Date: 4/11/2018
 * Time: 12:02 AM
 */

namespace App\Http\Controllers;


use Log;

class WelcomeController extends Controller
{
    public function index()
    {
        //Tạo mảng và gán giá trị
        $lists = array(
            'Laravel 5',
            'PHP',
            'Framework'
        );
        Log::debug($lists); //Sử dụng hàm debug để hiển thị giá trị trong file log
        return view('welcome'); //Trả về view 'welcome'
    }
}