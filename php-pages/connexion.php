<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="UTF-8"/>
        <meta
            name="description"
            content="..."
        />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <!-- Bootstrap CDN CSS -->
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
            crossorigin="anonymous"
        >

        <!-- Link -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.3.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="../assets/icon.png" />
        <link rel="stylesheet" href="../stylesheets/style.css" />
        <link rel="stylesheet" href="../stylesheets/header.css" />
        <link rel="stylesheet" href="../stylesheets/footer.css" />
        <link rel="stylesheet" href="../stylesheets/button.css" />
        <link rel="stylesheet" href="../stylesheets/page-comptes.css" />

        <!-- Title -->
        <title>Quai Antique</title>

    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar fixed-top justify-content-between">
            <a class="navbar-brand" href="#header">
                <img
                    src="../assets/logo.png"
                    width="140"
                    height="30"
                />
            </a>
            <div class="nav justify-content-end">
                <a class="nav-link" href="#">Page d'accueil</a>
            </div>
        </nav> 
        <!-- End Navbar -->

        <!-- Head -->
        <header id="header"> 
            <div class="text-center mt-5 py-3">
                <img
                    src="../assets/logo.png"
                    width="700"
                    height="130"
                    class="img-fluid"
                    alt="Responsive image"
                />
            </div>
        </header>
        <!-- End Head -->

        <!-- Main -->
        <main>
            <div class="box border-box">
                <div class="text-center">
                    <h4><u>Se connecter</u> :</h4>
                </div>
                <form>
                    <div>
                        <label for="mail">E-mail :</label> <br/>
                        <input type="email" placeholder="Email">
                    </div><br/>
                    <div>
                        <label for="pass">Mot de passe :</label> <br/>
                        <input type="password" placeholder="Password">
                    </div><br/>
                    <div class="text-center">
                        <button type="submit" class="btn btn-quaiAntique">Connexion</button>
                    </div>
                </form>
            </div>
            <div class="py-1 text-center">
                <p>
                    Pas de compte ?
                     <button type="button" class="btn btn-quaiAntique btn-sm">Inscription</button>
                </p>
            </div>
        </main>
        <!-- End Main -->

        <!-- Footer -->
        <footer class="py-1 d-flex justify-content-around ">
            <div class="HoraireAujourdhui">
                <p class="small">
                    Horaire du jour
                </p>
            </div>
            <div class="Contact">
                <p class="small">
                    Contact
                </p>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Bootstrap CDN JS files -->
        <script 
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" 
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
            crossorigin="anonymous">
        </script>
        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" 
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" 
            crossorigin="anonymous">
        </script>
    </body>
</html>