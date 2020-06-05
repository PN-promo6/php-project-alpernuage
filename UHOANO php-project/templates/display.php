<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Époxy Lover</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- NAV BAR START -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand border border-primary text-primary p-1 font-weight-bold rounded" href="#">ÉPOXY LOVER </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- NAV BAR END  -->
    <main role="main">

        <!-- HERO START -->
        <section class="jumbotron text-center bg-light mb-0">
            <div class="container">
                <h1>Bienvenue sur Époxy Lover !</h1>
                <p class="lead text-muted">
                    Venez partagez toutes vos idées de création d'epoxy !
                </p>
                <p>
                    <a href="#" class="btn btn-primary my-2">S'incrire</a>
                    <a href="#" class="btn btn-secondary my-2">Se connecter</a>
                </p>
            </div>
        </section>
        <!-- HERO END -->

        <div class="py-5 bg-light">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($posts as $post) {
                    ?>

                        <div class="col-lg-4">
                            <!-- CARD START -->
                            <div class="card mb-4 shadow">
                                <div class="card-header h3">
                                    <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle" width="40px" alt="">
                                    <a href="?search=@<?= $post->user->nickname ?>">@<?= $post->user->nickname ?></a>
                                </div>
                                <img class="img-fluid" src="<?php echo $post->url_img ?>" alt="">
                                <div class="card-body">
                                    <p class="card-text badge badge-info">
                                        <?php echo $post->category; ?>
                                    </p>

                                    <p class="card-text">
                                        <?php echo $post->description; ?>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="#" class="card-link">💙 Like</a>
                                    <a href="#" class="card-link">🗨️ Comment</a>
                                    <a href="#" class="card-link"> 🗣️ Share</a>
                                </div>
                            </div>
                            <!-- CARD END  -->
                        </div>

                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </main>

    <!-- TESTING TEMPLATE --!>

  <!-- TESTING TEMPLATE --!>

  <!-- FOOTER START -->
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>
            <p>
                Album example is &copy; Bootstrap, but please download and customize
                it for yourself!
            </p>
            <p>
                New to Bootstrap?
                <a href="https://getbootstrap.com/">Visit the homepage</a> or read our
                <a href="/docs/4.4/getting-started/introduction/">getting started guide</a>.
            </p>
        </div>
    </footer>
    <!-- FOOTER END  -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>