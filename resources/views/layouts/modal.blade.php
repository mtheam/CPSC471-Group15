<!----Login Popup---->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form-group">

          <div class="row"> 
            <div class="col">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
          </div>
          <div class="row"> 
            <div class="col">
                <label for="inputPassword">Password</label>
                <input type="email" class="form-control" id="inputPassword" aria-describedby="emailHelp" placeholder="Enter password">
            </div>
          </div>
          <button style="margin-top: 5px;" class="btn btn-primary" type="submit">Login</button>

          <div class="row form-group">
            <div class="col">
              New to us? 
              <button style="margin:5px;" class="btn btn-primary" type="submit" >Create your acct</button>
            </div>
          </div>
        
      </div>
    </div>
  </div>
</div>