@extends('layouts.app')
        @section('css')
        <link rel="stylesheet" href="{{ asset('/css/confirm.css')}}">
        @endsection
        @section('title')
        <title>フォーム確認画面</title>
        @endsection

        @section('content')
            <form class="form" method="post" action="{{ route('thanks',$contact)}}">
                @csrf
                <div class="form_title">
                    お問い合わせ内容確認
                </div>
                <div class="form_body">
                    <table class="form_body_table" border="1">
                        <tr><th>お名前</th><td><div class="form_body_table-td">{{ $contact['name'] }}</div></td></tr>
                        <tr><th>メールアドレス</th><td><div class="form_body_table-td">{{ $contact['email'] }}</div></td></tr>
                        <tr><th>電話番号</th><td><div class="form_body_table-td">{{ $contact['tel'] }}</div></td></tr>
                        <tr><th>お問い合わせ内容</th><td><div class="form_body_table-td">{{ $contact['content'] }}</div></td></tr>
                    </table>
                </div>
                <div class="form_button">
                    <input type="submit" valaue="送信">
                </div>
            </form>
        @endsection