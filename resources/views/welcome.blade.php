<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500&display=swap" rel="stylesheet">
  <!-- Link Swiper's CSS -->
  <link href="/css/app.css" rel="stylesheet">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background:#fdf0f5 ;
      font-family: "SF Pro JP", "SF Pro Display", "SF Pro Icons", "Hiragino Kaku Gothic Pro", "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 1rem;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
        height: 80%;
        width: 100%;
    }


    .swiper-slide {
        text-align: center;
        height: auto;
        font-size: 0.8rem;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .navbar .swiper-slide {
        background: #f8f8f7;
    }

    .gallery-top {
      height: 100%;
      width: 100%;
    }

    .gallery-thumbs {
      height: 20%;
      padding: 10px 0;

    }

    .gallery-thumbs .swiper-slide {
        width: 10%;
        height: 100%;
        opacity: 0.4;

    }


    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;

    }

    .gallery-thumbs .swiper-slide-thumb-active .button {
      font-size: 1.2rem;
      font-weight: 900;
      color: #00a7e9;
      box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
    }

    .swiper-container-n {
        padding-top: 5%;
        height: 80%;
        width: 100%;
    }

    .button {
        width: 100%;
        height: 30px;
        letter-spacing: 2.5px;
        font-weight: 500;
        color: #000;
        background-color: #ffffff;
        border: none;
        border-radius: 5px;
        box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
    }

    .button:hover {
        font-weight: bolder;
        font-size: 1.2rem;
        box-shadow: 0px 5px 10px #00a7e9;
        color: #00a7e9;
        transform: translateY(-3px);
    }

    /* navbar */

    .navbar {
        background-color: #f8f8f7;
    }

    .navbutton  {
        width: 140px;
        height: 45px;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        font-weight: 500;
        background-color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease 0s;
        cursor: pointer;
        outline: none;
        font-size: 8px;
        font-weight: 900;
        margin : 0 !important;
        padding: 0;
        color: #00a7e9;
    }

    .navbutton:hover {
        box-shadow: 0px 15px 20px rgba(46, 229, 157, 0.4);
        color: #00a7e9;
        transform: translateY(-7px);
    }

    .branding {
        font-weight: bolder;
        font-family: 'M PLUS Rounded 1c', sans-serif;
        font-size: 20px;
        text-decoration: none !important
    }

    .mini-button {
        padding-left: 5px;
    }

    .mini-sub {
        font-size:20px;
        padding-right: 0;
        text-align: left;
    }

    .mini-area {
        text-align: left;
        padding-left:0;
    }

    .area {
        font-size: 14px;
    }

    .center-cropped {
        width: 100px;
        height: 100px;
        background-position: center center;
        background-repeat: no-repeat;
        overflow: hidden;
    }

    .center-cropped img {
        min-height: 100%;
        min-width: 100%;
        /* IE 8 */
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
        /* IE 5-7 */
        filter: alpha(opacity=0);
        /* modern browsers */
        opacity: 0;
    }

    .desc {
        line-height: 1.14286;
        font-weight: 600;
        letter-spacing: .009em;
        font-size: 19px;
        color: #1d1d1f;
        direction: ltr;
        text-align: left;
    }



    @media screen and (max-width: 600px) {
        .gallery-thumbs .swiper-slide-thumb-active .button,  .button:hover {
            font-size: 12px;

        }

        .h6 {
            font-size: 12px;
        }

        div.col.h6 {
            font-size: 10px;
            margin: 0;
            padding: 0;
        }

        .button {
            padding: 0;
        }


    }

  </style>

    <script src="https://kit.fontawesome.com/fbba6dc03c.js" crossorigin="anonymous"></script>

</head>

<body id="app">
  <!-- Swiper -->
<nav class="navbar fixed-top px-0">
    <div class="container-fluid d-inline-block">
        <div class="row pl-3 ">
            <button class="navbutton " >
                <div class="row mini-button ">
                    <div class="col-3 mini-sub mt-1 text-center"><i class="fas fa-map-marker-alt"></i></div>

                    <div class="col-5 mini-area px-0 mt-1">

                        <div class="col-12 px-0">
                            エリアフリー
                        </div>
                        <div class="col-12 px-0 area">
                            愛知県
                        </div>
                    </div>

                    <div class="col align-self-end pl-0 mr-1">
                        <i class="fas fa-2x fa-angle-down"></i>
                    </div>
                </div>
            </button>

            <a href="/" class="branding  mx-auto d-block text-center w-25 mt-2">yumetetsu</a>
            <a href="/" class="branding  ml-auto p-2 mr-3 d-block  w-10"><i class="fas fa-lg fa-bell"></i></a>

        </div>
    </div>

    <div class=" swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide" ><button class="button">挨拶</button></div>
            <div class="swiper-slide" ><button class="button">開発とは</button></div>
            <div class="swiper-slide" ><button class="button">WEB開発</button></div>
            <div class="swiper-slide" ><button class="button">アプリ</button></div>
            <div class="swiper-slide" ><button class="button">イベント</button></div>
            <div class="swiper-slide" ><button class="button">スタフ</button></div>
            <div class="swiper-slide" ><button class="button">採用情報</button></div>
            <div class="swiper-slide" ><button class="button">会社情報</button></div>
            <div class="swiper-slide" ><button class="button">売買情報</button></div>
            <div class="swiper-slide" ><button class="button">店舗</button></div>
        </div>
    </div>


</nav>

<div class="swiper-container gallery-top ">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <?php
                $data=collect([
            (object)[
                'title' => 'こんにちは！',
                'body' => 'サイトのデザインはラジコが運営しているアプリのものですが、プログラムコードは全て夢のおてつだい株式会社のものです。',
                'img' => "img/rajiko.jpg"
            ],
            (object)[
                'title' => '待って、下のアイコンは押しても反応しないけど…',
                'body' => '申し訳ございません。自社でどんなことが作れるかがこのサイトの目的です。もちろんデザインや中身も変えられます。',
                'img' => "img/arumin.jpg"
            ],
            (object)[
                'title' => '誰が書いたの？',
                'body' => ' パートである<span class="font-weight-bold text-primary"> ラス </span> と申します。日本に来て2年目です。高橋さんと早川さんのおかげで、RPAだけじゃなく開発もチャレンジすることが出来ました。日本語があまり話せないので、簡単な日本語か英語で、よろしくお願い致します。',
                'img' => "img/frontend.jpeg"
            ]]);

            ?>
            @include('layout',['data'])

        </div>
        <div class="swiper-slide ">
            <?php
                $data=collect([
            (object)[
                'title' => '「開発」とは？',
                'body' => 'WebサイトやWebアプリケーションの開発は、仕事の内容によって「フロントエンド」と「バックエンド」に分類されます。',
                'img' => "img/whatisdev.jpg"
            ],
            (object)[
                'title' => '「フロントエンド」と「バックエンド」とは？',
                'body' => '単純にいうと「フロントエンド」は外見で「バックエンド」は裏方です。',
                'img' => "img/restaurant.png"
            ],
            (object)[
                'title' => '「フロントエンド」って外見？',
                'body' => 'そうです。レストランだと、メニューと一緒です。注文したいものは簡単に見つけるために、綺麗に整理したり、画像を載せたりしますね。画像の見た目は美味しくなかったり、外国メニューだと画像がなかったりすると、注文が難しくなりますね。',
                'img' => "img/menu.png"
            ],
            (object)[
                'title' => '「フロントエンド」って裏方？',
                'body' => ' レストランだと、キチンはお客様がほとんど見えないところで、環境や言葉が異なります。食べ物が美味しくなかったり、遅かったりするとお客様はどう思いますか。',
                'img' => "img/kitchen.png"
            ],
            (object)[
                'title' => '開発で「フロントエンド」とは？',
                'body' => ' WebサービスやWebアプリケーションで直接ユーザーの目に触れる部分のことです。WebサイトやWebアプリケーションなどでユーザーが文字を入力したり、ボタンをクリックしたりする部分です。',
                'img' => "img/front-explain.png"
            ],
            (object)[
                'title' => '開発で「バックエンド」とは？',
                'body' => 'サーバーサイド（Webサーバー側）やデータベースのシステムなど、ユーザーの目に見えない部分のことです。ユーザーが入力した内容などのデータ処理やデータベースへの保存、検索結果の出力といったことを行います。フロントエンドより、重要ですね。',
                'img' => "img/back-explain.png"
            ]
            ]);

            ?>
            @include('layout',['data'])
        </div>
        <div class="swiper-slide">
            <?php
                $data=collect([
            (object)[
                'title' => 'じゃ、WEB開発が出来る？',
                'body' => '経験としては、バックエンドです。デザインのセンスはありませんので、フロントエンドのデザインが出来ません。ｗ　フロントエンドのプログラミングもあまり経験はありませんが、必要な知識がわかります。やればやるほど腕もあげられると思います。そして<span class="font-weight-bold text-primary">ワイアフレーム</span>があればより効率的に開発が出来ます。',
                'img' => "img/dekiru.png"
            ],
            (object)[
                'title' => '「ワイアーフレーム」って何？',
                'body' => 'ワイヤーフレームとは、webページのレイアウトを定める設計図のことです。詳細なデザインの制作に入る前に、あらかじめ情報ブロックの配置を決めるために制作されます。フレームがあることによって、クライアントも制作者たちも、全員が完成イメージを共有できるようになります。なのでワイヤーフレームは、ワークフローをスムーズに進める役割を担っています。これがまさに住宅の間取り図と一緒ですね。',
                'img' => "img/plan.gif"
            ]
            ]);

            ?>
            @include('layout',['data'])
        </div>
        <div class="swiper-slide">


        </div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">
            @include('sample_tempo')
        </div>
    </div>
<!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
</div>
{{-- Content --}}



{{-- bottom Nav --}}
<div class="containter">
    <nav class="navbar fixed-bottom navbar-light bg-light">

        <a class="nav-item nav-link active p-0 m-0 text-center" href="#">
            <i class="fas fa-lg fa-home"></i>
            <div class="col h6">
                ホーム
            </div>
            <span class="sr-only">(current)</span>
        </a>
        <a class="nav-item nav-link text-center p-0" href="#">
            <i class="far fa-lg fa-list-alt "></i>
            <div class="col h6 ">
                なんとか表
            </div>
        </a>
        <a class="nav-item nav-link p-0 text-center" href="#">
            <i class="fas fa-lg fa-search"></i>
            <div class="col h6">
                さがす
            </div>
        </a>

        <a class="nav-item nav-link p-0 text-center" href="#">
            <i class="far fa-lg fa-star"></i>
            <div class="col h6">
                マイリスト
            </div>
        </a>

        <a class="nav-item nav-link p-0 text-center" href="#">
            <i class="far fa-lg fa-user-circle"></i>
            <div class="col h6">
                マイリスト
            </div>
        </a>



    </nav>
</div>


  <!-- Initialize Swiper -->
    <script>
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            loop: true,
            freeMode: true,
            loopedSlides: 5, //looped slides should be the same
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
        });
        var galleryTop = new Swiper('.gallery-top', {

            slideToClickedSlide: true,
            spaceBetween: 10,
            loop: true,
            loopedSlides: 5, //looped slides should be the same
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
            swiper: galleryThumbs,
            },
        });

        var swiper = new Swiper('.swiper-container-n', {
        direction: 'vertical',
        slidesPerView: 'auto',
        freeMode: true,
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        mousewheel: true,
        });
    </script>


</body>

</html>
