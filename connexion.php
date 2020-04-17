 <?php
    if (isset($_POST['btn_form'])) {
        var_dump($_POST);
        $login=$_POST['login'];
        $pwd=$_POST['pwd'];
        $resultat=connexion($login, $pwd);
        if ($resultat=="error") {
            echo "Login ou mot de pass incorrecte";
        }else {
            header("location:index.php?lien=".$resultat);
        }
    }
    require_once("../traitement/index.php"); 
 ?>
 <div class="container">
<div class="container-header">
<div class="title">Login Form</div>
</div>
<div class="container-body">
<form  method="post" action="" id="form-connexion">
         
         <div class="form_input">
         <div class="incon_form"></div>
         <input class="form_controle" error="error-1" type="text" name="Login" placeholder="Login" value="">
         <div class="error_form" id="error-1"></div>
         </div>
         <div class="form_input">
         <div class="incon_form_pwd"></div>
         <input class="form_controle" error="error-2" type="password" name="PWD_form" placeholder="PassWord" value="">
         <div class="error_form" id="error-2"></div>
         </div>
         <div class="form_input">
         <button type="submit" name="btn_submit" class="btn_form" value="">Connexion</button>
         <a href="" class="link_form">S'inscrire pour jouer</a>
         </div>
     </form>
  </div>
 </div> 
 <script>
     const inputs=document.getElementsByTagName("input");
     for (input of inputs){
         input.addEventListener("keyup", function(e){
           if (e.target.hasAttribute("error")) {
               var idDivError=e.target.getAttribute("error");
               document.getElementById(idDivError).innerText="";
           }
         })
     }
     document.getElementById("form-connexion").addEventListener("submit", function(e){
         const inputs=document.getElementsByTagName("input");
         var error=false;
         for (input of inputs) {
             if (input.hasAttribute("error")) {
             var idDivError=input.GetAttribute("error");
           if (!input.value) {
               document.getElementById(idDivError).innerText="Ce champs sont obligatoire";
               error=true; 
              }
            
         }
        
    }
    if (error) {
        e.preventDefault();
        return false;
     }
     })
 </script>
