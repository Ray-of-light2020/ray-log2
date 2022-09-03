@extends('layouts.base')
@section('title', 'ガンマ線条件記録')
@section('main')
<form class="pb-5" id="form1" action="#">
    <div>
        <label for="thickness" class="w-25">母材の厚さ(㎜)</label>
        <input type="text" id="thickness">
    </div>
    <div>
        <label for="ci" class="w-25">線源強さ(Ci)</label>
        <input type="text" id="ci">
    </div>
    <div>
        <label for="sfd" class="w-25">SFD(㎜)</label>
        <input type="text" id="sfd">
    </div>
    <input type="button" onclick="showMessage()" value="条件算出">
</form>
<div class="d-flex">
    <P class="pr-3">参考条件</P>
    <p id="condition"></p>
    <p id="condition2"></p>
    <p id="condition3"></p>
</div>
@endsection
