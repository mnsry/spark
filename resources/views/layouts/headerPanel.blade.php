<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <img src="{{ Voyager::image(Auth::user()->avatar) }}" class="rounded" width="50px" alt="{{ Auth::user()->name }}">
    <h1 class="h4">
        {{ Auth::user()->name }}
    </h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-primary dropdown-toggle d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#createModal">
                ایجاد فایل
            </button>
            <div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">ایجاد فایل جدید</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('file.select') }}">
                                <div class="form-group">
                                    <select class="form-select" name="category_id" aria-label="category_id">
                                        @php
                                            $categories = \App\Models\Category::whereNull('parent_id')->orderBy('order', 'ASC')->get();
                                        @endphp
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <button class="btn btn-primary w-100 mt-1" type="submit" onclick="this.disabled=true;this.form.submit();">بعدی</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
