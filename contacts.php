<?php
include_once __DIR__ . "/layouts/head.php";
?>

<body class='debug'>
    <?php
    include_once __DIR__ . "/layouts/header.php";
    ?>

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

        <div class="container py-5">
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

    <?php
    include_once __DIR__ . "/layouts/footer.php";
    ?>

</body>

</html>