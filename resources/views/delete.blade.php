@extends('layouts.base')
@section('title', 'ガンマ線条件記録')
@section('main')
@if (Route::has('login'))              
    @auth
<h2>以下の記録を削除</h2>
<form method="POST" action="/log/{{ $b->id }}/">
  @csrf
  @method('DELETE')
    <table class="table">
        <tr>
            <th>No.</th>
            <td>{{ $b->id }}</td>
        </tr>
        <tr>
            <th>配管サイズ</th>
            <td>{{ $b->size }} ㎜</td>
        </tr>
        <tr>
            <th>板厚</th>
            <td>{{ $b->thickness }} ㎜</td>
        </tr>
        <tr>
            <th>撮影方法</th>
            <td>{{ $b->shooting_method }}</td>
        </tr>
        <tr>
            <th>線源強さ</th>
            <td>{{ $b->ci }} ci</td>
        </tr>
        <tr>
            <th>SFD</th>
            <td>{{ $b->sfd }}㎜</td>
        </tr>
        <tr>
            <th>照射時間</th>
            <td>{{ $b->irradiation_time }}′</td>
        </tr>
        <tr>
            <th>最高濃度</th>
            <td>D{{ $b->d_u }}</td>
        </tr>
        <tr>
            <th>最底濃度</th>
            <td>D{{ $b->d_l }}</td>
        </tr>
        <tr>
            <th>使用フィルム</th>
            <td>{{ $b->film }}</td>
        </tr>
        <tr>
            <th>現像時間</th>
            <td>{{ $b->deverop_time }}′</td>
        </tr>
        <tr>
            <th>現像温度</th>
            <td>{{ $b->deverop_temp }}°</td>
        </tr>
        <tr>
            <th>備考</th>
            <td>{{ $b->remarks }}</td>
        </tr>
    </table>
    <div class="pl-2">
        <input type="submit" value="削除" />
    </div>
</form> 
                    
 @else
    <p>データの削除はログインして下さい。</p>
@endauth
                
@endif

@endsection