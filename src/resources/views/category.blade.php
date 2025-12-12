@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}" />
@endsection

@section('content')
    <div class="category__alert">
        <div class="category__alert--success">
            カテゴリを作成しました
        </div>
        <div class="category__alert--danger">
            <ul>
                <li></li>
            </ul>
        </div>
    </div>
    <div class="category__content">
        <form class="category-form" action="/categories" method="post">
            @csrf
            <div class="category-form__item">
                <input class="category-form__item-input" type="text" name="name" value="{{ old('name') }}" />
            </div>
            <div class="category-form__button">
                <button class="category-form__button-submit" type="submit">作成</button>
            </div>
        </form>
        <div class="category-table">
            <table class="category-table__inner">
                <tr class="category-table__row">
                    <th class="category-table__header">
                        <span class="category-table__header-span">category</span>
                    </th>
                </tr>
                <tr class="category-table__row">
                    <td class="category-table__item">
                        <form class="update-form" action="/categories/update" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-input" type="text" name="name" value="" />
                            </div>
                            <div class="update-form__button">
                                <button class="update-form__button-submit" type="submit">更新</button>
                            </div>
                        </form>
                    </td>
                    <td class="category-table__item">
                        <form class="delete-form" action="/categories/delete" method="post">
                            @method('DELETE')
                            @csrf
                            <div class="delete-form__button">
                                <button class="delete-form__button-submit" type="submit">削除</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection