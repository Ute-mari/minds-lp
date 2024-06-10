<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd37dd6080.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>">
</head>

<body>
    <header>
    </header>
    <main><!--テストコメント-->

        <!-----ここから------->
        <section class="hiro">
            <div class="hiro__inner">
                <h1>
                    <img class="logo" src="<?php echo esc_url(get_theme_file_uri('/img/logo.png')); ?>" alt="マネーの旅">
                </h1>
                <img class="hiro__img" src="<?php echo esc_url(get_theme_file_uri('/img/hiro.jpg')); ?>" alt="5分で始める資産形成診断">
                <img class="hiro__spimg" src="<?php echo esc_url(get_theme_file_uri('/img/hiro_sp.jpg')); ?>" alt="5分で始める資産形成診断">

                <div class="hiroBtn">
                    <div class="hiroBtn__textWrapper">
                        <img class="hiroBtn__microCopy" src="<?php echo esc_url(get_theme_file_uri('/img/micro_copy.png')); ?>" alt="知識ゼロの投資初心者でも安心">
                    </div>
                    <div class="hiroBtn__btnWrapper">
                        <a class="hiroBtn__btn" href="<?php get_home_url('/'); ?>#form">
                            <p>あなただけの資産運用診断スタート</p>
                            <img class="hiroBtn__img" src="<?php echo esc_url(get_theme_file_uri('/img/free.png')); ?>" alt="診断無料">
                        </a>
                    </div>
                </div>
            </div>

        </section>
        <section class="formSection" id="form">
            <div class="formSection__inner">
                <div class="formSection__crown">
                    <img class="formSection__crownImg" src="<?php echo esc_url(get_theme_file_uri('/img/crown.png')); ?>" alt="診断累計3,384人">
                </div>
                <div class="formSection__headerArea">
                    <img class="formSection__textImg" src="<?php echo esc_url(get_theme_file_uri('/img/form_text.png')); ?>" alt="">
                    <!-- <p class="formSection__headerText">誰にでも当てはまるような診断結果ではなく</p>
                    <h2 class="formSection__h2">
                        <div class="flex formSection__firstLine">
                            <p>あなたに合った</p>
                            <div class="formSection__dotArea flex">
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">具</span>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">体</span>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <spna class="formSection__h2Dot">的</spna>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">な</span>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">投</span>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">資</span>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">方</span>
                                </div>
                                <div class="formSection__h2DotWrapper">
                                    <span class="formSection__h2Dot">法</span>
                                </div>
                                <div>を</div>
                            </div>
                        </div>
                        <p>見つけることができる！</p>
                    </h2> -->
                </div>

                <div class="form">
                    <form action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSeA-8tWNT3pwY8sb3l3ebdYUEK6YL5Oq-RuNjwAPRIWfChoxA/formResponse" method="post">
                        <div class="form__inner">
                            <div class="form__content">
                                <div class="form__textArea flex">
                                    <div class="form__numWrapper">
                                        <p class="form__num">1</p>
                                    </div>
                                    <p class="form__text">あなたの年齢は？</p>
                                </div>
                                <p>
                                    <select name="entry.2139228333" class="form__select">
                                        <option value="選択肢1"> 17歳以下</option>
                                        <option value="選択肢2">18歳〜70歳</option>
                                        <option value="選択肢3">71歳以上</option>
                                        <!-- <option value="選択肢4">選択肢4</option>
                                        <option value="選択肢5">選択肢5</option>
                                        <option value="選択肢6">選択肢6</option> -->
                                    </select>
                                </p>
                            </div>
                            <div class="form__content">
                                <div class="form__textArea flex">
                                    <div class="form__numWrapper">
                                        <p class="form__num">2</p>
                                    </div>
                                    <p class="form__text">あなたの貯金は？</p>
                                </div>
                                <p>
                                    <select name="entry.1196287957" class="form__select">
                                        <option value="選択肢1"> 100万円以下</option>
                                        <option value="選択肢2">選択肢2</option>
                                        <option value="選択肢3">選択肢3</option>
                                        <option value="選択肢4">選択肢4</option>
                                        <option value="選択肢5">選択肢5</option>
                                        <option value="選択肢6">選択肢6</option>
                                    </select>
                                </p>
                            </div>
                            <div class="form__content">
                                <div class="form__textArea flex">
                                    <div class="form__numWrapper">
                                        <p class="form__num">3</p>
                                    </div>
                                    <p class="form__text">あなたの貯金は？</p>
                                </div>
                                <p>
                                    <select name="entry.1536994637" class="form__select">
                                        <option value="選択肢1"> 会社員（上場企業）</option>
                                        <option value="選択肢2"> 会社員（非上場企業）</option>
                                        <option value="選択肢3"> 会社役員（上場企業）</option>
                                        <option value="選択肢4"> 会社役員（非上場企業）</option>
                                        <option value="選択肢5">自営業</option>
                                        <option value="選択肢6">公務員</option>
                                    </select>
                                </p>
                            </div>
                            <div class="form__content">
                                <div class="form__textArea flex">
                                    <div class="form__numWrapper" class="form__select">
                                        <p class="form__num">4</p>
                                    </div>
                                    <p class="form__text">あなたは5年後どうなりたい？</p>
                                </div>
                                <p>
                                    <select name="entry.1156811175" class="form__select">
                                        <option value="選択肢1"> 自宅を購入したい</option>
                                        <option value="選択肢2"> 現在の収入を50%増やしたい</option>
                                        <option value="選択肢3"> 子どもの教育資金を確保したい</option>
                                        <option value="選択肢4"> 独立してビジネスを始める</option>
                                        <option value="選択肢5">海外での生活資金を貯める</option>
                                        <option value="選択肢6"> 社会や環境に投資する</option>
                                    </select>
                                </p>
                            </div>
                            <div class="form__content">
                                <div class="form__textArea flex">
                                    <div class="form__numWrapper">
                                        <p class="form__num">5</p>
                                    </div>
                                    <p class="form__text">理想の老後生活は？</p>
                                </div>
                                <p>
                                    <select name="entry.175969250" class="form__select">
                                        <option value="選択肢1"> 自由に世界を旅する</option>
                                        <option value="選択肢2"> 夢の家に住む</option>
                                        <option value="選択肢3"> 好きなことで生計をたてる</option>
                                        <option value="選択肢4"> ボランティアや社会貢献</option>
                                        <option value="選択肢5"> 学び続ける生活</option>
                                        <option value="選択肢6"> 芸術や文化活動に没頭する</option>
                                    </select>
                                </p>
                            </div>
                            <div class="submit">
                                <div class="submit__textWrapper">
                                    <img class="submit__microCopy" src="<?php echo esc_url(get_theme_file_uri('/img/micro_copy.png')); ?>" alt="知識ゼロの投資初心者でも安心">
                                </div>
                            </div>
                            <div class="submit__btnWrapper">
                                <input type="submit" value="あなただけの資産運用診断スタート" class="submit__btn">
                                <img class="submit__img" src="<?php echo esc_url(get_theme_file_uri('/img/free.png')); ?>" alt="診断無料">
                            </div>
                        </div>
                </div><!--/form__inner-->
                </form>
            </div><!--/form-->
            </div><!--/formSection__inner-->
        </section>
        <section class="choice">
            <div class="choice__headerWrapper flex">
                <h2 class="choice__header">当サイトを選ぶべき理由</h2>
                <img class="choice__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_blue.png')); ?>" alt="ライン">
            </div>
            <div class="choice__inner">
                <div class="choice__content flex">
                    <img class="choice__img mr40 order2" src="<?php echo esc_url(get_theme_file_uri('/img/choice01.png')); ?>" alt="具体的な投資方法がわかる">
                    <div class="choice__textArea order1">
                        <h3 class="choice__h3">１、具体的な投資方法がわかる</h3>
                        <div class="choice__textWrapper">
                            <p>たった30秒、さまざまな資産運用法からあなたに合った配分バランスを一発回答。</p>
                            <p>何から始めたらいいのか答えが分かります。</p>
                        </div>
                    </div>
                </div>
                <div class="choice__content flex">
                    <div class="choice__textArea mr40">
                        <h3 class="choice__h3">2、資産が増える</h3>
                        <div class="choice__textWrapper">
                            <p>絶対儲かる投資などありません。複数の投資方法からあなたに最適な手法を明確にし、長期的に資産を増やすための手順が分かります。</p>
                        </div>
                    </div>
                    <img class="choice__img" src="<?php echo esc_url(get_theme_file_uri('/img/choice02.png')); ?>" alt="資産が増える">
                </div>
                <div class="choice__content flex">
                    <img class="choice__img mr40 order2" src="<?php echo esc_url(get_theme_file_uri('/img/choice03.png')); ?>" alt="国から認定を受けたお金のプロが監修しています">
                    <div class="choice__textArea order1">
                        <h3 class="choice__h3">３、国から認定を受けたお金のプロが監修しています</h3>
                        <div class="choice__textWrapper">
                            <p>投資方法は国内・海外と多様化しており、「簡単に儲かる」などの詐欺的な投資勧誘による被害は年々増加しています。</p>
                            <p>当サイトは財務局に届け出している金融の専門家が監修していますので知識ゼロの方でも安心していただけます。</p>
                            <p class="choice__financial choice__mt10">金融商品仲介業者　登録番号　関東財務局長（金仲）　第772号</p>
                            <p class="choice__financial">所属金融商品取引業者等　東海東京証券株式会社</p>
                        </div>
                    </div>
                </div>
            </div><!--/choice__inner-->
            <div class="sectionBtn">
                <div class="sectionBtn__textWrapper">
                    <img class="sectionBtn__microCopy" src="<?php echo esc_url(get_theme_file_uri('/img/micro_copy.png')); ?>" alt="知識ゼロの投資初心者でも安心">
                </div>
                <div class="sectionBtn__btnWrapper">
                    <a class="sectionBtn__btn" href="<?php get_home_url('/'); ?>#form">
                        <p>あなただけの資産運用診断スタート</p>
                    </a>
                    <img class="sectionBtn__img" src="<?php echo esc_url(get_theme_file_uri('/img/free.png')); ?>" alt="診断累計3,384人">
                </div>
            </div>
        </section>
        <section class="">
            <div class="worries">
                <div class="worries__headerWrapper flex">
                    <h2 class="worries__header">こんなお悩みありませんか？</h2>
                    <img class="worries__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_blue.png')); ?>" alt="ライン">
                </div>
                <div class="worries__content flex">
                    <ul class="worries__list">
                        <li class="worries__item worries__mb20"><i class="fa-solid fa-check worries__check"></i>貯金を増やすコツが分からない</li>
                        <li class="worries__item worries__mb20"><i class="fa-solid fa-check worries__check"></i>家計を見直して支出を減らしたい</li>
                        <li class="worries__item"><i class="fa-solid fa-check worries__check"></i>資産運用なにから始めたらいいのか分からない</li>
                    </ul>
                    <img class="worries__img" src="<?php echo esc_url(get_theme_file_uri('/img/worries.png')); ?>" alt="こんなお悩みありませんか？">
                    <ul class="worries__list">
                        <li class="worries__item worries__mb20 worries__mt20"><i class="fa-solid fa-check worries__check"></i>どこに相談したらいいか分からない</li>
                        <li class="worries__item worries__mb20"><i class="fa-solid fa-check worries__check"></i>お金のプロに相談したい</li>
                        <li class="worries__item"><i class="fa-solid fa-check worries__check"></i>将来安心できる具体的な資産額を知りたい</li>
                    </ul>
                </div>
            </div>
            <div class="triangle">
                <img class="triangle__img" src="<?php echo esc_url(get_theme_file_uri('/img/triangle.png')); ?>" alt="三角矢印">
            </div>
            <div class="solution">
                <h2 class="solution__headerArea">
                    <img class="solution__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/solution_header.png')); ?>" alt="そのお悩みをお金のプロが解決">
                </h2>
                <ul class="solution__list">
                    <div class="solution__itemContainer">
                        <li class="solution__item flex">
                            <img class="solution__img" src="<?php echo esc_url(get_theme_file_uri('/img/solution01.png')); ?>" alt="新NISA.ideco">
                            <p class="solution__text">新NISA.ideco</p>
                        </li>
                        <li class="solution__item flex">
                            <img class="solution__img" src="<?php echo esc_url(get_theme_file_uri('/img/solution02.png')); ?>" alt="資産形成">
                            <p class="solution__text">資産形成</p>
                        </li>
                        <li class="solution__item flex">
                            <img class="solution__img" src="<?php echo esc_url(get_theme_file_uri('/img/solution03.png')); ?>" alt="運用型保険">
                            <p class="solution__text">運用型保険</p>
                        </li>
                    </div>
                    <div class="solution__itemContainer solution__mt">
                        <li class="solution__item flex">
                            <img class="solution__img" src="<?php echo esc_url(get_theme_file_uri('/img/solution04.png')); ?>" alt="住宅購入・住宅ローン">
                            <p class="solution__text">住宅購入・住宅ローン</p>
                        </li>
                        <li class="solution__item flex">
                            <img class="solution__img" src="<?php echo esc_url(get_theme_file_uri('/img/solution05.png')); ?>" alt="家計の見直し">
                            <p class="solution__text" p>家計の見直し</p>
                        </li>
                        <li class="solution__item flex">
                            <img class="solution__img" src="<?php echo esc_url(get_theme_file_uri('/img/solution06.png')); ?>" alt="老後資金・子どものための資産準備">
                            <p class="solution__text">老後資金・<br>子どものための資産準備</p>
                        </li>
                    </div>
                </ul>
            </div>
        </section>
        <section class="operation">
            <div class="operation__headerWrapper flex">
                <h2 class="operation__header">なぜ今資産運用が必要</h2>
                <img class="operation__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_blue.png')); ?>" alt="ライン">
            </div>
            <ul class="operation__list flex">
                <li class="operation__item">
                    <img class="operation__img" src="<?php echo esc_url(get_theme_file_uri('/img/operation01.png')); ?>" alt="老後の年金問題">
                    <div class="operation__h3Wrapper flex">
                        <h3 class="operation__h3">老後の年金問題</h3>
                        <img class="operation__h3Img" src="<?php echo esc_url(get_theme_file_uri('/img/line_orenge.png')); ?>" alt="オレンジライン">
                    </div>
                    <div class="operation__textArea">
                        <p>「老後2000万円問題」は公的年金だけでは老後の生活費が不足する可能性があるという警告から生じました。</p>
                        <p class="operation__orenge">年金支給額の水準は減少傾向にあり、早い段階から老後のライフプランを考え長期的な視点で準備していく必要性があります。</p>
                    </div>
                </li>
                <li class="operation__item">
                    <img class="operation__img" src="<?php echo esc_url(get_theme_file_uri('/img/operation02.png')); ?>" alt="インフレの加速">
                    <div class="operation__h3Wrapper flex">
                        <h3 class="operation__h3">インフレの加速</h3>
                        <img class="operation__h3Img" src="<?php echo esc_url(get_theme_file_uri('/img/line_orenge.png')); ?>" alt="オレンジライン">
                    </div>
                    <div class="operation__textArea">
                        <p class="operation__orenge">預貯金だけしている方は注意！</p>
                        <p>今後、物価が上がりお金の価値が下がることで貯蓄だけではどんどん目減りしてしまいます。 </p>
                        <p>給与があまり増えない状況に加え、税金や支出だけが増えていく中<span class="operation__orenge">「資産運用」は今の生活を守るために必須となっています。</span></p>
                    </div>
                </li>
                <li class="operation__item">
                    <img class="operation__img" src="<?php echo esc_url(get_theme_file_uri('/img/operation03.png')); ?>" alt="国の施策を有効活用">
                    <div class="operation__h3Wrapper flex">
                        <h3 class="operation__h3">国の施策を有効活用</h3>
                        <img class="operation__h3Img" src="<?php echo esc_url(get_theme_file_uri('/img/line_orenge.png')); ?>" alt="オレンジライン">
                    </div>
                    <div class="operation__textArea">
                        <p>少額から始められる積立投資や、税制優遇を受けられるNISA、iDeCoなどがあります。これらの制度を利用す
                            ることで、少ないお金からでも投資を始め、将来のためにコツコツと資産を増やしていくことができます。</p>
                        <p>資産形成は難しく感じるかもしれませんが、<span class="operation__orenge">国の施策を上手に活用すれば、初心者でも安心してスタートを切ることが可能</span>です。</p>
                    </div>
                </li>
            </ul>
            <div class="sectionBtn">
                <div class="sectionBtn__textWrapper">
                    <img class="submit__microCopy" src="<?php echo esc_url(get_theme_file_uri('/img/micro_copy.png')); ?>" alt="知識ゼロの投資初心者でも安心">
                </div>
                <div class="sectionBtn__btnWrapper">
                    <a class="sectionBtn__btn" href="<?php get_home_url('/'); ?>#form">
                        <p>あなただけの資産運用診断スタート</p>
                    </a>
                    <img class="sectionBtn__img" src="<?php echo esc_url(get_theme_file_uri('/img/free.png')); ?>" alt="診断累計3,384人">
                </div>
            </div>
        </section>
        <section class="three">
            <div>
                <h2 class="three__headerArea">
                    <img class="three__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/three_header.png')); ?>" alt="マネジェネが選ばれる３つの理由">
                </h2>
                <div class="three__contentWrapper">
                    <img class="three__contentImg" src="<?php echo esc_url(get_theme_file_uri('/img/three_img.png')); ?>" alt="3つの理由">
                </div>
                <!-- <ul class="three__list flex">
                    <li class="three__item">
                        <p class="three__text">お金の不安なら<br>なんでもOK</p>
                        <div class="three__imgWrapper">
                            <img class="three__img" src="<?php echo esc_url(get_theme_file_uri('/img/three01.png')); ?>" alt="お金の不安">
                        </div>
                    </li>
                    <li class="three__line">
                        <img class="three__lineImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_dot.png')); ?>" alt="ライン">
                    </li>
                    <li class="three__item">
                        <p class="three__text">解決までしっかり<br>サポート</p>
                        <div class="three__imgWrapper">
                            <img class="three__img" src="<?php echo esc_url(get_theme_file_uri('/img/three02.png')); ?>" alt="解決までサポート">
                        </div>
                    </li>
                    <li class="three__line">
                        <img class="three__lineImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_dot.png')); ?>" alt="ライン">
                    </li>
                    <li class="three__item">
                        <p class="three__text">LINEで気軽に<br>相談できる </p>
                        <div class="three__imgWrapper">
                            <img class="three__img" src="<?php echo esc_url(get_theme_file_uri('/img/three03.png')); ?>" alt="LINEで相談">
                        </div>
                    </li>
                </ul> -->
            </div>
        </section>
        <section class="satisfaction">
            <img class="satisfaction__img" src="<?php echo esc_url(get_theme_file_uri('/img/satisfaction.jpg')); ?>" alt="">
        </section>
        <section class="voice">
            <div class="voice__headerWrapper flex">
                <h2 class="voice__header">お客様の声</h2>
                <img class="voice__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_blue.png')); ?>" alt="">
            </div>
            <ul class="voice__list">
                <li class="voice__item flex">
                    <div class="voice__left">
                        <img class="voice__img" src="<?php echo esc_url(get_theme_file_uri('/img/voice01.jpg')); ?>" alt="">
                        <p class="voice__name">中山様　34歳</p>
                    </div>
                    <div class="voice__right">
                        <p class="voice__heading">お金に関する不安が取り除かれて、<span class="voice__orenge">今後がすごく楽しみに感じるようになりました！</span></p>
                        <p class="voice__text">貯金ができずに、生活に不安を感じて相談しました。<br>お金の管理や生命保険の見直しなど、しっかりできるようになり、現状を見える化し、改善することができました。</p>
                    </div>
                </li>
                <li class="voice__item flex">
                    <div class="voice__left">
                        <img class="voice__img" src="<?php echo esc_url(get_theme_file_uri('/img/voice02.jpg')); ?>" alt="">
                        <p class="voice__name">I.K様　26歳</p>
                    </div>
                    <div class="voice__right">
                        <p class="voice__heading">不要なものがわかり、<span class="voice__orenge">目的にあった投資をしていきたい！</span></p>
                        <p class="voice__text">子供達の将来のためのお金のことや投資・住宅ローンの相談を丁寧に教えてくれました。<br>今の家庭にあったアドバイスを的確にして下さり、不要なものはしっかり教えて下さったため安心しながら相談できました。</p>
                    </div>
                </li>
                <li class="voice__item flex">
                    <div class="voice__left">
                        <img class="voice__img" src="<?php echo esc_url(get_theme_file_uri('/img/voice03.jpg')); ?>" alt="">
                        <p class="voice__name">K.N様　28歳</p>
                    </div>
                    <div class="voice__right">
                        <p class="voice__heading">お金を運用で増やしていく時期とわかったので、<span class="voice__orenge">これからNISAを活用していこうと思います！</span></p>
                        <p class="voice__text">仕事が変わったので、お金のことを見直そうとライフプランの相談をしました。<br>「不要なものは不要」とちゃんと教えてくれて、客観的なアドバイスを頂きとても良かったです。</p>
                    </div>
                </li>
                <li class="voice__item flex">
                    <div class="voice__left">
                        <img class="voice__img" src="<?php echo esc_url(get_theme_file_uri('/img/voice04.jpg')); ?>" alt="">
                        <p class="voice__name">M.Y　32歳</p>
                    </div>
                    <div class="voice__right">
                        <p class="voice__heading">投資初心者の私にも分かりやすく、<span class="voice__orenge">NISAのメリットや仕組みが分かりました！</span></p>
                        <p class="voice__text">資産形成、ライフプランについて相談させていただきました。<br>漠然とした不安を言語化して数値化することで、自分にとって何が重要なのか選択できるようになりました。</p>
                    </div>
                </li>
            </ul>
        </section>
        <section class="faq">
            <div class="faq__headerWrapper flex">
                <h2 class="faq__header">よくあるご質問</h2>
                <img class="faq__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_black.png')); ?>" alt="">
            </div>
            <div class="faq__content">
                <dl class="faq__dl">
                    <dt class="faq__dt flex">
                        <p class="faq__q">Q</p>
                        <p class="faq__text">相談は無料ですか？</p>
                    </dt>
                    <dd class="faq__dd flex">
                        <p class="faq__a">A</p>
                        <p class="faq__text">初回の面談は60分無料で、その後LINEで質問することができます</p>
                    </dd>
                </dl>
                <div class="faq__line"></div>
                <dl class="faq__dl">
                    <dt class="faq__dt flex">
                        <p class="faq__q">Q</p>
                        <p class="faq__text">相談したら保険や金融商品を売り込まれたりしませんか？</p>
                    </dt>
                    <dd class="faq__dd flex">
                        <p class="faq__a">A</p>
                        <p class="faq__text">必要な商品を案内はしますが、無理な勧誘や営業は一切しませんのでご安心ください</p>
                    </dd>
                </dl>
                <div class="faq__line"></div>
                <dl class="faq__dl">
                    <dt class="faq__dt flex">
                        <p class="faq__q">Q</p>
                        <p class="faq__text">質問や相談はどこまでしていんですか？</p>
                    </dt>
                    <dd class="faq__dd flex">
                        <p class="faq__a">A</p>
                        <p class="faq__text">お金に関することならどのようなことでも可能です。その他のことも専門家のネットワークで紹介もできます</p>
                    </dd>
                </dl>
            </div>
        </section>
        <section class="flow">
            <div class="flow__headerWrapper flex">
                <h2 class="flow__header"> 診断フロー</h2>
                <img class="flow__headerImg" src="<?php echo esc_url(get_theme_file_uri('/img/line_blue.png')); ?>" alt="">
            </div>
            <div>
                <div class="flow__step flex">
                    <div class="flow__textArea">
                        <p>5つの質問の答えとメールアドレスを入れて送信。<br>診断はもちろん無料です！</p>
                    </div>
                    <img class="flow__img" src="<?php echo esc_url(get_theme_file_uri('/img/flow01.jpg')); ?>" alt="">
                    <div class="flow__numWrapper flex">
                        <p class="flow__numText">step</p>
                        <p class="flow__num">1</p>
                    </div>
                </div>
                <div class="">
                    <img class="flow__line" src="<?php echo esc_url(get_theme_file_uri('/img/flow_line.png')); ?>" alt="">
                </div>
                <div class="flow__step flex">
                    <div class="flow__textArea">
                        <p>入力していただいたメールアドレス宛に診断結果をお送りいたします！</p>
                    </div>
                    <img class="flow__img" src="<?php echo esc_url(get_theme_file_uri('/img/.jpg')); ?>" alt="">
                    <div class="flow__numWrapper flex">
                        <p class="flow__numText">step</p>
                        <p class="flow__num">2</p>
                    </div>
                </div>
                <div class="">
                    <img class="flow__line" src="<?php echo esc_url(get_theme_file_uri('/img/flow_line.png')); ?>" alt="">
                </div>
                <div class="flow__step flex">
                    <div class="flow__textArea">
                        <p>分からないところや、詳しく知りたいときは公式LINEより無料相談！</p>
                        <p>IFA（国が認めた専門家）が一人ひとりに寄り添って資産運用方法をご説明します。</p>
                    </div>
                    <img class="flow__img" src="<?php echo esc_url(get_theme_file_uri('/img/.jpg')); ?>" alt="">
                    <div class="flow__numWrapper flex">
                        <p class="flow__numText">step</p>
                        <p class="flow__num">3</p>
                    </div>
                </div>
            </div>
            <div class="sectionBtn">
                <div class="sectionBtn__textWrapper">
                    <img class="submit__microCopy" src="<?php echo esc_url(get_theme_file_uri('/img/micro_copy.png')); ?>" alt="知識ゼロの投資初心者でも安心">
                </div>
                <div class="sectionBtn__btnWrapper">
                    <a class="sectionBtn__btn" href="<?php get_home_url('/'); ?>#form">
                        <p>あなただけの資産運用診断スタート</p>
                    </a>
                    <img class="sectionBtn__img" src="<?php echo esc_url(get_theme_file_uri('/img/free.png')); ?>" alt="診断累計3,384人">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer">
            <img class="footer__logo" src="<?php echo esc_url(get_theme_file_uri('/img/logo.png')); ?>" alt="マネーの旅">
            <ul class="footer__list flex">
                <li class="footer__item">
                    <a class="footer__link" href="https://minds-planning.com/aboutus/">運営会社</a>
                </li>
                <li class="footer__item">
                    <a class="footer__link" href="https://minds-planning.com/privacy-policy/">プライバシーポリシー</a>
                </li>
                <li class="footer__item">
                    <a class="footer__link" href="https://minds-planning.com/terms-of-servic/">利用規約</a>
                </li>
                <li class="footer__item">
                    <a class="footer__link" href="https://minds-planning.com/make-appointment2/">お問い合わせ</a>
                </li>
            </ul>
            <p class="footer__copy">&copy;2024　有限会社マインズプランニング</p>
        </div>
    </footer>
</body>

</html>