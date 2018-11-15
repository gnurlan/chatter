<!-- Modal -->
<div class="modal" id="banModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="closeBanModal()"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">{{ __('Ban details') }}</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12 form-group">
                    <textarea class="form-control" id="ban-modal-reason" placeholder="{{ __('Reason') }}" rows="8"></textarea>
                </div>
                <div class="col-md-3 form-group">
                    <label>{{ __('Ban period') }}</label>
                </div>
                <div class="col-md-2">
                    <select class="selectpicker" id="ban-modal-interval" name="ban-modal-interval">
                        <option value="1" selected>1</option>
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeBanModal()">{{ __('Cancel') }}</button>
                <button type="button" class="btn btn-primary" onclick="sendBan()">{{ __('Save') }}</button>
            </div>
        </div>
    </div>
</div>