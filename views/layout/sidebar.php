<aside id="lateral">
    <div id="login" class="block_aside">
        <form action="<?=base_url?>user/login" method="post">
            <label for="email">Email</label>
            <input name="email" id="email" type="email">
            <label for="password">Password</label>
            <input name="password" id="password" type="password">
            <input type="submit" value="Log In">
        </form>
        <a href="<?=base_url . 'user/signup'?>">
            <button style="background-color: #007d00">Sign Up</button>
        </a>
        <ul>
            <li><a>Mis Pedidos</a></li>
            <li><a>Gestionar Pedidos</a></li>
            <li><a>Gestionar Categorias</a</li>
        </ul>
    </div>
</aside>
<div id="central">