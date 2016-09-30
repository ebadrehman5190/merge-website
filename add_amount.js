    $(document).ready(function() {
    var max_fields      = 6; //maximum input boxes allowed
    var wrapper         = $(".remove_value"); //Fields wrapper
    var add_button      = $(".add_amount"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input type="text" placeholder="enter member`s name" name="other_members[]" /><input type="text" placeholder="amount" name="other_amount[]" style="width:60px;"/><a href="#" class="remove">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});