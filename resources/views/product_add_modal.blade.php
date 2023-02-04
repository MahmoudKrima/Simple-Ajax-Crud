

  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
   <form action="" method="POST" id="addProductForm">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="addModalLabel">Add Product</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="errMsgContainer mb-3">

            </div>

           <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Product Name">
           </div>

           <div class="form-group mt-2">
            <label for="price">Product Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Product Price">
           </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_product">Save Product</button>
          </div>
        </div>
      </div>
   </form>
  </div>
