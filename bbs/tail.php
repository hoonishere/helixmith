<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

</div>
        </div>
        <!--//1-->
        <!--divider-->
        <div class="divider"></div>
        <!--//divider-->
        <!--footer-->
        <div class="footer">
            <div class="menus">
                <!-- <a href="#">
                    Privacy Policy
                </a>
                /
                <a href="careers.html">
                    Careers
                </a> -->

            </div>
            <div class="info">
                <div class="left">
                    21, Magokjungang 8-ro 7-gil, Gangseo-gu, Seoul 07794, Korea<br>
                    10390 Pacific Center Ct., San Diego, CA, 92121, US<br>
                    Tel. 82.2.2102.7200 / Fax. 82.2.873.8022 / Email. contact@helixmith.com
                </div>
                <div class="right">
                    <img src="../img/logo_footer.svg" /><br>
                    Copyright © 2019 Helixmith Co., Ltd. All Rights Reserved.
                </div>
            </div>
        </div>
        <!--//footer-->
    </div>
    <!--//wrapper-->
    <!--mobile Menu-->
    <div id="mobileMenu">
        <ul>
        <li>
                <a href="../ourcompany">
                    Our Company
                </a>
            </li>
            <li>
                <a href="../ourpoeple">
                    Team Member
                </a>
            </li>
            <li>
                <a href="../ouradvisors">
                    Our Advisors
                </a>
            </li>
            <li>
                <a href="../locations">
                    Locations
                </a>
            </li>
            <li>
                <a href="../engensis">
                    Engensis Overview
                </a>
            </li>
            <li>
                <a href="../engensis_dpn">
                    DPN, DFU, ALS, CAD
                </a>
            </li>
            <li>
                <a href="../engensis_pub">
                    Engensis Publications
                </a>
            </li>
            <li>
                <a href="../platform">
                    Early Phase Programs
                </a>
            </li>
            <li>
                <a href="/bbs/board.php?bo_table=notice&page=1">
                    News
                </a>
            </li>
            <li>
                <a href="../careers">
                    Careers
                </a>
            </li>
            <li>
                <a href="../" class="smallText">
                    English
                </a>
            </li>
            <li>
                <a href="http://www.viromed21.com" class="smallText" target="_blank">
                    Korean
                </a>
            </li>
            <li>
                <div class="button" id="hidePanel">
                    <img src="../img/close_ico.svg" />
                </div>
            </li>
        </ul>
    </div>
    <!--//mobile Menu-->
    <!--js-->
    <script src="../js/wow.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/common.js"></script>
    <script>
        wow = new WOW(
            {
                animateClass: 'animated',
                offset: 100,
                callback: function (box) {
                    console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
            }
        );
        wow.init();

        $(document).ready(function () {

            $("#showPanel").click(function () {
                $("#mobileMenu").show();
            });

            $("#hidePanel").click(function () {
                $("#mobileMenu").hide();
            });

        });
    </script>
    <!--//js-->