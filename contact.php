<?php include "layout/header.php"?>


<?php

if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Phone=$_POST['Phone'];
    $Message=$_POST['Message'];




$q="INSERT INTO contact VALUES('$Name','$Email','$Phone','$Message')";

$connection->query($q);
// header('Location:admin.php?title=admin');
}




?>




<div class="contact">

<!-- <form action="contact.php" class='form' method='POST'>
<input type="text" placeholder="Full Name" name='Name' required>
<input type="email" placeholder="Email Address" name='Email' required>
<input type="text" placeholder='Phone number' name='Phone'required>
<textarea name="Message" class='message' placeholder='Messages' id="" cols="30" rows="10" required></textarea>
<input type="submit" value='submit' name='submit' id='submit'>
</form> -->


<form id="contactForm">
    <!-- Add your form fields here (e.g., name, email, message) -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit" name='submit'>Submit</button>
  </form>

  <div id="submissionMessage" style="display: none;">
    <h2>Thank you for your submission!</h2>
    <p>We'll get back to you as soon as possible.</p>
  </div>

</div>



<!-- <div class="pop-up" id='pop'>
    <div class="not" id='not'>
        <div class="close" ><i class="fa-solid fa-xmark fa-lg" id='close'></i></div>
        <div class="msg">
            <h1><i class="fa-regular fa-square-check fa-xl" style="color: #5a9f0f;"></i></h1>
            <h2>Message Sent!</h2>
        </div>
    </div>
</div> -->



<div id="submissionMessage" style="display: none;">
    <h2>Thank you for your submission!</h2>
    <p>We'll get back to you as soon as possible.</p>
  </div>



<script>
    document.addEventListener('DOMContentLoaded', () => {
      const contactForm = document.getElementById('contactForm');
      const submissionMessage = document.getElementById('submissionMessage');

      contactForm.addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent the default form submission behavior

        // Perform any necessary form validation here

        // Display the submission message
        contactForm.style.display = 'none';
        submissionMessage.style.display = 'block';
      });
    });
  </script>


<?php include "layout/footer.php"?>