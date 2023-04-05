<?php if ($error) echo $error ?>
<form method="post" action="index.php?page=Users&action=registration" name="signup-form">
<div class="form-element">
<label>Email</label>
<input type="email" name="email" value="<?php echo $email ?>" required />
</div>
<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="register" value="register">Register</button>
</form>