<html>
  <body>
    <section>
  <div class="img3">

    <div class="middle">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration here</h1>

      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="field1" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="field2" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="field3" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="field4" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="field6" type="text" name="email" placeholder="Email" required=""><br>
          <input class="field7" type="text" name="contact" placeholder="Phone No" required=""><br>

          <input class="btn1" type="submit" name="submit" value="Sign Up"> </div>
      </form>
     
    </div>
  </div>
</section>

    <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `user`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `User` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[password]',  '$_POST[email]', '$_POST[contact]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>

            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php
          
            </body>
</html>
      