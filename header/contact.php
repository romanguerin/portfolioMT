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

                    <h3>Contact Form:</h3>

                    <div class="container">
                        <form action="mailto:romannguerin@gmail.com" method="post" enctype="text/plain">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                            <label for="country">Continent</label>
                            <select id="country" name="country">
                                <option value="AF">Africa</option>
                                <option value="AS">Asia</option>
                                <option value="AU">Australia</option>
                                <option value="EU">Europe</option>
                                <option value="NA">North America</option>
                                <option value="SA">South America</option>
                                <option value="usa">Other</option>
                            </select>

                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                            <input type="submit" value="Submit">
                        </form>
                    </div>



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