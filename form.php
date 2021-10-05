<form action="thanks.php" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="user_name">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <div>
        <label for="courriel">Courriel :</label>
        <input type="email" id="courriel" name="user_email">
    </div>
    <div>
        <label for="telephone">Téléphone</label>
        <input type="tel" name="tel" />
        <div>
            <div>
                <label for="select">
                    Votre couleur préférée
                </label>
                <select id="sujet" name="sujet">
                    <option value="" selected disabled hidden>Selectionnez votre sujet</option>
                    <option value="1">la politique</option>
                    <option value="2">la science</option>
                    <option value="3">les poules</option>
                    <option value="4">la constitution hongroise</option>
                </select>
            </div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
</form>

