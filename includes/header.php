        <section id="page_header">
            <div id="navbar">
                <div id="pic_div">
                    <a href="home.php">
                        <img id="lion_red" src="images/icons/Logo_red.png" height="120px" width="90px">
                        <img id="lion_black" src="images/icons/Logo.png" height="120px" width="90px">
                    </a>
                </div>
                <div id="nav_title_div">
                    <a class="title_desktop" href="home.php">Home</a>
                    <a class="title_desktop" href="gallery.php">Galerie</a>
                    <a class="title_desktop" href="video.php">Video</a>
                    <a id="title_mobile" href="home.php">SPREITENBACH</a>
                </div>
                <div id="dp_menu_div">
                    <div id="dropdown">
                        <button id="dropdown_btn">
                            <div id="menu_writing_div">
                                <label id="menu_writing">MENU</label>
                            </div>
                            <div id="burger_div">
                                <img id="burger_red" src="images/icons/hamburger_red.png" height="35px" width="35px">
                                <img id="burger_black" src="images/icons/hamburger_black.png" height="35px" width="35px">
                            </div>
                        </button>
                        <div id="dropdown_content">
                            <a href="home.php">Start</a>
                            <a href="gallery.php">Galerie</a>
                            <a href="video.php">Video</a>
                            <a href="impressum.php">Impressum</a>
                            <label id="hamburger_welcome">Willkommen,</label>
                            <label id="hamburger_display_name"><?=$_SESSION["displayName"]?></label>
                        </div>
                    </div>
                </div>
                <div id="display_name_div">
                    <label>Willkommen, <label id="display_name"><?=$_SESSION["displayName"]?></label></label>
                </div>
            </div>
        </section>