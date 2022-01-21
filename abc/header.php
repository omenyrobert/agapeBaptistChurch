 





 <style type="text/css">
 
             ul li ul.dropdown {
        width: 120px; /* Set width of the dropdown */
        background: #24a0ed;
        display: none;
        position: absolute;
        z-index: 999;
          padding-right: 25px;
          padding-left: 25px;
    }
    ul li:hover ul.dropdown {
        display: block; /* Display the dropdown */
    }
    ul li ul.dropdown li {
        display: block;
    }

.dropdownn{
  display: inline-block;
}

.dropdown-contentt{
  display: none;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0,0.2);
  background-color: #24a0ed;
  font-weight: bold;


}
.dropdownn:hover .dropdown-contentt
{
  display: block;
}

        </style>

 <nav style="background-color: #24a0ed; position: fixed; " class="navbar navbar-default templatemo-nav" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <div style="display: flex; color: white; text-align: center;" >
                        <div>
                    <img src="images/logo.PNG" width="150"> 
                </div>
                <div>
                    <h1 style="margin-bottom: -20px;" ><b>AGAPE</b></h1>
                    <h3><b>Baptist Church Uganda</b></h3>
                </div>
                </div>
                </div>
                <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" style="color: white;" >Home</a></li>
                                                  <li>
            <a href="bukeerere.php" style="color: white;"  id="nb">Bukerere Campus</a>
            <ul class="dropdown">
                <li><a href="bukeerere.php" style="color: white;" id="nb">Ministries</a></li>
                <li><a href="bukeerere.php" style="color: white;" id="nb">Leaders</a></li>
                <li><a href="bukeerere.php" style="color: white;" id="nb">Activities</a></li>
            </ul>
        </li>
                                       <li>
            <a href="#" style="color: white;"  id="nb">About Us</a>
            <ul class="dropdown">
              <li><a href="about.php" style="color: white;" id="nb">About</a></li>
                <li><a href="belief.php" style="color: white;" id="nb">Our Belief</a></li>
                <li><a href="sermons.php" style="color: white;" id="nb">Sermons</a></li>
                <li><a href="about.php" style="color: white;" id="nb">History</a></li>
            </ul>
        </li>
                       <li>
            <a href="#" style="color: white;"  id="nb">Ministries</a>
            <ul class="dropdown">
                <li><a href="menview.php" style="color: white;" id="nb">Men</a></li>
                <li><a href="womenview.php" style="color: white;" id="nb">Women</a></li>
                <li><a href="childrenview.php" style="color: white;" id="nb">Children</a></li>
                <li><a href="youthview.php" style="color: white;" id="nb">Youth</a></li>
                <li><a href="marriageview.php" style="color: white;" id="nb">Marriage</a></li>
                <li><a href="pastrolview.php" style="color: white;" id="nb">Pastoral</a></li>
            </ul>
        </li>
                        <li>
            <a href="#" style="color: white;"  id="nb">Contact Us</a>
            <ul class="dropdown">
                <li><a href="contact.php" style="color: white;" id="nb">Contact</a></li>
                <li><a href="contact.php" style="color: white;" id="nb">Find Us</a></li>
                <li><a href="blog.php" style="color: white;" id="nb">Blog</a></li>
            </ul>
        </li>


                    </ul>
                </div>
            </div>
            </nav>