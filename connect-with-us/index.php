<?php 

$meta = array(
    "breadcrumb" 		=> "Connect",
    "title" 			=> "Connect With Us",
    "page_description" 	=> "",
    "page_keywords" 	=> "",
    "page_image" 		=> "",
    "page_url" 			=> "connect-with-us/",
);

include ('../scripts/include/module_header.php'); 
?>

<main id = "main" class = "secondary rep-clients">
    <div class = "container-fluid">
        <div class = "row">
            <div class="hero rep-clients" >
                <div class = "col-sm-12">
                    <div class = "text-wrapper absolute" >
                        <h2 data-aos="fade-right" data-aos-delay = "1000">
                            Motum, The Way Forward <div class = "dash"></div>
                        </h2>
                        <h1 data-aos="fade-right" data-aos-delay = "1500">
                            Connect With Us
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class = "container-fluid">
    
        <div class = "row">
            
            <div class = "panel-row">
                
                <div class = "col-xs-12">
                    <div class = "panel-text" data-aos="fade-up">
                        <h3>Connect With Us</h3>
                        <p>
                            Please fill out the form below and one of our representatives will be in contact with you.  
                        </p>

                        <form>
                            <div class = "form-request">
                                <div class="form-group">
                                    <label for="custName">Name </label>
                                    <input type="text" class="form-control" id="custName" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="custEmail">E-Mail Address</label>
                                    <input type="text" class="form-control" id="custEmail" placeholder="E-Mail Address">
                                </div>
                                <div class="form-group">
                                    <label for="custPhone">Phone Number</label>
                                    <input type="text" class="form-control" id="custPhone" placeholder="Phone Number">
                                </div>
                                <label>How should we contact you?</label>
                                <div class = "clearfix"></div>
                                <label class="radio-inline">
                                    <input type="radio" name="contactPref" id="contact1" value="Phone" checked> Phone
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="contactPref" id="contact2" value="Email"> E-Mail
                                </label>
                                <div class = "clearfix"></div>
                                <button type="submit" id = "connect-button" class="btn btn-motum">Submit</button>
                            </div>
                            <div class = "form-response">
                                <h3>Thank you</h3>
                                <p>One of our representatives will be in contact with you via your selected preference soon.<p>
                            </div>
                        </form>
                    </div>
                    <br /><br /><br />
                </div>
            </div>
        </div>
    </div>



</main>



<!-- body content -->


<?php include ('../scripts/include/module_footer.php'); ?>