
<div class="sign-in ">
  <div class="container-fluid">
    <div class="row">

      <form action="<?= FRONT_ROOT ?>Student/login" method="post">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
             <div class="row g-3 align-items-center">
             <div class="col-auto">
                <label for="inputPassword6" class="col-form-label">Password</label>
              </div>
              <div class="col-auto">
                 <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
               </div>
               <div class="col-auto">
                  <span id="passwordHelpInline" class="form-text">
                   Must be 8-20 characters long.
                  </span>
                </div>
            </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
       </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

  
    </div>

  </div>
<div>



