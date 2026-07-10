@section('title', 'Blogs Category - Dashboard')
@prepend('head-script')
<link rel="stylesheet" type="text/css" href="/assets/back/css/rte_theme_default.css">
<link rel="stylesheet" href="/assets/back/css/blog.css" />
@endprepend
<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left d-flex justify-content-start align-items-center">
            <h2>Blogs Category</h2>
        </div>
        <div class="right d-flex">
            <form action="#" class="search-form">
                @csrf
                <input type="text" placeholder="Search Blog..." class="serch-input">
                <input type="submit" value="Search Blog" class="btn btn-secondary">
            </form>
        </div>
    </div>

    <table class="table table-striped table-hover blog-table">
        <thead>
            <tr>
                <th>Id</th>
                <th style="width: 395px;">Title</th>
                <th>Category</th>
                <th>Author</th>
                <th style="width: 195px;">Date</th>
                <th>Status</th>
                <th style="width: 180px;">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#1</td>
                <td>The cell-by-cell atlas will help in the study of eye disorders and </td>
                <td>Eye</td>
                <td>Dev</td>
                <td>3 June, 03:15pm, 2026</td>
                <td>
                    <a href="#" class="text-success fw-bold">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info text-white" title="View">
                        <i class="bi bi-eye-fill"></i>
                    </a>

                    <a href="#" class="btn btn-success" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn btn-danger" title="Delete">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>#2</td>
                <td>The cell-by-cell atlas will help in the study of eye disorders and </td>
                <td>Eye</td>
                <td>Dev</td>
                <td>3 June, 03:15pm, 2026</td>
                <td>
                    <a href="#" class="text-success fw-bold">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info text-white" title="View">
                        <i class="bi bi-eye-fill"></i>
                    </a>

                    <a href="#" class="btn btn-success" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn btn-danger" title="Delete">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>#3</td>
                <td>The cell-by-cell atlas will help in the study of eye disorders and </td>
                <td>Eye</td>
                <td>Dev</td>
                <td>3 June, 03:15pm, 2026</td>
                <td>
                    <a href="#" class="text-success fw-bold">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info text-white" title="View">
                        <i class="bi bi-eye-fill"></i>
                    </a>

                    <a href="#" class="btn btn-success" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn btn-danger" title="Delete">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>#3</td>
                <td>The cell-by-cell atlas will help in the study of eye disorders and </td>
                <td>Eye</td>
                <td>Dev</td>
                <td>3 June, 03:15pm, 2026</td>
                <td>
                    <a href="#" class="text-success fw-bold">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info text-white" title="View">
                        <i class="bi bi-eye-fill"></i>
                    </a>

                    <a href="#" class="btn btn-success" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn btn-danger" title="Delete">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>#3</td>
                <td>The cell-by-cell atlas will help in the study of eye disorders and </td>
                <td>Eye</td>
                <td>Dev</td>
                <td>3 June, 03:15pm, 2026</td>
                <td>
                    <a href="#" class="text-success fw-bold">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info text-white" title="View">
                        <i class="bi bi-eye-fill"></i>
                    </a>

                    <a href="#" class="btn btn-success" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn btn-danger" title="Delete">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>

            <tr>
                <td>#3</td>
                <td>The cell-by-cell atlas will help in the study of eye disorders and </td>
                <td>Eye</td>
                <td>Dev</td>
                <td>3 June, 03:15pm, 2026</td>
                <td>
                    <a href="#" class="text-success fw-bold">Active</a>
                </td>
                <td>
                    <a href="#" class="btn btn-info text-white" title="View">
                        <i class="bi bi-eye-fill"></i>
                    </a>

                    <a href="#" class="btn btn-success" title="Edit">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <a href="#" class="btn btn-danger" title="Delete">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>


    <!-- Modal For Add Blog-->
    <div class="modal fade" id="addBlog" tabindex="-1" aria-labelledby="addBlogLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBlogLabel">Add New Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="">

                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Blog Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Blog title"
                                name="title">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" placeholder="Blog Slug" name="slug">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="slug" class="form-label">Category:</label>
                                <a href="#" class="">+ Add New Category</a>
                            </div>
                            <select name="category" id="" class="form-control">
                                <option value="">Select Category</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Author" class="form-label">Author:</label>
                            <input type="text" class="form-control" id="Author" placeholder="Author Name" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="metatitle" class="form-label">Meta Title:</label>
                            <input type="text" class="form-control" id="metatitle" placeholder="Meta Title"
                                name="metatitle">
                        </div>
                        <div class="mb-3">
                            <label for="metadesc" class="form-label">Meta Description:</label>
                            <input type="text" class="form-control" id="metadesc" placeholder="Meta Description"
                                name="metadesc">
                        </div>
                        <div class="mb-3">
                            <label for="metakeys" class="form-label">Meta Keywords:</label>
                            <input type="text" class="form-control" id="metakeys"
                                placeholder="best hospital in india, best hospital in haldwani etc" name="metakeys">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Publish Date:</label>
                            <input type="date" class="form-control" id="date" placeholder="Select Date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Status:</label>
                            <select name="status" id="" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Description:</label>
                            <textarea id="div_editor1" name="description"></textarea>
                        </div>
                        <label for="title">Feature Image:(1024 * 576) / (only .webp
                            image)</label>
                        <input type="file" class="form-control" name="file" id="imageInput" accept="image/*"
                            onchange="previewImage()">
                        <div id="preview" style="width:100%;overflow:hidden;margin-top:20px"></div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal For Update Blog-->
    <div class="modal fade" id="updateBlog" tabindex="-1" aria-labelledby="updateBlogLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateBlogLabel">Add New Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="">

                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Blog Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Blog title"
                                name="title">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" placeholder="Blog Slug" name="slug">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Category:</label>
                            <select name="category" id="" class="form-control">
                                <option value="">Select Category</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="Author" class="form-label">Author:</label>
                            <input type="text" class="form-control" id="Author" placeholder="Author Name" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="metatitle" class="form-label">Meta Title:</label>
                            <input type="text" class="form-control" id="metatitle" placeholder="Meta Title"
                                name="metatitle">
                        </div>
                        <div class="mb-3">
                            <label for="metadesc" class="form-label">Meta Description:</label>
                            <input type="text" class="form-control" id="metadesc" placeholder="Meta Description"
                                name="metadesc">
                        </div>
                        <div class="mb-3">
                            <label for="metakeys" class="form-label">Meta Keywords:</label>
                            <input type="text" class="form-control" id="metakeys"
                                placeholder="best hospital in india, best hospital in haldwani etc" name="metakeys">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Publish Date:</label>
                            <input type="date" class="form-control" id="date" placeholder="Select Date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Status:</label>
                            <select name="status" id="" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Description:</label>
                            <textarea id="div_editor1" name="description"></textarea>
                        </div>
                        <label for="title">Feature Image:(1024 * 576) / (only .webp
                            image)</label>
                        <input type="file" class="form-control" name="file" id="imageInput" accept="image/*"
                            onchange="previewImage()">
                        <div id="preview" style="width:100%;overflow:hidden;margin-top:20px"></div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="/assets/back/js/all_plugins.js"></script>
    <script src="/assets/back/js/rte.js"></script>
    <script>
    var editor1cfg = {}
    editor1cfg.toolbar = "basic";
    var editor1 = new RichTextEditor("#div_editor1", editor1cfg);

    function previewImage() {
        var preview = document.getElementById('preview');
        var fileInput = document.getElementById('imageInput');
        var file = fileInput.files[0];

        // Check if a file is selected
        if (file) {
            var reader = new FileReader();

            // Set up the reader onload event
            reader.onload = function(e) {
                // Create an image element
                var img = new Image();
                img.src = e.target.result;


                // Append the image to the preview div
                preview.innerHTML = '';
                preview.appendChild(img);
            };

            // Read the file as a data URL
            reader.readAsDataURL(file);
        } else {
            // If no file is selected, clear the preview
            preview.innerHTML = '';
        }
    }
    </script>
    <script>
    $(document).ready(function() {
        $("#addBlog").submit(function(event) {
            event.preventDefault();
            document.querySelector("#CtSpinner").style.display = "block";
            var formData = new FormData(this);

            $.ajax({
                type: "POST",
                url: "/admin/add-blog",
                data: formData,
                contentType: false,
                processData: false,
                success: function(res) {
                    if (res == true) {
                        $("#addBlog")[0].reset();
                        document.querySelector("#messagehere").style.display = "block";
                        window.location.reload('/admin/add-blog');
                    } else {
                        alert("Error!" + res);
                    }
                }
            });
        });
    });
    </script>
</div>