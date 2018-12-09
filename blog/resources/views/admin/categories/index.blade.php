@extends('admin.layouts.app_admin)

@section('content')
    <div>
        @component()
            @slot('title') Список категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr>

            <a href="{{route('admin.category.create')}}" class="btn btn-secondary pull-right">
                <i class="fa fa-plus-square-o">Создать категорию</i>
            </a>

            <table class="table table-stripped">
                <thead>
                    <th>Наименование</th>
                    <th>Публикация</th>
                    <th class="text-right">Действие</th>
                </thead>

                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td>{{$category->title}}</td>
                            <td>{{$category->publiched}}</td>
                            <td>
                                <a href="{{route('admin.category.edit'), ['id'=>$category->id]}}" class="btn btn-secondary pull-right">
                                    <i class="fa fa-plus-square-o">Создать категорию</i>
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

    </div>
@endsection