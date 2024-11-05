<!-- Modal -->
<div class="modal fade" id="wholesaleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Wholesale</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="wholesale_function.php" method="POST">
        <div class="modal-body">
            <div class="form-group mb-2">
                <label >Sales Invoice no.</label>
                <input type="text" name="invoice_no" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <label >Amount</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <label >No. of Tickets</label>
                <input type="number" name="num_of_ticket" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <label >Fullname</label>
                <input type="text" name="fullname" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <label >Email (Optional)</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group mb-2">
                <label >Phone No. (Optional)</label>
                <input type="text" name="phone" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>