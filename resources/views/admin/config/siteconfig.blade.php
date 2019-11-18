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
                <form class="forms-sample" action="{{route('admin.config.store')}}" method="post">
                    <input type="hidden" name="name" value="siteconfig">
                    <input type="hidden" name="title" value="webconfig">

{{--                   要不然就419Page Expired  加她就是加了一个token防止什么什么攻击--}}
                    @csrf
                    <div class="form-group">
                        <label for="sitetitle">Web Name</label>
                        <input type="text" value="{{isset($config['sitetitle'])?$config['sitetitle']:''}}" name="sitetitle" class="form-control" id="sitetitle" placeholder="Web name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Web domain</label>
                        <input type="text" value="{{isset($config['domain'])?$config['domain']:''}}" name="domain" class="form-control" id="domain" placeholder="Domain">
                    </div>
                    <div class="form-group">
                        <label for="keyword">Web Keyword</label>
                        <input type="text" value="{{isset($config['keyword'])?$config['keyword']:''}}"name="keyword" class="form-control" id="keyword" placeholder="keyword">
                    </div>

                    <div class="form-group">
                        <label for="desc">Web Describe</label>
                        <textarea class="form-control" name='describe' id="describe" rows="4" placeholder="describe">{{isset($config['describe'])?$config['describe']:''}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="desc1">Web Close</label>
                        <textarea class="form-control" name="close" id="close" rows="4" placeholder="describe">{{isset($config['close'])?$config['close']:''}}</textarea>
                    </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Web Status</label>
                            <div class="col-sm-4">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        @if(isset($config['status']))
                                        <input type="radio" class="form-check-input" name="status" id="status" value="1" {{$config['status']==1?'checked':''}}> On <i class="input-helper"></i></label>
                                        @else
                                        <input type="radio" class="form-check-input" name="status" id="status" value="1" checked> On <i class="input-helper"></i></label>
                                        @endif
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-check">
                                        <label class="form-check-label">
                                            @if(isset($config['status']))
                                                <input type="radio" class="form-check-input" name="status" id="status" value="0" {{$config['status']==0?'checked':''}}> Off <i class="input-helper"></i></label>
                                            @else
                                                <input type="radio" class="form-check-input" name="status" id="status" value="0" > Off <i class="input-helper"></i></label>
                                            @endif
{{--                                    add something--}}


                                </div>
                            </div>
                        </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection

