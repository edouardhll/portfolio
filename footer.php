    <section id="footer">
            <a href="./mentionslegales.php"><p class="footer" id="footer-start">mentions légales</p></a>
            <p class="footer" id="footer-tarification">Portfolio de Edouard Hillion</p>
            <h2 class="footer" id="footer-title">Me contacter:</h2>
            <div><?php
        $message_retour = "";
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $nom     = trim($_POST["nom"] ?? "");
            $email   = trim($_POST["email"] ?? "");
            $sujet   = str_replace(["\r", "\n"], "", trim($_POST["sujet"] ?? ""));
            $message = trim($_POST["message"] ?? "");
        
            if ($nom !== "" && filter_var($email, FILTER_VALIDATE_EMAIL) && $sujet !== "" && $message !== "") {
                
                $destinataire = "ton-adresse@ton-domaine.fr"; // Ton adresse mail Infomaniak
                $expediteur   = "contact@ton-domaine.fr";     // Une adresse de ton domaine Infomaniak
        
                $entetes  = "From: Portfolio <" . $expediteur . ">\r\n";
                $entetes .= "Reply-To: " . $email . "\r\n";
                $entetes .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
                $contenu = "Nom : " . $nom . "\n"
                         . "Email : " . $email . "\n\n"
                         . "Message :\n" . $message;
        
                if (mail($destinataire, "[Portfolio] " . $sujet, $contenu, $entetes)) {
                    $message_retour = "<p style='color:green;'>Message envoyé !</p>";
                } else {
                    $message_retour = "<p style='color:red;'>Erreur lors de l'envoi.</p>";
                }
            } else {
                $message_retour = "<p style='color:red;'>Merci de remplir tous les champs correctement.</p>";
            }
        }
        ?>
        
        <?= $message_retour ?>
        
        <form action="" method="POST">
            <input type="text" name="nom" placeholder="Votre nom" required><br>
            <input type="email" name="email" placeholder="Votre e-mail" required><br>
            <input type="text" name="sujet" placeholder="Sujet" required><br>
            <textarea name="message" placeholder="Votre message" rows="5" required></textarea><br>
            <button type="submit" class="white-button">Envoyer</button>
        </form></div>
    </section>

</body>
</html>