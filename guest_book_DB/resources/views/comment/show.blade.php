@extends('layout/foundation')
@section('title')
    Guest book
@endsection
@section('style')
    table {
    width: 50%; /* Ширина таблицы */
    background: white; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
    border-spacing: 1px; /* Расстояние между ячейками */
    }

    td, th {
    background: #84a9bd; /* Цвет фона ячеек */
    padding: 5px; /* Поля вокруг текста */
    }
@endsection
@section('body')
    <p>

    @foreach($result as $value)
        <p><b>{{$value->name}}:</b>
            {{$value->comment}}</p>
        @endforeach

        </p>
        <form action="{{route('comment')}}" method="get">
            @csrf
            <p><label for="name">Your name
                    <input type="text" name="name" placeholder="Иван Иванов"></label></p>
            <label for="comment">Enter message<br>
                <textarea name="comment" cols="45" rows="10" placeholder="Hello! This hotel is amazing, but ..."></textarea>
            </label>
            <p><input type="submit"></p>
        </form>
        <form action="{{route('moderator-comments')}}" method="get" >
            <button> moderator's page</button>
        </form>

        @endsection
