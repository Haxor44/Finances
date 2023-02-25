<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<header role="banner">
  <h1>Home</h1>
  <ul class="utilities">
    <br>
    <li class="users"><a href="#">My Account</a></li>
    <li class="logout warn"><a href="login.html">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>
  <ul class="main">
    <li class="dashboard"><a href="admindashboard">Dashboard</a></li>
</nav>

<main role="main">
  
  
  
  <section class="panel important">
    <h2>Budget Application</h2>
      <form action="" method="POST">
        <div class="twothirds">
          Amount:<br/>
          <input type="text" name="amount" size="40" id="amount" /><br/><br/>
          Feedback On How To Budget:<br/>    
          <textarea name="newstext" rows="15" cols="67" id="feedback">
            <?php 
                if (isset($_POST['submit'])) {
                  // code...
                  $amount = $_POST['amount'];
                  $by50 = 0.5 * $amount;
                  $by30 = 0.3 * $amount;
                  $by20 = 0.2 * $amount;

                  echo "You should spend ksh: ".$by50." your on income needs\r\n";
                  echo "You should spend ksh: ".$by30." your  on income wants\r\n";  
                  echo "You should spend ksh: ".$by20." your on savings";
                }
                else
                {
                  echo "Enter data";
                }
             ?>
          </textarea><br/>  
        </div>
        <div>
          <input type="submit" name="submit" value="Budget" id="budget" />
        </div>
        </div>
      </form>
  </section>

</main>
</body>
</html>
