<nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav mt-2" style="gap: 6px;">
                            <a class="nav-link <?php if($page=='dashboard')echo 'active'?>" href="dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link <?php if($page=='users')echo 'active'?>" href="./users">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-users"></i>
                                </div>
                                Users
                            </a>
                            <a class="nav-link <?php if($page=='subjects')echo 'active'?>" href="./subjects">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-book-open"></i>
                                </div>
                                Subjects
                            </a>
                            <a class="nav-link <?php if($page=='contents')echo 'active'?>" href="./contents">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-voicemail"></i>
                                </div>
                                Contents
                            </a>
                            <a class="nav-link <?php if($page=='news')echo 'active'?>" href="./news">
                                <div class="sb-nav-link-icon">
                                <i class="fa-regular fa-newspaper"></i>
                                </div>
                                News
                            </a>
                            <a class="nav-link <?php if($page=='contact')echo 'active'?>" href="./contact">
                                <div class="sb-nav-link-icon">
                                <i class="fa-solid fa-phone"></i>
                                </div>
                                Contact
                            </a>
                            <!-- <a class="nav-link <?php if($page=='profile')echo 'active'?>" href="./profile">
                                <div class="sb-nav-link-icon">
                                <i class="fa-regular fa-user"></i>
                                </div>
                                Profile
                            </a> -->
                            
                            
                            <a class="nav-link <?php if($page=='pass_change')echo 'active'?>" href="./change_pass">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-unlock-keyhole"></i>
                                </div>
                                Change Password
                            </a>
                            <a class="nav-link <?php if($page=='log_out')echo 'active'?>" href="./logout">
                                <div class="sb-nav-link-icon">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                                Logout
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Welcome, Mr. Rahul Kumar</div>
                    </div>
                </nav>