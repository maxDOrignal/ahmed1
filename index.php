<?php require_once('init.php') ?>

<div class="conts conatiner-fluid d-flex flex-column">
    <div class="content d-flex flex-column justify-content-around align-items-center">
        <div class="pageText">
            <p>sign up <a href=""><span><i class="fas fa-chevron-right"></i></span></a></p>
        </div>
        <div class="form">
            <form class="d-flex flex-column justify-content-around align-items-center" action="" method="post">
                <input type="text" name="" id="" placeholder="username">
                <input type="email" name="" id="" placeholder="email">
                <input type="tel" name="" id="" placeholder="phone number">
                <input type="password" name="" id="" placeholder="password">
                <input type="password" name="" id="" placeholder="re-type password">
                <input type="submit" value="sign up">
            </form>
        </div>

        <p class="tips">or sign up with</p>


        <div class="signWith  justify-content-between">
            <a href="#">
                <div class="signsAccount float-left">
                    <img src="<?= htmlspecialchars($img . 'sign_images/facebook.png') ?>" alt="">
                    <span>
                        facebook accounts
                    </span>
                </div>
            </a>

            <a href="#">
                <div class="signsAccount float-right">
                    <img src="<?= htmlspecialchars($img . 'sign_images/google.png') ?>" alt="">
                    <span>
                        facebook accounts
                    </span>
                </div>

            </a>
        </div>
    </div>
</div>


<?php require_once $temelts . 'footer.php'; ?> 