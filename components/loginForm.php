
<?php if(isset($_SESSION['accountNotice']) && isset($_SESSION['user']) && isset($_SESSION['password'])): ?>
<div class="alert success" style="display:block;">
    <div class="alert-icon"><div class="alertIcon">&check;</div></div>
    <p><?php echo $_SESSION['accountNotice']; ?></p>
</div>
<!-- Close alert -->
<div class="alert success">
    <div class="alert-icon"><div class="alertIcon">&check;</div></div>
    <p></p>
</div>
<!-- Close alert -->
<div class="alert danger">
    <div class="alert-icon"><div class="alertIcon">&times;</div></div>
    <p></p>
</div>
<!-- Close alert -->


<!--  Class check -->




<div class="group">
	<h2 class="accountHeading"><span class="lg">Login</span> to your account</h2>
</div>
<!-- Close group -->
<!-- <h3>Let's create your account</h3> -->
<form id="login" class="session">
    <div class="group">
        <input type="text" id="user" class="control" value="<?php echo $_SESSION['user'] ?>" placeholder="username or email...">
        <div class="error userError"></div>
    </div>
    <!-- Close group -->
    <div class="group">
        <input type="password" id="password" class="control" value="<?php echo $_SESSION['password'] ?>" placeholder="Enter Password...">
        <div class="error passwordError"></div>
    </div>
    <!-- Close group -->

    <div class="group mt-20">
        <input type="submit" id="signin" class="btn btn-sweet" value="Login &#8250;">
    </div>
    <!-- Close group -->
    
</form>
<!-- Close form -->
<div class="space">
    <span class="linksDesign">
            Create new account <a href="index.php">Register</a>
    </span>
    <!-- Close linksDesign -->
</div>
<!-- Close form-group -->

<?php else: ?>
    <?php if(isset($_SESSION['accountNotice'])): ?>
<div class="alert success" style="display:block;">
    <div class="alert-icon"><div class="alertIcon">&check;</div></div>
    <p><?php echo $_SESSION['accountNotice']; ?></p>
</div>
    <?php endif; ?>
    <!-- Close alert -->
<div class="alert success">
    <div class="alert-icon"><div class="alertIcon">&check;</div></div>
    <p></p>
</div>
<!-- Close alert -->
<div class="alert danger">
    <div class="alert-icon"><div class="alertIcon">&times;</div></div>
    <p></p>
</div>
<!-- Close alert -->


<!--  Class check -->




<div class="group">
    <h2 class="accountHeading"><span class="lg">Login</span> to your account</h2>
</div>
<!-- Close group -->
<!-- <h3>Let's create your account</h3> -->
<form id="login">
    <div class="group">
        <input type="text" id="user" class="control" placeholder="username or email...">
        <div class="error userError"></div>
    </div>
    <!-- Close group -->
    <div class="group">
        <input type="password" id="password" class="control"  placeholder="Enter Password...">
        <div class="error passwordError"></div>
    </div>
    <!-- Close group -->

    <div class="group mt-20">
        <input type="submit" id="signin" class="btn btn-sweet" value="Login &#8250;">
    </div>
    <!-- Close group -->
    
</form>
<!-- Close form -->
<div class="space">
    <span class="linksDesign">
            Create new account <a href="index.php">Register</a>
    </span>
    <!-- Close linksDesign -->
</div>
<!-- Close form-group -->
<?php endif; ?>