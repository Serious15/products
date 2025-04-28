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

                <form action="{{ url('/') }}" method="get">
                    <select name="select" onchange="this.form.submit()">
                        <option value="">-- 並び替え --</option>
                        <option value="高い順に表示" {{ request('select') == '高い順に表示' ? 'selected' : '' }}>高い順に表示</option>
                        <option value="低い順に表示" {{ request('select') == '低い順に表示' ? 'selected' : '' }}>低い順に表示</option>
                    </select>
                </form>
                <div class="product-list">
                    @forelse ($products as $product)
                    <div class="product-card">
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="product-link">
                            <img src="{{ asset('storage/img/fruits-img/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
                            <div class="product-info">
                                <h2 class="product-name">{{ $product->name }}</h2>
                                <p class="product-price">¥{{ number_format($product->price) }}</p>
                            </div>
                        </a>
                    </div>
                    @empty
                    <p>商品が見つかりませんでした</p>
                    @endforelse
                </div>

                <!-- ページネーション表示 -->
                <div class="pagination">
                    @if ($products->onFirstPage() == false)
                    <a href="{{ $products->previousPageUrl() }}" class="page-number">«</a>
                    @endif

                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    <a href="{{ $url }}" class="page-number {{ $page == $products->currentPage() ? 'active' : '' }}">
                        {{ $page }}
                    </a>
                    @endforeach

                    @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}" class="page-number">»</a>
                    @endif
                </div>
            </div>
        </header>
    </main>
</body>

</html>