<?php
$title = 'Form';
include 'includes/header.php';
?>



    <button onclick="topFunction()" id="scroll" title="Go to top">Top</button>

<?php include 'includes/help.php' ?>

    <button class="flow">Need help?</button>

        <form name="myForm" id="myForm">
            <div class="form-box">
                <div class="form-group">
                <label for="firstname">First name:</label>
                <input type="text" name="firstname" placeholder="Your name" id="firstname" required value="toto">
                </div>
                <div class="form-group">
               <label for="surname">Surname:</label>
               <input type="text" name="surname" placeholder="Your surname" id="surname" required value="toto">
               </div>
               <div class="form-group">
               <label for="phone">Phone:</label>
               <input type="text" name="phone" placeholder="+3710000000" id="phone" required value="+3710000000">
               </div>
               <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" name="email" placeholder="your@mail.com" id="email" value="toto@jee.fr">
               </div>
               <div class="form-group">
               <label for="message">Message:</label>
               <textarea name="message" id="message" value="yo">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</textarea>
               </div>
               <div class="form-group">
                <input type="checkbox" name="agreement" value="terms" id="agreement" required checked>I agree with terms and conditions
               </div>
               <div class="form-group">
                <input type="submit" value="Submit" id="mysubmit">
               </div>
            </div>
        </form>
        <div class="starpene"></div>
        <div class="user-data" id='user-data'>
            <div class="mess-box">
                <p>On the <span id="date"></span> sent!</p>
            <div class="in-box">
                <span id="messbox"></span>

            </div>
            <div class="group">
            <form name="otherForm">
                <div class="form-group">
                    <label for="namm">Name:</label><span id="name1"></span>
                    </div>
                    <div class="form-group">
                    <label for="emaa">Email:</label><span id="email1"></span>
                    </div>
                    <div class="form-group">
                    <label for="phoo">Phone:</label><span id="phone1"></span>   
                </div>
            </form>
            </div>    
            </div> 
        </div>

<?php include 'includes/footer.php' ?>