<?php
/**
 * Plugin Name: Registration Form
 * Description: This plugin provides you a well created registration form.
 * Version: 1.0
 * Author: Priya
 */

function registration_form() {

    if (isset($_POST['insert'])){
        global $wpdb;
        $n = $_POST['names'];
        $e = $_POST['email'];
        $nr = $_POST['number'];
        $c = $_POST['college'];
        $b = $_POST['branch'];
        $cl = $_POST['class'];
        $ct = $_POST['city'];
        $sl = $_POST['slt'];
        $img = $_POST['fileToUpload'];

        $sql = $wpdb -> insert(
            'register_demo',
            array(
                'names' => $n,
                'email' => $e,
                'number' => $nr,
                'college' => $c,
                'branch' => $b,
                'class' => $cl,
                'city' => $ct,
                'slt' => $sl,
                'fileToUpload' => $img,
            )
            );
            if($sql == true){
                echo '<script>
                alert("Thanks!! We will get in touch with you soon");
                </script>
                ';
            }else{
                echo 'error';
            }
    } 
    ?>

<form method="POST">
<div class="container">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="names">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="mobile">Mobile:</label>
    <input type="number" class="form-control" placeholder="Enter number" name="number">
  </div>
  <div class="form-group">
    <label for="college">College:</label>
    <input type="text" class="form-control" placeholder="Enter college" name="college">
  </div>
  <div class="form-group">
    <label for="name">Branch:</label>
    <input type="text" class="form-control" placeholder="Enter branch" name="branch">
  </div>
  <div class="form-group">
    <label for="text">Class:</label>
    <input type="text" class="form-control" placeholder="Enter class" name="class">
  </div>
  <div class="form-group">
    <label for="name">City:</label>
    <input type="text" class="form-control" placeholder="Enter city" name="city">
  </div>
  <div class="form-group">
  <label for="name">Internship:</label>
<select class="select" name="slt">
  <option value="1" class="form-control">3 months</option>
  <option value="2" class="form-control">6 months</option>
  <option value="3" class="form-control">9 months</option>
</select>
</div>
<div class="form-group">
    <label for="text">Upload your Image:</label>
    <input type="file" class="form-control" name="fileToUpload">
  </div>

  <button type="submit" class="btn btn-primary" name="insert"> Submit</button>
</div>
</div>
</form>
<?php
}
add_shortcode('registration','registration_form');
