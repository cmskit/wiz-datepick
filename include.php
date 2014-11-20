<?php
error_reporting(0);
$LL = array();
@include_once 'locales/'.$_GET['lang'].'.php';
function L($s)
{
	global $LL;
	return (isset($LL[$s]) ? $LL[$s] : str_replace('_',' ',$s));
}

?>


(function( $ ) {
	// we check if the Datepicker is currently part of jQuery UI
	if (!$.datepicker)
	{
		alert('jQuery-UI-Datepicker is missing!!');
		$.fn.datepick = function(){}
	}
	else
	{
		$.datepicker.regional[''] = {
			closeText: '<?php echo L('close')?>',
			prevText: '<?php echo L('back')?>',
			nextText: '<?php echo L('next')?>',
			currentText: '<?php echo L('today')?>',
			monthNames: ['<?php echo L('January')?>','<?php echo L('February')?>','<?php echo L('March')?>','<?php echo L('April')?>','<?php echo L('May')?>','<?php echo L('June')?>','<?php echo L('July')?>','<?php echo L('August')?>','<?php echo L('September')?>','<?php echo L('October')?>','<?php echo L('November')?>','<?php echo L('December')?>'],
			monthNamesShort: ['<?php echo L('Jan')?>','<?php echo L('Feb')?>','<?php echo L('Mar')?>','<?php echo L('Apr')?>','<?php echo L('May')?>','<?php echo L('Jun')?>','<?php echo L('Jul')?>','<?php echo L('Aug')?>','<?php echo L('Sept')?>','<?php echo L('Oct')?>','<?php echo L('Nov')?>','<?php echo L('Dec')?>'],
			dayNames: ['<?php echo L('Sunday')?>','<?php echo L('Monday')?>','<?php echo L('Tuesday')?>','<?php echo L('Wednesday')?>','<?php echo L('Thursday')?>','<?php echo L('Friday')?>','<?php echo L('Saturday')?>'],
			dayNamesShort: ['<?php echo L('Sun')?>','<?php echo L('Mon')?>','<?php echo L('Tue')?>','<?php echo L('Wed')?>','<?php echo L('Thu')?>','<?php echo L('Fri')?>','<?php echo L('Sat')?>'],
			dayNamesMin: ['<?php echo L('Su')?>','<?php echo L('Mo')?>','<?php echo L('Tu')?>','<?php echo L('We')?>','<?php echo L('Th')?>','<?php echo L('Fr')?>','<?php echo L('Sa')?>'],
			weekHeader: '<?php echo L('Wk')?>',
			dateFormat: 'yy-mm-dd',
			firstDay: 1,
			isRTL: false,
			showMonthAfterYear: false,
			yearSuffix: ''
		};
		
		$.fn.datepick = function(){
			this.datepicker(
			{
				dateFormat: 'yy-mm-dd',
				onClose: function(dateText, inst) 
				{
					hasCanged = true;
				}
				
			});
		};
	}
})( jQuery );

