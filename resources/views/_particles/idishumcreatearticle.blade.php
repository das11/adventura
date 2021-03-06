@extends('app')
@section('idishumcontent')

<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center text-dark">
                <h1>Create an Article</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 offset-md-1 offset-lg-1">
                <div class="submit-article">
                 @if(Session::has('message_step_1'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                {{ Session::get('message_step_1') }}
            </p>
        @endif

                      {!! Form::open(array('url' => 'push-created-article','class'=>'','id'=>'signup','role'=>'form')) !!}
                    <form>
                        <div class="form-group mb-4">
                            <label for="post-title"><h1>Post Title</h1></label>
                            <input type="text" class="form-control" id="post-title" name="title" placeholder="Enter title of the post">
                        </div>
                        <div class="form-group">
                            <label for="write-post"><h1>Write your Post</h1></label>
                            <textarea class="form-control" id="write-post" name="body" rows="18"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="write-post"><h1>Comments/Remarks</h1></label>
                            <textarea class="form-control" id="write-post" rows="05"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1"><h2>Add Feature Image</h2></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="feature_image" onchange="preview_image(event)">
                          </div>
                          <div class="preview_image mb-2">
                            <img id="output_image"/>
                          </div>
                          <button type="submit" class="btn btn-info w-100">Submit</button>
                    </form>
                     {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>

</section>

@endsection