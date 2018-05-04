<?php
/**
 * Created by PhpStorm.
 * User: MI
 * Date: 2018/4/21
 * Time: 16:07
 */

namespace App\Http\Controllers;


class InfoController extends Controller
{
    public function index(){
        phpinfo();
    }
}