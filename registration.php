<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div id="full">
    
        <div id="inner-class" align="center">
           <div id="header" style="background-color:black; color:white;"><h2><a href="admin-home.php" style="text-decoration:none;color:white;text-align:center;"> Money Donation System</a></h2>
           <marquee style="background-color:black; color:white; font-size:25px;">you can donate the money for the poor people
    </marquee>
        </div>
            <div id="body">
                <br>
                <?php
                $un=$_SESSION['un'];
                if(!$un){
                    header("Location:index.php");
                }
                ?>
                <h1>Donor registration</h1>
                    <div style="	width: 80%;height: 400px;background-color: aqua;color: white;border-radius: 10px; font-size:20px;">
                        <form action="" method="post">
                    <table>
                            <tr>
                            <td width="200px" height="50px">Enter Name</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                            <td width="200px" height="50px">Enter Father name</td>
                            <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter father Name"></td>
                           </tr>
                           <tr>
                            <td width="200px" height="50px">Enter Address</td>
                            <td width="200px" height="50px"><textarea name="address"></textarea></td>
                            <td width="200px" height="50px">Enter city</td>
                            <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter city"></td>
                           </tr>
                           <tr>
                            <td width="200px" height="50px">Enter Age</td>
                            <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter age"></td>
                            <td width="200px" height="50px">Enter your amount</td>
                            <td width="200px" height="50px">
                              <select name="bgroup">
                                <option>5000</option> 
                                <option>10000</option>
                                <option>50000</option>
                              </select>
                            </td>
                           </tr>
                           <tr>
                            <td width="200px" height="50px">Enter Email</td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter email"></td>
                            <td width="200px" height="50px">Enter Mobile no</td>
                            <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile no"></td>
                           </tr>
                           <tr>
                            <td><input type="submit" name="sub" value="save"></td>
                           </tr>

                        </table>
              </form>
              <?php
              if(isset($_POST['sub']))
              {
                $name=$_POST['name'];
                $fname=$_POST['fname'];
                $address=$_POST['address'];
                $city=$_POST['city'];
                $age=$_POST['age'];
                $bgroup=$_POST['bgroup'];
                $mno=$_POST['mno'];

                $email=$_POST['email'];
               $q=$db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,mno,email) 
               VALUES(:name,:fname,:address,:city,:age,:bgroup,:mno,:email)");
               $q->bindValue('name',$name);
               $q->bindValue('fname',$fname);
               $q->bindValue('address',$address);
               $q->bindValue('city',$city);
               $q->bindValue('age',$age);
               $q->bindValue('bgroup',$bgroup);
               $q->bindValue('mno',$mno);
               $q->bindValue('email',$email);
               if($q->execute()){
                echo "<script>alert('donor registration')</script>";
               }
               else{
                echo "<script>alert('not registration')</script>";
               }
              }
             
             
              ?>
                    </div>
                
            </div>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
           <!--footer section-->
            <footer>
            
  <div class="footer-gray">
    <div class="footer-custom">
      <div class="footer-lists">
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Order Toll Free</h6>
          <ul class="ftr-links-sub">
            <li>800-952-5592</li>
          </ul>
          <h6 class="ftr-hdr">International</h6>
          <ul class="ftr-links-sub">
            <li><a href="#" rel="nofollow">France</a></li>
            <li><a href="#" rel="nofollow">United Kingdom</a></li>
          </ul>
        </div>
        <!--/.footer-list-wrap-->
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">Customer Service</h6>
          <ul class="ftr-links-sub">
            <li><a href="#" rel="nofollow">Contact Us</a></li>
            <li><a href="#" rel="nofollow">Ordering</a></li>
            <li><a href="#" rel="nofollow">Shipping &amp; Delivery</a></li>
            <li><a href="#" rel="nofollow">Returns</a></li>
            <li><a href="#" rel="nofollow">International Orders</a></li>
            <li><a href="#" rel="nofollow">Gift Cards</a></li>
            <li><a href="#" rel="nofollow">FAQs</a></li>
          </ul>
        </div>
        <div class="footer-list-wrap">
          <h6 class="ftr-hdr">About Art.com</h6>
          <ul class="ftr-links-sub">
            <li><a href="#" rel="nofollow">Our Company</a></li>
            <li><a href="#" rel="nofollow">Careers</a></li>
            <li><a href="#" rel="nofollow">Artist Rising</a></li>
            <li><a href="#" rel="nofollow">Business &amp; Trade Sales</a></li>
            <li><a href="#" rel="nofollow">Affiliate Program</a></li>
            <li><a href="#" rel="nofollow"><strong>Shop Our Catalog</strong></a></li>
            <li><a href="#" rel="nofollow">ART.COM BLOG</a></li>
          </ul>
        </div>
        <!--/.footer-list-wrap-->
        <div class="footer-list-wrap">
          
         
        </div>
        <!--/.footer-list-wrap-->
      </div>
      <!--/.footer-lists-->
      <div class="footer-email">
        <h6 class="ftr-hdr">Sign up for exclusive offers and inspiration</h6>
        <div id="ftr-email" class="ftr-email-form">
          <form id="ftrEmailForm" method="post" action="http://em.art.com/pub/rf">
            <div class="error">Please enter a valid email address</div>
           
            <!--
                -->
                <p><a href="logout.php" style="font-size:25px"><font color="red">LogOut</font></p>
          </form>
        </div>
        <!--/.ftr-email-form-->
        <div class="ftr-email-privacy-policy"></div>
      </div>
      <!--/.footer-email-->
      <div class="footer-social">
        <h6 class="ftr-hdr">Follow Us</h6>
        <ul>
          <li>
            <a href=#" title="Facebook" onclick="_gaq.push(['_trackSocial', 'Facebook', 'Follow', 'Footer', 'undefined', 'True']);">
           
            </a>
          </li>
          <li>
            <a href="#" title="Google+" onclick="_gaq.push(['_trackSocial', 'GooglePlus', 'Follow', 'Footer', 'undefined', 'True']);">
             
            </a>
          </li>
          
          
         
        </ul>
      </div>
      <!--/.footer-social-->
      <div class="footer-legal">
        <p>&copy; Art.com Inc. All Rights Reserved. | <a href="/help/privacy-policy.html" rel="nofollow">Privacy Policy</a> | <a href="/help/terms-of-use.html" rel="nofollow">Terms of Use</a> | <a href="/help/terms-of-sale.html" rel="nofollow">Terms of Sale</a></p>
        <p>Art.com, You+Art, and Photos [to] Art are trademarks or registered trademarks of Art.com Inc.</p>
        <p>Various aspects of this website are covered by issued US patent No. 7,973,796 and other pending patent applications.</p>
      </div>
      <!--/.footer-legal-->
      <div class="footer-payment">
        <ul>
          <li class="ftr-stella">
            <span title="Stella Service" onclick="openLink('http://www.stellaservice.com/profile/Art.com/')"></span>
          </li>
          <li>
            <span onclick="clickTrack(); return false;" onmouseover="this.style.cursor='pointer'"><img border="0" alt="HACKER SAFE certified sites prevent over 99.9% of hacker crime." src="https://images.scanalert.com/meter/www.art.com/31.gif"></span>
          </li>
          <li class="ftr-bbb">
            <span title="BBB" onclick="openLink('http://www.bbb.org/raleigh-durham/business-reviews/art-suppliers/artcom-inc-in-raleigh-nc-5001914')"></span>
          </li>
        </ul>
      </div>
      <!--/.footer-payment-->
    </div>
    <!--/.footer-custom-->
  </div>
  <!--/.footer-gray-->
</footer>
<!--footer section-->
 </div>
      
    </div>

    
</body>
</html>