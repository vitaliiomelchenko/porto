$(document).ready(function(){
	
	// Add to Cart Quantity
    
    $('.cart .quantity .input-text').val('1');
    
    $('.cart .quantity .input-text').change(function(){
        theValue = $(this).val();
        $(this).closest('.quantity').next('.add_to_cart_button').attr('data-quantity', theValue);
    });
    
});