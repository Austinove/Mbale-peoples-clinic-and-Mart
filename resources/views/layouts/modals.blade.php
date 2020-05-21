<!-- request appointment -->
<div class="modal fade" id="appointment" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
      <div class="alert modal-alert-success alert-success alert-dismissible fade show" role="alert">
        <strong>Appointment Send</strong> We will Call You for More Detalis
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="alert modal-alert-danger alert-danger alert-dismissible fade show" role="alert">
        <strong>An Error Occured !</strong> Try again later please.....
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary done" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-primary add_button" id="appointment-request">Request</button>
      </div>
    </div>
  </div>
</div>

{{-- Appointment details --}}
<div class="modal" id="appointment-details" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Appointment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="media">
          {{-- body in jQuery --}}
          <div class="media-body appt-body"></div>
        </div>
      </div>
      <div class="alert modal-alert-danger alert-danger alert-dismissible fade show" role="alert">
        <strong>An Error Occured !</strong> Try again later please.....
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary done add_button" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!-- Add slides -->
<div class="modal fade" id="slides" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Action on Slides</h5>
      </div>
      <div class="modal-body">
        <form id="slides-submition" enctype="multipart/form-data">
            <div class="form-row">
              @csrf
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="slides-title" class="col-form-label colors">Title*</label>
                        <input type="text" class="form-control form-custom input-xs" id="slides-title" name="slides-title">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label colors">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" id="slides-image" name="slides-image">
                    </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                      <label for="recipient-name" class="col-form-label colors">Description*</label>
                      <textarea class="form-control form-custom input-xs" id="slides-desc" name="slides-desc" rows="3"></textarea>
                  </div>
                </div>
            </div>
            <div class="alert modal-alert-success alert-success alert-dismissible fade show" role="alert">
              <strong>Slide Saved Successfully</strong> Press Apply Changes....
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert modal-alert-danger alert-danger alert-dismissible fade show" role="alert">
              <strong>An Error Occured !</strong> Try again later please.....
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <button type="submit" data="save" class="btn btn-outline-primary btn-sm mb-2 add_button" id="add-slide">
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
            {{-- Getting Slides from jQuery --}}
            <tbody class="slides-tbody"></tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary done" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary btn-sm add_button" data-dismiss="modal" id="applySlides">Apply Slides</button>
      </div>
    </div>
  </div>
</div>

{{-- Add news --}}
<div class="modal fade" id="news" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Add News to the Website</h5>
      </div>
      <div class="modal-body">
        <form id="news-submition" method="POST" enctype="multipart/form-data">
            <div class="form-row">
              @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="news-title" class="col-form-label colors">News Title*</label>
                        <input type="text" class="form-control form-custom input-xs" name="news-title" id="news-title">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="news-image" class="col-form-label colors">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" name="news-image" id="news-image">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8">
                  <div class="form-group">
                      <label for="news-desc" class="col-form-label colors">News Description*</label>
                      <textarea class="form-control form-custom input-xs" name="news-desc" id="news-desc" rows="5"></textarea>
                  </div>
                </div>
            </div>
            <div class="alert modal-alert-success alert-success alert-dismissible fade show" role="alert">
              <strong>News Added Successfully</strong> Thank you...
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert modal-alert-danger alert-danger alert-dismissible fade show" role="alert">
              <strong>An Error Occured !</strong> Try again later please.....
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <button type="submit" data="save" class="btn btn-outline-primary btn-sm mb-2 add_button" id="add-news">
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
            {{-- fetch news from jQuery --}}
            <tbody class="news-tbody"></tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm done" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

{{-- Add staff --}}
<div class="modal fade" id="staff" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title colors" id="exampleModalLongTitle">Add Staff to the Website</h5>
      </div>
      <div class="modal-body">
        <form id="staff-submition" method="POST" enctype="multipart/form-data">
            <div class="form-row">
              @csrf
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="staff-name" class="col-form-label colors">Name*</label>
                        <input type="text" class="form-control form-custom input-xs" name="staff-name" id="staff-name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="staff-dept" class="col-form-label colors">Department*</label>
                        <input type="text" class="form-control form-custom input-xs" name="staff-dept" id="staff-dept">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="staff-image" class="col-form-label colors">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" name="staff-image" id="staff-image">
                    </div>
                </div>
            </div>
            <div class="alert modal-alert-success alert-success alert-dismissible fade show" role="alert">
              <strong>Staff Added Successfully</strong> Thank you...
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert modal-alert-danger alert-danger alert-dismissible fade show" role="alert">
              <strong>An Error Occured !</strong> Try again later please.....
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <button type="submit" data="save" class="btn btn-outline-primary btn-sm mb-2 add_button done" id="add-staff">
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

            {{-- Staff is rendered from jQuery --}}
            <tbody class="staff-tbody"></tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary btn-sm" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

{{-- Add profile --}}
<div class="modal fade" id="profile" data-keyboard="false" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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