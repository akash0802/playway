<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kids School</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <script src="script/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="kids.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <!-- Nav Bar-->
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="image/logo.png" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse"
              id="bs-example-navbar-collapse-1"
            >
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li class="active"><a href="#">Admission</a></li>
                <li><a href="#">Contact us</a></li>
                <li class="active"><a href="#">Pay fees</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    >Online Learning <b class="caret"></b
                  ></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Nuvo/Play Group</a></li>
                    <li><a href="#">Nursery</a></li>
                    <li><a href="#">Kindergarten</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Teacher Traning Program</a></li>
                  </ul>
                </li>
              </ul>
              <!--  <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                  />
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form> -->
              <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><b>Sign up</b></a></li>
                <li><a href="#"><b>Login</b></a></li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                    >Dropdown <b class="caret"></b
                  ></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
        </nav>
        <!--End Nav Bar-->

        <!--caresole-->
        <div
          id="carousel-example-generic"
          class="carousel slide"
          data-ride="carousel"
        >
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li
              data-target="#carousel-example-generic"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="image/s3.jpg" alt="..." />
            </div>
            <div class="item">
              <img src="image/s1.jpg" alt="..." />
            </div>
            <div class="item">
              <img src="image/s2.jpg" alt="..." />
            </div>
            
          </div>

          <!-- Controls -->
          <a
            class="left carousel-control"
            href="#carousel-example-generic"
            data-slide="prev"
          >
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a
            class="right carousel-control"
            href="#carousel-example-generic"
            data-slide="next"
          >
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <!--end caresole-->
      </div>
      <div class="row">
        <center>
          <h1 style="background-color: DodgerBlue;">
            Our Programs
          </h1>
        </center>
      </div>
      <!-- Thumbnil-->
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="image/t2.jpg" alt="..." />
            <center>
              <div class="caption btn-primary">
                <h3>Nuvo/Play Group</h3>
                <h4 style="color: coral;">
                  1 - 2.5<br />
                    Years<br />
                    AGE GROUP
                </h4>
                <p>
                  <a href="#" class="btn btn-primary" role="button"
                    >Read More</a
                  >
                </p>
              </div>
            </center>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="image/t4.jpg" alt="..." />
            <center>
              <div class="caption btn-primary">
                <h3>Nursery</h3>
                <h4 style="color: coral;">
                  2 - 3.5<br />
                    Years<br />
                    AGE GROUP
                </h4>
                
                  <a href="#" class="btn btn-primary" role="button"
                    >Read More</a
                  >
                </p>
              </div>
            </center>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <img src="image/t3.jpg" alt="..." />
            <center>
              <div class="caption btn-primary">
                <h3>Kindergarten</h3>
                <h4 style="color:coral;">
                  3 - 4.5<br>
                    Years<br />
                    AGE GROUP
                </h4>
                <p>
                  <a href="#" class="btn btn-primary" role="button"
                    >Read More</a
                  >
                </p>
              </div>
            </center>
          </div>
        </div>
      </div>
      <!--Khtam Thumbnil-->

      <div class="row">
        <center>
          <h1 style="background-color: DodgerBlue;">
            Parents Speek
          </h1>
        </center>
      </div>
      <!--Media-->
      <div class="row">
        <div class="col-sm-6 col-md-2"></div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail btn-danger">
            <img
              src="image/m2.jpg"
              class="img-circle img-responsive"
              alt="..."
            />
            <div class="caption">
              <h3>
                My daughter was a student of Floop for 3 years. I would like to
                thank the Floop family who have put in a lot of efforts to
                groom her personality.
              </h3>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail btn-danger">
            <img src="image/m3.jpg" class="img-circle" alt="..." />
            <div class="caption">
              <h3>
                Our heartfelt gratitude to Floop Hyderabad for providing our
                kids a home away home to facilitate their growth and
                development.
              </h3>
            </div>
          </div>
        </div>
      </div>

      <!--End Media-->
      <div class="row">
        <center>
          <p style="background-color: rgb(209, 3, 3);">
            Copyright ® Floop Learn Ltd. All rights reserved.
          </p>
          <a href="#">Privacy Policy</a> <a href="#">Terms of use</a><br>
          <a href="#"><img src="image/logo.png" /></a>
        </center>

    </div>
  </body>
</html>
