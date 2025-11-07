<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
        <title>フォーム入力ページ</title>
    
    </head>


    <body>
        <header class="header">
            <div class="header_logo">
                Contact Form            
            </div>
        </header>
        <main>
            <form class="form" method="post" action="">

                <div class="form_title">
                    お問い合わせ
                </div>
                <div class="form_body">
                    <div class="form_body_name">
                        <div class="form_body_name-tag">お名前</div>
                        <div class="form_body_name-tag-h">必須</div>
                        <input type="text" class="form_body_name-text">
                    </div>
                    <div class="form_body_email">
                        <div class="form_body_email-tag">メールアドレス</div>
                        <div class="form_body_email-tag-h">必須</div>
                        <input type="text" class="form_body_email-text">
                    </div>
                    <div class="form_body_tel">
                        <div class="form_body_tel-tag">電話番号</div>
                        <div class="form_body_tel-tag-h">必須</div>
                        <input type="text"class="form_body_tel-text">
                    </div>
                    <div class="form_body_contact">
                        <div class="form_body_contact-tag">お問い合わせ内容</div>                        
                        <textarea class="form_body_contact-text" name="" rows="8" cols="40"></textarea>                        
                    </div>
                </div>
                <div class="form_button">
                    <input type="submit" valaue="送信">
                </div>

            </form>
        </main>
        
    </body>

</html>