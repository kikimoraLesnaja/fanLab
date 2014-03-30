<div id="botContainer">
        <div id="heroProp">
         <img src="view/img/heroes/ez.png" id="heroImg" alt="avatar">
        Current Hero's properties
        </div>
            <div id="field"><?  include("view/$screenWidth/$page.php"); ?> </div>
            <div id="heroAll">
                	<div id="heroAllTop"><?  echo $allhero ?></div>
                    <div id="heroAllBot"><a href="?page=creahero&lang=<? echo $lang ?>"><?  echo $creahero ?></a></div>
                    
                    <!---->
                </div>
               <div class="bu"></div>
         </div>
</div>
</body>
</html>
