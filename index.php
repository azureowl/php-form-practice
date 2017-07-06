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
      <form method="post" action="index.php">
        <label>Name</label>
        <input name="name">

        <label>Email</label>
        <input name="email" type="email">

        <label>Message</label>
        <textarea name="message"></textarea>

        <button type="submit" name="button">Submit</button>
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
