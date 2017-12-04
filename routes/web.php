<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/{foo}', function ($foo) {
    return $foo;
});
내가 입력한 파라미터 값 그대로 출력됨
url은 내가 입력한 값이 있어야 출력됨
*/

/*Route::get('/{foo?}', function ($foo='bar') {
    return $foo;
});
인자값으로 들어간 bar 값이 출력됨
url은 / 까지만 입력하면됨
*/

/*Route::pattern('foo','[0-9a-zA-Z]{3}');
//foo URL 파라미터의 패턴을 제한함
//숫자,소문자,대문자 3글자로 제한
//입력하면 그 파라미터로 출력, 입력안하면 bar로 출력

Route::get('/{foo?}',function($foo='bar'){
	return $foo;
});*/

/*Route::get('/{foo?}',function($foo='bar'){
	return $foo;
})->where('foo','[0-9a-zA-Z]{3}');
// ;(세미콜론) 주의하기!
//위와 같은 패턴제한 주는 것!
*/
/*
Route::get('/',[
	'as'=>'me',
	function(){
		return '제 이름은 "home"입니다.';
	}
]);

Route::get('me',function(){
	return redirect(route('me'));
});*/
//'/'를 쳐도 '/'로 이동되 리턴 값 출력
//'me'를 쳐도 '/'로 이동되 리턴 값 출력
//'me'는 'as'=>'me'의 'me'로 이동됨


//'/' URL로 이동 시 리턴값 출력
//'home' URL로 이동 시 'home'을 매핑한 '/'으로 이동해 출력
//라우트에 이름을 부여하면 컨트롤러 로직에서 다른 라우트로 리디렉션하거나
//뷰에서 다른 라우트로 이동하는 링크를 만들 때 이점이 있어 편리
//URL 경로를 코드에 직접 쓰지 않고 매핑된 이름을 쓴다면,
//코드를 전부 뒤져 수정할 수고를 덜어준다
//예를 들어, Route::get() 메서드의 두번째 인자를 배열로 전달하는데
//배열 원소에 'as'=>'라우트_이름'을 정의하면 됨

/*Route::get('/',function(){
	return view('errors.503');
});*/
//하위디렉토리 참조시 . 사용
//.blade.php 없이 파일 이름만 인자로 넘긴다

/*Route::get('/',function(){
	return view('welcome')->with('name','Foo');
	//with 메서드 이용방법
});*/

/*Route::get('/',function(){
	return view('welcome')->with([
		'name'=>'Foo',
		'greeting'=>'안녕하세요?',
	]);
	//with 메서드 배열이용 여러개 데이터 넘김
});*/

/*
//view() 함수 이용 방법
Route::get('/',function(){
	return view('welcome',[
		'name'=>'Foo',
		'greeting'=>'안녕하세요?',
	]);
});
*/

/*
Route::get('/',function(){
	$items = ['apple','banna','tomate'];
	return view('welcome',['items'=>$items]);
});*/

/*Route::get('/',function(){
	return view('welcome');
});*/


Route::get('/','WelcomeController@index');

Route::resource('articles','ArticlesController');