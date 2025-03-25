<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo" href="/">
                mogumogu
            </div>
        </div>
    </header>

    <main>
        <h3>商品一覧</h3>
        <header class="header">
            <div class="header__inner">
                <div class="header-utilities">
                    <a class="header__logo" href="/">
                    </a>
                    <a class="practice__btn">＋商品を追加</a>
                    <div class="create-form__item">
                        <input class="create-form__item-input" type="text" name="content">
                    </div>
                    <div class="create-form__button">
                        <button class="create-form__button-submit" type="submit">検索</button>
                    </div>
                </div>
                <h4>価格順で表示</h4>

                <form action="detail.html" method="get">
                    <select name="select">
                        <option value="価格で並び替え">価格で並び替え</option>
                        <option value="高い順に表示">高い順に表示</option>
                        <option value="低い順に表示">低い順に表示</option>
                    </select>
                </form>

                <div class="flex__item">
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/kiwi.jpg" alt="kiwi" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                キウイ　　¥800
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/strawberry.jpg" alt="strawberry" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                ストロベリー　　¥1200
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/orange.jpg" alt="orange" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                オレンジ　　¥850
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex__item">
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/watermelon.jpg" alt="watermelon" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                スイカ　　¥700
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/peach.jpg" alt="peach" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                ピーチ　　¥1000
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/muscat.jpg" alt="muscat" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                シャインマスカット　　¥1400
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex__item">
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/pineapple.jpg" alt="pineapple" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                パイナップル　　¥800
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/grapes.jpg" alt="grapes" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                ブドウ　　¥1100
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/banana.jpg" alt="banana" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                バナナ　　¥600
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex__item">
                    <div class="practice__card">
                        <div class="card__img">
                            <img src="img/melon.jpg" alt="melon" />
                        </div>
                        <div class="card__content">
                            <a class="card__content-ttl">
                                メロン　　¥900
                            </a>
                            <div class="card__content-tag">
                                <p class="card__content-tag-item card__content-tag-item--last">

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </main>

</body>

</html>