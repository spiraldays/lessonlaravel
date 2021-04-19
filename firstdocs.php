






//session保存
$request->session()->put('name', "sessionを保存中");

//session呼び出し
$session_name = $request->session()->get('name');

//存在チェック
if( $request->session()->exists('name') ){
	echo "in";
}else{
	echo "out";
}

//session削除
//$request->session()->forget('name');

$test = $request->session()->get('name');



