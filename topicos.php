<?php
//session_start();
session_start();
if (!$_SESSION['usuario']) {
    header('Location: login.php');
    exit();
}
//echo $_SESSION['perfil'];
//echo $_SESSION['id'];
// switch ($_SESSION['perfil']) {
//     case '6':
//         echo '<style type="text/css">
//         .registroPresenca {
//             display: none;
//             }
//             #atualizamedico {
//                 display: none;
//             }
//             #deletamedico {
//                 display: none;
//             }
//             #medicoCadModalBt {
//                 display: none;
//             }
//             </style>';
//         break;
// }
?>
<?php
include 'includes/head.php'
?>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <?php
        include 'includes/navbar.php'
        ?>
        <?php
        include 'includes/logoutModal.php'
        ?>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Assuntos disponíveis na plataforma</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <?php
                        require 'controller/topicos.php';
                        readTopicos();
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
                </div>
            </div>
        </section>
    </main>

    <?php
    include 'includes/footer.php'
    ?>
</body>

</html>