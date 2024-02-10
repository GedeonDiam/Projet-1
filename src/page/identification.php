
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0; */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-form {
    background-image: linear-gradient(#0B162C, #1C2942, #3B556D);
    padding: 20px;
    margin-left:580px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 400px;
}

.signup-form h2 {
    text-align: center;
    margin-bottom: 20px;
    color:#A8A8A8;

}

.input-group {
    margin-bottom: 10px;
}

.input-group label {
    display: block;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #4cae4c;
}

.signup-form p {
    text-align: center;
    font-size: 14px;
}

.signup-form a {
    color: #5cb85c;
    text-decoration: none;
}

.signup-form a:hover {
    text-decoration: underline;
}
</style>


<div class="signup-form">
    <h2><i><b>Identification</b></i></h2><hr>
    <form action="/submit-your-form" method="POST">
        <div class="input-group">
            <label for="username">Nom</label>
            <input type="text" id="username" placeholder="Nom_Utilisateur">
        </div>
        <div class="input-group">
            <label for="username">Prenom</label>
            <input type="text" id="username" placeholder="Prenom_Utilisateur">
        </div>
        <div class="input-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder=".....@mail.com">
        </div>
        <div class="input-group">
            <label for="telephone">Téléphone</label>
            <input type="text" id="telephone"  placeholder="Téléphone">
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password"  placeholder="eg. X8df!90EO">
        </div>
        <div class="input-group">
            <label for="confirm-password">Confirmation mot de passe</label>
            <input type="password" id="confirm-password" placeholder="eg. X8df!90EO">
        </div>
        <button type="submit">Inscription</button>
    </form>
    <p>Already a member? <a href="">Connexion</a></p>
</div><br><br>





