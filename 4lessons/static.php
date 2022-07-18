<?php 
class OrderService{
	const STATUS_ACTIVE = 1;
	const STATUS_DECLINE = 2;
	const STATUS_INACTIVE = 3;

	public static function cleanContent($content = []){
		self::STATUS_ACTIVE;
		//..
	}
}

class UserService{
	public static function cleanContent(){

	}
}




function clearOrder($content = []) {

}





class Foo {
	private static $year = 1971;
	const YEAR = 2020;

	public static function getNumbers() {
		return range(1, 31);
	}


}
echo '<pre>';
var_dump(OrderService::clearContent([Null, '' ]));
die();
// echo Foo::$year;
// echo '<hr>';
// echo Foo::YEAR;

/// $order = API->getOrder();

$user = UserService::cleanContent($order);
$order = OrderService::cleanContent($order);

$OrderService['STATUS_ACTIVE'] = '100500';
if ( $order->status === $OrderService['STATUS_ACTIVE'] ) {
		//...
} elseif ( $order->status === OrderService::STATUS_DECLINE ) {
	//...
} else {
	//....
}


