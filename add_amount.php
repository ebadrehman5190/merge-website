<script>
    $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".remove_value"); //Fields wrapper
    var add_button      = $(".add_amount"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append("<div><select name="paid" id="paid"><option></option><?php $conn = mysqli_connect('localhost','root','mysql','mysql'); mysqli_select_db($conn,"mysql"); $edit = "SELECT User FROM costumer "; $result = mysqli_query($conn,$edit); while($row = mysqli_fetch_array($result)) { ?> <option><?php echo $row["User"] ; } ?></option> </select><input type="text" name="diff_amount"/><a href="#" class="remove">Remove</a></div>"); //add input box
        }
    });
    
    $(wrapper).on("click",".remove", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>