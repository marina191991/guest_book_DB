@extends('layout/foundation')
@section('title')
    Moderator/comments
@endsection
@section('style')
    form p{
    line-height: 1.5;
    }
    table {
    width: 50%; /* Ширина таблицы */
    background: white; /* Цвет фона таблицы */
    color: white; /* Цвет текста */
    border-spacing: 1px; /* Расстояние между ячейками */
    }

    td {
    background: #84a9bd; /* Цвет фона ячеек */
    padding: 5px; /* Поля вокруг текста */
    }
    th {
    background: #ee2593;
    padding: 5px;
    }
@endsection
@section('body')
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>comment</th>
        </tr>
        @foreach($result as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->comment}}</td>
            </tr>
        @endforeach
    </table>
    <br><br>
    <hr>
    <p>
    <form action="{{route('moderator-comments-delete')}}">
        @csrf
        <p>
            <b>DELETE FORM</b><br>
            <label for="id">Choose the id of the comment to delete
                <br><input type="text" name="id" size="40%" placeholder="3">
            </label><br>
        </p>
        <p><input type="submit"></p>
    </form>
    </p>
    <hr>
    <p>
    <form action="{{route('moderator-comments-edit')}}">
        @csrf
        <p>
            <b>EDIT FORM</b><br>
            <label for="edit_id">Choose the id or some ids of the comment to edit
                <br><input type="text" name="edit_id" size="40%" placeholder="3,4" required>
            </label><br>
        </p>
        <p>
            <label for="edit_name">Edit the user`s name
                <br><input type="text" name="edit_name" size="40%" placeholder="Nina">
            </label><br>
        </p>
        <p>
            <label for="edit_comment">Edit the user`s comment
                <br><textarea name="edit_comment" cols="45" rows="10"></textarea>
            </label><br>
        </p>

        <p><input type="submit"></p>
    </form>
    </p>
@endsection

