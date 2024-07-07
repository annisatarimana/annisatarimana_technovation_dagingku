<style>
    @media  only screen and (max-width: 500px) {
        .and {
            font-size: 30px;
        }

    }
</style>

<div class="container">
    <header class="blog-header py-3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><i class="blog-header-logo text-dark"><span class="and">Halal <span style="color: #ff4321;">Way</span> </span></i></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('products.productshop')); ?>">Products</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo e(route('cart.show')); ?>">Your Cart</a>
                    <a class="dropdown-item" href="<?php echo e(route('aboutus')); ?>">About Us</a>
                    <a class="dropdown-item" href="#">Contact Us</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Privacy Policy</a>
                    <a class="dropdown-item" href="#">Terms & Condition</a>
                </div>
            </li>

        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        &nbsp;
        <form class="form-inline my-2 my-lg-0">
            <?php if(auth()->guard()->check()): ?>
                <a class="btn btn-sm btn-outline-secondary" href="#">Profile(<?php echo e(optional(auth()->user())->name); ?>)</a>
                &nbsp;
                <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(route('logout')); ?>">Log Out</a>

            <?php endif; ?>
            <?php if(auth()->guard()->guest()): ?>
                <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(route('registerClick')); ?>">Sign up</a>
                    &nbsp;
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(route('login')); ?>">Log In</a>
            <?php endif; ?>
        </form>
    </div>
</nav>
    </header>
</div>
    <br>
<?php /**PATH D:\applications\laravel_website_cake_shop_project\resources\views/partials/navbartwo.blade.php ENDPATH**/ ?>