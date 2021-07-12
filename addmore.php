<html>
<head>
<script type="text/javascript">
var c=0;
var minutes= 0;
var t;
var timer_is_on=0;

function timedCount()
{
document.getElementById('txt').value='minutes:'+ minutes + ' seconds: '+ c;
c=c+1;
if (c%60==0){
minutes+=1;
c=0;
}
t=setTimeout("timedCount()",1000);
}

function doTimer()
{
if (!timer_is_on)
  {
  timer_is_on=1;
  timedCount();
  }
}
</script> 
</head>

<body>
<form>
<input type="button" value="Start count!" onClick="doTimer()">
<input type="text" id="txt">
</form>
<p>Click on the button above. The input field will count forever, starting at 0.</p>
</body>
<html>
<head>
<title>Add Remove Multiple Input Fields Dynamically Using Jquery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-md-12">
<div class="input_fields_wrap">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<label for="">City</label>
<select name="city[]" class="form-control" required="">
<option value="">--Select City--</option>
<option value="noida">Noida</option>
<option value="gurgaon">Gurgaon</option>
<option value="delhi">Delhi</option>
<option value="indor">Indore </option>
<option value="jaipur">Jaipur</option>
</select>
</div>
<div class="form-group" >
<label for="">Email</label>
<input name="email[]" type="text" value="" class="form-control" required="">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<label for="">Numbers</label>
<input name="number[]" type="text" value="" class="form-control">
</div>
</div>
<button style="background-color:green;" class="add_field_button btn btn-info active">Add More Address</button>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
var max_fields = 15; //maximum input boxes allowed
var wrapper = $(".input_fields_wrap"); //Fields wrapper
var add_button = $(".add_field_button"); //Add button ID
var x = 1; //initlal text box count
$(add_button).click(function(e){ //on add input button click
e.preventDefault();
if(x < max_fields){ //max input box allowed
x++; //text box increment
$(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group"><label for="">City</label><select name="city[]" class="form-control"><option value="">--Select City--</option><option value="noida">Noida</option><option value="gurgaon">Gurgaon</option><option value="delhi">Delhi</option><option value="indor">Indore </option><option value="jaipur">Jaipur</option></select></div><div class="form-group"><label for="">Email</label><input name="email[]" type="text" class="form-control"></div></div><div class="col-md-6"><div class="form-group"><label for="">Numbers</label><input name="number[]" type="text" class="form-control"></div></div><div style="cursor:pointer;background-color:red;" class="remove_field btn btn-info">Remove</div></div>'); //add input box
}
});
$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
e.preventDefault(); $(this).parent('div').remove(); x--;
})
});
</script>
</body>
</html>


