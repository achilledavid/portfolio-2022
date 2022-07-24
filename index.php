<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ee66252351.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/responsive.css">
    <link rel="stylesheet" href="./public/css/animations.css">
    <link rel="icon" href="./public/img/favicon.ico" />
    <title>Achille - Developpeur web</title>
</head>

<body id="body">

    <div class="cursor cursor--small"></div>
    <div class="cursor cursor--canvas"></div>
    <div class="container" id="container">
        <div class="nav-container">
            <div class="nav">
                <a href="#">
                    <div class="logo" onclick="window.location.reload();">
                        <p>Achille</p>
                        <p>David</p>
                    </div>
                </a>
                <div class="nav-content nav-computer-content">
                    <div class="nav-title-anim">
                        <p class="nav-title" onclick="window.location.reload();" id="accueil-title">Accueil</p>
                    </div>
                    <div class="nav-title-anim" id="extra1">
                        <p class="nav-title" onclick="hideHomepage(), showAPropos(), hideHeader()">À propos</p>
                    </div>
                    <div class="nav-title-anim" id="extra2">
                        <p class="nav-title" onclick="hideHomepage(), showPortfolio(), hideHeader()">Portfolio</p>
                    </div>
                    <div class="nav-title-anim" id="extra3">
                        <p onclick="showContact()" class="nav-title contact">Contact</p>
                    </div>
                    <div class="icons-mobile">
                        <i class="fa fa-bars nav-title" onclick="navMobileShow()" id="bars"></i>
                        <i class="fa fa-xmark nav-title" onclick="navMobileHide()" id="cross"></i>
                    </div>
                </div>
            </div>
            <div class="nav-mobile">
                <div class="nav-content nav-mobile-content" id="nav-mobile-content">
                    <p onclick="window.location.reload();" id="accueil-title-m">Accueil</p>
                    <p onclick="hideHomepage(), showAPropos(), hideHeader()" id="extra1-m">À propos</p>
                    <p onclick="hideHomepage(), showPortfolio(), hideHeader()" id="extra2-m">Portfolio</p>
                    <p onclick="showContact()" id="extra3-m" class="contact">Contact</p>
                </div>
            </div>
        </div>
        <div class="content-container">
            <div class="content homepage" id="content">
                <p>Développeur web</p>
            </div>
            <div class="content" id="a-propos">
                <div class="a-propos-head" id="a-propos-head">
                    <div class="a-propos-title">
                        <p>À propos de</p>
                        <p>Achille DAVID </p>
                    </div>
                    <div class="a-propos-photo">
                        <img src="./public/img/photo_cv.png" draggable="false" alt="">
                    </div>
                </div>
                <div class="a-propos-panel parent" id="a-propos-panel">
                    <div class="txt-panel-hover">
                        <div class="div1" id="div1">
                            <h1>Étudiant à l'ESGI</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, voluptate, minima quia neque nesciunt minus similique modi autem quasi laudantium libero cupiditate alias ad maxime saepe asperiores illo veritatis accusantium!</p>
                        </div>
                    </div>
                    <div class="txt-panel-hover">
                        <div class="div2" id="div2">
                            <h1>Alternant chez ADTi</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga, tenetur quis nobis deserunt cupiditate recusandae accusantium autem numquam fugiat quaerat natus iste repudiandae amet necessitatibus officiis. Corporis dicta pariatur reprehenderit.</p>
                        </div>
                    </div>
                    <div class="txt-panel-hover">
                        <div class="div3" id="div3">
                            <h1>Freelance</h1>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero maiores nesciunt facere. Ratione nulla laborum fugit maiores totam, repellat neque molestiae laudantium, ipsa dolorem aperiam quas corrupti similique deleniti suscipit.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" id="portfolio">
                <p>Portfolio</p>
            </div>
        </div>
        <!-- <div class="copyright">
            <p>ⓒ Achille David 2022</p>
        </div> -->
    </div>
    <div class="modal" id="modal">
        <div class="contact-container" id="contact-container">
            <div class="row">
                <h1 id="modal-element">Achille DAVID</h1>
                <p id="modal-element">Développeur web</p>
            </div>
            <div class="row">
                <a id="modal-element" href="">
                    <p>davidachille18@gmail.com</p>
                </a>
                <a id="modal-element" href="">
                    <p>06 22 76 25 43</p>
                </a>
            </div>
        </div>
    </div>

</body>
<script>
    function navMobileShow() {
        document.getElementById('nav-mobile-content').style.display = "flex";
        document.getElementById('nav-mobile-content').className = "nav-content nav-mobile-content open";
        document.getElementById('bars').style.display = "none";
        document.getElementById('cross').style.display = "unset";
    }

    function navMobileHide() {
        document.getElementById('nav-mobile-content').className = "nav-content nav-mobile-content close";
        document.getElementById('bars').style.display = "unset";
        document.getElementById('cross').style.display = "none";
    }

    function unlockScroll() {
        document.getElementById('body').style.overflow = "unset";
    }

    function hideHomepage() {
        document.getElementById('content').className = "content hidden";
    }

    function showAPropos() {
        document.getElementById('a-propos').className = "content a-propos";
        document.getElementById('div1').className = "div1 txt-panel-anim1";
        document.getElementById('div2').className = "div2 txt-panel-anim2";
        document.getElementById('div3').className = "div3 txt-panel-anim3";
    }

    function showPortfolio() {
        document.getElementById('portfolio').className = "content portfolio";
    }

    function showContact() {
        document.getElementById('modal').style.display = "flex";
        document.getElementById('contact-container').className = "contact-container contact-container-anim";
        document.onkeydown = function(e) {
            if (e.key === "Escape" || e.key === "Esc") {
                eraseContact();
            }
        };
        document.getElementById('modal').addEventListener("click", function(event) {
            if (event.target != document.getElementById('modal-element') && event.target != document.getElementById('contact-container')) {
                eraseContact();
            }
        });
    }

    function eraseContact() {
        document.getElementById('modal').style.display = "none";
        document.getElementById('contact-container').className = "contact-container";
    }

    function hideAProposHeader() {
        document.getElementById('a-propos').style.justifyContent = "flex-start";
        document.getElementById('a-propos').style.alignItems = "flex-start";
        document.getElementById('a-propos').style.cursor = "default";
    }

    function hideHeader() {
        document.getElementById('extra1').style.display = "none";
        document.getElementById('extra2').style.display = "none";
        document.getElementById('extra3').style.display = "none";
        document.getElementById('extra1-m').style.display = "none";
        document.getElementById('extra2-m').style.display = "none";
        document.getElementById('extra3-m').style.display = "none";
        document.getElementById('accueil-title').className = "nav-title contact";
        document.getElementById('accueil-title-m').className = "nav-title contact";
    }
</script>

<script>
    const innerCursor = document.querySelector(".cursor--small");
    const innerCursorBig = document.querySelector(".cursor--canvas");
    var link_test = document.querySelector(".test");
    var test = document.querySelector(".cordn");

    var clientX = -100;
    var clientY = -100;
    var lastX = 0;
    var lastY = 0;
    var isStuck = false;
    var scrollTop = 0;
    var scrollLeft = 0;

    window.addEventListener("scroll", (event) => {
        scrollTop = this.scrollY;
        scrollLeft = this.scrollX;
    });

    function initCursor() {

        // rafraichie la position de la souris a chaque fois qu'elle bouge
        document.addEventListener("mousemove", e => {
            clientX = e.clientX + scrollLeft;
            clientY = e.clientY + scrollTop;
        });



        function rendu() {
            if (!isStuck) {
                lastX += (clientX - lastX) * 0.1;
                lastY += (clientY - lastY) * 0.1;
                innerCursorBig.style.width = "25px";
                innerCursorBig.style.height = "25px";
                innerCursorBig.style.transform = 'translate(' + lastX + 'px, ' + lastY + 'px)';
                innerCursor.style.transform = 'translate(' + clientX + 'px, ' + clientY + 'px)';
            } else if (isStuck) {
                lastX += (stuckX - lastX) * 0.1;
                lastY += (stuckY - lastY) * 0.1;
                lastX = lastX - (25 / 10);
                lastY = lastY - (25 / 10);
                innerCursorBig.style.width = "75px";
                innerCursorBig.style.height = "75px";
                innerCursorBig.style.transform = 'translate(' + lastX + 'px, ' + lastY + 'px)';
                innerCursor.style.transform = 'translate(' + clientX + 'px, ' + clientY + 'px)';
            }


            requestAnimationFrame(rendu); // rafraîchie l'animation. La fonction contenant l'animation doit être appelée avant que le navigateur n'effectue un nouveau rafraîchissement 
        };
        requestAnimationFrame(rendu);
    };


    function initHovers() {
        function handleMouseEnter(e) {
            const navItem = e.currentTarget;
            const navItemBox = navItem.getBoundingClientRect(); // donne des informations sur la taille d'un élément et sa position relative par rapport à la zone d'affichage.
            stuckX = Math.round(navItemBox.left + navItemBox.width / 2) + scrollLeft; // permet de trouver le centre sur l'axe hozizontale de l'élement 
            stuckY = Math.round(navItemBox.top + navItemBox.height / 2) + scrollTop; // permet de trouver le centre sur l'axe verticale de l'élement 
            isStuck = true;
        };


        function handleMouseLeave() {
            isStuck = false;
        };

        // on ajoute des écouteurs d'événements à tous les éléments .link grace a foreache
        const linkItems = document.querySelectorAll(".link"); // prend tous les élements qui on pour class="link"
        linkItems.forEach(item => {
            item.addEventListener("mouseenter", handleMouseEnter);
            item.addEventListener("mouseleave", handleMouseLeave);
        });
    };

    initCursor();
    initHovers();
</script>

</html>