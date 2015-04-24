<?php include('templates/header.html'); ?>

<div class="container index">
    <div class="row information">
        <div class="col-md-7">
            <h2>
                LeMo - Monitoring of Learning processes
            </h2>

            <p>
                Monitoring of learning processes on personalizing and non-personalizing<br>
                learning-management systems
            </p>
        </div>

        <div class="col-md-5">
            <form class="login-form" action="backend.php" method="POST">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

                <button type="submit" class="btn btn-default">Log in</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="well well-info">
                <p>
                    Three universities of applied sciences in Berlin have cooperated with four partners in the eLearning sector to create a 'Learning Analytics' application for teachers, researchers and content-providers.
                </p>
            </div>

            <a class="btn btn-primary btn-large news-button" target="_blank" href="http://www.lemo-projekt.de/">News from our blog</a>
        </div>
        <div class="col-md-7 carousel-wrapper hidden-sm hidden-xs">
            <div id="carousel-frontpage" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="../images/Nutzungsanalyse.png" alt="">
                    </div>
                    <div class="item">
                        <img src="../images/Pfadvisualisierung.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row triple-row">
        <div class="col-md-4">
            <h2>The Method</h2>
            <p>By applying statistical methods like visualization and data mining to
                the usage-data of learning-management systems, we can obtain further information
                about the behavior of their users and the quality of the eLearning on offer.</p>
        </div>
        <div class="col-md-4">
            <h2>The Approach</h2>
            <p>Together with our stakeholders we built a catalog of more than 80 educational
                issues connected with learning behavior and media usage. The emphasis is
                on usability and the dynamic visualization of the results.</p>
        </div>
        <div class="col-md-4">
            <h2>The Benefit</h2>
            <p>The LeMo application can be used with minor adjustments on different learning
                systems, including those with, and those without, a required login. In
                this way data analysis can be done across different platforms, and the
                results can be compared.</p>
        </div>
    </div>

</div>

<?php include('templates/footer.html'); ?>
