<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile Site</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>My profile</title>
</head>
<body>
    <header>
        <div class="header-left">
            <img class="icon" src="" alt="">
            <span>My Profile</span>
        </div>
        <div class="header-right">
            <ul>
                <li><a href="#profile"></a></li>
                <li><a href="#introduction"></a></li>
                <li><a href="#content"></a></li>
            </ul>
        </div>
    </header>

    <div class="main">
        <!-- <img src="assets/img/baseball.jpeg" alt=""> -->
    </div>
    <div class="description">
        <h1 class="description-h1">自己紹介</h1>
        <!-- <p class="description-p">このサイトでは私の好きな物、今挑戦していることを紹介します</p> -->
    </div>
<!-- プロフィール -->
    <section id="profile">
        <div class="profile-left">
            <img src="assets/img/profile.png" alt="profile">
        </div>
        <div class="profile-right">
            <h1>Taisei Namekawa</h1>
            <div class="profile-document">
                <ul class="document-left">
                    <li>Age</li>
                    <li>Job</li>
                    <li>Hobby</li>
                    <li>My Dream</li>
                </ul>

                <ul class="document-right">
                    <li>21</li>
                    <li>大学3年生</li>
                    <li>野球、マンガ・ドラマ鑑賞</li>
                    <li>プロ野球選手</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- <section id="likelist">
        <h1 class="sectiontitle">好きな物</h1>
    </section> -->


    <section id="introduction">
        <h1 class="sectiontitle">今挑戦していること</h1>
        <div class="point">
            <div class="introduction">
                <img src="assets/img/programming2.jpeg" alt="programming">
                <div class="introduction-bottom">
                    <h2 class="introduction-title">Programming</h2>
                    <p class="introduction-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, eligendi eius dolores illum nesciunt repellat mollitia tempore? Aspernatur ducimus vel laborum? Corporis ipsa, dolore repellat porro perferendis cumque similique magnam!</p>
                    <div class="button">
                        <button>See More</button>
                    </div>
                </div>
            </div>

            <div class="introduction">
                <img src="assets/img/baseball2.jpg" alt="baseball">
                <div class="introduction-bottom">
                    <h2 class="introduction-title">Baseball</h2>
                    <p class="introduction-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet aut, libero atque incidunt reiciendis necessitatibus debitis optio vero eos voluptates possimus dolores, perferendis neque? Inventore a officiis commodi suscipit!</p>
                    <div class="button">
                        <button>See More</button>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>

    </section>

    <section id="contact">
        <h1 class="contact-title">Contact</h1>
        <p>ご質問、ご連絡は以下のリンクからよろしくお願いいたします。</p>
    <form method="POST" action="check.php">
        <div class="contact-contents">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="furigana" placeholder="フリガナ">
            <input type="text" name="nickname" placeholder="名前">
            <input type="text" name="email" placeholder="Email">
            <textarea name="content" id="" cols="30" rows="10"></textarea>

            <button type="submit">Submit</button>
        </div>
    </form>
    </section>

    <footer>
        <p>&copy; My profile Website 2021. All rights reserved.</p>
    </footer>
</body>
</html>