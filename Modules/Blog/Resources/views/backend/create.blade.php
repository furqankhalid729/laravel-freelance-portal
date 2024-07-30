@extends('backend.layout.master')
@section('title', __('Create Blog'))
@section('style')
    <x-media.css />
    <x-summernote.summernote-css />
    <x-tags.tag-input-css />
    <x-select2.select2-css />
    <style>
        .note-editor.note-airframe .note-editing-area .note-editable, .note-editor.note-frame .note-editing-area .note-editable {
            height: 100%;
        }
    </style>
@endsection
@section('content')
    <div class="dashboard__body">
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-8">
                    <div class="customMarkup__single">
                        <div class="customMarkup__single__item">
                            <h4 class="customMarkup__single__title">{{ __('Blog Details') }}</h4>
                            <x-validation.error />
                            <div class="customMarkup__single__inner mt-4">
                                @csrf
                                <div class="tab-content margin-top-40">
                                    <div class="single-input">
                                        <label for="title" class="label-title mt-3">{{ __('Title') }}</label>
                                        <input type="text" class="form-control" name="title" value="{{ old('title') }}" placeholder="{{ __('Title') }}">
                                    </div>
                                    <div class="single-input mb-3">
                                        <label for="content" class="label-title mt-3">{{ __('Content') }}</label>
                                        <div class="summernote-wrapper">
                                            <textarea name="blog_content" class="form-control summernote"> {{ old('blog_content') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <x-backend.page-meta-data-create :sidebarHeading="'Blog Meta'" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="customMarkup__single">
                        <div class="customMarkup__single__item">
                            <h4 class="customMarkup__single__title">{{ __('Blog Catalogue') }}</h4>
                            <div class="customMarkup__single__inner mt-4">
                                <div class="tab-content margin-top-40">
                                    <div class="single-input mt-3">
                                        <label class="label-title">{{ __('Select Category') }}</label>
                                        <select name="category" id="category" class="form-control select2_category">
                                            <option value="">{{ __('Select Category') }}</option>
                                            @foreach($allCategories = \Modules\Service\Entities\Category::all_categories() as $data)
                                                <option value="{{ $data->id }}">{{ $data->category }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="single-input mt-3">
                                        <label for="slug" class="label-title mt-3">{{__('Blog Tags')}}</label>
                                        <input type="text" class="form-control" placeholder="tags" name="tag_name" data-role="tagsinput">
                                    </div>
                                    <x-status.form.active-inactive :title="'Status'" :status="''" />
                                    <x-backend.image :title="__('')" :name="'image'" :dimentions="__('590x320 pixels')"/>
                                    <x-btn.submit class="btn btn-primary mt-4" :title="'Submit'" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <x-media.markup />
@endsection

@section('script')
    <x-sweet-alert.sweet-alert2-js />
    <x-select2.select2-js />
    <x-media.js />
    <x-summernote.summernote-js />
    <x-tags.tag-input-js />
    @include('blog::backend.blog-js')
@endsection
