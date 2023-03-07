<aside id="lateral">
    <div id="login" class="block_aside">
        <?php if (!isset($_SESSION["user"])): ?>
        <form action="<?=base_url?>user/login" method="post">
            <label for="email">Email</label>
            <input name="email" id="email" type="email">
            <label for="password">Password</label>
            <input name="password" id="password" type="password">
            <input type="submit" value="Log In">
        </form>
        <a href="<?=base_url . 'user/signup'?>" style="padding-top: 15px; display: inline-block;">
            Sign Up
        </a>
        <?php endif; ?>
        <?php if (isset($_SESSION["user"])): ?>
            <ul>
                <li><a>Mis Pedidos</a></li>
                <li><a>Gestionar Pedidos</a></li>
                <li><a>Gestionar Categorias</a</li>
            </ul>
            <a href="<?=base_url?>user/signout">
                <button class="button-red">Sign Out</button>
            </a>
        <?php endif; ?>
    </div>
</aside>
<div id="central">