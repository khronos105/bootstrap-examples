<div class="container">
    <?php _t('Navbar'); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="">Navbar</a>
    </nav>
    <hr>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="">
            <img src="https://image.flaticon.com/icons/svg/25/25231.svg" width="30" height="30" alt="">Github
        </a>
        <ul class="nav">
            <li class="nav-item active">
                <a href="" class="nav-link">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Features</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Pricing</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link disabled" tabindex="-1" aria-disabled="true">Admin</a>
            </li>
        </ul>
    </nav>
    <hr>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="">
            <img src="https://image.flaticon.com/icons/svg/25/25231.svg" width="30" height="30" alt="">Github
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navExample" aria-controls="navExample" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navExample" class="collapse navbar-collapse">

            <ul class="nav">
                <li class="nav-item active">
                    <a href="" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link disabled" tabindex="-1" aria-disabled="true">Admin</a>
                </li>
            </ul>
        </div>
    </nav>
    <hr>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navExample2" aria-controls="navExample2" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a class="navbar-brand" href="">
            <img src="https://image.flaticon.com/icons/svg/25/25231.svg" width="30" height="30" alt="">Github
        </a>

        <div id="navExample2" class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a href="" class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Features</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbar-dropdown-toggler" href="" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Prices</a>
                    <div class="dropdown-menu" aria-labelledby="navbar-dropdown-toggler">
                        <a href="" class="dropdown-item">Example 1</a>
                        <a href="" class="dropdown-item">Example 2</a>
                        <div class="dropdown-divider"></div>
                        <a href="" class="dropdown-item">Example 3</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link disabled" tabindex="-1" aria-disabled="true">Admin</a>
                </li>
            </ul>
            <form action="" class="form-inline">
                <input type="text" class="form-control mr-sm-2" placeholder="Search...">
                <button class="btn btn-outline-success my-2 my-sm-0">Search</button>
            </form>
        </div>
    </nav>
</div>
