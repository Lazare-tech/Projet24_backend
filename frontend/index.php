<?php include("config.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pure Bootstrap Website</title>
    <!--link css-->
    <!--cdn bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--js cdn-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body>
   <?php include("menu.php")?>
    <section>
    <div class="container-fluid">
        <div class="row bg-info a justify-content-center align-items-center" style="height:100vh">
            <div class="col-sm-10  l text-center">
                <h1 class="display-2 text-capitalize ">
                    <span class="text-warning pure">pure bootstrap</span>
                    <span class="text-white web font-weight-bold">website</span>
                </h1>
                <h2 class="font-weight-light font-italic text-light">With Bootstrap Makes your code code easier</h2>
                <?php if(!isset($_SESSION['nom_utilisateur'])){?>

                <a href="login_form.php" class="btn btn-warning btn-lg px-4 m-3">Login Here</a>
                <!-- <a href="register_form.php" class="btn btn-danger btn-lg px-4 m-3">Register Here</a> -->
                                            <div class="btn-group">
                        <button type="button" class="btn btn-danger btn-lg px-4 m-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Register Here
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="register_form.php">Aprenant</a></li>
                            <li><a class="dropdown-item" href="register_entreprise_form.php">Entreprise</a></li>
                          
                        </ul>
                        </div>
                        <?php }?>


            </div>
        </div>
    </div>
    </section>
    <section class="bg-light p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h1 class="text-warning display-2">Skills</h1>
                    <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, a.
                        Omnis, numquam!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-10 text-center">
                    <i class="fas fa-desktop fa-8x" style="color: #fcaf3e;"></i>
                    <h1 class="text-secondary text-center">Development</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, possimus beatae. Architecto
                        vel, amet excepturi nisi quidem aliquid facilis in.
                    </p>
                    <button type="button" class="btn btn-outline-warning ">Learn More</button>
                </div><br>
                <div class="col-lg-4 col-sm-10 text-center">
                    <i class="far fa-edit fa-8x" style="color: #fcaf3e;"></i>
                    <h1 class="text-secondary text-center">Design</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, possimus beatae. Architecto
                        vel, amet excepturi nisi quidem aliquid facilis in.
                    </p>
                    <button type="button" class="btn btn-outline-warning ">Learn More</button>
                </div><br>
                <div class="col-lg-4 col-sm-10 text-center">
                    <i class="fas fa-cogs fa-8x" style="color: #fcaf3e;"></i>
                    <h1 class="text-secondary text-center">Creativity</h1>
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, possimus beatae. Architecto
                        vel, amet excepturi nisi quidem aliquid facilis in.
                    </p>
                    <button type="button" class="btn btn-outline-warning ">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning display-2 p">Jobs</h1>
                    <p class="text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam, a.
                        Omnis, numquam!</p>
                </div>
            </div>
            <div class="row">
                
            <?php $req= $bdd->query("SELECT * FROM job");
                while($donnees= $req->fetch()){
             ?>
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="card border-0 p-2" style="width: 18rem;">
                        <img src="images/<?php echo $donnees['photo']?>" class="card-img-top" alt="...">
                        <h2 class="text-warning my-3">
                        <?php echo $donnees['titre'] ?>
                        </h2>
                        <div class="card-body">
                            <p class="card-text">
                                <?php echo $donnees['description_job'] ?>
                                </p>
                        </div>
                    </div>
                </div>

                <?php }?>
              
            </div>
        </div>
    </section>
    <section class="bg-secondary">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-warning display-2">Team</h1>
                    <p class="text-secondary text-white">Lorem ipsum dolor, it amet consectetur adipisicing elit.
                        Nam, a. Omnis, numquam!</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col-lg-4">
                    <div class="card h-100">
                        <img src="images/kid1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Michael</h5>
                            <p class="card-text">This is a longer card with is a little bit longer.</p>
                            <div class="text-right">
                                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100">
                        <img src="images/kid2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jack</h5>
                            <p class="card-text">This is a short card.</p>
                            <div class="text-right">
                                <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                                <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="card h-100">
                        <img src="images/kid3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ann</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural
                                lead-in to additional content.</p>
                        </div>
                        <div class="text-right">
                            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                            <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br><br>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="text-warning text-center display-2 p">Progress</h1>
                    <p class="text-secondary text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Nam, a. Omnis, numquam!</p>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10 text-secondary">
                    <h3>HTML</h3>
                    <div class="progress-bar bg-secondary mb-3">
                        <div class="progress-bar bg-primary text-white" style="width: 50%">50%</div>
                    </div>
                    <h2>CSS</h2>
                    <div class="progress-bar bg-secondary mb-3">
                        <div class="progress-bar bg-danger text-white" style="width: 70%">70%</div>
                    </div>
                    <h2>JavaScript</h2>
                    <div class="progress-bar bg-secondary mb-3">
                        <div class="progress-bar bg-warning text-white" style="width: 75%">75%</div>
                    </div>
                    <h2>Bootstrap</h2>
                    <div class="progress-bar bg-secondary mb-3">
                        <div class="progress-bar bg-success text-white" style="width: 75%">75%</div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="bg-light p-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col text-center mb-3">
                    <h1 class="text-warning  display-2 contact">Contact Us</h1>
                    <p class="text-secondary text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Nam, a. Omnis, numquam!</p>
                </div>

            </div>
            <div class="row justify-content-center form_">
                <div class="col-lg-6 ">

                    <div class="text-center text-secondary">
                        <h2>Got Question?</h2>
                        <p>Stay Connected</p>
                    </div>

                    <form action="" class="text-muted ">
                        <div class="form-group  ">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control ">
                        </div>
                        <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="3" class="form-control"></textarea>
                        </div><br>
                        <button class="btn btn-outline-warning btn-block" type="submit">Submit Question</button>


                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class=" text-center p-1 bg-secondary ">
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h3 class="text-white p-3 font-weight-light text-capitalize">Pure bootstrap project</h3>
                    <h3 class="text-light mb-3  font-italic">Lorem ipsum dolor sit amet.</h3>
                    <a href="#"><i class="fab fa-facebook-square fa-2x" style="color: #3465a4;"></i></a>
                    <a href="#"><i class="fas fa-globe-americas fa-2x" style="color: #cc0000;"></i></a>
                    <a href="#"></a><i class="fab fa-twitter  fa-2x" style="color: #3465a4;"></i></a>
                    <a href="#"><i class="fab fa-youtube fa-2x" style="color: #cc0000;"></i></a>
                    <p class="text-light py-4">©Copyright 2018 - Made by CodeAndCreate</p>
                </div>
            </div>

    </footer>



</body>

</html>