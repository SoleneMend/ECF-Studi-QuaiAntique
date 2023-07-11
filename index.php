<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="UTF-8"/>
        <meta
            name="description"
            content="Le Quai Antique est le troisième restaurant du Chef Arnaud, installé à Chambéry, 
            specialisé dans la cuisine savoyarde."
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
        <link rel="icon" type="image/png" href="assets/icon.png" />
        <link rel="stylesheet" href="stylesheets/style.css" />
        <link rel="stylesheet" href="stylesheets/header.css" />
        <link rel="stylesheet" href="stylesheets/footer.css" />
        <link rel="stylesheet" href="stylesheets/button.css" />

        <!-- Title -->
        <title>Quai Antique</title>

    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar fixed-top justify-content-between">
            <a class="navbar-brand" href="#header">
                <img
                    src="assets/logo.png"
                    width="140"
                    height="30"
                />
            </a>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Horaires</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Reservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="ri-user-line"></i> 
                    </a>
                </li>
            </ul>
        </nav> 
        <!-- End Navbar -->

        <!-- Head -->
        <header id="header"> 
            <div class="text-center mt-5 py-4">
                <img
                    src="assets/logo.png"
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
            <!-- Galerie d'Image -->
            <section class="Images">
                <!--
                    Galerie d'image a coder, "faire appartaire les images du sql en question + surligner le nom quand on passe dessus"
                -->
            </section>

            <!-- Reservation -->
            <section id="Reservation">
                <div class="text-center" href="#">
                    <button type="button" class="btn btn-quaiAntique btn-lg">Reservation</button>
                    <!--
                        Reservation a coder, soit une nouvelle page soit un pop up.
                    -->
                </div>
            </section>
            <!-- Menu + Carte + Horaire -->
            <section class="container -appear mt-3 py-2"> 
                <article class="row align-items-center">
                    <div class="col-lg-6 order-lg-1">
                        <div class="text-center px-5" id="menu">
                            <p>
                                Menu </br> dfhghfdkjghfkhhddsgfhgfhgfhgf</br>
                                hgfhgfhgfhbfuujhdfyhddhjhdhuvbygdvbgtn</br>
                                uhbsdigqbsfkqiàgçjijfhdgsgdsfçuàghnjçughis</br>
                            </p>
                        </div>
                        <div class="text-center px-5" id="carte">
                            <p>
                                Carte</br>
                                fefjoçujisdf_yhsgdhhgsbuhdihyfgbuhdui </br>
                                chghsu_dyèfiufç_àdhghsezyhiqsjàu_feyh</br>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-2">
                        <div class="text-center px-5">
                            <p>
                                Horaire </br> 
                                <?php
                                    echo '<h1>BONJOUR ? COMENT CA VA ?????<h1>';
                                ?>
                            </p>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        <!-- End Main -->

        <!-- Footer -->
        <footer class="fixed-bottom py-1 d-flex justify-content-around ">
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