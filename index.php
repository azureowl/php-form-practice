<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/master.css">
<title>Contact Form</title>
</head>

<body>
  <main class="form-container">
    <header><h1>Get In Touch</h1></header>

    <section>
      <?php
        // Superglobals are specially-defined array variables in PHP that make it easy for you to get information about a // request or its context. They are called superglobal because they are always accessible, regardless of the scop
        // So we are using the $_POST superglobal to extract form data
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $email = isset($_POST['email']) ? $_POST["email"] : "";
        $message = isset($_POST['message']) ? $_POST["message"] : "";
        $human = isset($_POST['human']) ? $_POST['human'] : "";
        $from = "From: Azureowl Portfolio";
        $to = "maiaroche16@gmail.com";
        $subject = "Hello";
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

        if (isset($_POST['submit']) && $human === '2') {
          /* Anything that goes in here is only performed if the form is submitted */
          if (mail ($to, $subject, $body, $from)) {
            echo '<p class=\'sent\'>Your message has been sent!</p>';
          } else {
            echo '<p>How embarrassing! There was an error. Please try again.</p>';
          }
        } else if (isset($_POST['submit']) && $human !== '2') {
          echo '<p class=\'error\'>Hm, that is not the answer.</p>';
        }
      ?>
      <form method="post" action="index.php">
        <label>Name</label>
        <input name="name">

        <label>Email</label>
        <input name="email" type="email">

        <label>Message</label>
        <textarea name="message"></textarea>

        <label>*What is 6&#247;3? (Anti-spam)</label>
        <input name="human" placeholder="Type Here">

        <button type="submit" name="submit">Submit</button>
      </form>
    </section>

    <footer>
      <div class="your-logo">
        <img src="image/logo.jpg" alt="">
      </div>
    </footer>
  </main>
</body>

</html>
