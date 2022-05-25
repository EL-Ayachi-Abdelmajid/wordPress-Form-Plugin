<?php
function insertcont()
{
    global $wpdb;

    if (isset($_POST['sub'])) {
        $name = $_POST['fname'];
        $email = $_POST['lname'];
        $subj = $_POST['subject'];
        $mess = $_POST['msg'];
        $query = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subj','$mess')";
        $wpdb->query($query);

    }
}




?>
<h2>Contact Us</h2>
<!-- 
<form method="post"  >
    <label class="mt-2" for="name">Name</label><br>
    <input type="text" name="name" id="name" placeholder="Name" class="w-100"><br>

    <label class="mt-2" for="email">Email</label><br>
    <input type="text" name="email" id="email" placeholder="Email" class="w-100"><br>

    <label class="mt-2" for="subject">Subject</label><br>
    <input type="text" name="subject" id="subject" placeholder="Subject" class="w-100"><br>

    <label class="mt-2" for="message">Message :</label><br>
    <textarea name="message"   placeholder="Your Message"></textarea><br>
    
    
    <input type="submit" class="mt-2" name="send" value="Send Message"  />
       

</form> -->

<form action="" method="post" enctype="multipart/form-data" onsubmit="<?php insertcont() ?> ">
    <div id="fname">
        <label class="mt-2" for="fname">Full Name:</label><br>
        <input type="text" name="fname" class="w-100"><br>
    </div>

    <div id="lname">
        <label class="mt-2" for="lname">Email:</label><br>
        <input type="email" name="lname" class="w-100"><br>
    </div>

    <div id="subject">
        <label class="mt-2" for="subject">Subject:</label><br>
        <input type="text" name="subject" class="w-100"><br>
    </div>

    <div id="msg">
        <label class="mt-2" for="msg">Message:</label><br>
        <textarea type="text" name="msg" class="w-100"></textarea> <br>
    </div>

    <input type="submit" class="mt-3" value="Send Message" name="sub">
</form>

<script>
    var fname = document.getElementById('fname');
    fname.style.display = localStorage.getItem('fname');
    var lname = document.getElementById('lname');
    lname.style.display = localStorage.getItem('lname');
    var subject = document.getElementById('subject');
    subject.style.display = localStorage.getItem('subject');
    var msg = document.getElementById('msg');
    msg.style.display = localStorage.getItem('msg');
   
</script>