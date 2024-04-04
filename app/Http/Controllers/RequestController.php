<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{   
    public function create() {
      return view('requests.create');
    }
    
    public function confirm(Request $request) {
        //HTTPリクエストに含まれる、単一のパラメータの値を取得する
        $user_name = $request->input('user_name');
        $user_email = $request->input('user_email');
        $user_gender = $request->input('user_gender');
        $category = $request->input('category');
        $message = $request->input('message');

        //HTTPリクエストメゾットの取得
        $method = $request->method();

        //HTTPリクエストのパスを取得する
        $path = $request->path();

        //HTTPリクエストのURLの取得
        $url = $request->url();

        //HTTPリクエストを送信したクライアントのIPアドレスの取得
        $ip = $request->ip();

        $variables = [
            'user_name',
            'user_email',
            'user_gender',
            'category',
            'message',
            'method',
            'path',
            'url',
            'ip'
        ];

        return view('requests.confirm', compact($variables));
    }
}
