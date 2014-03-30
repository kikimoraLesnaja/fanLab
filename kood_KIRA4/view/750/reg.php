 <div id="register">
        <form action="" method="post">
        
          <p><?  echo $nick ?></p>
           <p><input type="text" name="nickname" id="nickname" value=""></p>
          <p><?  echo $email ?></p>
          <p><input type="text" name="email" id="email"></p>
          <p><?  echo $pass ?></p>
          <p><input type="password" name="pass1" id="pass1"></p>
          <p><?  echo $repeat_pass ?></p>
           <p><input type="password" name="pass2" id="pass2"></p>
           <input type="hidden" name="page" value="reg">
		  <input type="hidden" name="lang" value="<? echo $lang ?>">
          <p><input type="submit" value="   OK   " name="regOK"></p>
        </form>
</div>