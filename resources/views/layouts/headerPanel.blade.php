<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            @can('browse_admin')
                <a class="btn btn-sm btn-outline-success" href="{{ route('voyager.dashboard') }}">Panel</a>
            @endcan
            <button type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ایجاد فایل
            </button>
            <div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">ایجاد فایل جدید</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('file.select') }}">
                                <div class="form-group">
                                    <label class="py-3" for="categories">لطفا نوع فایل را مشخص کنید</label>
                                    <select id="categories" class="form-select" name="category" aria-label="category">
                                        @php
                                            $categories = \App\Models\Category::whereNull('parent_id')->get();
                                        @endphp
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <button class="btn btn-primary w-100 mt-1" type="submit">بعدی</button>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
