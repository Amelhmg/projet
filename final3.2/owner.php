<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Travel Agency</title>
</head>

<body>
    <div class="maindiv">
        <header class="header">
            <a class="logo" href="index.php"> Travel Agency </a>
        </header>


        <div class="containers">
            <h1>Formulaire d'ajout d'hotel</h1>
            <form method="post" action="pf.php">

                <label for='Nom'>Entrez votre nom et prenom svp : </label>
                <input type='text' name='Nom' id='Nom' required>
                <span id='missNom'></span><br>

                <label for='hotel'>Entrez le nom de votre hotel </label>
                <input type='text' name='hotel' id='hotel' required>

                <label for='adresse'>Votre adresse </label>
                <input type='text' name='adresse' id='adresse' required>

                <label for='mail'>Entrez votre mail : </label>
                <input type='email' name='mail' id='mail' required><br>


                <div class="Prix">
                    <label for='Prix'> Prix selon les types de chambres :</label>
                    <input type='number' min="0" step="100" name='Prixtrp' id='Prixtrp' placeholder="chambre triple "
                        required>
                    <input type='number' min="0" step="100" name='Prixdb' id='Prixdb' placeholder="chambre double "
                        required>
                    <input type='number' min="0" step="100" name='Prixsing' id='Prixsing' placeholder="chambre single "
                        required>
                </div>





                <input type='submit' value='Valider' id='bouton_envoi' onclick="">
            </form>

            <script>

                var formValid = document.getElementById('bouton_envoi');
                var Nom = document.getElementById('Nom');
                var missNom = document.getElementById('missNom');
                

                var NomValid = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

                formValid.addEventListener('click', validation);

                function validation(event) {
                    //Si le champ est vide
                    if (Nom.validity.valueMissing) {
                        event.preventDefault();
                        missNom.textContent = 'Nom manquant';
                        missNom.style.color = 'red';
                        //Si le format de données est incorrect
                    } else if (NomValid.test(Nom.value) == false) {
                        event.preventDefault();
                        missNom.textContent = 'Format incorrect';
                        missNom.style.color = 'orange';
                    } 
                   
                }


            </script>

        </div>







        <footer class="footer">
            <div class="contactinformation">
                <h4 class="h4contactinformation">Contact Information</h4>
                <p class="info">Contact : contact@travelagency.com</p>
                <p class="info">Tel : +21300000000</p>
                <p class="info">Fax : +21300000000</p>
            </div>

            <div class="copyrights">
                <p>Travel Agency inc. Tout droit réservé</p>
            </div>
            <div class="follow">
                <h4 class="followus">Nous suivre</h4>
                <a class="followlinks" href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a class="followlinks" href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a class="followlinks" href="https://www.twitter.com/" target="_blank">Twitter</a>
            </div>
        </footer>
    </div>
</body>

</html>