<!--Contact Page-->
<hr class="ruler" id="Contact" />
<h2>Contact</h2>
<div class="pageCustom">
	    <div class="container ">
        <div class="row">
			<!--Map-->
            <div class="col-md-6 boxForm">
                <div id="googlemaps"></div>
            </div>

            <!--Form-->
            <div class="col-md-6 boxForm">
                <div class="row">
                    <div class="form-inline">
                        <label class="sr-only" for="inputName">Name</label>
                        <div class="col-sm-6">
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
	