﻿<div class="pageCustom">
	<h3 id="resumeHeader" style="color:black;padding:45px 0px">DROP ME A LINE</h3>
	<div class="container ">
        <div class="row">
			<!--Map-->
            <div class="col-md-6 boxForm">
                <div id="googlemaps"></div>
            </div>

            <!--Form-->
            <div class="col-md-6 boxForm">
                <form name="contactform" method="post" action="features.php">
                    <label class="sr-only" for="inputName">Name</label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required="required">
                    
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Username@domain.com" required="required">
                    
                    
                    <label class="sr-only" for="inputSubject">Subject</label>
                    <input id="inputSubject" type="text" name="subject" placeholder="Subject" required="required" class="form-control" />

                    <label class="sr-only" for="inputMessage">Message</label>
                    <textarea id="inputMessage" placeholder="Message" name="messages" required="required" rows="3" class="form-control"></textarea>

                    <input type="submit" value="Submit">   <a href="monvie.000webhostapp.com" class="btn btn-primary btn-block">Send </a> </input>
				</form>
            </div>
        </div>
    </div>
</div>	