<div class="modal fade" id="add-product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-info text-center">
                <h1 class="modal-title display-6 fw-bold text-center">Add Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <label for="product-name" class="form-label">Peoduct Name</label>
                            <input type="text" name="product_name" id="product-name" class="form-control">
                        </div>     
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="price" class="form-label">Price</label>
                                <div class="input-group">
                                    <div class="input-group-text">$</div>
                                    <input type="number" name="price" id="price" class="form-control">
                                </div>
                        </div>
                        <div class="col">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                        <div class="col">
                            <button type="btn" class="btn-info">Add</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>