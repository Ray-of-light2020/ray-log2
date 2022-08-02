@extends('layouts.base')
@section('title', 'ガンマ線条件記録')
@section('main')
<h1>ガンマー線 照射条件記録</h1>
<div class="pl-2">
  <p>板厚で検索</p>
  <form action="/t-search" method="POST">
  @csrf
      <p><input type="text" name="keyword" ></p>
      <p><input type="submit" value="検索"></p>
  </form>
</div>
@switch($display)
@case('t-search')
<h2>照射条件検索結果</h2>
<p>(板厚検索)</p>
@break
@case('edit')
<h2>No.{{$id}}を編集しました。</h2>
@break
@case('delete')
<h2>No.{{$id}}を削除しました。</h2>
@break
@case('store')
<h2>条件を登録しました。</h2>
@break
@default
<h2>照射条件全検索結果</h2>
<p>(全{{$all}}件中{{$number}}件表示)</p>
@endswitch
<table class="table">
<tr>
  <th>No.</th>
    @foreach ($records as $record)
    <td>{{ $record->id }}</td>
    @endforeach
</tr>
<tr>
  <th>管サイズ</th>
    @foreach ($records as $record)
    <td>{{ $record->size }} ㎜</td>
    @endforeach
</tr>
<tr>
   <th>板厚</th>
    @foreach ($records as $record)
   <td>{{ $record->thickness }} ㎜</td>
    @endforeach
</tr>
<tr>
   <th>撮影方法</th>
    @foreach ($records as $record)
   <td>{{ $record->shooting_method }}</td>
    @endforeach
</tr>
<tr>
   <th>線源強さ</th>
    @foreach ($records as $record)
    <td>{{ $record->ci }} ci</td>
    @endforeach
</tr>
<tr>
   <th>SFD</th>
    @foreach ($records as $record)
   <td>{{ $record->sfd }}㎜</td>
    @endforeach
</tr>
<tr>
   <th>照射時間</th>
    @foreach ($records as $record)
   <td>{{ $record->irradiation_time }}′</td>
    @endforeach
</tr>
<tr>
   <th>最高濃度</th>
    @foreach ($records as $record)
  <td>D&nbsp;{{ $record->d_u }}</td>
    @endforeach
</tr>
<tr>
   <th>最底濃度</th>
    @foreach ($records as $record)
   <td>D&nbsp;{{ $record->d_l }}</td>
    @endforeach
</tr>
<tr>
   <th>フィルム</th>
    @foreach ($records as $record)
   <td>{{ $record->film }}</td>
    @endforeach
</tr>
<tr>
   <th>現像時間</th>
    @foreach ($records as $record)
   <td>{{ $record->deverop_time }}′</td>
    @endforeach
</tr>
<tr>
   <th>現像温度</th>
    @foreach ($records as $record)
   <td>{{ $record->deverop_temp }}°</td>
    @endforeach
</tr>
<tr>
    <th>備考</th>
    @foreach ($records as $record)
    <td>{{ $record->remarks }}</td>
    @endforeach
</tr>
  <tr>
  <td></td>
@foreach ($records as $record)
    <td>
      <a href="/log/{{ $record->id }}/edit">編集</a>
      <a href="/log/{{ $record->id }}">削除</a>
    </td>
@endforeach
  </tr>
</table>

<div class="text-center pt-3 pb-3">
  {{ $records->links() }}
</div>

@endsection