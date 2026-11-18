@section('title', 'Blogs - Dashboard')
@prepend('head-script')
<link rel="stylesheet" type="text/css" href="/assets/back/css/rte_theme_default.css">
<link rel="stylesheet" href="/assets/back/css/blog.css" />
@endprepend
<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left d-flex justify-content-start align-items-center">
            <h2>Blogs</h2>
            <a href="javascript:void(0)" class="btn btn-secondary ms-2" data-bs-toggle="modal"
                data-bs-target="#addBlog">+ Add Blog</a>
        </div>
        <div class="right d-flex">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search Blog..."
                class="serch-input"
                style="padding: 5px 12px;border-radius: 10px;border: 1px solid #000;color: #000;font-size: 16px;">
            @if($search)
            <button type="button" wire:click="$set('search', '')" class="btn btn-outline-secondary ms-2">Clear</button>
            @endif
        </div>
    </div>

    <table class="table table-striped table-hover blog-table"
        wire:key="rows-{{ md5($search) }}-{{ $dbs->currentPage() }}">
        <thead>
            <tr>
                <th>Id</th>
                <th style="width: 300px;">Title</th>
                <th>Category</th>
                <th>Author</th>
                <th>Image</th>
                <th style="width: 150px;">Date</th>
                <th>Status</th>
                <th style="width: 150px;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dbs as $db)
            <tr wire:key="blog-{{ $db->id }}">
                <td>#{{ $db->id }}</td>
                <td>{{ $db->title }}</td>
                <td>{{ $db->parent?->bcname ?? '-' }}</td>
                <td>{{ $db->author ?: '-' }}</td>
                <td>
                    @if(!empty($db->file))
                    <img src="{{ asset('blogs/' . $db->file) }}" alt="{{ $db->title }}" width="60" height="40"
                        style="object-fit: cover; border-radius: 6px;">
                    @else
                    <span class="text-muted">No image</span>
                    @endif
                </td>
                <td>{{ $db->date ? \Carbon\Carbon::parse($db->date)->format('j F, Y') : '-' }}</td>
                <td>
                    @if($db->status == 1)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Draft</span>
                    @endif
                </td>
                <td>
                    <a href="javascript:void(0)" class="btn btn-success edit-btn" title="Edit"
                        data-bs-toggle="modal" data-bs-target="#updateBlog"
                        data-id="{{ $db->id }}"
                        data-title="{{ $db->title }}"
                        data-slug="{{ $db->slug }}"
                        data-category="{{ $db->category }}"
                        data-author="{{ $db->author }}"
                        data-metatitle="{{ $db->metatitle }}"
                        data-metadesc="{{ $db->metadesc }}"
                        data-metakeys="{{ $db->metakeys }}"
                        data-date="{{ $db->date ? \Carbon\Carbon::parse($db->date)->format('Y-m-d') : '' }}"
                        data-status="{{ $db->status }}"
                        data-description="{{ $db->description }}"
                        data-image="{{ $db->file ? asset('blogs/' . $db->file) : '' }}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn btn-danger delete-btn" title="Delete"
                        data-id="{{ $db->id }}" data-name="{{ $db->title }}">
                        <i class="bi bi-trash-fill"></i>
                    </a>
                </td>
            </tr>
            @empty
            <tr wire:key="no-results">
                <td colspan="8" class="text-center text-muted">No blogs found</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-between align-items-center mt-3">
        <div class="text-muted">
            Showing {{ $dbs->firstItem() }} to {{ $dbs->lastItem() }} of {{ $dbs->total() }} blogs
        </div>
        <div>
            {{ $dbs->links('pagination::bootstrap-5') }}
        </div>
    </div>

    <!-- Modal For Add Blog -->
    <div class="modal fade" id="addBlog" tabindex="-1" aria-labelledby="addBlogLabel" aria-hidden="true" wire:ignore>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="addPostForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addBlogLabel">Add New Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="title" class="form-label">Blog Title:</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter Blog title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <input type="text" class="form-control" id="slug" placeholder="Blog Slug" name="slug">
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="category" class="form-label">Category:</label>
                                <a href="{{ route('admin.blogcategory') }}">+ Add New Category</a>
                            </div>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($allCategories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->bcname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="author" class="form-label">Author:</label>
                            <input type="text" class="form-control" id="author" placeholder="Author Name" name="author">
                        </div>
                        <div class="mb-3">
                            <label for="metatitle" class="form-label">Meta Title:</label>
                            <input type="text" class="form-control" id="metatitle" placeholder="Meta Title" name="metatitle">
                        </div>
                        <div class="mb-3">
                            <label for="metadesc" class="form-label">Meta Description:</label>
                            <input type="text" class="form-control" id="metadesc" placeholder="Meta Description" name="metadesc">
                        </div>
                        <div class="mb-3">
                            <label for="metakeys" class="form-label">Meta Keywords:</label>
                            <input type="text" class="form-control" id="metakeys"
                                placeholder="best hospital in india, best hospital in haldwani etc" name="metakeys">
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Publish Date:</label>
                            <input type="date" class="form-control" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status:</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea id="add_description" name="description"></textarea>
                        </div>
                        <label for="imageInput">Feature Image: (1024 * 576) / (only .webp image)</label>
                        <input type="file" class="form-control" name="file" id="imageInput" accept="image/*">
                        <div id="preview" style="width:100%;overflow:hidden;margin-top:20px"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Publish</button>
                        <span class="text-dark" id="CtSpinner" style="display:none;">
                            <img src="/assets/front/imgs/spinner.gif" width="20px"> Waiting
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal For Update Blog -->
    <div class="modal fade" id="updateBlog" tabindex="-1" aria-labelledby="updateBlogLabel" aria-hidden="true" wire:ignore>
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form id="updatePostForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="uId">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateBlogLabel">Update Blog</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3 mt-3">
                            <label for="uTitle" class="form-label">Blog Title:</label>
                            <input type="text" class="form-control" id="uTitle" name="title" placeholder="Enter Blog title">
                        </div>
                        <div class="mb-3">
                            <label for="uSlug" class="form-label">Slug:</label>
                            <input type="text" class="form-control" id="uSlug" name="slug" placeholder="Blog Slug">
                        </div>
                        <div class="mb-3">
                            <label for="uCategory" class="form-label">Category:</label>
                            <select name="category" id="uCategory" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($allCategories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->bcname }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="uAuthor" class="form-label">Author:</label>
                            <input type="text" class="form-control" id="uAuthor" name="author" placeholder="Author Name">
                        </div>
                        <div class="mb-3">
                            <label for="uMetatitle" class="form-label">Meta Title:</label>
                            <input type="text" class="form-control" id="uMetatitle" name="metatitle" placeholder="Meta Title">
                        </div>
                        <div class="mb-3">
                            <label for="uMetadesc" class="form-label">Meta Description:</label>
                            <input type="text" class="form-control" id="uMetadesc" name="metadesc" placeholder="Meta Description">
                        </div>
                        <div class="mb-3">
                            <label for="uMetakeys" class="form-label">Meta Keywords:</label>
                            <input type="text" class="form-control" id="uMetakeys" name="metakeys" placeholder="Meta Keywords">
                        </div>
                        <div class="mb-3">
                            <label for="uDate" class="form-label">Publish Date:</label>
                            <input type="date" class="form-control" id="uDate" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="uStatus" class="form-label">Status:</label>
                            <select name="status" id="uStatus" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Draft</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description:</label>
                            <textarea id="up_description" name="description"></textarea>
                        </div>
                        <label for="uImageInput">Feature Image: (1024 * 576) / (only .webp image)</label>
                        <input type="file" class="form-control" name="file" id="uImageInput" accept="image/*">
                        <div id="uPreview" style="width:100%;overflow:hidden;margin-top:20px"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update Blog</button>
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
<script src="/assets/back/js/all_plugins.js"></script>
<script src="/assets/back/js/rte.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    // ---------- Rich text editors ----------
    var addEditor = new RichTextEditor("#add_description", { toolbar: "basic" });
    var upEditor  = new RichTextEditor("#up_description",  { toolbar: "basic" });

    // ---------- Helpers ----------
    function showImagePreview(input, box) {
        var file = input.files[0];
        if (!file) { box.innerHTML = ""; return; }
        var reader = new FileReader();
        reader.onload = function(e) {
            box.innerHTML = '<img src="' + e.target.result + '" width="200" style="border-radius:6px;">';
        };
        reader.readAsDataURL(file);
    }

    function sendForm(url, form, spinner, editor) {
        spinner.style.display = "inline-block";

        var formData = new FormData(form);
        formData.set("description", editor.getHTMLCode());

        fetch(url, {
                method: "POST",
                body: formData,
                headers: { "Accept": "application/json" }
            })
            .then(function(response) {
                return response.json().then(function(data) {
                    return { status: response.status, data: data };
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
    var addForm    = document.getElementById("addPostForm");
    var addSpinner = document.getElementById("CtSpinner");
    var addInput   = document.getElementById("imageInput");
    var addPreview = document.getElementById("preview");

    addInput.addEventListener("change", function() { showImagePreview(addInput, addPreview); });

    addForm.addEventListener("submit", function(e) {
        e.preventDefault();
        sendForm("/ds-admin/add-blog", addForm, addSpinner, addEditor);
    });

    // ---------- UPDATE ----------
    var upForm    = document.getElementById("updatePostForm");
    var upSpinner = document.getElementById("uSpinner");
    var upInput   = document.getElementById("uImageInput");
    var upPreview = document.getElementById("uPreview");

    upInput.addEventListener("change", function() { showImagePreview(upInput, upPreview); });

    upForm.addEventListener("submit", function(e) {
        e.preventDefault();
        sendForm("/ds-admin/update-blog", upForm, upSpinner, upEditor);
    });

    // Edit / Delete buttons (delegation: search ke baad naye rows par bhi chalega)
    document.addEventListener("click", function(e) {

        // ----- EDIT -----
        var editBtn = e.target.closest(".edit-btn");
        if (editBtn) {
            var d = editBtn.dataset;
            document.getElementById("uId").value        = d.id;
            document.getElementById("uTitle").value     = d.title;
            document.getElementById("uSlug").value      = d.slug;
            document.getElementById("uCategory").value  = d.category || "";
            document.getElementById("uAuthor").value    = d.author || "";
            document.getElementById("uMetatitle").value = d.metatitle || "";
            document.getElementById("uMetadesc").value  = d.metadesc || "";
            document.getElementById("uMetakeys").value  = d.metakeys || "";
            document.getElementById("uDate").value      = d.date || "";
            document.getElementById("uStatus").value    = d.status;
            upInput.value = "";
            upEditor.setHTMLCode(d.description || "");
            upPreview.innerHTML = d.image
                ? '<img src="' + d.image + '" width="200" style="border-radius:6px;">'
                : "";
            return;
        }

        // ----- DELETE -----
        var delBtn = e.target.closest(".delete-btn");
        if (delBtn) {
            if (!confirm('Are you sure you want to delete "' + delBtn.dataset.name + '"?')) return;

            var fd = new FormData();
            fd.append("id", delBtn.dataset.id);
            fd.append("_token", document.querySelector('#addPostForm input[name="_token"]').value);

            fetch("/ds-admin/delete-blog", {
                    method: "POST",
                    body: fd,
                    headers: { "Accept": "application/json" }
                })
                .then(function(response) {
                    return response.json().then(function(data) {
                        return { status: response.status, data: data };
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
                .catch(function(err) { alert("Request failed: " + err); });
        }
    });
});
</script>
@endprepend