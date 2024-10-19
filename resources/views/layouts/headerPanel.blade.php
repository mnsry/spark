<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">{{ Auth::user()->name }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
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
                            <form action="{{ route('file.create') }}">
                                <div class="form-group">
                                    <label for="categories">انتخاب کنید</label>
                                    <select class="form-select" name="category" aria-label="Default select example">
                                        @php
                                            $category = \App\Models\Category::find(1);
                                        @endphp
                                        @foreach($category->childes as $child)
                                            <option value="{{ $child->id }}">{{ $child->name }}</option>
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
