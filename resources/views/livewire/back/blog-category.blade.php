@section('title', 'Blogs Category - Dashboard')
@prepend('head-script')
<link rel="stylesheet" href="/assets/back/css/blog.css" />
@endprepend
<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left d-flex justify-content-start align-items-center">
            <h2>Blogs Category</h2>
            <a href="javascript:void(0)" class="btn btn-primary ms-3" data-bs-toggle="modal"
                data-bs-target="#addBlog">+ Add Blog Category</a>
            <a href="/ds-admin/blogs" class="btn btn-secondary ms-3">+ Add Blog</a>
        </div>
        <div class="right d-flex">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search Blog Category..."
                class="serch-input" style="padding: 5px 12px;border-radius: 10px;border: 1px solid #000;color: #000;font-size: 16px;">
            @if($search)
            <button type="button" wire:click="$set('search', '')" class="btn btn-outline-secondary ms-2">Clear</button>
            @endif
        </div>
    </div>

    <table class="table table-striped table-hover blog-table" wire:key="rows-{{ md5($search) }}-{{ $dbs->currentPage() }}">
        <thead>
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Sub Category</th>
                <th>Date</th>
                <th>Image</th>
                <th>Status</th>
                <th style="width: 180px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dbs as $db)
            <tr wire:key="cat-{{ $db->id }}">
                <td>{{ $dbs->firstItem() + $loop->index }}</td>
                <td>{{ $db->bcname }}</td>
                <td>
                    @if($db->parent && $db->parent->id !== $db->id)
                    {{ $db->parent->bcname }}
                    @else
                    <span class="text-muted">—</span>
                    @endif
                </td>
                <td>{{ \Carbon\Carbon::parse($db->created_at)->format('j F, h:ia, Y') }}</td>
                <td>
                    @if(!empty($db->bcfile))
                    <img src="{{ asset('blogs-category/' . $db->bcfile) }}" alt="{{ $db->bcname }}" width="60"
                        height="60" style="object-fit: cover; border-radius: 6px;">
                    @else
                    <span class="text-muted">No image</span>
                    @endif
                </td>
                <td>
                    @if($db->status == 1)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>
                <td>
                    <a href="javascript:void(0)" class="btn btn-success edit-btn" title="Edit" data-bs-toggle="modal"
                        data-bs-target="#updateBlog" data-id="{{ $db->id }}" data-name="{{ $db->bcname }}"
                        data-slug="{{ $db->bcslug }}" data-parent="{{ $db->bccategory }}"
                        data-status="{{ $db->status }}"
                        data-image="{{ $db->bcfile ? asset('blogs-category/' . $db->bcfile) : '' }}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-danger delete-btn" title="Delete"
                        data-id="{{ $db->id }}" data-name="{{ $db->bcname }}">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr wire:key="no-results">
                 <td colspan="7" class="text-center text-muted">No categories found</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-between align-items-center mt-3">
        <div class="text-muted">
            Showing {{ $dbs->firstItem() }} to {{ $dbs->lastItem() }} of {{ $dbs->total() }} categories
        </div>
        <div>
            {{ $dbs->links('pagination::bootstrap-5') }}
        </div>
    </div>


    <!-- Modal For Add Blog Category -->
    <div class="modal fade" id="addBlog" tabindex="-1" aria-labelledby="addBlogLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form id="addPostForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBlogLabel">Add New Blog Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="bcname" class="form-label">Category Name:</label>
                            <input type="text" class="form-control" id="bcname" placeholder="Enter your category name"
                                name="bcname">
                        </div>
                        <div class="mb-3">
                            <label for="bcslug" class="form-label">Category Slug:</label>
                            <input type="text" class="form-control" id="bcslug" placeholder="Category Slug"
                                name="bcslug">
                        </div>
                        <div class="mb-3">
                            <label for="bccategory" class="form-label">Select Sub Category:</label>
                            <select name="bccategory" id="bccategory" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($dbs as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->bcname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="imageInput">Feature Image:</label>
                        <input type="file" class="form-control" name="bcfile" id="imageInput" accept="image/*">
                        <div id="preview" style="width:100%;overflow:hidden;margin-top:20px"></div>

                        <div class="mb-3 mt-3">
                            <label for="status" class="form-label">Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Category</button>
                        <span class="text-dark" id="CtSpinner" style="display:none;">
                            <img src="/assets/front/imgs/spinner.gif" width="20px"> Waiting
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal For Update Blog Category -->
    <div class="modal fade" id="updateBlog" tabindex="-1" aria-labelledby="updateBlogLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <form id="updatePostForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="uId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateBlogLabel">Update Blog Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="uName" class="form-label">Category Name:</label>
                            <input type="text" class="form-control" id="uName" name="bcname"
                                placeholder="Enter your category name">
                        </div>
                        <div class="mb-3">
                            <label for="uSlug" class="form-label">Category Slug:</label>
                            <input type="text" class="form-control" id="uSlug" name="bcslug"
                                placeholder="Category Slug">
                        </div>
                        <div class="mb-3">
                            <label for="uParent" class="form-label">Select Sub Category:</label>
                            <select name="bccategory" id="uParent" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($dbs as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->bcname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="uImageInput">Feature Image:</label>
                        <input type="file" class="form-control" name="bcfile" id="uImageInput" accept="image/*">
                        <div id="uPreview" style="width:100%;overflow:hidden;margin-top:20px"></div>

                        <div class="mb-3 mt-3">
                            <label for="uStatus" class="form-label">Status:</label>
                            <select name="status" id="uStatus" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                        <span class="text-dark" id="uSpinner" style="display:none;">
                            <img src="/assets/front/imgs/spinner.gif" width="20px"> Waiting
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@prepend('foot-script')
<script>
document.addEventListener("DOMContentLoaded", function() {

    // ---------- Common helpers ----------
    function showImagePreview(input, box) {
        var file = input.files[0];
        if (!file) {
            box.innerHTML = "";
            return;
        }
        var reader = new FileReader();
        reader.onload = function(e) {
            box.innerHTML = '<img src="' + e.target.result + '" width="120" style="border-radius:6px;">';
        };
        reader.readAsDataURL(file);
    }

    function sendForm(url, form, spinner) {
        spinner.style.display = "inline-block";

        fetch(url, {
                method: "POST",
                body: new FormData(form),
                headers: {
                    "Accept": "application/json"
                }
            })
            .then(function(response) {
                return response.json().then(function(data) {
                    return {
                        status: response.status,
                        data: data
                    };
                });
            })
            .then(function(result) {
                spinner.style.display = "none";

                if (result.data === true) {
                    form.reset();
                    window.location.reload();
                } else if (result.status === 422) {
                    alert(Object.values(result.data.errors).flat().join("\n"));
                } else {
                    alert("Error: " + (result.data.message || result.data));
                }
            })
            .catch(function(err) {
                spinner.style.display = "none";
                alert("Request failed: " + err);
            });
    }

    // ---------- ADD ----------
    var addForm = document.getElementById("addPostForm");
    var addSpinner = document.getElementById("CtSpinner");
    var addInput = document.getElementById("imageInput");
    var addPreview = document.getElementById("preview");

    addInput.addEventListener("change", function() {
        showImagePreview(addInput, addPreview);
    });

    addForm.addEventListener("submit", function(event) {
        event.preventDefault();
        sendForm("/ds-admin/add-blog-category", addForm, addSpinner);
    });

    // ---------- UPDATE ----------
    var upForm = document.getElementById("updatePostForm");
    var upSpinner = document.getElementById("uSpinner");
    var upInput = document.getElementById("uImageInput");
    var upPreview = document.getElementById("uPreview");

    // Edit button dabane par modal me existing data bharo
    document.querySelectorAll(".edit-btn").forEach(function(btn) {
        btn.addEventListener("click", function() {
            document.getElementById("uId").value = btn.dataset.id;
            document.getElementById("uName").value = btn.dataset.name;
            document.getElementById("uSlug").value = btn.dataset.slug;
            document.getElementById("uParent").value = btn.dataset.parent || "";
            document.getElementById("uStatus").value = btn.dataset.status;
            upInput.value = "";

            // Category apna hi parent na ban sake
            document.querySelectorAll("#uParent option").forEach(function(opt) {
                opt.hidden = (opt.value === btn.dataset.id);
            });

            // Purani image dikhao
            upPreview.innerHTML = btn.dataset.image ?
                '<img src="' + btn.dataset.image + '" width="120" style="border-radius:6px;">' :
                "";
        });
    });

    upInput.addEventListener("change", function() {
        showImagePreview(upInput, upPreview);
    });

    upForm.addEventListener("submit", function(event) {
        event.preventDefault();
        sendForm("/ds-admin/update-blog-category", upForm, upSpinner);
    });
});
</script>

<script>
// ---------- DELETE ----------
document.querySelectorAll(".delete-btn").forEach(function(btn) {
    btn.addEventListener("click", function() {
        if (!confirm('Are you sure you want to delete "' + btn.dataset.name + '"?')) return;

        var formData = new FormData();
        formData.append("id", btn.dataset.id);
        formData.append("_token", document.querySelector('input[name="_token"]').value);

        fetch("/ds-admin/delete-blog-category", {
                method: "POST",
                body: formData,
                headers: {
                    "Accept": "application/json"
                }
            })
            .then(function(response) {
                return response.json().then(function(data) {
                    return {
                        status: response.status,
                        data: data
                    };
                });
            })
            .then(function(result) {
                if (result.data === true) {
                    window.location.reload();
                } else if (result.status === 422) {
                    alert(Object.values(result.data.errors).flat().join("\n"));
                } else {
                    alert("Error: " + (result.data.message || result.data));
                }
            })
            .catch(function(err) {
                alert("Request failed: " + err);
            });
    });
});
</script>
@endprepend