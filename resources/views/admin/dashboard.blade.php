@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 text-sm-center">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категорий 0</span></p>
                </div>
            </div>
            <div class="col-sm-3 text-sm-center">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3 text-sm-center">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Посетителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3 text-sm-center">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a class="list-group-item list-group-item-action btn btn-block btn-default text-center" href="#">Создать категорию</a>
                <a class="list-group-item list-group-item-action" href="#">
                    <p4 class="list-group-item-heading font-weight-bold ">Категории первая</p4>
                    <p class="list-group-item-text">
                        Кол-во материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a class="list-group-item list-group-item-action btn btn-block btn-default text-center" href="#">Создать материал</a>
                <a class="list-group-item list-group-item-action" href="#">
                    <p4 class="list-group-item-heading font-weight-bold">Материал первый</p4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection