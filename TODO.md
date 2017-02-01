# To-dos #

Things I need to work on.

### Setup a PHP and .htaccess routing ###

<pre>
  <?php 

    $key=$_GET['key'];

    if($key=='home') {
        include('home.php'); // Home page
    } else if($key=='login') {
        include('login.php'); // Login page
    } else if($key=='terms') {
        include('terms.php'); // Terms page
    } else if {
        include('users.php'); // Users Gateway
    } else {
        include('error.php'); // error page
    }

  ?>
</pre>

<pre>
  # RewriteEngine On
  # RewriteBase /
  # RewriteCond %{REQUEST_FILENAME} !-d
  # RewriteCond %{REQUEST_FILENAME} !-f
  # RewriteRule ^(.*)$ /index.php?key=$1 [QSA,L]
</pre>

