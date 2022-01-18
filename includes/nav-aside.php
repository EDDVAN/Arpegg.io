        
        
        <div class="nav">
            <ul class="nav-left">
                <li><a href="Index.php" class="nav-link" id="Link1">Home</a></li>
                <li><a class="nav-link" id="Link2">Learn Music</a></li>
                <li><a href="Midi.php" class="nav-link" id="Link4">MiDi</a></li>
                <li><a href="Loops-Simples.php" class="nav-link" id="Link5">Loops & Simples</a></li>
                <li><a href="About.php" class="nav-link" id="Link6">About</a></li>
                <?php 
                if(check_if_admin()){
                    echo '<li><a href="Dashboard.php" class="nav-link" id="Link7">Dashboard</a></li>';
                }
                ?>
            </ul>
            <div class="nav-right">
                <form>
                    <input type="search" name="search" id="search" class="search-bar" placeholder="Search">
                </form>
                <div>
                <?php
                    if(check_logged()){
                        echo '<button class="btn btn-logo Login" id="nav-cog"><a class="Login-Link" ><i class="fa fa-cog"></i></a></button>';
                    }else{
                        echo '<button class="btn Login"><a class="Login-Link" href="Login-Signup.php?Action=Login">Login</a></button>
                             <button class="btn Sign-up"><a class="Sign-Link" href="Login-Signup.php?Action=Sign-up">Sign-up</a></button>';
                    }
                ?>  
                </div> 
            </div>
        </div>
        <div class="nav nav-mobile">
            <ul class="nav-left">
                <li><a class="nav-link" id="Mobile-Menu">Menu</a></li>
            </ul>
            <div class="nav-right">
                <form>
                    <input type="search" name="search" id="search" class="search-bar" placeholder="Search">
                </form>
                <div>
                <?php
                    if(check_logged()){
                        echo '<button class="btn btn-logo Login" id="nav-cog"><a class="Login-Link" ><i class="fa fa-cog"></i></i></a></button>';
                    }else{
                        echo '<button class="btn Login"><a class="Login-Link" href="Login-Signup.php?Action=Login">Login</a></button>
                             <button class="btn Sign-up"><a class="Sign-Link" href="Login-Signup.php?Action=Sign-up">Sign-up</a></button>';
                    }
                ?>  
                </div> 
            </div>
        </div>
        <div class="LM-dropdown">
            <a href="Music Theory.php">Music Theory</a>
            <a href="The Fundamentals Of Music.php">The Fundamentals</a>
            <a href="Tips-Tricks.php">Tips&Tricks</a>
            <a href="Practice.php">Practice</a>
            <a href="Tools.php">Tools</a>
        </div>
        <?php
            if(check_logged()){
                echo '<div class="UserDropDown">
                <a href="Profile.php">Profile</a>
                <a href="Upload-Loop.php">Upload</a>
                <a href="Setting.php">Setting</a>
                <a href="includes\logout.php">Disconnect</a>
                </div>';
            }
            ?>  
        
        <div class="aside aside-mobile">
            <div class="side-menu" id="side">
                    <table class="aside-table">
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link" id="arp" href="Index.php">
                                    Arpeggio
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link" href="#">
                                    Learn Music
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" id="M-T" colspan="2">
                                <a class="sec-sidelink side-link" href="Music Theory.php">
                                    Music Theory
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" id="M-T" colspan="2">
                                <a class="sec-sidelink side-link" href="The Fundamentals Of Music.php">
                                    The Fundamentals Of Music
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                                <td class="aside-cell sec-sidelink" colspan="2">
                                    <a class="sec-sidelink side-link" href="Practice.php">
                                        Practice
                                    </a>                        
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" colspan="2">
                                <a class="sec-sidelink side-link" href="Tips-Tricks.php">
                                    Tips&Tricks
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" colspan="2">
                                <a class="sec-sidelink side-link" href="Tools.php">
                                    Tools
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link"  href="Midi.php">
                                    MiDi
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link" href="Loops-Simples.php">
                                    Loops & Simples
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="main-sidelink side-link" href="About.php">
                                    About
                                </a>
                            </td>
                        </tr>
                    </table>
    
                </div>
        </div>
        
        <div class="main">
    
            <div class="aside">
                <div class="side-menu" id="side">
                    <table class="aside-table">
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link" id="arp" href="Index.php">
                                    Arpeggio
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link" href="#">
                                    Learn Music
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" id="M-T" colspan="2">
                                <a class="sec-sidelink side-link" href="Music Theory.php">
                                    Music Theory
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" id="M-T" colspan="2">
                                <a class="sec-sidelink side-link" href="The Fundamentals Of Music.php">
                                    The Fundamentals Of Music
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                                <td class="aside-cell sec-sidelink" colspan="2">
                                    <a class="sec-sidelink side-link" href="Practice.php">
                                        Practice
                                    </a>                        
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" colspan="2">
                                <a class="sec-sidelink side-link" href="Tips-Tricks.php">
                                    Tips&Tricks
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="empty-td"></td>
                            <td class="aside-cell sec-sidelink" colspan="2">
                                <a class="sec-sidelink side-link" href="Tools.php">
                                    Tools
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link"  href="Midi.php">
                                    MiDi
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="side-link" href="Loops-Simples.php">
                                    Loops & Simples
                                </a>
                            </td>
                        </tr>
                        <tr class="aside-line">
                            <td class="aside-cell" colspan="3">
                                <a class="main-sidelink side-link" href="About.php">
                                    About
                                </a>
                            </td>
                        </tr>
                    </table>
    
                </div>
            </div>
