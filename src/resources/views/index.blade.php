@extends('layouts.app')
        @section('css')
        <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
        @endsection
        @section('title')
        <title>フォーム入力ページ</title>
        @endsection

        @section('content')
            <form class="form" method="post" action="/contacts/confirm">
                @csrf
                <div class="form_title">
                    お問い合わせ
                </div>
                <div class="form_body">
                    <div class="form_body_name">
                        <div class="form_body_name-tag">お名前</div>
                        <div class="form_body_name-h">必須</div>
                       
                        <input type="text" class="form_body_name-text" name="name" placeholder="テスト太郎" value="{{old('name')}}">
                    </div> 
                    <div class="form_body_error">
                        <div class="form_body_error-message">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>            
                    </div>
                         
                            
                    <div class="form_body_email">
                        <div class="form_body_email-tag">メールアドレス</div>
                        <div class="form_body_email-h">必須</div>
                        <input type="text" class="form_body_email-text" name="email" placeholder="test@example.com" value="{{old('email')}}">
                    </div>
                    <div class="form_body_error">
                        <div class="form_body_error-message">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>            
                    </div>
                    <div class="form_body_tel">
                        <div class="form_body_tel-tag">電話番号</div>
                        <div class="form_body_tel-h">必須</div>
                        <input type="text"class="form_body_tel-text" name="tel" placeholder="90909090909" value="{{old('tel')}}">
                    </div>
                    <div class="form_body_error">
                        <div class="form_body_error-message">
                            @error('tel')
                                {{ $message }}
                            @enderror
                        </div>            
                    </div>
                    <div class="form_body_contact">
                        <div class="form_body_contact-tag">お問い合わせ内容</div>                        
                        <textarea class="form_body_contact-text" name="content" rows="8" cols="40" placeholder="資料を頂きたいです" value="{{old('content')}}"></textarea>                        
                    </div>
                </div>
                <div class="form_button">
                    <input type="submit" valaue="送信">
                </div>

            </form>
        @endsection
