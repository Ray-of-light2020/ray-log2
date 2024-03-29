@extends('layouts.base')
@section('title', 'ガンマ線条件記録(編集)')
@section('main')
<h1>ガンマー線 照射条件記録(編集ページ)</h1>
<h2>照射条件入力</h2>
@if (Route::has('login'))              
                    @auth
                    <p>※は必須項目です。</p>
<form method="POST" action="/log/{{$b->id}}/">
  @csrf
  @method('PATCH')
  <div class="pl-2">
    <label id="size">※配管サイズ</label><br />
    <input id="size" name="size" type="int"
      size="15" value="{{ old('size', $b->size) }}" />
  </div>
  <div class="pl-2">
    <label id="thickness">※板厚</label><br />
    <input id="thickness" name="thickness" type="int"
      size="15" value="{{ old('thickness', $b->thickness) }}" />
  </div>
  <div class="pl-2">
    <label id="shooting_method">※撮影方法</label><br />
    <input id="shooting_method" name="shooting_method" type="text"
      size="15" value="{{ old('shooting_method', $b->shooting_method) }}" />
  </div>
  <div class="pl-2">
    <label id="ci">※線源強さ</label><br />
    <input id="ci" name="ci" type="int"
      size="15" value="{{ old('ci', $b->ci) }}" />
  </div>
  <div class="pl-2">
    <label id="sfd">※SFD</label><br />
    <input id="sfd" name="sfd" type="int"
      size="15" value="{{ old('sfd', $b->sfd) }}" />
  </div>
  <div class="pl-2">
    <label id="irradiation_time">※照射時間</label><br />
    <input id="irradiation_time" name="irradiation_time" type="int"
      size="15" value="{{ old('irradiation_time', $b->irradiation_time) }}" />
  </div>
  <div class="pl-2">
    <label id="d_u">最高濃度</label><br />
    <input id="d_u" name="d_u" type="int"
      size="15" value="{{ old('d_u', $b->d_u) }}" />
  </div>
  <div class="pl-2">
    <label id="d_l">最底濃度</label><br />
    <input id="d_l" name="d_l" type="int"
      size="15" value="{{ old('d_l', $b->d_l) }}" />
  </div>
  <div class="pl-2">
    <label id="film">※使用フィルム</label><br />
    <input id="film" name="film" type="text"
      size="15" value="{{ old('film', $b->film) }}" />
  </div>
  <div class="pl-2">
    <label id="deverop_time">現像時間</label><br />
    <input id="deverop_time" name="deverop_time" type="int"
      size="15" value="{{ old('deverop_time', $b->deverop_time) }}" />
  </div>
  <div class="pl-2">
    <label id="deverop_temp">現像温度</label><br />
    <input id="deverop_temp" name="deverop_temp" type="int"
      size="15" value="{{ old('deverop_temp', $b->deverop_temp) }}" />
  </div>
  <div class="pl-2">
    <label id="remarks">備考</label><br />
    <input id="remarks" name="remarks" type="text"
      size="15" value="{{ old('remarks', $b->remarks) }}" />
  </div>
  <div class="pl-2">
    <input type="submit" value="送信" />
  </div>
</form>
                    
                    @else
                        <p>データの編集はログインして下さい。</p>
                    @endauth
                
            @endif

@endsection