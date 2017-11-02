<?php
    
    function formateDate($date){
    	return date("F j, Y, g:i a", strtotime($date)); 
    }
?>