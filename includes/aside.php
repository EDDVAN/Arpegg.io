<div class="aside aside-sticky">
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
                        <?php 
                        if(check_if_admin()){
                            echo '<tr class="aside-line">
                                    <td class="aside-cell" colspan="3">
                                        <a class="main-sidelink side-link" href="Dashboard.php">
                                            Dashboard
                                        </a>
                                    </td>
                                </tr>';
                        }
                        ?>
                    </table>
    
                </div>
            </div>
