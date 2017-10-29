<?php include "php/header.php" ?>

    <!--Navbar1-->
    <?php include "php/nav.php" ?>

    <!--Hero banner-->
    <div class="jumbotron jumbotron-fluid" id="banner">
        <!--Personal Quote-->
        <h3>Jolisa Tran </h3>
        <p class="lead">To be who you are</p>
        <!--Avatar-->
        <img src="img/Ava.jpg" class="ava" />
        <!--Relax-->
        <div class="relax"><iframe width="250" height="100" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/50745414&amp;color=%23472d22&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe></div>
    </div>

    <!--Table of Content-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-layout">
                <div class="imgContainer">
                    <a runat="server" href="#About">
                        <img src="img/resume_427.jpg" alt="resume-img" class="img" />
                        <div class="overlay">
                            <p class="center">About Me</p>
                        </div>
                    </a>
                </div>

            </div>

            <div class="col-md-4 col-layout">
                <div class="imgContainer">
                    <a runat="server" href="#Project">
                        <img src="img/project_427.jpg" class="img" alt="project-img" />
                        <div class="overlay">
                            <p class="center">My Projects</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-layout">
                <div class="imgContainer">
                    <a runat="server" href="#Contact">
                        <img src="img/contact_427.jpg" class="img" alt="contact-img" />
                        <div class="overlay">
                            <p class="center">Contact me</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--About Me-->
    <div class="col-md-6 boxInfo">
        567 Military Trail<br />
        Toronto, ON M1E 4S7<br />

        <br />
        <h5><strong>Phone Number:</strong></h5>
        <a href="tel:+16477853297">6477853297</a>
        <br />

        <h5><strong>Email:</strong></h5>
        <a href="mailto:ctran66@my.centennialcollege.ca">ctran66@my.centennialcollege.ca</a><br />

        <hr class="sns" />
        <div id="sns">

            <a href="https://www.facebook.com/lisa.chan.toronto"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/u/0/111764860534336794242"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a>
            <a href="https://github.com/LisaTheTechnologue"><i class="fa fa-github fa-2x" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/jolisa-chan/"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
        </div>
    </div>

    <!--Resume-->
    <ul class="timeline">
        <li><div class="tldate">Education</div></li>
        <!--Centennial College-->
        <li>
            <div class="tl-circ"></div>
            <div class="timeline-panel">
                <div class="tl-heading">
                    <h4>Software Engineering Technology Diploma</h4>
                    <h5 class="tl-smallCap">Centennial College, Toronto</h5>
                </div>
                <div class="tl-body">
                    <ul>
                        <li>Advanced Database Concepts</li>
                        <li>Advanced Object Oriented Concepts</li>
                        <li>Web Development</li>
                        <li>Business/Technical Analyst</li>
                    </ul>
                </div>
            </div>
        </li>

        <li><div class="tldate">Work Experience</div></li>

        <li>
            <div class="tl-circ"></div>
            <div class="timeline-panel">
                <div class="tl-heading">
                    <h4>Team Member</h4>
                    <h5 style="font-weight: bold">Cara Inc.</h5>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> June - September 2017</small></p>
                </div>
                <div class="tl-body">
                    <ul>
                        <li>Handled cash transactions accurately and efficiently.</li>
                        <li>Experienced working with multiple-tasking in fast-paced environment.</li>
                        <li>Worked effectively and efficiently with team to deliver quality products and keep up with demand.</li>
                        <li>
                            Went above and beyond duties to address customer questions and concerns as well as providing them with their desired product
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="timeline-inverted">
            <div class="timeline-panel">
                <div class="tl-heading">
                    <h4>Lab Assistant</h4>
                    <h5 style="font-weight: bold">Centennial College</h5>
                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> September 2017 – Present</small></p>
                </div>
                <div class="tl-body">
                    <ul>
                        <li>Assist people in technology for students with disabilities.</li>
                        <li>Able to connect people with diverse backgrounds, experiences, and interests.</li>
                        <li>Worked effectively and efficiently with team to deliver quality products and keep up with demand.</li>
                    </ul>
                </div>
            </div>
        </li>
    </ul>

    <!--Skills-->
    <div id="resume">
        <h1>Technical Skills</h1>
        <div class="container">
            <div class="row text-center" id="iconRow">
                <div class="col-md-4 sm-dev-padding">
                    <i class="fa fa-file-code-o fa-3x" aria-hidden="true"></i>
                    <h2>Programming</h2>

                    <div class="SkillBar">
                        <div id="Skill-HTML"> <span class="Skill-Area">HTML</span> <span class="PercentText fadeIn fadeIn-3s fadeIn-Delay-3sfadeIn fadeIn-3s fadeIn-Delay-3s">100%</span> </div>
                    </div>

                </div>
                <div class="col-md-4 sm-dev-padding">
                    <i class="fa fa-magic fa-3x" aria-hidden="true"></i>
                    <h2>Designing</h2>
                </div>
                <div class="col-md-4 sm-dev-padding">
                    <i class="fa fa-database fa-3x" aria-hidden="true"></i>
                    <h2>Data Managing</h2>
                </div>
            </div>
        </div>
    </div>

    <!--Project-->
    <!--Contact Page-->
    <hr class="ruler" id="Contact" />
    <h2>Contact</h2>
    <div class="container pageCustom">

        <div class="container ">
            <div class="row">

                <!--Map-->
                <div class="col-md-6 boxForm">
                    <div class="row">
                    </div>
                </div>

                <!--Form-->
                <div class="col-md-6 boxForm">
                    <div class="row">
                        <div class="form-inline">
                            <label class="sr-only" for="inputName">Name</label>
                            <div class="col-sm-6 inputContact">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                            <label class="sr-only" for="inputEmail">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Username@domain.com">
                            </div>
                        </div>

                        <label class="sr-only" for="inputSubject">Subject</label>
                        <input id="inputSubject" type="text" placeholder="Subject" required="required" class="form-control" />

                        <label class="sr-only" for="inputMessage">Message</label>
                        <textarea id="inputMessage" placeholder="Message" required="required" rows="3" class="form-control"></textarea>

                        <a href="Default.aspx" class="btn btn-primary btn-block">Send </a>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <br />


<?php include "php/footer.php" ?>
<?php include "php/script.php" ?>



