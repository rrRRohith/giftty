<?php

use App\Navigation;
use App\Cart;

if(!function_exists('admin')) {
	function admin($url=null) {
		return url("admin/".$url);
	}
}

if(!function_exists('seller')) {
	function seller($url=null) {
		return url("seller/".$url);
	}
}

if(!function_exists('alertMessage')) {
	function alertMessage($message=null,$type=1,$heading=null) {
		$statuses = ['danger','success','info','warning','dark'];

		if($type > 4) { $type = 4; }

		$alert = '<div class="alert alert-'.$statuses[$type].' alert-dismissible fade show">';

		if($heading) {
			$alert .= '<h4 class="alert-heading">'.$heading.'</h4>';
		}

		$alert .= $message;
		$alert .= '</div>';

		return $alert;
	}
}

if(!function_exists('showImage')) {
	function showImage($image='', $path = '', $class='') {
		if($image != '' && file_exists(public_path($path.'/'.$image))) {
			return '<img src="'.asset($path.'/'.$image).'" class="'.$class.'">';
		}
	}
}

if(!function_exists('truncateSentence')) {
	function truncateSentence($string, $your_desired_width) {
	  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
	  $parts_count = count($parts);

	  $length = 0;
	  $last_part = 0;
	  
	  for (; $last_part < $parts_count; ++$last_part) {
	    $length += strlen($parts[$last_part]);
	    if ($length > $your_desired_width) { break; }
	  }

	  return implode(array_slice($parts, 0, $last_part));
	}
}



function set_active($path)
{
    return request()->is($path) ? 'active' : '';
}

function getMenu($id = null) {

	$menu = Navigation::with(['children'=> function($q) {
		$q->with('children');
	}])->where('parent_id',NULL)->where('id',$id)->first();
 
	if(!$menu) 
		return false;

	$nav = '<ul>';

    if(count($menu->children)>0) {

		foreach($menu->children as $toplevel) {

			$nav .= '<li><a href="'.url($toplevel->link).'"><span>'.$toplevel->name.'</span></a>';

			if(count($toplevel->children)>0) {

				$nav .= '<ul>';

				foreach($toplevel->children as $sublevel) {
					$nav .= '<li><a href="'.url($sublevel->link).'">'.$sublevel->name.'</a></li>';
				}

				$nav .= '</ul>';

			}

			$nav .= '</li>';

		}
	}

	$nav .= '</ul>';

	echo $nav;


}

function showPrice($price = 0) {
	return '$'.number_format($price,2);
}


function getCart() {
	return Cart::with('items')->where('id',session('cart_id',0))->first();
}



