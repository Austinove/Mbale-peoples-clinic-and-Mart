<!-- request appointment -->
<div class="modal fade" id="appointment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Make an Appointment With our Doctors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Number:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">When:</label>
            <input type="Date" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Request</button>
      </div>
    </div>
  </div>
</div>

<!-- Add slides -->
<div class="modal" id="slides" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Action on Slides</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title*</label>
                        <input type="text" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Image*</label>
                        <input type="file" class="form-control form-custom input-xs" id="recipient-name">
                    </div>
                </div>
                
            </div>
            {{-- <div class="col"> --}}
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Description*</label>
                    <textarea class="form-control form-custom input-xs" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            {{-- </div> --}}
            <button type="button" class="btn btn-outline-primary btn-sm mb-2">Add Slide</button>
        </form>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td>Hi checkout</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur ante leo,
                        finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper
                        sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex.
                    </td>
                    <td>Action</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td>Hi checkout</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur ante leo,
                        finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper
                        sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex.
                    </td>
                    <td>Action</td>
                </tr>
                <tr>
                    <th scope="row">
                        <img src="images/logo.jpg" height="40px" alt="image">
                    </th>
                    <td>Hi checkout</td>
                    <td>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur ante leo,
                        finibus quis est ut, tempor tincidunt ipsum. Nam consequat semper
                        sollicitudin. Aliquam nec dapibus massa. Pellen tesque in luctus ex.
                    </td>
                    <td>Action</td>
                </tr>
            </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Done</button>
      </div>
    </div>
  </div>
</div>

{{-- Add news --}}
<div class="modal" id="news" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ... News
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{-- Add staff --}}
<div class="modal" id="staff" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...Staff
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

{{-- Add profile --}}
<div class="modal" id="profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Profile title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...Profile
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>