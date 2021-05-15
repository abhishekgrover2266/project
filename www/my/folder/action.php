<?php 
		if(isset($_POST['register_submit']) && $_POST['register_submit'] == 'Submit'){ 
				if(isset($_FILES["register_img1"]["name"]) && $_FILES["register_img1"]["name"] != '') {
				$target_dir = "uploads/";
					$target_file = $target_dir . basename(rand(0,9999).$_FILES["register_img1"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					  $check = getimagesize($_FILES["register_img1"]["tmp_name"]);
					  if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					  } else {
						echo "File is not an image.";
						$uploadOk = 0;
					  }
					}

					// Check if file already exists
					if (file_exists($target_file)) {
					  echo "Sorry, file already exists.";
					  $uploadOk = 0;
					}

					// Check file size
					if ($_FILES["register_img1"]["size"] > 200000) {
					  echo "Sorry, your file is too large.";
					  $uploadOk = 0;
					}

					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					  $uploadOk = 0;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					  echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					  if (move_uploaded_file($_FILES["register_img1"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["register_img1"]["name"]). " has been uploaded.";
					  } else {
						echo "Sorry, there was an error uploading your file. Please check the size of image or it is something else.";
					  }
					}
				}
				if(isset($_FILES["register_img2"]["name"]) && $_FILES["register_img2"]["name"] != '') {
				$target_dir = "uploads/";
					$target_file2 = $target_dir . basename(rand(0,9999).$_FILES["register_img2"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
					  $check = getimagesize($_FILES["register_img2"]["tmp_name"]);
					  if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					  } else {
						echo "File is not an image.";
						$uploadOk = 0;
					  }
					}

					// Check if file already exists
					if (file_exists($target_file2)) {
					  echo "Sorry, file already exists.";
					  $uploadOk = 0;
					}

					// Check file size
					if ($_FILES["register_img2"]["size"] > 200000) {
					  echo "Sorry, your file is too large.";
					  $uploadOk = 0;
					}

					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					  $uploadOk = 0;
					}

					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					  echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					  if (move_uploaded_file($_FILES["register_img2"]["tmp_name"], $target_file2)) {
						echo "The file ". basename( $_FILES["register_img2"]["name"]). " has been uploaded.";
					  } else {
						echo "Sorry, there was an error uploading your file. Please check the size of image or it is something else.";
					  }
					}
				}
				// PREPARE THE BODY OF THE MESSAGE
				$message = '<html><body>';              
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #000;color:#fff;'><td colspan='2'>Elite Fashion - Hi admin, you got a new query from your website.</td></tr>";
				$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['register_name'])."</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['register_email']) . "</td></tr>";
				$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['register_contact']) . "</td></tr>";
				$message .= "<tr><td><strong>Address:</strong> </td><td>" . $_POST['register_adress'] . "</td></tr>";
				$message .= "<tr><td><strong>City:</strong> </td><td>" . $_POST['register_city'] . "</td></tr>";
				$message .= "<tr><td><strong>Age:</strong> </td><td>" . $_POST['register_age'] . "</td></tr>";
				$message .= "<tr><td><strong>Heared from:</strong> </td><td>" . $_POST['register_hear'] . "</td></tr>";
				$message .= "<tr><td><strong>Want to participate:</strong> </td><td>" . $_POST['register_participate'] . "</td></tr>";
				$message .= "<tr><td colspan='2'>Images from user.</td></tr>";
				$message .= "<tr><td><img src=http://elitefashioncrew.com/".$target_file." width='250'/></td><td><img src=http://elitefashioncrew.com/".$target_file2." width='250'/></td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";
				//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
				$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
				if (preg_match($pattern, trim(strip_tags($_POST['register_email'])))) {
					$cleanedFrom = trim(strip_tags($_POST['register_email']));
				} else {
					return "The email address you entered was invalid. Please try again!";
				}

				//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'fashioncrewelite@gmail.com';
			//$to = 'mr.niteshlangyan@gmail.com';
			$subject = 'Elite Fashion Crew';
			
			$headers = "From: contactus@elitefashioncrew.com \r\n";
			$headers .= "Reply-To: noreply@elitefashioncrew.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            $thanksemail = $_POST['register_email'];
            $message2 = 'Hi, '.$_POST['register_name'].', Thank you for registeration on Mr. & Miss Elite Fashion Of The Year 2020. One of our executive will contact you soon.';
            
             if($_FILES["register_img1"]["name"] == '' OR $_FILES["register_img2"]["name"] == ''){
		        echo 'There was a problem sending the email.';
                header('Location:index.php?msg=fail_input');
		    } 
            else if (mail($to, $subject, $message, $headers) && mail($thanksemail, $subject, $message2, $headers)) {
              echo 'Your message has been sent.';
              header('Location:index.php?msg=success');
            } else {
              echo 'There was a problem sending the email.';
              header('Location:index.php?msg=fail');
            }
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();

		}
		          
		if(isset($_POST['sponsar_submit']) && $_POST['sponsar_submit'] == 'Submit'){ 
				// PREPARE THE BODY OF THE MESSAGE
				$message = '<html><body>';              
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #000;color:#fff;'><td colspan='2'>Elite Fashion - Hi admin, you got a new query from your website.</td></tr>";
				$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['sponsor_name'])."</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['sponsor_email']) . "</td></tr>";
				$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['sponsar_mobile']) . "</td></tr>";
				$message .= "<tr><td><strong>Address:</strong> </td><td>" . $_POST['sponsor_address'] . "</td></tr>";
				$message .= "<tr><td><strong>City:</strong> </td><td>" . $_POST['sponsor_city'] . "</td></tr>";
				$message .= "<tr><td><strong>Website:</strong> </td><td>" . $_POST['sponsar_website'] . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";
				//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
				$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
				if (preg_match($pattern, trim(strip_tags($_POST['sponsor_email'])))) {
					$cleanedFrom = trim(strip_tags($_POST['sponsor_email']));
				} else {
					return "The email address you entered was invalid. Please try again!";
				}

				//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'fashioncrewelite@gmail.com';
			//$to = 'mr.niteshlangyan@gmail.com';
			$subject = 'Elite Fashion Crew';
			
			$headers = "From: contactus@elitefashioncrew.com \r\n";
			$headers .= "Reply-To: noreply@elitefashioncrew.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            $thanksemail = $_POST['sponsor_email'];
            $message2 = 'Hi, '.$_POST['sponsor_name'].', Thank you for offering sponsorship on Mr. & Miss Elite Fashion Of The Year 2020. One of our executive will contact you soon.';
            
            if (mail($to, $subject, $message, $headers) && mail($thanksemail, $subject, $message2, $headers)) {
              echo 'Your message has been sent.';
              header('Location:index.php?msg=success');
            } else {
              echo 'There was a problem sending the email.';
              header('Location:index.php?msg=fail');
            }
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();

		}
        
	if(isset($_POST['contact_submit']) && $_POST['contact_submit'] == 'Submit'){ 
				// PREPARE THE BODY OF THE MESSAGE
				$message = '<html><body>';              
				$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
				$message .= "<tr style='background: #000;color:#fff;'><td colspan='2'>Elite Fashion - Hi admin, you got a new query from your website.</td></tr>";
				$message .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['contact_name'])."</td></tr>";
				$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['contact_email']) . "</td></tr>";
				$message .= "<tr><td><strong>Phone Number:</strong> </td><td>" . strip_tags($_POST['contact_phone']) . "</td></tr>";
				$message .= "<tr><td><strong>City:</strong> </td><td>" . $_POST['contact_city'] . "</td></tr>";
				$message .= "<tr><td><strong>Message:</strong> </td><td>" . $_POST['contact_message'] . "</td></tr>";
				$message .= "</table>";
				$message .= "</body></html>";
				//  MAKE SURE THE "FROM" EMAIL ADDRESS DOESN'T HAVE ANY NASTY STUFF IN IT
				$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i";
				if (preg_match($pattern, trim(strip_tags($_POST['contact_email'])))) {
					$cleanedFrom = trim(strip_tags($_POST['contact_email']));
				} else {
					return "The email address you entered was invalid. Please try again!";
				}

				//   CHANGE THE BELOW VARIABLES TO YOUR NEEDS
             
			$to = 'fashioncrewelite@gmail.com';
		//$to = 'mr.niteshlangyan@gmail.com';
			$subject = 'Elite Fashion Crew';
			
			$headers = "From: contactus@elitefashioncrew.com \r\n";
			$headers .= "Reply-To: noreply@elitefashioncrew.com \r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            
            $thanksemail = $_POST['contact_email'];
            $message2 = 'Hi, '.$_POST['contact_name'].', Thank you for contacting Mr. & Miss Elite Fashion Of The Year 2020. One of our executive will contact you soon.';
            
            if (mail($to, $subject, $message, $headers) && mail($thanksemail, $subject, $message2, $headers)) {
              echo 'Your message has been sent.';
              header('Location:index.php?msg=success');
            } else {
              echo 'There was a problem sending the email.';
              header('Location:index.php?msg=fail');
            }
            
            // DON'T BOTHER CONTINUING TO THE HTML...
            die();

		}


?>
