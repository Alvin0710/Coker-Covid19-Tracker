<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster</title>
    <link rel="stylesheet" type="text/css" href="style/aos.css">

    <style>
        body {
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        section {
            width: 100%;
            height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .poster {
            height: 40vh;
        }
    </style>
</head>

<body>


    <section>
        <div class="jumbotron bg-white">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-4 font-weight-bold text-danger" data-aos="fade-right">Free posters for
                            spread out in your environment</h1>
                        <p class="text-justify" data-aos="fade-up">This poster can be downloaded and distributed to
                            provide information about Covid-19 in order to improve
                            public awareness of the dangers of this virus.</p>
                    </div>
                    <div class="col">
                        <div class="container">
                            <img src="images/undraw_loving_story-01.png" alt="" class="img-fluid" data-aos="fade-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row" data-aos="zoom-in">
            <div class="col-md col-sm-6 poster container-fluid mx-3 my-3 rounded-lg bg-danger">a</div>
            <div class="col-md col-sm-6 poster container-fluid mx-3 my-3 rounded-lg bg-danger">b</div>
            <div class="col-md col-sm-6 poster container-fluid mx-3 my-3 rounded-lg bg-danger">c</div>
            <div class="col-md col-sm-6 poster container-fluid mx-3 my-3 rounded-lg bg-danger">d</div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row" data-aos="zoom-in">
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">a</div>
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">b</div>
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">c</div>
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">d</div>
        </div>
    </div>
    <div class="container">
        <div class="row" data-aos="zoom-in">
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">a</div>
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">b</div>
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">c</div>
            <div class="col-md poster container-fluid mx-3 my-3 rounded-lg bg-danger">d</div>
        </div>
    </div> -->

    <script src="js/aos.js"></script>
    <script type="text/javascript">
        AOS.init({
            offset: 100,
            duration: 1000,
        });
    </script>

</body>

</html>