<!-- login popup -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">Alert</h4>
        <p class="mb-0">You have to Sign In first!</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <a class="secondary-theme-button shadow btn bg-brown" href="../auth-pages/login.php">Login</a>
      </div>
    </div>
  </div>
</div>


<!-- update passwor -->
<div class="modal fade" id="updatePassword" tabindex="-1" role="dialog" aria-labelledby="updatePasswordTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-2">System Message!</h4>
        <p class="mb-0">Your password has been reset. <br> Please Sign In to continue.</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal" onclick="window.location.assign('../auth-pages/login.php')">Sign In</button>
      </div>
    </div>
  </div>
</div>

<!-- update signup -->
<div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="signupTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">Successfully</h4>
        <p class="mb-0">Signed up Successfully.</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal" onclick="widow.location.assign('../auth-pages/login.php')">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- sure logout-->
<div class="modal fade" id="logoutWarning" tabindex="-1" role="dialog" aria-labelledby="logoutWarningTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">System Message!</h4>
        <p class="mb-0">Are you sure you want to logout?</p>
      </div>
      <div class="loginBtn text-center mt-3 d-flex justify-content-center gap-15">
        <button class="secondary-theme-button shadow btn borderBtn" data-dismiss="modal">No</button>
        <button class="secondary-theme-button shadow btn bg-brown" id="logout" data-dismiss="modal">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- updated ad -->
<div class="modal fade" id="updateAd" tabindex="-1" role="dialog" aria-labelledby="updateAdTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center pb-3">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">System Message!</h4>
        <p class="mb-0">Your message has been sent.</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<!-- updated ad -->
<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="signInTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center pb-3">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">Alert</h4>
        <p class="mb-0">You need to Sign In first .</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <a href="../auth-pages/login.php" class="secondary-theme-button shadow btn bg-brown">Ok</a>
      </div>
    </div>
  </div>
</div>

<!-- request -->
<div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="requestTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">System Message!</h4>
        <p class="mb-0">Your request has been sent.</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>



<!-- change password -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content px-md-4 px-3">
        <h4 class="mb-3 text-center">Change Password</h4>
        <form action="#" method="POST">
          <div class="form-group">
            <label for="password">
              Current Password <span class="required">*</span>
            </label>
            <div class="password-box">
              <input type="password" placeholder="Enter Current Password" class="form-control rounded-pill" id="password">
              <button type="button"><i class="fa fa-eye-slash"></i></button>
            </div>
          </div>
          <div class="form-group">
            <label for="comfirmPassword">
              New Password <span class="required">*</span>
            </label>
            <div class="password-box">
              <input type="password" placeholder="Enter New Password" class="form-control rounded-pill" id="comfirmPassword">
              <button type="button"><i class="fa fa-eye-slash"></i></button>
            </div>
          </div>
          <div class="form-group">
            <label for="comfirmPassword">
              Confirm Password <span class="required">*</span>
            </label>
            <div class="password-box">
              <input type="password" placeholder="Confirm Password" class="form-control rounded-pill" id="comfirmPassword">
              <button type="button"><i class="fa fa-eye-slash"></i></button>
            </div>
          </div>
          <div class="loginBtn text-center my-4">
            <button class="secondary-theme-button shadow btn bg-brown py-2" type="button" data-dismiss="modal" data-target="#updatedPassword" data-toggle="modal">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- update password -->
<div class="modal fade" id="updatedPassword" tabindex="-1" role="dialog" aria-labelledby="updatedPasswordTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">System Message!</h4>
        <p class="mb-0">Your password has been updated successfully!</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


<!-- update profile -->
<div class="modal fade" id="updatedProfile" tabindex="-1" role="dialog" aria-labelledby="updatedProfileTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">System Message!</h4>
        <p class="mb-0">Your profile has been updated successfully!</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


<!-- Other animals -->
<div class="modal fade" id="otherCat" tabindex="-1" role="dialog" aria-labelledby="otherCatTitle" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <div class="other-categories">
          <div class="row justify-content-center align-items-center gap-15">
            <div class="col-md-4 position-relative">
              <div class="categories-box bg-blue text-center">
                <img src="../assets/images/fish-icon.png" alt="Dog" class="mw-100" draggable="false">
                <p class="mb-0">Fish</p>
              </div>
              <a href="../listing/fish-listing.php" class="text-dark link-box"></a>
            </div>
            <div class="col-md-4 position-relative">
              <div class="categories-box bg-green text-center">
                <img src="../assets/images/parrot-icon.png" alt="Shop" class="mw-100" draggable="false">
                <p class="mb-0">Parrot</p>
              </div>
              <a href="../listing/parrot-listing.php" class="text-dark link-box"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- report ad-->
<div class="modal fade" id="reportAd" tabindex="-1" role="dialog" aria-labelledby="reportAdTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="d-flex justify-content-between">
        <div class="pl-3 title">
          <h3 class="font-weight-normal">Report</h3>
        </div>
        <div class="closebtn">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </div>
      <div class="pop-up-content text-center px-3">
        <div class="form-group text-left">
          <label for="report" class="font-weight-bold text-dark">
            Report
          </label>
          <textarea name="report" id="report" class="form-control" placeholder="Enter Reason" value="" rows="5" spellcheck="false">                                        </textarea>
        </div>
      </div>
      <div class="loginBtn text-center mt-3 d-flex justify-content-center gap-15">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal" data-toggle="modal" data-target="#reported">Submit</button>
      </div>
    </div>
  </div>
</div>


<!-- update profile -->
<div class="modal fade" id="reported" tabindex="-1" role="dialog" aria-labelledby="reportedTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">System Message!</h4>
        <p class="mb-0">Ad has been reported</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>


<!-- write review-->
<div class="modal fade" id="review" tabindex="-1" role="dialog" aria-labelledby="reviewTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center px-3">
        <h4 class="mb-1">Rate & Review</h4>
        <div class="rating">
          <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
          <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
          <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
          <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
          <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
        </div>
        <div class="form-group text-left">
          <label for="review" class="font-weight-bold text-dark">
            Review
          </label>
          <textarea name="review" id="review" class="form-control bg-light rounded-10" placeholder="Enter Review" value="" rows="5" spellcheck="false">                                        </textarea>
        </div>
      </div>
      <div class="loginBtn text-center mt-3 d-flex justify-content-center gap-15">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">Post</button>
      </div>
    </div>
  </div>
</div>


<!-- update signup -->
<div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="orderTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content loginPopup">
      <div class="closebtn">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="pop-up-content text-center">
        <img src="../assets/images/popup-header.png" alt="Login" draggable="false" class="mw-100 mb-4">
        <h4 class="mb-1">Successfully</h4>
        <p class="mb-0">Order successfully placed.</p>
      </div>
      <div class="loginBtn text-center mt-3">
        <button class="secondary-theme-button shadow btn bg-brown" data-dismiss="modal">Continue Shopping</button>
      </div>
    </div>
  </div>
</div>