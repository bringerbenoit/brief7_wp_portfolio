<?php get_header() ?>

    
<section id="ancre_aboutme">
    <div class="container text-center">
        <div class="row bcg_color"> 
            <div class="col-1 col-lg-2 mt-4 m-b4">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-list"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item active color-text" href="#">HOME</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item color-text" href="#ancre_aboutme">ABOUT-ME</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item color-text" href="#brief1">MINI BRIEF1</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item color-text" href="#brief2">MINI BRIEF2</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item color-text" href="#ancre_contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-11 col-lg-10 align-self-center color-text mt-4 m-b4 ">
                <h4>MON EXPERIENCE</h4>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container text-center">
        <div class="row bcg_color"> 
            <div class="col-12 mt-4 m-b4">
                <div class="link">
                    <a href="#"><h4>Mon curriculum vitae</h4></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container text-center ">
        <div class="row bcg_color"> 
            <div class="col-12 mt-4 m-b4">
                <p>Après mon bac pro MELLEC j’ai voulu tester plusieurs métiers pour en trouver un qui me plairait mais le souci est que je voulais être développeur web. C’est pour ça que j’ai decidé de trouver une formation développeur web et que j'en suis là.</p>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container text-center bcg_color">
        <div class="row  justify-center"> 
            <div class="col-sm-12 col-md-6 justify-center mt-4 m-b4">
                <div class="link">
                    <a href="#">
                        <div class="card" style="width: 100%;" id="brief1">
                            <img src="http://localhost/wordpress-Portfolio/wp-content/uploads/2023/02/minibrife1.png" class="card-img-top" alt="image premier proget">
                            <div class="card-body">
                                <h5 class="card-title">MINI BRIEF 1</h5>
                                <p class="card-text"> Ce mini brief était d’imiter un site pour faire un à notre image avec un sujet que l’on a choisi nous même.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 justify-center mt-4 m-b4">
                <div class="link">
                    <a href="#">
                        <div class="card" style="width: 100%;" id="brief2">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="http://localhost/wordpress-Portfolio/wp-content/uploads/2023/02/minibrife2.1.png" class="d-block w-100" alt="home project2">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="http://localhost/wordpress-Portfolio/wp-content/uploads/2023/02/minibrief2.2.png" class="d-block w-100" alt="page 2 project2">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                </div>
                            <div class="card-body">
                                <h5 class="card-title">MINI BRIEF 2</h5>
                                <p class="card-text"> Ce mini brief était d’imiter un site pour faire un à notre image avec un sujet que l’on a choisi nous même.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class=container>
<?php if (have_posts()): // ON verifie si on a des articles ?>
            <div class="row  text-center">
                        <?php while(have_posts()): the_post();// the_post sert a déclarer l'articles ) // on utilise cette boucle tant que il ya des articles?>
                        <div class="col-sm-12 col-md-6 mt-4 m-b4">


                            <div id="card-projet" class="card">
                                <?php the_post_thumbnail('medium',['class' => 'card-img-top', 'alt' => '', 'style' => 'height: 300px;']) ?>
                              <div class="card-body">
                                <h5 class="card-title"><?php the_title() ?></h5>
                                <p class="card-text"> 
                                    <?php the_content('En voir plus') // afficher le contenue de notre article ?>
                                </p>
                                <a href="<?php the_permalink() ?>" class="card-link">Plus de détails</a>
                              </div>
                            </div>
                            </div>
                            <?php endwhile ?>
                        </div>
        </div>
                        <?php else: ?>
                            <p> Pas d'articles </p>
                        <?php endif; ?>

                        <?php wp_footer() ?>
                        <?php get_footer() ?>

</div>





<?php get_footer() ?>