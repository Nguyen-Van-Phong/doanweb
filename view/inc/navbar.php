<style>
    .text-gray-200{
        font-size: 20px !important;
    }
</style>
<div class="header-3">

    <div id="menu-bar" class="fas fa-bars"></div>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href="./about.html">about</a>
        <a href="./shop.html">shop</a>
        <a href="./contact.html">contact</a>
    </nav>

    <div class="icons">

                <?php if (isset($_SESSION['user'])) { ?>
                    <a href="logout.php" class="text-gray-200 hover:text-white transition">Logout</a>
                <?php } else { ?>
                    <a href="login.php" class="text-gray-200 hover:text-white transition  ">Login</a>
                    <span class="text-white">/</span>
                    <a href="register.php" class="text-gray-200 hover:text-white transition">Register</a>
                <?php } ?>

        <a href=""><i class="fa-solid fa-heart"></i></a>
        <a href="./cart.php" class="shopping-cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <?php echo number_cart_product() ?>
        </a>
    </div>

</div>