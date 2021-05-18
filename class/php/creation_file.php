<div id="creation_file">
<form action="" method="post">
<label for=""><h1>BD name</h1></label>
    <input type="text" id="bd_name_"></form>
    <label for=""><h1>Username</h1></label>
    <input type="text" id="user_name_"></form>
    <label for=""><h1>Password</h1></label>
    <input type="password" id="password_"></form>
    <div id="button_send" onclick="action_btn()">
    <h1>Envoyer</h1>
    </div>
</div>


<style>
#creation_file{
 
    width:50%;
    margin:auto ; 
    margin-top:150px; 
}
#creation_file input {
    width:100% ; 
    padding:10px; 
    border-radius:15px; 
    border:1px solid rgba(0,0,0,0.2); 
}
label  h1{
    color:#35427b ; 
}
#button_send{
    margin-top:50px ; 
    background-color:#35427b ; 
    color:white; 
    text-align:center ; 
    padding:15px; 
    border-radius:10px; 
}
#button_send:hover {
    cursor:pointer; 
}
</style>



<script>
 






function action_btn(){
    var bd_name_ = document.getElementById("bd_name_");
    var user_name_ = document.getElementById("user_name_");
    var password_ = document.getElementById("password_");



var ok = new Information("class/php/bdd_connexionform.php"); // création de la classe 
ok.add("bd_name_", bd_name_); // ajout de l'information pour lenvoi 
ok.add("user_name_", user_name_); // ajout de l'information pour lenvoi 
ok.add("password_", password_); // ajout de l'information pour lenvoi 
 







console.log(ok.info()); // demande l'information dans le tableau
ok.push(); // envoie l'information au code pkp 
 
}











</script>