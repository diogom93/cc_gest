    <!-- login form -->
{if $s_name}
    <div id="login">
      <div class="username">
        <p>{$s_name}</p>
        <p class="u_type_p">[<span class="u_type_txt">{$s_type}</span>]</p></div>
      <form action="../main/logout_action.php" method="post">
      <input type="submit" value="Logout" class="button" />
      </form>
    </div>
{else}

  <script type="text/javascript" src="../js/md5.js"></script>
   <script type="text/javascript" src="../js/utf8-encoder.js"></script>
    <div id="login">
      <div class="title">Login</div>
      <form action="../main/login_action.php" onsubmit="pw_handler(this);" method="post">
        <label for="uuser">E-mail:</label>
        <input type="text" size="10" name="uuser" id="uuser"/>
        <label for="upass">Password:</label>
        <input type="password" size="10" name="upass" id="upass"/>
        <input type="hidden" size="10" name="upassmd5" id="upassmd5" value=""/>
        <input type="submit" value="Login" class="button" />
      </form>
    </div>
{/if}
