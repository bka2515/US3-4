<?php require_once("../traitement/index.php"); ?>
<div class="contenue">

<form  method="post" action="" id="form-connexion">
         <h5>S'inscrire</h5></br>
         <p>Pour tester votre niveau de culture general</p> <hr>
    <div class="form_input">
             <h6 class="prenom">Prenom</h6>
             <input class="form_prenon" type="text" name="Prenom" placeholder="Prenom" value=""><br>
             <h6 class="nom">Nom</h6>
             <input class="form_nom" type="text" name="Nom" placeholder="Nom" value=""><br>
             <h6 class="login">Login</h6>
             <input class="form_login" type="text" name="Login" placeholder="Login" value=""><br>
             <h6 class="mot_pass">Password</h6>
             <input class="form_passwd" type="password" name="PWD_form" placeholder="PassWord" value=""><br> 
             <h6 class="mo_repass">ConfirmerPassword</h6>
             <input class="form_repass" type="password" name="PWD_form" placeholder="PassWord" value=""><br> 
             </div>
             <a href="" class="link_av">Avatar</a>
             <input type="file" name="btn_file" class="btn_for" value=""></input>
             <button type="submit" name="btn_submit" class="form_bt" value="">Creer un compte</button>
         
    
</form>
</div>