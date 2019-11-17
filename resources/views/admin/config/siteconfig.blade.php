@extends('admin.default')
@section('title','system config')
@section('content')
    <div class="page-header">
        <h3 class="page-title"> System Configuration </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">System Configuration</a></li>
                <li class="breadcrumb-item active" aria-current="page">Web Configuration</li>
            </ol>
        </nav>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample">
                    <div class="form-group">
                        <label for="exampleInputUsername1">Web Name</label>
                        <input type="text" class="form-control" id="sitetitle" placeholder="Web name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Web domain</label>
                        <input type="text" class="form-control" id="domain" placeholder="Domain">
                    </div>
                    <div class="form-group">
                        <label for="keyword">Web Keyword</label>
                        <input type="text" class="form-control" id="keyword" placeholder="keyword">
                    </div>

                    <div class="form-group">
                        <label for="desc">Web Describe</label>
                        <textarea class="form-control" id="desc" rows="4" placeholder="describe"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="desc1">Web Close</label>
                        <textarea class="form-control" id="desc1" rows="4" placeholder="describe"></textarea>
                    </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Web Status</label>
                            <div class="col-sm-4 col-md-2 col-lg-1">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked=""> On <i class="input-helper"></i></label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-2 col-lg-1">
                                <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Off <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

