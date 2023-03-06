<?php ?>

<h2>Sign Up</h2>

<?php if(!empty($_SESSION["signup"]) && $_SESSION["signup"] === "Complete"): ?>
    <h3 class="alert_green">The user was successfully registered </h3>
<?php elseif (!empty($_SESSION["signup"]) && $_SESSION["signup"] === "Failed"): ?>
    <h3 class="alert_red">Something went wrong</h3>
<?php endif ?>

<?php Utils::deleteSession("signup"); ?>

<form action="saveUser" method="post">
    <label for="name">Name</label>
    <input id="name" name="name"  type="text" >

    <label for="lastname">Lastname</label>
    <input id="lastname" name="lastname" type="text" >

    <label for="email">Email</label>
    <input id="email" name="email" type="email" >

    <label for="password">Password</label>
    <input id="password" name="password" type="password" required>

    <label for="role">Role</label>
    <select name="role" id="role">
        <option value="admin">Administrator</option>
        <option value="client">Client</option>
    </select>

    <input type="submit" value="Sign Up">
</form>

