<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>mogumogu</title>
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
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>商品登録</h2>
            </div>
            <form class="form" action="/products/index" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="商品名を入力" />
                        </div>
                        <div class="form__error">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">値段</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="price" name="price" placeholder="値段を入力" />
                        </div>
                        <div class="form__error">
                            @error('price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品画像</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="file" name="image" />
                        </div>
                        <div class="form__error">
                            @error('image')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">季節</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="checkbox" name="season" />
                        </div>
                        <div class="form__error">
                            @error('checkbox')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="description" placeholder="商品の説明を入力"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">戻る</button>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>