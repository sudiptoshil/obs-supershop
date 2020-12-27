@include ('admin.layout.header')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h4 class="page-title">Input Groups</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="card-title">Basic Examples</h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Group Left</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Group Right</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Recipient's username">

                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@example.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">URL Example</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">https://</div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Group with Price</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="text" class="form-control">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Group with Price (Left)</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">0.00</div>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-box">
                    <h4 class="card-title">Sizing</h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Input Group Large</label>
                            <div class="col-md-10">
                                <div class="input-group input-group-lg">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                           aria-describedby="sizing-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Input Group Default</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Username"
                                           aria-describedby="sizing-addon2">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-box">
                    <h4 class="card-title">Checkbox and Radio Addons</h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Checkbox</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="checkbox" class="input-group-text">
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Radio</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="radio" class="input-group-text">
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-box">
                    <h4 class="card-title">Multiple addons</h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Radio and Text addons</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <input type="radio" class="input-group-text">
                                    </div>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2">Two addons</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <span class="input-group-addon">0.00</span>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-box">
                    <h4 class="card-title">Buttons with dropdowns</h4>
                    <form action="#" class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-lg-2">Radio and Text addons</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Left dropdown">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-lg-2">Two addons</label>
                            <div class="col-md-10">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Right dropdown">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('admin.layout.footer')
