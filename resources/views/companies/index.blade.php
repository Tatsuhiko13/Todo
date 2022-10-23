<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会社一覧</title>
  </head>
  <body>
  <h1>会社一覧ページ</h1>


  <table border="1">
    <tr>
      <th>
        会社名
      </th>
      <th>
        Created
      </th>
      <th>
        Updated
      </th>
      <th>
        Edit
      </th>
      <th>
        Delete
      </th>
    </tr>

    @foreach($datas as $p_data)<!--$datas を $p_dataに-->
    <tr>
      <td>{{ $p_data->name }}</td><!--$p_dataのnameを表示-->
      <td>{{ $p_data->created_at }}</td>
      <td>{{ $p_data->updated_at }}</td>
      <td><!--↓↓ＵＲＬに $p_data->id を渡すため abc に変換（任意の変数）-->
        <a href="{{ route('company.edit', ['abc' => $p_data->id]) }}">Edit</a>
      </td>
      <td>
        <a href="{{ route('company.delete', ['abc' => $p_data->id]) }}">Delete</a>
      </td>
    </tr>
    @endforeach


  </table>


  </body>
</html>
