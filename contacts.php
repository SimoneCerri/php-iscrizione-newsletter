<!doctype html>
<html lang='en'>

<head>

    <title>Newsletter PHP</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- #region link to Style -->
    <link href='./assets/css/style.css' rel='stylesheet'>
    <!-- #endregion link to Style -->
    <!-- #region link to FontAwesome (icons) -->
    <link rel='stylesheet' href='https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.    css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIft+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <!-- #endregion link to FontAwesome (icons) -->
    <!-- #region links to GoogleFonts (Nanum Gothic Coding) -->
    <link rel='preconnect' href='https: //fonts.googleapis.com'>
    <link rel='preconnect' href='https: //fonts.gstatic.com' crossorigin>
    <link href='https: //fonts.googleapis.com/css2?family=Nanum+Gothic+Coding&display=swap' rel='stylesheet'>
    <!-- #endregion links to GoogleFonts (Nanum Gothic Coding) -->
    <!-- #region link to Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- #endregion link to Bootstrap -->

</head>

<body class='debug'>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Newsletter</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" aria-current="page">Home
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

    <main>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Contacts :</h1>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta fuga magni sequi cumque nemo aperiam ab adipisci, neque veniam culpa nostrum, in ad ullam? Dolorem!
                </p>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta fuga magni sequi cumque nemo aperiam ab adipisci, neque veniam culpa nostrum, in ad ullam? Dolorem!
                </p>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta fuga magni sequi cumque nemo aperiam ab adipisci, neque veniam culpa nostrum, in ad ullam? Dolorem!
                </p>
            </div>
        </div>

        <div class="container">
            <form action="" method="post" class="mb-3">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper" placeholder="Name Surname" />
                    <small id="nameHelper" class="form-text text-muted">Type your name here.</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelper" placeholder="email@misentomario.com" />
                    <small id="emailHelper" class="form-text text-muted">Type your email here.</small>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-dark">Send</button>
            </form>
        </div>

    </main>

    <footer class="bg-dark py-4 text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">Accusantium?</a></li>
                        <li><a href="">Animi!</a></li>
                        <li><a href="">Quos?</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">Accusantium?</a></li>
                        <li><a href="">Animi!</a></li>
                        <li><a href="">Quos?</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h3>Legal</h3>
                    <ul class="list-unstyled">
                        <li><a href="">Lorem.</a></li>
                        <li><a href="">Accusantium?</a></li>
                        <li><a href="">Animi!</a></li>
                        <li><a href="">Quos?</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>