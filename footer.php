            <!--####################### FOOTER BEGINS HERE########################-->
            <div class="footer-wrapper">
                <!-- FOOTER BEGINS HERE-->
                <footer>

                    <div class="container text-center mw-100">

                        <div id="trophies">
                            <div class="row footer-row-1">
                                <div class="col-md-2 col-sm-4 col-xs-4 trophy-box  ">
                                    <img class="img-fluid" src="/lahdenperam_tasks/images/league_title.svg" alt="league_title">
                                    <div class="titles">19</div>
                                </div>
                                <div class=" col-md-2 col-sm-4 col-xs-4 trophy-box">
                                    <img class="img-fluid " src="/lahdenperam_tasks/images/european_cup.svg" alt="european_cup">
                                    <div class="titles">6</div>
                                </div>
                                <div class=" col-md-2 col-sm-4 col-xs-4 trophy-box">
                                    <img class="img-fluid" src="/lahdenperam_tasks/images/fa_cup.svg" alt="fa_cup">
                                    <div class="titles">8</div>
                                </div>
                                <div class=" col-md-2 col-sm-4 col-xs-4 trophy-box">
                                    <img class="img-fluid" src="/lahdenperam_tasks/images/uefa_cup.svg" alt="uefa_cup">
                                    <div class="titles">3</div>
                                </div>
                                <div class="col-md-2 col-sm-4 col-xs-4 trophy-box">
                                    <img class="img-fluid" src="/lahdenperam_tasks/images/league_cup.svg" alt="league_cup">
                                    <div class="titles">9</div>
                                </div>
                                <div class="col-md-1 col-sm-4 col-xs-4 trophy-box">
                                    <img class="img-fluid" src="/lahdenperam_tasks/images/uefa_super_cup.svg" alt="uefa_super_cup">
                                    <div class="titles">4</div>
                                </div>
                                <div class="col-md-1 col-sm-4 col-xs-4 trophy-box">
                                    <img class="img-fluid" src="/lahdenperam_tasks/images/fifa_club_world_cup.svg"
                                        alt="fifa_club_world_cup">
                                    <div class="titles">1</div>
                                </div>
                            </div>
                        </div>

                        <div class="row footer-row-2 ">
                            <div class="col col-md-12">
                                <span class="social-icon">
                                    <a href="https://www.facebook.com/LiverpoolFC/">
                                        <img src="/lahdenperam_tasks/icons/facebook.svg" width="20" alt="facebook"></a>

                                </span>
                                <span class="social-icon">
                                    <a href="https://www.instagram.com/liverpoolfc/?hl=en"><img
                                            src="/lahdenperam_tasks/icons/instagram.svg" width="20" alt="instagram"></a>

                                </span>
                                <span class="social-icon">
                                    <a
                                        href="https://twitter.com/LFC?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img
                                            src="/lahdenperam_tasks/icons/twitter.svg" width="20" alt="twitter"></a>

                                </span>
                                <span class="social-icon">
                                    <a href="https://uk.linkedin.com/company/liverpool-football-club"><img
                                            src="/lahdenperam_tasks/icons/linkedin.svg" width="20" alt="linkedin"></a>

                                </span>
                            </div>

                            <div class="col col-md-12">
                                This is the awesome fan blog of the Liverpool FC
                            </div>
                        </div>
                        <div class="row footer-row-3">
                            <div class=" col-md-6 order-2 order-md-1 float-left">
                                &copy; Copyright 2023 - Liverpool Fan Club - All Rights Reserved.
                            </div>
                            <div class="col-md-6 order-1 order-md-1 float-right">
                            <?php
                            $name = $_SERVER['PHP_SELF'];
                            $filename=basename($name);
                            
                                
                               // echo "Last modified on " .
                               echo "Last modified on " .date("F d Y H:i:s.", filemtime($filename));
                            ?>
                            </div>
                        </div>
                    </div>

                </footer>
                <!--FOOTER ENDS HERE-->
            </div>
            <!--content wrapper-->
            <!--########################FOOTER ENDS HERE####################-->
        </div>
    </div>
    <!--site container-->




</body>

</html>