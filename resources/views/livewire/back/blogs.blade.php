@section('title', 'Blogs - Dashboard')
@prepend('head-script')
<link rel="stylesheet" type="text/css" href="/assets/back/css/rte_theme_default.css">
<link rel="stylesheet" href="/assets/back/css/blog.css" />
@endprepend
<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="left d-flex justify-content-start align-items-center">
            <h2>Blogs</h2>
            <a href="javascript:void(0)" class="btn btn-primary ms-2" data-bs-toggle="modal"
                data-bs-target="#addBlog">+ Add Blog</a>
            <a href="/blog" class="btn btn-secondary ms-3" target="_blank">View All Blog</a>
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

    <table class="table table-striped table-hover blog-table" id="blogTable"
    wire:key="rows-{{ md5($search) }}-{{ $dbs->currentPage() }}">
    <thead>
        <tr>
            <th>Id</th>
            <th style="width: 300px;">Title</th>
            <th>Category</th>
            <th>Image</th>
            <th style="width: 200px;">Date</th>
            <th style="width: 90px;">Status</th>
            <th style="width: 190px;">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($dbs as $db)
        @php
            // Image ke URL me version lagaya taaki browser purani image cache se na dikhaye
            $imgUrl = !empty($db->file)
                ? asset('blogs/' . $db->file) . '?v=' . optional($db->updated_at)->timestamp
                : '';
        @endphp
        <tr wire:key="blog-{{ $db->id }}-{{ optional($db->updated_at)->timestamp }}">
            <td># {{ $dbs->firstItem() + $loop->index }}</td>
            <td>{{ $db->title }}</td>
            <td>{{ $db->parent?->bcname ?? '-' }}</td>
            <td>
                @if($imgUrl)
                <img src="{{ $imgUrl }}" alt="{{ $db->title }}" width="60" height="40"
                    style="object-fit: cover; border-radius: 6px;">
                @else
                <span class="text-muted">No image</span>
                @endif
            </td>
            <td>{{ $db->created_at ? \Carbon\Carbon::parse($db->created_at)->format('j F, Y') : '-' }}</td>
            <td>
                @if($db->status == 1)
                <span class="badge bg-success">Active</span>
                @else
                <span class="badge bg-danger">Draft</span>
                @endif
            </td>
            <td>
                @if(!empty($db->slug))
                <a href="{{ url('/blog/' . $db->slug) }}" target="_blank" rel="noopener"
                    class="btn btn-primary" title="View Blog">
                    <i class="bi bi-eye-fill"></i>
                </a>
                @endif
                <a href="javascript:void(0)" class="btn btn-success edit-btn" title="Edit"
                    data-bs-toggle="modal" data-bs-target="#updateBlog"
                    data-id="{{ $db->id }}"
                    data-title="{{ $db->title }}"
                    data-slug="{{ $db->slug }}"
                    data-category="{{ $db->category }}"
                    data-author="{{ $db->author }}"
                    data-meta_title="{{ $db->meta_title }}"
                    data-meta_desc="{{ $db->meta_desc }}"
                    data-meta_keys="{{ $db->meta_keys }}"
                    data-shortdesc="{{ $db->shortdesc }}"
                    data-created_at="{{ $db->created_at ? \Carbon\Carbon::parse($db->created_at)->format('Y-m-d') : '' }}"
                    data-status="{{ $db->status }}"
                    data-description="{{ $db->description }}"
                    data-image="{{ $imgUrl }}">
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
                            <label for="meta_title" class="form-label">Meta Title:</label>
                            <textarea class="form-control" id="meta_title" rows="2" placeholder="Meta Title" name="meta_title"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="meta_desc" class="form-label">Meta Description:</label>
                            <textarea class="form-control" id="meta_desc" rows="3" placeholder="Meta Description" name="meta_desc"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="meta_keys" class="form-label">Meta Keywords:</label>
                            <textarea class="form-control" id="meta_keys" rows="2" placeholder="Meta Keywords" name="meta_keys"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Publish Date:</label>
                            <input type="date" class="form-control" id="date" name="created_at">
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
                            <label for="shortdesc" class="form-label">Short Description:</label>
                            <textarea class="form-control" id="shortdesc" rows="3" placeholder="Short Description" name="shortdesc"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Long Description:</label>
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
                            <label for="umeta_title" class="form-label">Meta Title:</label>
                            <textarea class="form-control" id="umeta_title" name="meta_title" rows="2" placeholder="Meta Title"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="umeta_desc" class="form-label">Meta Description:</label>
                            <textarea class="form-control" id="umeta_desc" name="meta_desc" rows="3" placeholder="Meta Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="umeta_keys" class="form-label">Meta Keywords:</label>
                            <input type="text" class="form-control" id="umeta_keys" name="meta_keys" placeholder="Meta Keywords">
                        </div>
                        <div class="mb-3">
                            <label for="uDate" class="form-label">Publish Date:</label>
                            <input type="date" class="form-control" id="uDate" name="created_at">
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
                            <label for="uShortdesc" class="form-label">Short Description:</label>
                            <textarea class="form-control" id="uShortdesc" name="shortdesc" rows="3" placeholder="Short Description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Long Description:</label>
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
<script src="/assets/back/js/rte.js"></script>
<script src="/assets/back/js/all_plugins.js"></script>
<script>
(function () {
    function init() {

        // ---------- Rich text editors (modal khulne par banenge) ----------
        var addEditor = null;
        var upEditor  = null;
        var pendingUpHtml = "";

        var addModalEl = document.getElementById("addBlog");
        var upModalEl  = document.getElementById("updateBlog");

        addModalEl.addEventListener("shown.bs.modal", function () {
            if (!addEditor) {
                addEditor = new RichTextEditor("#add_description", { toolbar: "basic" });
            }
        });

        upModalEl.addEventListener("shown.bs.modal", function () {
            if (!upEditor) {
                upEditor = new RichTextEditor("#up_description", { toolbar: "basic" });
            }
            upEditor.setHTMLCode(pendingUpHtml);
        });

        // Bootstrap modal ka focus-trap RTE ke dialogs (link/image) ko block na kare
        document.addEventListener("focusin", function (e) {
            if (e.target.closest(".rte-modal-dialog, .rte-dialog, .rte-floatpanel")) {
                e.stopImmediatePropagation();
            }
        }, true);

        // ---------- Helpers ----------
        function showImagePreview(input, box) {
            var file = input.files[0];
            if (!file) { box.innerHTML = ""; return; }
            var reader = new FileReader();
            reader.onload = function (e) {
                box.innerHTML = '<img src="' + e.target.result + '" width="200" style="border-radius:6px;">';
            };
            reader.readAsDataURL(file);
        }

        function refreshTable() {
            try {
                var table = document.getElementById("blogTable");
                var root  = table ? table.closest("[wire\\:id]") : null;
                if (root && window.Livewire) {
                    var comp = Livewire.find(root.getAttribute("wire:id"));
                    if (comp) { comp.$refresh(); return; }
                }
            } catch (err) { console.error(err); }
            window.location.reload();
        }

        function hideModal(modalEl) {
            return new Promise(function (resolve) {
                if (!modalEl) { resolve(); return; }

                var done = false;
                function cleanup() {
                    if (done) return;
                    done = true;
                    document.querySelectorAll(".modal-backdrop").forEach(function (b) { b.remove(); });
                    document.body.classList.remove("modal-open");
                    document.body.style.removeProperty("overflow");
                    document.body.style.removeProperty("padding-right");
                    modalEl.classList.remove("show");
                    modalEl.style.display = "none";
                    modalEl.setAttribute("aria-hidden", "true");
                    modalEl.removeAttribute("aria-modal");
                    modalEl.removeAttribute("role");
                    resolve();
                }

                if (window.bootstrap) {
                    var instance = bootstrap.Modal.getOrCreateInstance(modalEl);
                    modalEl.addEventListener("hidden.bs.modal", cleanup, { once: true });
                    instance.hide();
                    setTimeout(cleanup, 700);
                } else {
                    cleanup();
                }
            });
        }

        // getEditor = function jo editor (ya null) return karta hai
        function sendForm(url, form, spinner, getEditor, onDone) {
            spinner.style.display = "inline-block";

            var formData = new FormData(form);
            var ed = getEditor();
            if (ed) { formData.set("description", ed.getHTMLCode()); }

            fetch(url, {
                method: "POST",
                body: formData,
                cache: "no-store",
                headers: {
                    "Accept": "application/json",
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(function (response) {
                return response.json().then(function (data) {
                    return { status: response.status, data: data };
                });
            })
            .then(function (result) {
                spinner.style.display = "none";
                if (result.data === true) {
                    form.reset();
                    if (onDone) onDone();
                    hideModal(form.closest(".modal")).then(refreshTable);
                } else if (result.status === 422) {
                    alert(Object.values(result.data.errors).flat().join("\n"));
                } else {
                    alert("Error: " + (result.data.message || result.data));
                }
            })
            .catch(function (err) {
                spinner.style.display = "none";
                alert("Request failed: " + err);
            });
        }

        // ---------- ADD ----------
        var addForm    = document.getElementById("addPostForm");
        var addSpinner = document.getElementById("CtSpinner");
        var addInput   = document.getElementById("imageInput");
        var addPreview = document.getElementById("preview");

        addInput.addEventListener("change", function () { showImagePreview(addInput, addPreview); });

        addForm.addEventListener("submit", function (e) {
            e.preventDefault();
            sendForm("/ds-admin/add-blog", addForm, addSpinner, function () { return addEditor; }, function () {
                if (addEditor) addEditor.setHTMLCode("");
                addPreview.innerHTML = "";
            });
        });

        // ---------- UPDATE ----------
        var upForm    = document.getElementById("updatePostForm");
        var upSpinner = document.getElementById("uSpinner");
        var upInput   = document.getElementById("uImageInput");
        var upPreview = document.getElementById("uPreview");

        upInput.addEventListener("change", function () { showImagePreview(upInput, upPreview); });

        upForm.addEventListener("submit", function (e) {
            e.preventDefault();
            sendForm("/ds-admin/update-blog", upForm, upSpinner, function () { return upEditor; }, function () {
                upPreview.innerHTML = "";
            });
        });

        // Edit / Delete buttons (delegation)
        document.addEventListener("click", function (e) {

            // ----- EDIT -----
            var editBtn = e.target.closest(".edit-btn");
            if (editBtn) {
                var d = editBtn.dataset;
                document.getElementById("uId").value         = d.id;
                document.getElementById("uTitle").value      = d.title;
                document.getElementById("uSlug").value       = d.slug;
                document.getElementById("uCategory").value   = d.category || "";
                document.getElementById("uAuthor").value     = d.author || "";
                document.getElementById("umeta_title").value = d.meta_title || "";
                document.getElementById("umeta_desc").value  = d.meta_desc || "";
                document.getElementById("umeta_keys").value  = d.meta_keys || "";
                document.getElementById("uShortdesc").value  = d.shortdesc || "";
                document.getElementById("uDate").value       = d.created_at || "";
                document.getElementById("uStatus").value     = d.status;
                upInput.value = "";

                // content modal ke "shown" event me editor me set hoga
                pendingUpHtml = d.description || "";
                if (upEditor) { upEditor.setHTMLCode(pendingUpHtml); }

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
                    cache: "no-store",
                    headers: {
                        "Accept": "application/json",
                        "X-Requested-With": "XMLHttpRequest"
                    }
                })
                .then(function (response) {
                    return response.json().then(function (data) {
                        return { status: response.status, data: data };
                    });
                })
                .then(function (result) {
                    if (result.data === true) {
                        refreshTable();
                    } else if (result.status === 422) {
                        alert(Object.values(result.data.errors).flat().join("\n"));
                    } else {
                        alert("Error: " + (result.data.message || result.data));
                    }
                })
                .catch(function (err) { alert("Request failed: " + err); });
            }
        });
    }

    // DOMContentLoaded pehle hi nikal chuka ho (Livewire navigate etc.) to bhi chalega
    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", init);
    } else {
        init();
    }
})();
</script>
@endprepend