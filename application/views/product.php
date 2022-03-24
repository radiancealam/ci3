<?php $this->load->view('layouts/header.php') ?>
<?php $this->load->view('layouts/_partials/navbar.php') ?>
<div class="row mt-3">
    <div class="col">
        <h3 class="mb-2">Product List</h3>
        <table class="table table-responsive text-center" style="vertical-align: middle;">
            <a href="" class="btn btn-md btn-success mb-2">Add Product</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $product->name ?>
                        </td>
                        <td>
                            <?php echo $product->price ?>
                        </td>
                        <td>
                            <?php echo $product->description ?>
                        </td>
                        <td>
                            <button class="btn btn-warning d-inline">Edit</button>
                            <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $this->load->view('layouts/footer.php') ?>