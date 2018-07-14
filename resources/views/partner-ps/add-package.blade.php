@extends('layouts.app-partner')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Package Thematic</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group"> 
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" value="100000" min="0" step="1000" class="form-control" placeholder="Price" data-number-stepfactor="100" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" style="resize: none;">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Package</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Package Room (Ala Carte)</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group"> 
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" value="100000" min="0" step="1000" class="form-control" placeholder="Price" data-number-stepfactor="100" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" style="resize: none;">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Package</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Add Package Special</h4>
                    </div>
                    <div class="content">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="file-loading">
                                        <input id="file-0a" class="file" type="file" multiple>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" placeholder="Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <div class="input-group"> 
                                            <span class="input-group-addon">Rp</span>
                                            <input type="number" value="100000" min="0" step="1000" class="form-control" placeholder="Price" data-number-stepfactor="100" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="5" class="form-control" placeholder="Here can be your description" style="resize: none;">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info btn-fill pull-right">Add Package</button>
                            <div class="clearfix"></div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
@endsection