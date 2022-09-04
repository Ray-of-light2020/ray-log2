@extends('layouts.base')
@section('title', 'ガンマ線条件記録')
@section('main')
<h1 class="pb-3 pl-3">参考照射条件算出</h1>
<form class="pb-3 pl-3" id="form1" action="#">
    <div>
        <label class="w-25" for="thickness">材厚(㎜)</label>
        <select id="thickness"></select>
    </div>
    <div>
        <label class="w-25" for="ci">線源強さ(Ci)</label>
        <input type="number" id="ci">
    </div>
    <div>
        <label class="w-25" for="sfd">SFD(㎜)</label>
        <input type="number" id="sfd">
    </div>
    <div class="pb-3">
        <label class="w-25" for="rev">補正</label>
        <input type="number" id="rev" value="1.6">
    </div>
    <input type="button" onclick="showMessage()" value="条件算出">
</form>
<div class="d-flex pl-3">
    <P class="pr-3">参考条件(分)</P>
    <p class="border-bottom border-danger font-weight-bold" id="condition2"></p>
</div>
<div class="px-2">
    <p>注1）リソースはイリ子の心です。私、運営者この業界で10年以上勤務してますが、イリ子の心の作者の方を知りません。何かご存知の方がいればご連絡下さい。</p>
</div>
<div class="px-2">
    <p>注2）補正は,液温23度10分の現像でフィルムの濃度はおよそ〜D2.6程度として初期値を1.6倍にしてます。運営者の経験上からの数値です。</p>
</div>
<div class="px-2">
    <p>注3）材厚は透過厚さを示します。二重壁撮影の場合には母材の厚さを二倍にして下さい。</p>
</div>
@endsection
