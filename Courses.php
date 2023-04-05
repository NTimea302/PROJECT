<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Courses</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Courses.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.9.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Courses">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-e312"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="399" data-image-height="138">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-hover-custom-color-2" href="About.php" style="padding: 10px 54px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-hover-custom-color-2" href="Courses.php" style="padding: 10px 54px;">Courses</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-hover-custom-color-2" href="Teachers.php" style="padding: 10px 54px;">Teachers</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-custom-color-3 u-text-hover-custom-color-2" href="Prices.php" style="padding: 10px 54px;">Prices</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="About.php">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Courses.php">Courses</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Teachers.php">Teachers</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Prices.php">Prices</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
      <h2> Our available courses: </h2>

      <div style = "text-align:left; font-size:20px; font-family:Times New Roman;">
      <?php
            $serverName = "TIMI"; //serverName\instanceName
            $connectionInfo = array( "Database"=>"OnlineTutor");
            $conn = sqlsrv_connect( $serverName, $connectionInfo);
            
            if( !$conn ) {
                echo "Connection could not be established.<br />";
                die( print_r( sqlsrv_errors(), true));
            }
        ?>

      <?php
        $sqlQuery = "SELECT * FROM Subjects";
        $stmt = sqlsrv_query( $conn, $sqlQuery);
       
        echo "<section class=\"u-clearfix u-gradient u-section-1\" id=\"sec-507a\">";
        echo "<div class=\"u-clearfix u-sheet u-valign-middle u-sheet-1\">";
        echo "<div class=\"u-expanded-width u-list u-list-1\">";
        echo "<div class=\"u-repeater u-repeater-1\">";

          while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                  

                        echo "<div class=\"u-container-style u-list-item u-repeater-item u-video-cover u-white\">";
                        echo "<div class=\"u-container-layout u-similar-container u-container-layout-1\">";
                        echo "<h3 class=\"u-text u-text-default u-text-1\">" .  $row['name']  . "</h3>";
                        echo "<div class=\"u-border-4 u-border-palette-2-light-1 u-expanded-width u-line u-line-horizontal u-line-1\"></div>";
                        echo "<p class=\"u-text u-text-4\">Teachers: </p>";
                        echo "<ul class=\"u-text u-text-2\">";

                        $myvar = $row['subject_ID'];
                        $sqlQuery2 = "SELECT * FROM TeacherSubjects WHERE sub_ID = $myvar";
                        $stmt2 = sqlsrv_query( $conn, $sqlQuery2);
                        while( $row2 = sqlsrv_fetch_array( $stmt2, SQLSRV_FETCH_ASSOC) ){
                            //echo "<li>" . $row2['teach_ID'] . "</li>";
                            $myvar2 = $row2['teach_ID'];
                            $stmt3 = sqlsrv_query( $conn, "SELECT * FROM Teachers WHERE Teach_ID = $myvar2");
                            while( $row3 = sqlsrv_fetch_array( $stmt3, SQLSRV_FETCH_ASSOC) ) 
                            {
                                //echo $row3['name'] ."<br />";
                                echo "<li>" . $row3['name'] . "</li>";
                            }
                        }

                        echo "</ul>";
                        echo "<p class=\"u-text u-text-3\">Faculty: ". $row['faculty'] ."</p>";
                        echo "<p class=\"u-text u-text-3\">Year: ".  $row['year'] ."</p>";
                        echo "<a href=\"\" class=\"u-border-none u-btn u-button-style u-palette-2-light-1 u-btn-1\">SUBSCRIBE TO COURSE</a>";
                        echo "</div>";
                        echo "</div>";
          }
            
          echo "</div>";
          echo "</div>";
          echo " </div>";
          echo "</section>";
        sqlsrv_free_stmt( $stmt);
        sqlsrv_free_stmt( $stmt2);
    ?>
    
  </body>
</html>