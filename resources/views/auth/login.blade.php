<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<style>
    /* Styles pour la page d'inscription (register.blade.php) */
body {
    margin: 0;
    font-family: Arial, sans-serif;
    /* background: url('../images/photographie.jpg') no-repeat center center fixed; */
    background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('../images/photographie.jpg') no-repeat center center fixed;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.register-wrapper {
    width: 50%;
    max-width: 1200px;
    background-color: transparent; 
    display: flex;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    height: 650px;
    margin: 6px;
}

/* Partie gauche avec l'image */
.register-left {
    flex: 1;
    background-color: rgba(0, 0, 0, 0.8);
    background-size: cover;
    border: 2.5px solid #383838;
    align-items: center;
}

/* Partie droite avec le formulaire */
.register-right {
    flex: 1;
    padding: 30px;
    padding-left: 250px;
    padding-top: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

h1 {
    margin-bottom: 25px;
    margin-top: 0px;
    color: #fdf9f9;
    /* text-align: center; */
}

form {
    width: 70%;
    display: flex;
    flex-direction: column;
    color : #fcf7f7;    
}

label {
    margin-bottom: 5px;
}

input {
    width: 80%;
    padding: 10px;
    margin-bottom: 20px;
    border: 2.5px solid #908e8e;
    border-radius: 5px;
    background-color: transparent; 
    color: #ffffff;
}

button {
    width: 90%;
    padding: 10px;
    background-color: #c907af;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #28044c;
}

p {
    margin-top: 20px;
    text-align: center;
}

p a {
    color: #007bff;
    text-decoration: none;
}

p a:hover {
    text-decoration: underline;
}

.remember-me {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.remember-me input {
    margin-right: 10px;
}

/* Animation pour l'affichage progressif */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

.register-wrapper {
    animation: fadeIn 0.7s ease-in-out;
}

</style>
<body>
    <div class="register-wrapper ">
        <div class="register-left ">
        <div class="register-right">
            
            <h1>Connexion</h1>
            <form method="POST" action="{{ route('login.store') }}">
                @csrf
                @error('email')
            <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="{{ old('email') }}">

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                

                    <!-- Checkbox Remember me -->
                    {{-- <label>
                        <input type="checkbox" name="remember"> Se souvenir de moi
                    </label> --}}

                <button type="submit">Se connecter</button>
                
                <p><a href="{{ route('login') }}">Vous n'avez pas encore de compte? S'inscrire</a></p>
            </form>
        </div>
    </div>
    </div>
</body>
</html>


