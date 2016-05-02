    <html>
    <head>
        
   </head>
   <body> 
       <script type="text/javascript">
function onchange_handler(obj, id) {
    var other_id = (id == 'personal')? 'corporate' : 'personal';
    if(obj.checked) {
	
        document.getElementById(id + '_form_fields').style.display = 'block';
        document.getElementById(other_id + '_form_fields').style.display = 'none';
    } else {
        document.getElementById(id + '_form_fields').style.display = 'none';
        document.getElementById(other_id + '_form_fields').style.display = 'block';
    }
}
</script>
<fieldset>
    <input type="radio" name="tipo_cadastro" value="individual_form" id="individual_form" style="margin:0px !important" onchange="onchange_handler(this, 'personal');" onmouseup="onchange_handler(this, 'personal');">
    <strong>Individual Form</strong><br/>

    <input type="radio" name="tipo_cadastro" value="corporation_form" id="corporation_form" style="margin:0px !important" onchange="onchange_handler(this, 'corporate');" onmouseup="onchange_handler(this, 'corporate');">
    <strong>Corporation Form</strong>

    <!-- If Individual Form is checked -->
    <div id="personal_form_fields">
        <legend>Personal Data</legend>
        <label for="Name">Full Name</label>
        <input id="Name" type="text" />
        <label for="City">City</label>
        <input id="City" type="text" />
        <label for="Email">Email</label>
        <input id="Email" type="text" />
    </div>

    <!-- If Corporation Form is checked -->
    <div id="corporate_form_fields" style="display: none;">
        <legend>Corporation Data</legend>
        <label for="Name">Name</label>
        <input id="Name" type="text" />
        <label for="City">City</label>
        <input id="City" type="text" />
        <label for="Email">Email</label>
        <input id="Email" type="text" />
    </div>
</fieldset>
   </body>
   </html>