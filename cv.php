<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Landing page</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/base.css">   
  </head>
  <body>
    <header>
      <div class="container">
        <!-- row 1 -->
        <div class="row">
          <a class="brand pull-left" href="bootstrap_mtn1.html">LifeTime</a>
          <ul class="list-inline list-unstyled pull-right">
            <li><a href="cv.html">Creat CV</a></li>
            <li><a href="#careeradvice">Career Advice</a></li>
            <li><a href="#cvsample">CV Sample</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>

    <section id="intro-header">
      <div class="container">
        <!-- row 2 -->
        <div class="row">
          <div class="wrap-headline">
            <h1 class="text-center">LifeTime</h1>
            <h2 class="text-center">Stay in touch with us</h2>
        </div>
      </div>
    </section>

    <section id="contact" class="container">
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2 control-label" for="contact-name">Name</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="reg-name" placeholder="Full name">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="reg-email">Email</label>
              <div class="col-sm-10">
                <input class="form-control" type="text" id="reg-email" placeholder="Type your email">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="reg-password">Password</label>
              <div class="col-sm-10">
                <input class="form-control" type="password" inputmode="kana" id="reg-password" placeholder="Your Password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label" for="reg-coverletter">Cover Letter</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="6" placeholder="Type your cover letter"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <label class="checkbox">
                  <input type="checkbox" value="">
                  I confirm my CV is the truth.
                </label>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-10" for="reg-cvattach">CV Attach</label> 
                <form name="upload form" action="sendcv.php" method="post" enctype="multipart/form-data">
              <input type="file" name="fileupload" id="fileSelect" accept=".pdf, application/vnd.ms-excel, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">   
                </form>
              </div>           
              
            </div>
              <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success btn-md" type="submit">Creat CV</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="col-sm-2">
          <img src="imgs/logo_ltt.png" class="img-responsive">
        </div>
        <div class="col-sm-2">
          <h5>LifeTime</h5>
          <ul class="list-unstyled">
            <li><a href="#">Join Our Group</a></li>
            <li><a href="#">LifeTimeTechs News</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <h5>Social</h5>
          <ul class="list-unstyled">
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Google+</a></li>
          </ul>
        </div>
        <div class="col-sm-2">
          <h5>Support</h5>
          <ul class="list-unstyled">
            <li><a href="#">Contact</a></li>
            <li><a href="#">Privacy police</a></li>
            <li><a href="#">Terms & conditions</a></li>
            <li><a href="#">News</a></li>
          </ul>
        </div>
        <div class="col-sm-4">
          <address>
            <address>
          <strong>LifeTime Inc</strong>
          Vietnam HeadQuaters<br>
          Japan<br>
          <abbr title="Phone">P:</abbr> (+84) 976 015 769
        </address>
        </div>
      </div>
    </footer>

    <script src="js/jquery-1.11.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
