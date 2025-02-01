<div class="common-modals">
    @isset($modals)
        @foreach($modals as $modal)
            <div class="modal fade" id="{{ $modal['id'] }}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal content -->
                    </div>
                </div>
            </div>
        @endforeach
    @endisset
</div> 