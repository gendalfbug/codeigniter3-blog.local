<form method="post" action="<?php echo base_url();?>Auth/signup">
<div>
    <label>First Name: </label></br>
    <input type="text" name="firstname">
</div>
<div>
    <label>Last Name: </label></br>
    <input type="text" name="lastname">
</div>
<div>
    <label>Other Names: </label></br>
    <input type="text" name="othersnames">
</div>
<div>
    <label>Email Address: </label></br>
    <input type="email" name="email_address">
</div>
<div>
    <label>Preferred Username: </label></br>
    <input type="text" name="username">
</div>
<div>
    <label>Password: </label></br>
    <input type="password" name="password">
</div>
<div>
    <label>Confirm Password: </label></br>
    <input type="password" name="confirm_password">
</div>

<button>Sign up</button>
</form>