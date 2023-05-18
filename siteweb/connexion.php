<?php 
include "config.php";
session_start();
?>
<!--Login-Form -->
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Connecter</h3>
      </div>
      <div class="modal-body">
        
          <div class="login_wrap">
            <div class="col-md-6 col-sm-6">
               <form action="login.php" method="post" >
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Adresse Email" id="mail" name="mail" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Mot de Passe" id="pwd" name="pwd"required>
                </div>
                <div class="form-group">
                  <input type="submit" value="Login" class="btn btn-block" id="signin" name="signin">
                </div>
              </form>
              
            </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Inscrivez-vous ici</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Mot de Passe Oublié</a></p>
      </div>
    
  </div>
</div>
</div>
</div>
<!--/Login-Form --> 
<?php session_start(); $_SESSION[login]=''; ?>

<!--Register-Form -->
<div class="modal fade" id="signupform" tabindex="-1" role="dialog" aria-labelledby="signupform" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Inscription</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-6 col-sm-6">
              <form action="connect.php" method="post" id="conform">
			  <div class="form-group">
                  <input type="number" class="form-control" placeholder="Numero de Votre CIN" name="cin" id="cin" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Nom" name="nom" id="nom" required >
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Prenom" name="pre" id="pre" required >
                </div>
				 <div class="form-group">
                <label for="gender">Genre : </label>
                  <label for="male" class="radio-inline"><input type="radio" name="genre" value="H" id="male" required />Homme</label>
                  <label for="female" class="radio-inline"><input type="radio" name="genre" value="F" id="female" required />Femme</label>
				</div>
				<div class="form-group">
                  <label for="dn">Date de Naissance :</label>
                  <input type="date" name="dn" id="dn" class="form-control" aria-label="date" required>
                </div>
		        <div class="form-group">
                  <input type="number" class="form-control" placeholder="Numero de Telephone" name="tel" id="tel" required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Adresse Email" name="mail" id="mail" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Mot de Passe" name="pwd_name" id="pwd_id" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Confirmer votre Mot de Passe" name="con" id="con" required>
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required >
                  <label for="terms_agree">J'accepte <a href="#">Les Conditions</a></label>
                </div>

                <div class="form-group">
                  <input type="submit" value="Inscrivez-vous" class="btn btn-block" name="submit" id="submit" >
                </div>
              </form>
            </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Vous avez déjà un compte ? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Connexion</a></p>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              var date = new Date();
date.setFullYear(date.getFullYear() - 18);
         $('#dn').attr('max', date.toISOString().split('T')[0]);
               $('#conform').validate({
                   rules: {
                      cin: {
                           required: true,
                           minlength: 8,
                           maxlength:8
                       },
                       nom: {
                           required: true,
                           minlength: 5
                       },
                       pre: {
                           required: true,
                           minlength: 5
                       },
                       tel: {
                           required: true,
                           minlength: 8,
                           maxlength: 12
                       },
                       
                       
                       mail: {
                           required: true
                       },
                       
                       pwd_name: {
                           required:true,
                           minlength : 5,
                           pwcheck : true
                       },
                       con:{
                        required:true,
                        equalTo : ('#pwd_id')
                       }
                   },
                   messages: {
                      nom :"Veuillez fournir un nom valide",
                      pre :"Veuillez fournir un prénom valide",
                      mail:"mail incorrect ou vide",
                      tel :"Veuillez saisir un numéro téléphone valide",
                      cin :"Veuillez saisir un numéro cin valide de 8 chiffres",
                      pwd :"Veuillez fournir un Mot de Passe Plus Sécurisé",
                      con :"Veuillez confirmer Votre Mot de Passe"
                      
                   }           
        
               });
               
               $.validator.addMethod("pwcheck", function(value) {
               return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) 
              && /[a-z]/.test(value) 
              && /\d/.test(value) 
});

            });
        </script>
<!--/Register-Form -->  
<?php session_start(); $_SESSION[register]=''; ?>

<!--Forgot-password-Form -->
<div class="modal fade" id="forgotpassword">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Mot de Passe Oublié ?</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="forgotpassword_wrap">
            <div class="col-md-12">
              <form action="forget.php" method="post">
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Votre Adresse Email" name="fmail" id="fmail" required >
                </div>
                <div class="form-group">
                  <input type="submit" value="Réinitialiser Mon Mot de Passe" class="btn btn-block" name="fgt" id="fgt">
                </div>
              </form>
              <div class="text-center">
                <p><a href="#loginform" data-toggle="modal" data-dismiss="modal"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Retour à la connexion</a></p>
              </div>
            </div>
          </div>
        </div>
        </div>
    </div>
  </div>
</div>
<!--/Forgot-password-Form --> 
<?php session_start(); $_SESSION[forget]=''; ?>