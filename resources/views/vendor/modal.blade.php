<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Apply now</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <a href="{{ $info->facebook }}" target="_blank" class="btn btn-primary">
                        <i class="fa-brands fa-telegram"></i>
                        Telegram
                    </a>
                    <a href="{{ $info->instagram }}" target="_blank" class="btn btn-danger">
                        <i class="fa-brands fa-instagram"></i>
                        Instagram
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
