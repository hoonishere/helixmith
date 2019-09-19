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
                    5th Fl. Bldg. 203 Seoul National University, 1 Gwanak-ro, Gwanak-gu, Seoul 00826, Republic of
                    Korea<br>
                    10390 Pacific Center Ct., San Diego, CA, 92121, US<br>
                    Tel. 82.2.2102.7200 / Fax. 82.2.873.8022 / Email. hxcontact@helixmith.com
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
                <a href="about_1.html">
                    Our Company
                </a>
            </li>
            <li>
                <a href="about_2.html">
                    Team Member
                </a>
            </li>
            <li>
                <a href="about_3.html">
                    Locations
                </a>
            </li>
            <li>
                <a href="vm202.html">
                    Engensis Overview
                </a>
            </li>
            <li>
                <a href="vm202_dpn.html">
                    Engensis
                </a>
            </li>
            <li>
                <a href="platform.html">
                    Platform & Technology
                </a>
            </li>
            <li>
                <a href="botanicals.html">
                    CERESMITH
                </a>
            </li>
            <li>
                <a href="#">
                    News
                </a>
            </li>
            <li>
                <a href="careers.html">
                    Careers
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