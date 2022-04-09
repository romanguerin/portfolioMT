<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>The Vivid Dream</title>
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../style/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="../style/responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="../script/main.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="../index.php">The Vivid Dream</a></h1>
                <p>Graduation Project by <a href="https://www.behance.net/romannguerac3e">Roman Guerin</a></p>
            </div>
            <div id="menu" class="topnav">
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="refs.php">Refs</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <!--Post 1-->
                    <!--Page Turner-->
                    <div id="1" class="pagecontainer" style="display: block;">
                        <?php
                        include '../posts/post1.php'
                        ?>
                        <p class="subPage">
                            1 of 6
                        </p>
                    </div>

                    <div id="2" class="pagecontainer" style="display: none;">
                        <?php
                        include '../posts/post2.php'
                        ?>
                        <p class="subPage">
                            2 of 6
                        </p>
                    </div>

                    <div id="3" class="pagecontainer" style="display: none;">
                        <?php
                        include '../posts/post3.php'
                        ?>
                        <p class="subPage">
                            3 of 6
                        </p>
                    </div>
                    <div id="4" class="pagecontainer" style="display: none;">
                        <?php
                        include '../posts/post4.php'
                        ?>
                        <p class="subPage">
                            4 of 6
                        </p>
                    </div>

                    <div id="5" class="pagecontainer" style="display: none;">
                        <?php
                        include '../posts/post5.php'
                        ?>
                        <p class="subPage">
                            5 of 6
                        </p>
                    </div>

                    <div id="6" class="pagecontainer" style="display: none;">
                        <?php
                        include '../posts/post6.php'
                        ?>
                        <p class="subPage">
                            6 of 6
                        </p>
                    </div>

                    <div class="turner">
                        <a href="#" class="previous round" onclick="prev()"><</a>
                        <a href="#" onclick="page('1')">1 </a>
                        <a href="#" onclick="page('2')">2 </a>
                        <a href="#" onclick="page('3')">3 </a>
                        <a href="#" onclick="page('4')">4 </a>
                        <a href="#" onclick="page('5')">5 </a>
                        <a href="#" onclick="page('6')">6 </a>
                        <a href="#" class="next round" onclick="next()">></a>
                    </div>​


                    <div style="clear: both;">&nbsp;</div>
                </div>


                <!-- end #content -->
                <div id="sidebar">
                    <ul>
                        <li>
                            <div id="search" >
                                <form method="get" action="#">
                                    <div>
                                        <input type="text" placeholder="search" name="s" id="search-text" value="" />
                                        <input type="submit" id="search-submit" value="GO" />
                                    </div>
                                </form>
                            </div>
                            <div style="clear: both;">&nbsp;</div>
                        </li>
                        <li>
                            <h2>Posts</h2>
                            <ul>
                                <li><a href="../sub/aiArt.php">Ai in Art</a></li>
                                <li><a href="../sub/immWorld.php">Immersive Worlds Principles</a></li>
                                <li><a href="../sub/secretEx.php">Immersive Worlds Secrets</a></li>
                                <li><a href="../sub/VRBook.php">The VR Book</a></li>
                                <li><a href="../sub/communication.php">Communication</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Demos</h2>
                            <ul>
                                <li><a href="../demos/tensorClass.php">KNNClassifier()</a></li>
                                <li><a href="../demos/poseNet.php">PoseNet()</a></li>
                                <li><a href="../demos/tensorImage.php">TensorImage()</a></li>
                                <li><a href="../demos/bodyPix.php">BodyPix()</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#">February 2019</a></li>
                                <li><a href="#">March 2019</a></li>
                                <li><a href="#">April 2019</a></li>
                                <li><a href="#">May 2019</a></li>
                            </ul>
                        </li>
                        <li>
                            <h2>TAGS</h2>
                            <p><a href="#">Immersive</a></p>
                        </li>
                    </ul>
                </div>
                <!-- end #sidebar -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
    <!-- end #page -->
    <div id="footer">
        <p>All rights reserved by <a href="http://ac3-studio.com/">AC3-Studio</a>&nbsp;|&nbsp;
            Design by <a href="https://www.behance.net/romannguerac3e">Roman Guerin</a></p>
    </div>
</div>
<!-- end #footer -->
</body>
</html>
