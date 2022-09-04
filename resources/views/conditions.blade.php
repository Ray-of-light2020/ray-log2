@extends('layouts.base')
@section('title', 'ガンマ線条件記録')
@section('main')
<h1 class="pb-5">参考照射条件算出</h1>
<form class="pb-5" id="form1" action="#">
    <div class="text-center">
        <label for="thickness" class="w-25">材厚(㎜)</label>
        <select class="w-50" id="thickness"></select>
    </div>
    <div class="text-center">
        <label for="ci" class="w-25">線源強さ(Ci)</label>
        <input type="number" id="ci">
    </div>
    <div class="text-center">
        <label for="sfd" class="w-25">SFD(㎜)</label>
        <input type="number" id="sfd">
    </div>
    <input type="button" onclick="showMessage()" value="条件算出">
</form>
<div class="d-flex">
    <P class="pr-3">参考条件(秒)</P>
    <p id="condition"></p>
</div>
<div class="d-flex">
    <P class="pr-3">参考条件(分)</P>
    <p id="condition2"></p>
</div>
@endsection
