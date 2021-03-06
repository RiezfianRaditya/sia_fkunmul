<div class="tab-pane" id="prestasi">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Basic Information</h5>
                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i>
                    </button>
                </div>
                <div class="card-block">
                    <div id="view-info" class="row">
                        <div class="col-lg-6 col-md-12">
                            <form>
                                <table class="table table-responsive m-b-0">
                                    <tr>
                                        <th class="social-label b-none p-t-0">Full Name
                                        </th>
                                        <td class="social-user-name b-none p-t-0 text-muted">Josephine Villa</td>
                                    </tr>
                                    <tr>
                                        <th class="social-label b-none">Gender</th>
                                        <td class="social-user-name b-none text-muted">Female</td>
                                    </tr>
                                    <tr>
                                        <th class="social-label b-none">Birth Date</th>
                                        <td class="social-user-name b-none text-muted">October 25th, 1990</td>
                                    </tr>
                                    <tr>
                                        <th class="social-label b-none">Martail Status</th>
                                        <td class="social-user-name b-none text-muted">Single</td>
                                    </tr>
                                    <tr>
                                        <th class="social-label b-none p-b-0">Location</th>
                                        <td class="social-user-name b-none p-b-0 text-muted">New York, USA</td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                    <div id="edit-info" class="row">
                        <div class="col-lg-12 col-md-12">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="input-group">
                                    <div class="form-radio">
                                        <div class="form-radio">
                                            <label class="md-check p-0">Gender</label>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio" checked="checked">
                                                    <i class="helper"></i>Male
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <label>
                                                    <input type="radio" name="radio">
                                                    <i class="helper"></i>Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <input id="dropper-default" class="form-control" type="text" placeholder="Birth Date">
                                </div>
                                <div class="input-group">
                                    <select id="hello-single" class="form-control">
                                        <option value="">---- Marital Status ----</option>
                                        <option value="married">Married</option>
                                        <option value="unmarried">Unmarried</option>
                                    </select>
                                </div>
                                <div class="md-group-add-on">
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Address..."></textarea>
                                </div>
                                <div class="text-center m-t-20">
                                    <a href="javascript:;" id="edit-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                    <a href="javascript:;" id="edit-cancel" class="btn btn-default waves-effect waves-light">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Contact Information</h5>
                    <button id="edit-Contact" type="button" class="btn btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i>
                    </button>
                </div>
                <div class="card-block">
                    <div id="contact-info" class="row">
                        <div class="col-lg-6 col-md-12">
                            <table class="table table-responsive m-b-0">
                                <tr>
                                    <th class="social-label b-none p-t-0">Mobile Number</th>
                                    <td class="social-user-name b-none p-t-0 text-muted">eg. (0123) - 4567891</td>
                                </tr>
                                <tr>
                                    <th class="social-label b-none">Email Address</th>
                                    <td class="social-user-name b-none text-muted"><a href="..\..\..\cdn-cgi\l\email-protection.htm" class="__cf_email__" data-cfemail="e195849295a1868c80888dcf828e8c">[email&#160;protected]</a></td>
                                </tr>
                                <tr>
                                    <th class="social-label b-none">Twitter</th>
                                    <td class="social-user-name b-none text-muted">@phonixcoded</td>
                                </tr>
                                <tr>
                                    <th class="social-label b-none p-b-0">Skype</th>
                                    <td class="social-user-name b-none p-b-0 text-muted">@phonixcoded demo</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="edit-contact-info" class="row">
                        <div class="col-lg-12 col-md-12">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Mobile number">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Email address">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Twitter id">
                                </div>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Skype id">
                                </div>
                                <div class="text-center m-t-20">
                                    <a href="javascript:;" id="contact-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                    <a href="javascript:;" id="contact-cancel" class="btn btn-default waves-effect waves-light">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-header-text">Work</h5>
                    <button id="edit-work" type="button" class="btn btn-primary waves-effect waves-light f-right">
                        <i class="icofont icofont-edit"></i>
                    </button>
                </div>
                <div class="card-block">
                    <div id="work-info" class="row">
                        <div class="col-lg-6 col-md-12">
                            <table class="table table-responsive m-b-0">
                                <tr>
                                    <th class="social-label b-none p-t-0">Occupation &nbsp; &nbsp; &nbsp;
                                    </th>
                                    <td class="social-user-name b-none p-t-0 text-muted">Developer</td>
                                </tr>
                                <tr>
                                    <th class="social-label b-none">Skills</th>
                                    <td class="social-user-name b-none text-muted">C#, Javascript, Anguler</td>
                                </tr>
                                <tr>
                                    <th class="social-label b-none">Jobs</th>
                                    <td class="social-user-name b-none p-b-0 text-muted">#</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="edit-contact-work" class="row">
                        <div class="col-lg-12 col-md-12">
                            <form>
                                <div class="input-group">
                                    <select id="occupation" class="form-control">
                                        <option value=""> Select occupation </option>
                                        <option value="married">Developer</option>
                                        <option value="unmarried">Web Design</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select id="skill" class="form-control">
                                        <option value=""> Select Skills </option>
                                        <option value="married">C# &amp; .net</option>
                                        <option value="unmarried">Angular</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <select id="job" class="form-control">
                                        <option value=""> Select Job </option>
                                        <option value="married">#</option>
                                        <option value="unmarried">Other</option>
                                    </select>
                                </div>
                                <div class="text-center m-t-20">
                                    <a href="javascript:;" id="work-save" class="btn btn-primary waves-effect waves-light m-r-20">Save</a>
                                    <a href="javascript:;" id="work-cancel" class="btn btn-default waves-effect waves-light">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>