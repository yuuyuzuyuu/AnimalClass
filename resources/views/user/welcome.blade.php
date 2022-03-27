@extends('layouts.app')

@section('content')
    <div class="user-top">

        <ul id="page-link">
            <li class="current"><a href="#top"><span>HOME</span><span>ホーム</span></a></li>
            <li><a href="#about"><span>ABOUT</span><span>私たちについて</span></a></li>
            <li><a href="#dogsandcats"><span>ANIMALS</span><span>わんにゃん</span></a></li>
            <li><a href="#reservation"><span>RESERVATION</span><span>予約</span></a></li>
            <li><a href="#contact"><span>CONTACT</span><span>お問い合わせ</span></a></li>
            <li><a href="#sns"><span>SNS</span><span>SNS</span></a></li>
        </ul>

        <section id="top">
            <div class="top-comment">
                <div class="top-comment-left">
                    <p>動物保護施設と新しい家族を</p>
                    <p>新しい絆で結ぶお手伝い。</p>
                </div>
                <div class="top-comment-right">
                    <p>すべてのわんちゃん・ねこちゃんが</p>
                    <p>幸せな生活が送れますように<i class="fas fa-paw"></i></p>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="top-title">ABOUT</div>
            <p>あにまるくらすでは、<br>保護されたわんちゃんねこちゃんたちと<br>新しい家族をつなげる活動を行っています。</p>
            <p>大切にしてくれる家族に出会えるのを、<br>みんな心待ちにしています。</p>
            <p>どんな子がいるのか、<br>ちょっと覗いてみませんか？</p>
        </section>

        <section id="dogsandcats">
            <div class="top-title">Dogs and Cats</div>
                <p>現在、各施設でお預かりしている子たちです。</p>
                <p>情報の更新は施設が逐一行っておりますが、<br>既に譲渡が決定してしまっている子がいる場合もありますので<br>ご了承ください。</p>
                <div class="second-title"><i class="fas fa-star"></i>新着わんにゃん</div>
                <div class="top-animal-index">
                    @include('user.animal.box')
                </div>
            <div class="text-right">{!! link_to_route('animals.index', 'もっと見る', [], ['class' => 'btn']) !!}</div>
        </section>

        <section id="reservation">
            <div class="top-title">Reservation</div>
            <p>直接会ってみたい方は、<br>こちらで予約を受け付けております。</p>
        </section>

        <section id="contact">
            <div class="top-title">Contact</div>
            <p>このサイトについて<br>何かご不明な点がございましたら、<br>お気軽にお問い合わせください。</p>
            <p>&#x203B;施設へのご質問は<br>直接施設へお問い合わせください。</p>
            <p class="tel"><i class="fas fa-phone"></i>000-0000-0000</p>
            {!! link_to_route('contact.index', 'お問い合わせフォーム', [], ['class' => 'btn']) !!}
        </section>

        <section id="sns">
            <div class="top-title">SNS</div>
                <div class="icon">
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram fa-4x"></i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter fa-4x"></i></a>
                    <a href="https://ja-jp.facebook.com/"><i class="fab fa-facebook fa-4x"></i></a>
                </div>
        </section>
    </div>

@endsection