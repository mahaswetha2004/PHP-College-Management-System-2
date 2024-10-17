<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title>University Website </title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,
        500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
       <link   href="https://icons8.com/icon/118466/facebook" rel="stylesheet">
       <link href="https://icons8.com/icon/98960/linkedin" rel="stylesheet">
       <link href="https://icons8.com/icon/60014/twitter" rel="stylesheet">
       <link href="https://icons8.com/icon/59813/instagram" rel="stylesheet">
    </head>
    <body>

        <!-------------------Header------------------>
        <section class="header">
            <nav>
                <a href="index.html"><img src="images/logo.png"></a>  
                <div class="nav-links" id="navLinks">
                    <ul>
                        <i class="fa fa-times" onclick="hideMenu()"></i>
                        <li><a href="createStudentDetails.php">Create</a></li>
                        <li><a href="viewStudentDetails.php">View</a></li>
                        <li><a href="editviewStudentDetails.php">Update</a></li>
                        <li><a href="deleteviewStudentDetails.php">Delete</a></li>
                    </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>

        </section>


