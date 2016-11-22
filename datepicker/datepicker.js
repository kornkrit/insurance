// JavaScript Document
<script type="text/javascript">
$(function(){
 
	$('#dateInput1').datepicker({ 
		dateFormat: 'D,dd/mm/yy',
		numberOfMonths: 2,
		showOn: 'button',
		buttonImage: 'images/calendar.gif',
		buttonImageOnly: true,
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		duration: 'normal',
		minDate: 0,
		onClose: clearEndDate
	});
 	$('#dateInput2').datepicker({
		dateFormat: 'D,dd/mm/yy',
		numberOfMonths: 2,
		showOn: 'button',
		buttonImage: 'images/calendar.gif',
		buttonImageOnly: true,
		changeMonth: true,
		changeYear: true,
		showButtonPanel: true,
		duration: 'normal',
		minDate: +1,
		defaultDate: +1,
		beforeShow: setMinDateForEndDate
	});
});
 
function setMinDateForEndDate() {
	var date = $('#dateInput1').datepicker('getDate');
	date.setDate(date.getDate() + 1);
	if (date) return { minDate: date }
}
 
function clearEndDate() {
    var test = $('#dateInput1').datepicker('getDate');
    testm = new Date(test.getTime());
    testm.setDate(testm.getDate() + 1);
 
    $("#dateInput2").datepicker("option", "minDate", testm);
}
 
</script>