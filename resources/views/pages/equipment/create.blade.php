@extends('layouts.pages')

@section('content')
<div class="col-md-5">
    <div class="panel panel-white">
        <div class="panel-body">
            <h2>Create Equipment</h2>  
            <form method="post" action="/equipment">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="id">ID (only if known)</label>
                    <input type="text" name="id" class="form-control m-t-xxs"  id="id" placeholder="Eg. 00004562">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control m-t-xxs" id="name" placeholder="Eg. Chainsaw">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control m-t-xxs" rows="3" id="description" placeholder="Eg. Small old chainsaw"></textarea>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input type="text" name="brand" class="form-control m-t-xxs" id="brand" placeholder="Eg. Stihl">
                </div>
                <div class="form-group">
                    <label for="size">Size</label>
                    <input type="text" name="size" class="form-control m-t-xxs" id="size" placeholder="Eg. 036">
                </div>
                <div class="form-group">
                    <label>Consumable?</label>
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="consumable" value="1">Yes</label>
                    </div>
                    <div class="checkbox-inline">
                        <label><input type="checkbox" name="consumable" value="0">No</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-t-xs m-b-xs">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection