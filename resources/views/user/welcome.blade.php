@extends('user/layouts.app')

@section('content')
    <div class="user-top">
        
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
                    <img src="/images/cat1.png">
                </div>
                <div class="col-md-4">
                    <p class="text-center">わんちゃん<br>ねこちゃんを<br>大切な家族の一員として<br>お迎えしませんか？</p>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="row">
                <div class="col-md-4">
                    <div class="top-title">ABOUT</div>
                    <p>あにまるくらすでは、<br>保護されたわんちゃんねこちゃんたちと<br>新しい家族をつなげる活動を行っています。</p>
                    <p>大切にしてくれる家族に出会えるのを、<br>みんな心待ちにしています。</p>
                    <p>どんな子がいるのか、<br>ちょっと覗いてみませんか？</p>
                </div>
                <div class="col-md-8">
                    <img src="/images/dog1.png">
                </div>
            </div>
        </section>

        <section id="dogsandcats">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-title text-center">Dogs and Cats</div>
                        <div class="text-center">
                            <p>現在、各施設でお預かりしている子たちです。</p>
                            <p>情報の更新は施設が逐一行っておりますが、<br>既に譲渡が決定してしまっている子がいる場合もありますので<br>ご了承ください。</p>
                        </div>
                    @include('user.animal.box')
                    <div class="text-right">{!! link_to_route('animals.index', 'もっと見る', [], ['class' => 'btn']) !!}</div>
                </div>
            </div>
        </section>

        <section id="reservation">
            <div class="row">
                <div class="col-md-8">
                    <img src="/images/cat2.png">
                </div>
                <div class="col-md-4">
                    <div class="top-title">Reservation</div>
                    <p>直接会ってみたい方は、<br>こちらで予約を受け付けております。</p>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="row">
                <div class="col-md-4">
                    <div class="top-title">Contact</div>
                    <p>何かご不明な点がございましたら、<br>お気軽にお問い合わせください。</p>
                    <p>フォームにてお問い合わせの際には<br>会員登録をお願いしております。</p>
                    <p>Tel.000-0000-0000</p>
                </div>
                <div class="col-md-8">
                    <img src="/images/dog2.png">
                </div>
            </div>
        </section>

        <section id="sns">
            <div class="top-title text-center">SNS</div>
                <div class="icon text-center">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-4x"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter fa-4x"></i></a>
                    <a href="https://ja-jp.facebook.com/"><i class="fab fa-facebook fa-4x"></i></a>
                </div>
        </section>
    </div>

@endsection