<?php

	function price_with_tax($price) {
		
		$CI = get_instance();
		$tax = $price * ($CI->config->item('tax', 'settings') / 100);
		$price = $price + $tax;
		
		return printf('%01.1f', $price);
		
	}