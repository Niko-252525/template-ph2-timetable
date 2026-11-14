<h1>授業を登録する</h1>

<form method="POST" action="/entries">
    @csrf

    <p>
        <label>曜日（1〜5）
            <input type="number" name="day" min="1" max="5" required>
        </label>
    </p>

    <p>
        <label>時限（1〜6）
            <input type="number" name="period" min="1" max="6" required>
        </label>
    </p>

    <p>
        <label>授業名
            <input type="text" name="title" required>
        </label>
    </p>

    <p>
        <label>教室
            <input type="text" name="room">
        </label>
    </p>

    <button type="submit">登録</button>
</form>

<p><a href="/entries">一覧に戻る</a></p>