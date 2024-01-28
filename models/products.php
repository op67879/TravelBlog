<?php
	class Product{
		private $productName;
		private $productText;
		private $price;

		function __construct($productName, $productText, $price){
			$this->productName = $productName;
			$this->productText = $productText;
			$this->price = $price;
		}
 
		function getProductName(){
       	   	return $this->productName;
   		}

    	function getProductText(){
        	return $this->productText;
   		}

   		function getProductPrice(){
       		return $this->price;
   		}
 
	} 
?>