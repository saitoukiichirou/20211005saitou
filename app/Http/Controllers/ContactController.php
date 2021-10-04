<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); //入力画面の表示
    }

    public function posted()//まだ未定義
    {

    }

    public function create(Request $request)
    {
        $param = [
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'email' => $request->email,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'buillding_name' => $request->buillding_name,
            'potions' => $request->options
        ];
        DB::table('contacts')-> insert($param);//まだ作成中
        return redirect('confirm');//まだ作成前
    }


    public function getContact()//一覧（10件ずつ表示取得）表示画面
    {
        $items = Contact::Paginate(10);

        return view('search', ['items' => $items]);
    }

    public function find()
    {
        return view('find', ['input' => '']);
    }

    public function search(Request $request)//検索抽出画面
    {
//        $item = Contact::where('email', 'LIKE',"%{$request->input_email}%")->get();
//        if($item = null){


        $item = Contact::where([
            ['fullname', 'LIKE',"%{$request->input_name}%"],
            ['gender', "{$request->input_gender}"]
            ])->get();

        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', compact($param));

    }

    public function remove(Request $request)//指定したid番号で削除する
    {
        Contact::find($request->id)->delete();
        return redirect('/search');
    }
}
