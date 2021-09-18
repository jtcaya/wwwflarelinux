<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

<body id="body">
<?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

<main class="site-content" role="main">

    <!--
    Jumbotron
    ==================================== -->
    <section id="home-jumbotron">
        <div class="jumbotron jumbotron-fluid jumbotron-padding bg-img bg-img-1">
            <div class="container">
                <div class="jumbotron-content">
                <div class="h1">Flare Linux</div>
                <p class="lead">Unleashing value with your computer!</p>
                <a href="#howto" class="btn btn-blue btn-effect">Try Now</a>
                </div>
            </div>
        </div>
    </section>
    <!--
    End Home Jumbotron
    ==================================== -->

    <!-- About section -->
    <section id="about" class="main-section-padding parallax">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center white wow animated fadeInDown">
                        <h2>About Flare Linux</h2>
                    </div>
                    <div class="owl-carousel owl-theme wow animated fadeInUp">
                        <div class="item testimonial-item text-center">
                            <img src="<?=$view['urlbaseaddr'] ?>img/linuxforphp_logo.svg" alt="About Flare Linux">
                            <div class="clearfix">
                                <span>Flare Linux (LfPHP/ASCLinux)</span>
                                <p>Flare Linux is a custom-built GNU/Linux stack to run Flare server nodes.<br /><br />Please visit our website: <a class="text-white" href="https://linuxforphp.net" target="_blank">linuxforphp.net</a>.</p>
                            </div>
                        </div>
                        <div class="item testimonial-item text-center">
                            <img src="<?=$view['urlbaseaddr'] ?>img/flare.jpg" alt="About Flare Networks">
                            <div class="clearfix">
                                <span>Flare Networks</span>
                                <p>Unleashing Value.<br />
                                    Around 65% of the value of Blockchain Tokens is inaccessible to decentralised applications.<br />
                                    That changes now.<br /><br />
                                    Please visit the <a href="https://flare.xyz" target="_blank">Flare website</a>.</p>
                            </div>
                        </div>
                        <div class="item testimonial-item text-center">
                            <img src="<?=$view['urlbaseaddr'] ?>img/xrpl_logo_dark_squared.jpg" alt="About XRPL">
                            <div class="clearfix">
                                <span>XRP Ledger (XRPL)</span>
                                <p>XRP is a digital asset built for payments.<br />
                                    It is the best way to move money around the world;<br />
                                    the fuel for our growing digital economy.<br /><br />
                                    Please visit the <a href="https://xrpl.org" target="_blank">XRPL website</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end About section -->

    <!-- Howto section -->
    <section id="howto" class="main-section-padding">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center">
                    <h2 class="wow animated bounceInLeft">Run a Flare server node on your computer now!</h2>
                    <h3 class="wow animated bounceInRight">Requirements:</h3>
                    <ul class="text-md">
                        <li class="wow animated bounceInRight">Docker is installed on your computer: <a href="https://docs.docker.com/install/" target="_blank">INSTALL DOCKER</a>,</li>
                        <li class="wow animated bounceInRight">An additional 4 GB of RAM for each Node server you wish to run on your computer,</li>
                        <li class="wow animated bounceInRight">An additional 25 GB of storage (HDD or SSD),</li>

                    </ul>
                    <h3 class="wow animated bounceInLeft">Follow these steps:</h3>
                    <ul class="text-md">
                        <li class="wow animated bounceInLeft">Open a Bash or a ZSH terminal (Mac or Linux), or a Powershell CLI (Windows),</li>
                        <li class="wow animated bounceInLeft">Enter the following command in the terminal, and wait for the server to finish bootstrapping (approx. 5 minutes):</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <pre><code class="pre-code-custom">docker run -it --rm -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.0.0-rc2 flare --songbird</code></pre>
                </div>
                <div class="col-sm-2">
                    <button id="myDockerCommand1Button"><span data-feather="copy" /></button>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <hr>
                    <p>
                        <span class="text-danger">!! PLEASE NOTE !!</span><br />
                        You can run the server in detached mode by adding the 'd' option, like so:<br /><br />
                        <span class="command-styling">docker run -dit [...]</span><br /><br /><br />
                        You can change the version of the <i>Flare server node</i>, by adding a Git commit hash to end of the command, like so:<br /><br />
                        <span class="command-styling">docker run [...] flare --single e9ca17eace0</span><br /><br /><br />
                        <span class="small">You can find the Flare Network code repository at: <a href="https://gitlab.com/flarenetwork/flare" target="_blank">https://gitlab.com/flarenetwork/flare</a></span>
                    </p>
                    <hr>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="sec-title text-center">
                    <h3 class="wow animated bounceInRight">Start testing the Flare API:</h3>
                    <ul class="text-md">
                        <li class="wow animated bounceInRight">Use <a href="https://www.postman.com/" target="_blank">Postman to start querying</a> your server's API: <a href="https://youtu.be/NPvu6xJ7tsk?t=2447" target="_blank">VIDEO TUTORIAL</a>,</li>
                        <li class="wow animated bounceInRight">Make sure the "P" and "C" chains are bootstrapped, before making other queries!</li>
                    </ul>
                    <h3 class="wow animated bounceInLeft">Validate a real XRP transaction:</h3>
                    <ul class="text-md">
                        <li class="wow animated bounceInLeft">Open <b>ANOTHER</b> Bash or a ZSH terminal (Mac or Linux), or <b>ANOTHER</b> Powershell CLI (Windows),</li>
                        <li class="wow animated bounceInLeft">Enter the following command:</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <pre><code class="pre-code-custom">docker exec -it my_flare_server /bin/bash</code></pre>
                </div>
                <div class="col-sm-2">
                    <button id="myDockerCommand2Button"><span data-feather="copy" /></button>
                </div>
            </div>
            <div class="row">
                <div class="sec-title text-center">
                    <h3 class="wow animated bounceInRight"></h3>
                    <ul class="text-md">
                        <li class="wow animated bounceInRight">Once you are inside the Docker container, enter these commands to validate an XRP transaction:</li>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <pre><code class="pre-code-custom">cd /root/flare/client</code></pre>
                </div>
                <div class="col-sm-2">
                    <button id="myDockerCommand3Button"><span data-feather="copy" /></button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <pre><code class="pre-code-custom">$( ./bridge.sh xrp ) &</code></pre>
                </div>
                <div class="col-sm-2">
                    <button id="myDockerCommand4Button"><span data-feather="copy" /></button>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <pre><code class="pre-code-custom">node --no-warnings prove xrp FFB44382D074CB37B63AC9D3EB2D829C1D1FE4D54DC1A0BCC1D23BAE18D53272 2>/dev/null</code></pre>
                </div>
                <div class="col-sm-2">
                    <button id="myDockerCommand5Button"><span data-feather="copy" /></button>
                </div>
            </div>
            <div class="row">
                <div class="sec-title text-center">
                    <ul class="text-md">
                        <li class="wow animated bounceInLeft">After you are done testing, you can exit the container by typing <span class="command-styling">exit</span>.</li>
                </div>
                <div class="sec-title text-center">
                    <h3 class="wow animated bounceInLeft"></h3>
                    <ul class="text-md">
                        <li class="wow animated bounceInLeft">To stop the Flare server, please enter the following command:</li>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <pre><code class="pre-code-custom">docker stop my_flare_server</code></pre>
                </div>
                <div class="col-sm-2">
                    <button id="myDockerCommand6Button"><span data-feather="copy" /></button>
                </div>
            </div>
            <div class="row">
                <div class="sec-title text-center">
                    <h2 class="wow animated bounceInRight">Enjoy your new Flare server!</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- end Howto section -->

    <!-- Social section -->
    <section id="social" class="main-section-padding parallax">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <div class="sec-title text-center white wow animated fadeInDown">
                        <h2>FOLLOW US</h2>
                        <p>Stay up to date with the latest information about Flare Linux!</p>
                    </div>

                    <ul class="social-button">
                        <li class="wow animated zoomIn"><a href="https://facebook.com/asclinux" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="https://twitter.com/linuxforphp" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="https://instagram.com/linuxforphp" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <!-- end Social section -->

</main> <!-- /content -->

<div class="container-footer">
    <?=$this->section('footer', $this->fetch('footer', ['view' => $view]))?>
</div>

<?php if ($view['bodyjs'] === 1): ?>
    <?=$this->section('bodyjs', $this->fetch('bodyjs', ['view' => $view]))?>
<?php endif ?>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?=$view['urlbaseaddr'] ?>js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
