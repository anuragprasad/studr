function accepted(){
if(confirm("Have you verified all the details?")==true)
    return true;
else{ 
    return false;
}
}

$(document).ready(function(){ 

$('#ac4').hide();

$('#ac2 input').attr("disabled","true");

var x=$('#board_result_status').val();
if (x=="Result Declared")
    $('.board_result').show();
else
    $('.board_result').hide();

$('.diploma_result').hide();

$('.ug_result').hide();

$('#application').change(function(){
    $('#ac4').toggle();
    $('#btech_only').toggle();
})

$('#board_result_status').change(function(){
    $('.board_result').toggle();
})

$('#diploma_result_status').change(function(){
    $('.diploma_result').toggle();
})

$('#ug_result_status').change(function(){
    $('.ug_result').toggle();
})

$('button').click(function(){
    var counter=0;
    $('[required]').each(function(){
        if ($(this).val() == "") {
            if(counter==0)
            {alert("Please fill all the mandatory details");
            counter++;}
        } 
    })
})

$('#father_mobile').blur(function(){
    var filter = /^[0-9-+]+$/;
    if (filter.test(this.value)) {
        if(this.value.length==10)
            return true;
        else{
            alert('Please provide a 10-digit mobile number ')
            return false
        }
    }
    else {
        if(this.value.length!=0){
            alert('Please provide a 10-digit mobile number ')
            return false}
    }
    
})

$('#father_email').blur(function(){
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(this.value)) {
        return true;
    }
    else {
        if(this.value.length!=0){
            alert('Please provide a valid e-mail ')
            return false}
    }
    
})

$('#mother_mobile').blur(function(){
    
    var filter = /^[0-9-+]+$/;
    if (filter.test(this.value)) {
        if(this.value.length==10)
            return true;
        else{
            alert('Please provide a 10-digit mobile number ')
            return false
        }
    }
    else {
        if(this.value.length!=0){
            alert('Please provide a 10-digit mobile number ')
            return false}
    }
})

$('#mother_email').blur(function(){
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (regex.test(this.value)) {
        return true;
    }
    else {
        if(this.value.length!=0){
            alert('Please provide a valid e-mail ')
            return false}
    }
})

$('#pincode').blur(function(){
    
    var filter = /^[0-9]+$/;
    if (filter.test(this.value)) {
        if(this.value.length==6)
            return true;
        else{
            alert('Please provide a valid 6-digit pincode');
            return false;
        }
    }
    else {
        alert('Please provide a valid 6-digit pincode ')
        return false;
    }
})

$('.number').blur(function(){
    
    var filter = /^[0-9]+$/;
    if (filter.test(this.value)) {
        
    }
    else {
        alert('Please provide a valid number')
        return false;
    }
})

});

