@extends('voyager::master')

@section('page_title', $dataType->getTranslatedAttribute('display_name_plural') . ' ' . __('voyager::bread.order'))

@section('page_header')
<h1 class="page-title">
    <i class="voyager-list"></i>{{ $dataType->getTranslatedAttribute('display_name_plural') }} {{ __('voyager::bread.order') }}
</h1>
@stop

@section('content')
<div class="page-content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-bordered">
                <div class="panel-heading">
                    <p class="panel-title" style="color:#777">{{ __('voyager::generic.drag_drop_info') }}</p>
                </div>
                <div class="panel-heading">
                    <p class="panel-title" style="color:#777"></p>
                    <form action="">
                        <div class="form-group">
                            <select class="form-select" name="field" aria-label="category">
                                @foreach (App\Models\Field::parentNull()->orderBy('order', 'ASC')->get() as $result)
                                    <option value="{{ $result->id }}">{{ $result->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-primary w-100 mt-5" type="submit">بعدی</button>
                    </form>
                    @if(request()->field != null)
                        <a class="btn btn-primary w-100 mt-5" href="{{ url()->previous() }}">برگشت</a>
                    @endif
                    <br>
                </div>
                <div class="panel-body" style="padding:30px;">
                    <div class="dd">
                        <ol class="dd-list">
                            @php
                                $field_parents = \App\Models\Field::parentNull()->get();
                                $field_select = \App\Models\Field::find(request()->field);
                            @endphp
                            @if(request()->field == null)
                                @foreach ($field_parents as $result)
                                    <li class="dd-item" data-id="{{ $result->getKey() }}">
                                        <div class="dd-handle" style="height:inherit">
                                            @if (isset($dataRow->details->view_order))
                                            @elseif (isset($dataRow->details->view))
                                                @include($dataRow->details->view, ['row' => $dataRow, 'dataType' => $dataType, 'dataTypeContent' => $result, 'content' => $result->{$display_column}, 'action' => 'order'])
                                            @elseif($dataRow->type == 'image')
                                                <span>
                                            <img src="@if( !filter_var($result->{$display_column}, FILTER_VALIDATE_URL)){{ Voyager::image( $result->{$display_column} ) }}@else{{ $result->{$display_column} }}@endif" style="height:100px">
                                        </span>
                                            @else
                                                <span>{{ $result->{$display_column} }}</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                @if($field_select->childes->count() == 0)
                                    <li class="dd-item" data-id="{{ $result->getKey() }}">
                                        <div class="dd-handle" style="height:inherit">
                                            زیر مجموعه ای ندارد
                                        </div>
                                    </li>
                                @else
                                @foreach ($field_select->childes as $result)
                                    <li class="dd-item" data-id="{{ $result->getKey() }}">
                                        <div class="dd-handle" style="height:inherit">
                                            @if (isset($dataRow->details->view_order))
                                            @elseif (isset($dataRow->details->view))
                                                @include($dataRow->details->view, ['row' => $dataRow, 'dataType' => $dataType, 'dataTypeContent' => $result, 'content' => $result->{$display_column}, 'action' => 'order'])
                                            @elseif($dataRow->type == 'image')
                                                <span>
                                            <img src="@if( !filter_var($result->{$display_column}, FILTER_VALIDATE_URL)){{ Voyager::image( $result->{$display_column} ) }}@else{{ $result->{$display_column} }}@endif" style="height:100px">
                                        </span>
                                            @else
                                                <span>{{ $result->{$display_column} }}</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                                @endif
                            @endif
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')

<script>
$(document).ready(function () {
    $('.dd').nestable({
        maxDepth: 1
    });

    /**
    * Reorder items
    */
    $('.dd').on('change', function (e) {
        $.post('{{ route('voyager.'.$dataType->slug.'.order') }}', {
            order: JSON.stringify($('.dd').nestable('serialize')),
            _token: '{{ csrf_token() }}'
        }, function (data) {
            toastr.success("{{ __('voyager::bread.updated_order') }}");
        });
    });
});
</script>
@stop
