@extends('user/layouts.app')

@section('content')
    <div class="user-top">
        <div class="text-center">
            <a href="/">Animal Class</a>
        </div>
        
            <ul id="page-link">
            <li><a href="#top">TOP</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#dogsandcats">Dogs and Cats</a></li>
            <li><a href="#reservation">RESERVATION</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li><a href="#sns">SNS</a></li>
        </ul>
                
        <section id="top">
            <div class="row">
                <div class="col-md-8">
                    <img src="/images/cat1.jpg">
                </div>
                <div class="col-md-4">
                    <p>わんちゃん<br>ねこちゃんを<br>大切な家族の一員として<br>お迎えしませんか？</p>
                </div>
            </div>
        </section>
                
        <section id="about">
            <div class="row">
                <div class="col-md-4">
                    <h2>ABOUT</h2>
                    <p>あにまるくらすでは、<br>わんちゃんねこちゃんの<br>新しい家族を募集しています。</p>
                    <p>みんな、血統書付きの動物ではないけれど、<br>幸せになりたくて産まれてきました。</p>
                    <p>どんな子がいるのか、<br>ちょっと覗いてみませんか？</p>
                    <p>【注意】コメントをしたり、<br>お気に入り登録をしたりするには<br>ユーザー登録が必要です。</p>
                </div>
                <div class="col-md-8">
                    <img src="/images/cat1.jpg">
                </div>
            </div>
        </section>
                
        <section id="dogsandcats">
            <h2 class="text-center">Dogs and Cats</h2>
                <div class="text-center">
                    <p>現在、施設でお預かりしている子たちです。</p>
                    <p>情報の更新は施設が逐一行っておりますが、<br>既に譲渡が決定してしまっている子がいる場合もありますので<br>ご了承ください。</p>
                </div>
                <div class="animal-index">
                    animal photos
                </div>
        </section>
                
        <section id="reservation">
            <div class="row">
                <div class="col-md-8">
                    <img src="/images/cat1.jpg">
                </div>
                <div class="col-md-4">
                    <h2>Reservation</h2>
                    <p>直接会ってみたい方は、<br>こちらで予約を受け付けております。</p>
                </div>
            </div>
        </section>
                
        <section id="contact">
            <div class="row">
                <div class="col-md-4">
                    <h2>Contact</h2>
                    <p>何かご不明な点がございましたら、<br>お気軽にお問い合わせください。</p>
                    <p>フォームにてお問い合わせの際には<br>会員登録をお願いしております。</p>
                    <p>Tel.000-0000-0000</p>
                </div>
                <div class="col-md-8">
                    <img src="/images/cat1.jpg">
                </div>
            </div>
        </section>
                
        <section id="sns">
            <h2 class="text-center">SNS</h2>
        </section>
    </div>


@endsection