<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/sanitize.css')}}">
        <title>フォーム入力ページ</title>
    
    </head>


    <body>
        <header class="header">
            <div class="header_logo">
                Contact Form            
            </div>
        </header>
        <main>
            <form class="form" method="post" action="/contacts/confirm">
                @csrf
                <div class="form_title">
                    お問い合わせ
                </div>
                <div class="form_body">
                    <div class="form_body_name">
                        <div class="form_body_name-tag">お名前</div>
                        <div class="form_body_name-h">必須</div>
                       
                        <input type="text" class="form_body_name-text" name="name" value="{{old('name')}}">
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
                        <input type="text" class="form_body_email-text" name="email" value="{{old('email')}}">
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
                        <input type="text"class="form_body_tel-text" name="tel" value="{{old('tel')}}">
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
                        <textarea class="form_body_contact-text" name="content" rows="8" cols="40" value="{{old('content')}}"></textarea>                        
                    </div>
                </div>
                <div class="form_button">
                    <input type="submit" valaue="送信">
                </div>

            </form>
        </main>
        
    </body>

</html>