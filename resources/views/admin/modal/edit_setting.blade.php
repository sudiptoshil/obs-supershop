<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <form action="{{ route('update-setting') }}" style="margin-top:5%" method="post"> --}}
                    {{-- @csrf --}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Eng</label>
                        <input type="text" name="name_eng" class="form-control" id="name_eng" placeholder="Enter Eng Name">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name Local</label>
                        <input type="text" name="name_local" class="form-control" id="name_local"
                            aria-describedby="emailHelp" placeholder="Enter Local Name">

                        <input type="hidden" name="id" class="form-control" id="settingId"
                            >
                    </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">Note</label>
                        <input type="text" name="note" class="form-control" id="note"
                            aria-describedby="emailHelp" placeholder="Enter Note">

                        <input type="hidden" name="id" class="form-control" id="settingId"
                            >
                    </div>
                    <button type="submit" onclick ='updateSetting(this)' class="btn btn-primary">Submit</button>
                {{-- </form> --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('custom/setting.js') }}"></script>
<script type="text/javascript" src="{{ asset('custom/api.js') }}"></script>
