@php
    $dayNames = [1 => '月', 2 => '火', 3 => '水', 4 => '木', 5 => '金'];
@endphp

<h1>自分の時間割</h1>

@if ($entries->isEmpty())
    <p>まだ授業が登録されていません</p>
@else
    <table border="1">
        <tr>
            <th>曜日</th><th>時限</th><th>授業名</th><th>教室</th>
        </tr>
        @foreach ($entries as $entry)
            <tr>
                <td>{{ $dayNames[$entry->day] }}</td>
                <td>{{ $entry->period }}</td>
                <td>{{ $entry->title }}</td>
                <td>{{ $entry->room }}</td>
            </tr>
        @endforeach
    </table>
@endif

<p><a href="/entries/create">授業を登録する</a></p>