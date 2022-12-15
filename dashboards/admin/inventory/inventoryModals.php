<!-- Add Category Modal -->
<div class="modal customModal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="px-4 mt-4">Add Category</h4>
                </div>
                <div class="modal-body text-start mt-2">
                    <h6>Category Name</h6>
                    <input class="primary-inputs secInp" placeholder="Enter Category Name" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="sec-btn" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#categoryAdded">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Add Category Updated -->
<div class="modal customModal fade" id="categoryAdded" tabindex="-1" aria-labelledby="categoryAdded" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Category has been updated.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Category Modal -->
<div class="modal customModal fade" id="editCategory" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="px-4 mt-4">Edit Category</h4>
                </div>
                <div class="modal-body text-start mt-2">
                    <h6>Category Name</h6>
                    <input class="primary-inputs secInp" placeholder="Enter Category Name" value="ABC" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="sec-btn" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#categoryUpdated">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Category Updated -->
<div class="modal customModal fade" id="categoryUpdated" tabindex="-1" aria-labelledby="categoryUpdated" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Category has been updated.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- Sub Category  Modal -->
<div class="modal customModal fade" id="subCategoryAdded" tabindex="-1" aria-labelledby="subCategoryAddedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="px-4 mt-4">Add Sub Category</h4>
                </div>
                <div class="modal-body text-start mt-2">
                    <h6>Category Name</h6>
                    <input class="primary-inputs secInp" placeholder="Enter Category Name" value="ABC" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="sec-btn" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#subCategorystatus">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sub Category Added -->
<div class="modal customModal fade" id="subCategorystatus" tabindex="-1" aria-labelledby="categoryUpdated" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Sub Category has been Added.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<!-- Sub Category  Edit -->
<div class="modal customModal fade" id="subCategoryEdit" tabindex="-1" aria-labelledby="subCategoryEditLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="px-4 mt-4">Edit Sub Category</h4>
                </div>
                <div class="modal-body text-start mt-2">
                    <h6>Sub Category Name</h6>
                    <input class="primary-inputs secInp" placeholder="Enter Category Name" value="ABC" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="sec-btn" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#subCategoryUpdated">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sub Category updated -->
<div class="modal customModal fade" id="subCategoryUpdated" tabindex="-1" aria-labelledby="categoryUpdated" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Sub Category has been updated.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- Category Details -->
<div class="modal customModal fade" id="categoryDetails" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h4 class="px-4 mt-4">Category Details</h4>
                </div>
                <div class="modal-body text-start mt-2">
                    <h6>Category Name</h6>
                    <p>Abc</p>
                </div>
                <div class="modal-footer">
                    <a type="button" href="#" class="sec-btn" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editCategory">Edit</a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- product Updated Modal -->
<div class="modal customModal fade" id="productUpdated" tabindex="-1" aria-labelledby="categoryUpdated" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Product has been updated.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<!-- Product Added Modal -->
<div class="modal customModal fade" id="productAdded" tabindex="-1" aria-labelledby="categoryUpdated" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close modal_close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="modal_img_wrap">
                    <img src="../../assets/images/true.png" class="img-fluid" alt="Modal Image">
                </div>
                <h4>Successfully</h4>
                <p>Product has been Added.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="sec-btn" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>