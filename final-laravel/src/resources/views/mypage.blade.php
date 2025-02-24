@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('main')
<div class="user-wrap">
    <div class="user-group">
        <img class="user-group__icon" src="{{ $img_url }}">
        <div class="user-unit">
            <p class="user-unit__shop">{{ optional($shop)->name ? '[' . $shop->name  .']' : '' }}</p>
            <p class="user-unit__name">{{ $user->name }}</p>
        </div>
    </div>
    <a class="user-wrap__profile" href="/mypage/profile">プロフィールを編集</a>
</div>

<div class="tab-wrap">
    <label class="tab-wrap__label">
        <input class="tab-wrap__input" type="radio" name="tab" value="sell_items" checked>出品した商品
    </label>
    <div class="tab-wrap__group">
        @foreach ($sellItems as $item)
        <div class="tab-wrap__content">
            @if ($item->soldToUsers()->exists())
            <div class="sold-out__mark">SOLD OUT</div>
            @endif
            <a class="tab-wrap__content-link" href="/item/{{ $item->id }}">
                <img class="tab-wrap__content-image" src="{{ $item->img_url }}">
            </a>
        </div>
        @endforeach

        @for ($i = 0; $i < 10; $i++)
            <div class="tab-wrap__content dummy">
    </div>
    @endfor
</div>

@if(!$hasAnyRole)
<label class="tab-wrap__label">
    <input class="tab-wrap__input" type="radio" value="bought_items" name="tab">購入した商品
</label>
<div class="tab-wrap__group">
    @foreach ($soldItems as $item)
    <div class="tab-wrap__content">
        <div class="sold-out__mark">SOLD OUT</div>
        <a class="tab-wrap__content-link" href="/item/{{ $item->id }}">
            <img class="tab-wrap__content-image" src="{{ $item->img_url }}">
        </a>
    </div>
    @endforeach

    @for ($i = 0; $i < 10; $i++)
        <div class="tab-wrap__content dummy">
</div>
@endfor
</div>
@endif

    @for ($i = 0; $i < 10; $i++)
        <div class="tab-wrap__content dummy">
</div>
@endfor
</div>
@endhasanyrole
</div>
@endsection