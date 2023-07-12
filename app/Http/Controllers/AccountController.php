<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AccountController extends Controller
{

        /**
        * ログイン画面に移動する関数
        *
        * @param Request $request

        */
        public function login(){
            return view('account.login');   

    }  
      

    public function list(){

        //アカウント一覧、データベースに入っているものをすべて取り出して表示する関数。
        $username = User::find(session("id"))->name;
        $user = User::all();
        return view('account.list',)->with([
            'users' => $user,
            'name' => $username,
        ]);
    }    
    
    /**
        * アカウント登録の画面に移動する関数
        *
        * @param Request $request
        */
        public function toroku(){
             return view('account.register');   

        }

       

        // アカウント登録の関数 バリデーションでメールとパスワードにはconfirmedを入れている

        public function UserRegister(Request $request)
        {               
            $this->validate($request, [
                'name' => 'required|max:255',
                'nick_name' => 'required|max:100',
                'email' => 'required|min:5|confirmed|email|unique:users',
                'password' => 'required|max:255|confirmed|',
            ]);
        // dd($request);    
            // アカウント作成
            User::create([
                'name' => $request->name,
                'nick_name' => $request->nick_name,
                'email' => $request->email,
                //パスワードを暗号化してデータベースに保存
                'password' => password_hash($request->password, PASSWORD_DEFAULT),
            ]);
     
            return redirect('/');
        }
        
        //アカウントを編集するための画面にIDで紐づけて表示させる関数

        public function edit(Request $request){
            $user = User::where('id', '=',$request->id)->first();
            return view('account.edit')->with([
                'user' => $user,
                // 'name' => $request->name,
                // 'nick_name' => $request->nick_name,
                // 'email' => $request->email,
                // 'password' => $request->password, 
            ]);   
       }

       // アカウントを編集して登録する関数
       public function AccountEdit(Request $request)
        {             
            User::where('id', '=',$request->id)->update([
                    'name' => $request->name,
                    'nick_name' => $request->nick_name,
                    // 'email' => $request->email,
                    'password' => $request->password,
                ]);
            return redirect('/');
            }

        /**
            * アカウントを削除する関数
            *
            * @param Request $request
            */
        public function AccountDestroy(Request $request)
        {   $user = User::where('id', '=',$request->id)->delete();
            return redirect('/');
        }

// ログアウトする画面に遷移する関数        
        public function logout(){
            return view('account.logout'); 
        }  

 // アカウントをログインしてセッションをつけてホーム画面に遷移する関数

        public function loginAuth(Request $request)
        {
           // メールアドレスとパスワードのバリデーション
           $this->validate($request, [
            'password' => 'required|max:255',
            'email' => 'required|min:5',
           ]);

        //    dd($request);
        //    exit;

           // メールアドレスを参照にusersテーブルからデータを取得
           $email = $request->email;
           $password = $request->password;

           

           if (!User::where('email', "=", $email)->exists()) {
            return redirect("/")->with("message", "ログインに失敗しました。");
           }


           $user = User::where( 'email', '=', $email )->first();
           
           // 取得したレコードのパスワードとフォームから取得したパスワードが一致しているか確認
           // password_verifyを使う
           if (!password_verify($password, $user->password) ) {
            return redirect("/")->with("message", "ログインに失敗しました。");
           }

           session([
            "id" => $user->id,
            "is_admin" => $user->is_admin, 
           ]);

           // ログインが成功したら「/home」へリダイレクト
              return redirect("/home");
        //    return redirect("/")->with("imessage", "ログインに成功しました。");

        }

        // アカウントをログアウトしてセッションを外してホーム画面に遷移する関数
        public function logoutAuth(Request $request)
        
        {
            session()->forget(['id','is_admin']);
    
               // ログアウトが成功したら「/（ログイン画面）」へリダイレクト
                  return redirect("/");
        }



}