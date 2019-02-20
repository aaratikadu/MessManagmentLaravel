@extends('layouts.student')

@section('title')
    Feedback Us
@endsection

@section('body')
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <form action="{{Route('feedbackPost')}}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="input-field col s12 m12">
                                <label for="feedback">Feedback</label>
                                <textarea name="feedback" id="feedback" class="materialize-textarea validate"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m12 s12">
                                <button type="submit" class="btn waves-effect green">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        M.textareaAutoResize($('#feedback'));
    </script>
@endsection