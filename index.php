<?php
//var_dump($_GET);
//var_dump(isset($_GET["email"])); //false till insert the "email" then true
//var_dump(__DIR__); //REMEMBER TO START THE PATH WITH "/"
require_once __DIR__ . "/helpers/functions.php"; //REMEMBER TO START THE PATH WITH "/"

$userEmail = $_GET["email"];
if (isset($userEmail)) {
    //var_dump($userEmail);
    /* if(str_contains($userEmail,"@") && str_contains($userEmail, ".")) //check if "email" contain both "@" and "."
    {
        //var_dump("ok");
        $message = "Welcome";
    }else
    {
        $message = "Nope";
    } */

    $response = validateEmail($userEmail);

    /* if($response)
    {
        $message =
        [
            "class" => "success",
            "alert" => "You subscribe to our newsletter !"
        ];
    }
    else 
    {
        $message = [
            "class" => "danger",
            "alert" => "Error! Insert a correct email please."
        ];
    } */

    //$message = generateAlert($response);
    redirect($response);
}

include_once __DIR__ . "/layouts/head.php";
?>


<body class='debug'>

    <?php
        include_once __DIR__ . "/layouts/header.php";
    ?>

    <main>

        <?php if (isset($message)) : ?>
            <div class="my_alert alert-dismissible fade show alert alert-<?php echo $message["class"] ?>" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong> <?php echo $message["alert"] ?> </strong>
            </div>
        <?php endif; ?>

        <style>
            .my_alert {
                position: absolute;
                top: 5%;
                left: 3rem;
                z-index: 9999;
            }
        </style>

        <div class="p-5 mb-4 bg-light rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Welcome guest !</h1>
                <p class="col-md-8 fs-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta fuga magni sequi cumque nemo aperiam ab adipisci, neque veniam culpa nostrum, in ad ullam? Dolorem!
                </p>
                <button class="btn btn-primary btn-lg" type="button">
                    Search me
                </button>
            </div>
        </div>

        <section class="posts my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top" src="https://picsum.photos/200/300" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter bg-secondary text-white py-5">
            <div class="container">
                <div class="col-6 text-center mx-auto">
                    <h3>
                        Newsletter
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut excepturi quisquam illo ad, nihil fugit, architecto vitae et iste quas, autem hic laudantium ipsam numquam.
                    </p>
                </div>
                <form action="" method="get" class="d-flex justify-content-center align-items-center">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <!-- input type text, so we can check what happen when someone insert an incorrect email -->
                        <input type="text" class="form-control rounded-0" name="email" id="email" aria-describedby="emailHelper" placeholder="" />
                        <small id="emailHelper" class="form-text text-muted">Type your email here</small>
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0 mb-2">Submit</button>

                </form>
            </div>
        </section>

    </main>

    <?php
        include_once __DIR__ . "/layouts/footer.php";
    ?>

    <!-- #region Dev-only cdns, disable in production -->
    <!-- #region link to Vue-script -->
    <!-- <script src='https: //unpkg.com/vue@3/dist/vue.global.js'></script> -->
    <!-- #endregion link to Vue-script -->
    <!-- #region link to Bootstrap-script -->
    <!-- <script src='https: //cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz' crossorigin='anonymous'></script> -->
    <!-- #endregion link to Bootstrap-script -->
    <!-- #region link to Script -->
    <!-- <script src='./assets/js/main.js'></script> -->
    <!-- #endregion link to Script -->
    <!-- #endregion Dev-only cdns, disable in production -->

</body>

</html>