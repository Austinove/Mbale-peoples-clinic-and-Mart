<!-- request appointment -->
<div class="modal fade" id="appointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Make an Appointment With our Doctors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="ajax_class_form">
          <div class="form-row">
            @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="appointment-name" class="col-form-label colors">Name*</label>
                        <input type="text" class="form-control form-custom input-xs" name="appointment-name" id="appointment-name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="appointment-number" class="col-form-label colors">Number*</label>
                        <input type="text" class="form-control form-custom input-xs" name="appointment-number" id="appointment-number">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="appointment-date" class="col-form-label colors">When*</label>
                        <input type="Date" class="form-control form-custom input-xs" name="appointment-date" id="appointment-date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="appointment-sms" class="col-form-label colors">Message*</label>
                        <textarea class="form-control form-custom input-xs" name="appointment-sms" id="appointment-sms" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-outline-primary add_button" id="appointment-request">Request</button>
      </div>
    </div>
  </div>
</div>

<!-- Add slides -->
<div class="modal fade" id="slides" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Action on Slides</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Title*</label>
                        <input type="text" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label colors">Description*</label>
                      <textarea class="form-control form-custom input-xs" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </div>
            </div>
                
            <button type="button" class="btn btn-outline-primary btn-sm mb-2 add_button">
              <i class="fa fa-plus-circle"></i> Add Slide
            </button>
        </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col" class="titles colors">Image</th>
                <th scope="col" class="titles colors">Title</th>
                <th scope="col" class="titles colors" style="width: 60%;">Description</th>
                <th scope="col" class="titles colors">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Hi checkout</p></td>
                    <td>
                      <p class="color-light">
                        Hello there checkout the impossible archivements 
                        made by Mbale People's Clinic and Martenate Home.
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Hi checkout</p></td>
                    <td>
                      <p class="color-light">
                        Hello there checkout the impossible archivements 
                        made by Mbale People's Clinic and Martenate Home.
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Hi checkout</p></td>
                    <td>
                      <p class="color-light">
                        Hello there checkout the impossible archivements 
                        made by Mbale People's Clinic and Martenate Home.
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
            </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm add_button" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

{{-- Add news --}}
<div class="modal fade" id="news" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Add News to the Website</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">News Title*</label>
                        <input type="text" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label colors">News Description*</label>
                      <textarea class="form-control form-custom input-xs" id="exampleFormControlTextarea1" rows="5"></textarea>
                  </div>
                </div>
            </div>
                
            <button type="button" class="btn btn-outline-primary btn-sm mb-2 add_button">
              <i class="fa fa-plus-circle"></i> Add News
            </button>
        </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col" class="titles colors">Image</th>
                <th scope="col" class="titles colors">Title</th>
                <th scope="col" class="titles colors" style="width: 60%;">News</th>
                <th scope="col" class="titles colors">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Hi checkout</p></td>
                    <td>
                      <p class="color-light">
                        Hello there checkout the impossible archivements 
                        made by Mbale People's Clinic and Martenate Home.
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Hi checkout</p></td>
                    <td>
                      <p class="color-light">
                        Hello there checkout the impossible archivements 
                        made by Mbale People's Clinic and Martenate Home.
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Hi checkout</p></td>
                    <td>
                      <p class="color-light">
                        Hello there checkout the impossible archivements 
                        made by Mbale People's Clinic and Martenate Home.
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
            </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

{{-- Add staff --}}
<div class="modal fade" id="staff" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Add Staff to the Website</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Name*</label>
                        <input type="text" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Department*</label>
                        <input type="text" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
            </div>
                
            <button type="button" class="btn btn-outline-primary btn-sm mb-2 add_button">
              <i class="fa fa-plus-circle"></i> Add Staff Member
            </button>
        </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col" class="titles colors">Image</th>
                <th scope="col" class="titles colors">Name</th>
                <th scope="col" class="titles colors">Department</th>
                <th scope="col" class="titles colors">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Bryan Austin</p></td>
                    <td>
                      <p class="color-light">
                        Surgion
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Bryan Austin</p></td>
                    <td>
                      <p class="color-light">
                        Surgion
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td class="color-light"><p>Bryan Austin</p></td>
                    <td>
                      <p class="color-light">
                        Surgion
                      </p>
                    </td>
                    <td>
                      <span><i class="btn-icon fa fa-edit" style="color:blue"></i> | <i style="color: red" class="btn-icon fa fa-trash"></i></span>
                    </td>
                </tr>
            </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

{{-- Add profile --}}
<div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Edit Your Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Name*</label>
                        <input type="text" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">New Password*</label>
                        <input type="password" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Confirm Password*</label>
                        <input type="password" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
            </div>
                
            <button type="button" class="btn btn-outline-primary btn-sm mb-2 add_button">
              <i class="fa fa-save"></i> Save changes
            </button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Done Close</button>
      </div>
    </div>
  </div>
</div>