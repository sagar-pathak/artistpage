    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    <?php echo DASHBOARD_NAME; ?>
                </a>
            </div>

            <ul class="nav">
                <li <?php if(isset($active_home)) echo $active_home;?> >
                    <a href="<?php echo BASE_PATH."/home"; ?>">
                        <i class="pe-7s-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li <?php if(isset($active_about)) echo $active_about;?>>
                    <a href="<?php echo BASE_PATH."/about"; ?>">
                        <i class="pe-7s-user"></i>
                        <p>About</p>
                    </a>
                </li>
                <li <?php if(isset($active_gallery)) echo $active_gallery;?>>
                    <a href="<?php echo BASE_PATH."/gallery"; ?>">
                        <i class="pe-7s-photo-gallery"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li <?php if(isset($active_videos)) echo $active_videos;?>>
                    <a href="<?php echo BASE_PATH."/videos"; ?>">
                        <i class="pe-7s-video"></i>
                        <p>Videos</p>
                    </a>
                </li>
                <?php /*
                <li <?php if(isset($active_feedback)) echo $active_feedback;?>>
                    <a href="<?php echo BASE_PATH."/feedback"; ?>">
                        <i class="pe-7s-comment"></i>
                        <p>Feedback</p>
                    </a>
                </li>
                */
                ?>
                <li class="active-pro">
                    <a href="<?php echo BASE_PATH."/password"; ?>">
                        <i class="pe-7s-settings"></i>
                        <p>Change Password</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>