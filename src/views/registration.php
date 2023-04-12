<?php $this->layout('layout') ?>

<div class="modal modal-sheet position-static d-block bg-body-secondary p-4 py-md-5">
  <div class="modal-dialog">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-5 pt-0">
        <?php if ($error) echo $error ?>
        <form method="post" action="index.php?page=Users&action=registration" name="signup-form">
        <div class="form-element">
        <label>Email</label>
        <input type="email" name="email" class="form-control rounded-3" value="<?php echo $email ?>" required />
        </div>
        <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" class="form-control rounded-3" required />
        </div>
        <button type="submit"  class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3"  name="register" value="register">Register</button>
        </form>

      </div>
    </div>
  </div>
</div>