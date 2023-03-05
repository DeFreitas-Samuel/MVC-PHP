<?php ?>

<h2>Sign Up</h2>

<form action="saveUser" method="post">
    <label for="name">Name</label>
    <input id="name" name="name"  type="text" required>

    <label for="lastname">Lastname</label>
    <input id="lastname" name="lastname" type="text" required>

    <label for="email">Email</label>
    <input id="email" name="email" type="email" required>

    <label for="password">Password</label>
    <input id="password" name="password" type="password" required>

    <label for="role">Role</label>
    <select name="role" id="role">
        <option value="admin">Administrator</option>
        <option value="client">Client</option>
    </select>

    <input type="submit" value="Sign Up">
</form>

